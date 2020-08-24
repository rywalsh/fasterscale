<?php

namespace site\tests\unit\models;

use Yii;
use \site\models\DeleteAccountForm;

class DeleteAccountFormTest extends \Codeception\Test\Unit {
  use \Codeception\Specify;

  public function testRulesShouldValidate() {
    $user = $this->getUser();
    $form = new DeleteAccountForm($user);

    $form->attributes = [];
    expect('with no values, the form should not pass validation', $this->assertFalse($form->validate()));
    $form->attributes = ['password' => null];
    expect('the form should not validate if the password is not provided', $this->assertFalse($form->validate()));
    $form->attributes = ['password' => '1'];
    expect('the form should not validate if the password is too short', $this->assertFalse($form->validate()));
    $form->attributes = ['password' => 'super-secret-password-here'];
    expect('the form should validate if the provided password is long enough', $this->assertTrue($form->validate()));
  }

  public function testDeleteAccount() {
    $this->specify('deleteAccount() should return false if the form does not validate', function() {
      $user = $this->getUser();
      $user
        ->expects($this->never())
        ->method('delete');

      $form = new DeleteAccountForm($user);
      $form->password = '1';
      $this->assertFalse($form->deleteAccount(), 'deleteAccount should not be successful');
    });

    $this->specify('deleteAccount() should return false if the user\'s password is incorrect', function() {
      $user = $this->getUser();
      $user
        ->expects($this->never())
        ->method('delete');

      $form = new DeleteAccountForm($user);
      $form->password = '1';
      $this->assertFalse($form->deleteAccount(), 'deleteAccount should not be successful');
    });

    $this->specify('deleteAccount() should return true, send a notification email, and delete the user when the form validates and the user\'s password is correct', function() {
      $password = 'password';
      $user = $this->getUser();
      $user->email = 'user@example.com';
      $user->partner_email1 = 'partner1@example.com';
      $user->setPassword($password);
      $user
        ->method('isPartnerEnabled')
        ->willReturn(true);

      $user
        ->expects($this->once())
        ->method('delete');

      $form = new DeleteAccountForm($user);
      $form->password = $password;

      $this->assertTrue($form->deleteAccount(), 'should be successful');

      $this->tester->seeEmailIsSent();
      $emailMessage = $this->tester->grabLastSentEmail();
      expect('valid email is sent', $emailMessage)->isInstanceOf('yii\mail\MessageInterface');
      // an email was sent to both the user
      // and to partner1. We grab the most recently sent one to examine though, thus partner1
      expect($emailMessage->getTo())->hasKey('partner1@example.com');
      expect($emailMessage->getFrom())->hasKey(Yii::$app->params['supportEmail']);
      expect($emailMessage->getSubject())->equals('user@example.com has deleted their The Faster Scale App account');
      expect($emailMessage->toString())->stringContainsString($user->email);
    });
  }

  private function getUser() {
    $user = $this->getmockbuilder('\common\models\user')
      ->disableoriginalconstructor()
      ->setmethods(['getisnewrecord', 'attributes', 'generatechangeemailtoken', 'findbyemail', 'save', 'delete', 'ispartnerenabled'])
      ->getmock();
    $user->method('attributes')->willreturn([
      'email',
      'password',
      'password_hash',
      'partner_email1',
      'partner_email2',
      'partner_email3',
    ]);
    return $user;
  }
}
