<?php

namespace tests\codeception\common\unit\models;

use Yii;
use tests\codeception\common\unit\TestCase;
use Codeception\Specify;
use common\models\User;

date_default_timezone_set('UTC');

/**
 * Time test
 */

class UserTest extends TestCase {
  use Specify;

	public $questionData = [
	[
		'id' => 641,
		'user_id' => 2,
		'option_id' => 13,
		'user_option_id' => 821,
		'question' => 1,
		'answer' => 'alsgn',
		'date' => '2016-09-10 19:27:43',
		'option' => 
		[
			'id' => 13,
			'name' => 'less time/energy for God, meetings, and church',
			'category_id' => 2,
		],
	],
	[
		'id' => 642,
		'user_id' => 2,
		'option_id' => 13,
		'user_option_id' => 821,
		'question' => 2,
		'answer' => 'loiun',
		'date' => '2016-09-10 19:27:43',
		'option' => 
		[
			'id' => 13,
			'name' => 'less time/energy for God, meetings, and church',
			'category_id' => 2,
		],
	],
	[
		'id' => 643,
		'user_id' => 2,
		'option_id' => 13,
		'user_option_id' => 821,
		'question' => 3,
		'answer' => 'liun',
		'date' => '2016-09-10 19:27:43',
		'option' => 
		[
			'id' => 13,
			'name' => 'less time/energy for God, meetings, and church',
			'category_id' => 2,
		],
	],
	[
		'id' => 644,
		'user_id' => 2,
		'option_id' => 29,
		'user_option_id' => 823,
		'question' => 1,
		'answer' => 'ljnb',
		'date' => '2016-09-10 19:27:43',
		'option' => 
		[
			'id' => 29,
			'name' => 'using profanity',
			'category_id' => 3,
		],
	],
	[
		'id' => 645,
		'user_id' => 2,
		'option_id' => 29,
		'user_option_id' => 823,
		'question' => 2,
		'answer' => 'liunb',
		'date' => '2016-09-10 19:27:43',
		'option' => 
		[
			'id' => 29,
			'name' => 'using profanity',
			'category_id' => 3,
		],
	],
	[
		'id' => 646,
		'user_id' => 2,
		'option_id' => 29,
		'user_option_id' => 823,
		'question' => 3,
		'answer' => 'ilub ',
		'date' => '2016-09-10 19:27:43',
		'option' => 
		[
			'id' => 29,
			'name' => 'using profanity',
			'category_id' => 3,
		],
	],
	[
		'id' => 647,
		'user_id' => 2,
		'option_id' => 48,
		'user_option_id' => 825,
		'question' => 1,
		'answer' => 'liub',
		'date' => '2016-09-10 19:27:43',
		'option' => 
		[
			'id' => 48,
			'name' => 'workaholic',
			'category_id' => 4,
		],
	],
	[
		'id' => 648,
		'user_id' => 2,
		'option_id' => 48,
		'user_option_id' => 825,
		'question' => 2,
		'answer' => 'liub',
		'date' => '2016-09-10 19:27:43',
		'option' => 
		[
			'id' => 48,
			'name' => 'workaholic',
			'category_id' => 4,
		],
	],
	[
		'id' => 649,
		'user_id' => 2,
		'option_id' => 48,
		'user_option_id' => 825,
		'question' => 3,
		'answer' => 'liub ',
		'date' => '2016-09-10 19:27:43',
		'option' => 
		[
			'id' => 48,
			'name' => 'workaholic',
			'category_id' => 4,
		],
	],
	[
		'id' => 650,
		'user_id' => 2,
		'option_id' => 89,
		'user_option_id' => 828,
		'question' => 1,
		'answer' => 'liub',
		'date' => '2016-09-10 19:27:43',
		'option' => 
		[
			'id' => 89,
			'name' => 'obsessive (stuck) thoughts',
			'category_id' => 5,
		],
	],
	[
		'id' => 651,
		'user_id' => 2,
		'option_id' => 89,
		'user_option_id' => 828,
		'question' => 2,
		'answer' => 'liuby',
		'date' => '2016-09-10 19:27:43',
		'option' => 
		[
			'id' => 89,
			'name' => 'obsessive (stuck) thoughts',
			'category_id' => 5,
		],
	],
	[
		'id' => 652,
		'user_id' => 2,
		'option_id' => 89,
		'user_option_id' => 828,
		'question' => 3,
		'answer' => 'uiylb',
		'date' => '2016-09-10 19:27:43',
		'option' => 
		[
			'id' => 89,
			'name' => 'obsessive (stuck) thoughts',
			'category_id' => 5,
		],
	],
	[
		'id' => 653,
		'user_id' => 2,
		'option_id' => 111,
		'user_option_id' => 829,
		'question' => 1,
		'answer' => 'liub',
		'date' => '2016-09-10 19:27:43',
		'option' => 
		[
			'id' => 111,
			'name' => 'seeking out old unhealthy people and places',
			'category_id' => 6,
		],
	],
	[
		'id' => 654,
		'user_id' => 2,
		'option_id' => 111,
		'user_option_id' => 829,
		'question' => 2,
		'answer' => 'liuyb',
		'date' => '2016-09-10 19:27:43',
		'option' => 
		[
			'id' => 111,
			'name' => 'seeking out old unhealthy people and places',
			'category_id' => 6,
		],
	],
	[
		'id' => 655,
		'user_id' => 2,
		'option_id' => 111,
		'user_option_id' => 829,
		'question' => 3,
		'answer' => 'iuyb',
		'date' => '2016-09-10 19:27:43',
		'option' => 
		[
			'id' => 111,
			'name' => 'seeking out old unhealthy people and places',
			'category_id' => 6,
		],
	],
	[
		'id' => 656,
		'user_id' => 2,
		'option_id' => 122,
		'user_option_id' => 831,
		'question' => 1,
		'answer' => 'iuyb',
		'date' => '2016-09-10 19:27:43',
		'option' => 
		[
			'id' => 122,
			'name' => 'returning to the place you swore you would never go again',
			'category_id' => 7,
		],
	],
	[
		'id' => 657,
		'user_id' => 2,
		'option_id' => 122,
		'user_option_id' => 831,
		'question' => 2,
		'answer' => 'iuyb',
		'date' => '2016-09-10 19:27:43',
		'option' => 
		[
			'id' => 122,
			'name' => 'returning to the place you swore you would never go again',
			'category_id' => 7,
		],
	],
	[
		'id' => 658,
		'user_id' => 2,
		'option_id' => 122,
		'user_option_id' => 831,
		'question' => 3,
		'answer' => 'liuyb',
		'date' => '2016-09-10 19:27:43',
		'option' => 
		[
			'id' => 122,
			'name' => 'returning to the place you swore you would never go again',
			'category_id' => 7,
		],
	],
];
public $userQuestions = [
	13 => [
		'question' => [
			'id' => 13,
			'title' => 'less time/energy for God, meetings, and church',
		],
		'answers' => [
			[
				'title' => 'How does it affect me? How do I act and feel?',
				'answer' => 'alsgn',
			], [
				'title' => 'How does it affect the important people in my life?',
				'answer' => 'loiun',
			], [
				'title' => 'Why do I do this? What is the benefit for me?',
				'answer' => 'liun',
			],
		],
	],
	29 => [
		'question' => [
			'id' => 29,
			'title' => 'using profanity',
		],
		'answers' => [
			[
				'title' => 'How does it affect me? How do I act and feel?',
				'answer' => 'ljnb',
			], [
				'title' => 'How does it affect the important people in my life?',
				'answer' => 'liunb',
			], [
				'title' => 'Why do I do this? What is the benefit for me?',
				'answer' => 'ilub ',
			],
		],
	],
	48 => [
		'question' => [
			'id' => 48,
			'title' => 'workaholic',
		],
		'answers' => [
			[
				'title' => 'How does it affect me? How do I act and feel?',
				'answer' => 'liub',
			], [
				'title' => 'How does it affect the important people in my life?',
				'answer' => 'liub',
			], [
				'title' => 'Why do I do this? What is the benefit for me?',
				'answer' => 'liub ',
			],
		],
	],
	89 => [
		'question' => [
			'id' => 89,
			'title' => 'obsessive (stuck) thoughts',
		],
		'answers' => [
			[
				'title' => 'How does it affect me? How do I act and feel?',
				'answer' => 'liub',
			], [
				'title' => 'How does it affect the important people in my life?',
				'answer' => 'liuby',
			], [
				'title' => 'Why do I do this? What is the benefit for me?',
				'answer' => 'uiylb',
			],
		],
	],
	111 => [
		'question' => [
			'id' => 111,
			'title' => 'seeking out old unhealthy people and places',
		],
		'answers' => [
			[
				'title' => 'How does it affect me? How do I act and feel?',
				'answer' => 'liub',
			], [
				'title' => 'How does it affect the important people in my life?',
				'answer' => 'liuyb',
			], [
				'title' => 'Why do I do this? What is the benefit for me?',
				'answer' => 'iuyb',
			],
		],
	],
	122 => [
		'question' => [
			'id' => 122,
			'title' => 'returning to the place you swore you would never go again',
		],
		'answers' => [
			[
				'title' => 'How does it affect me? How do I act and feel?',
				'answer' => 'iuyb',
			], [
				'title' => 'How does it affect the important people in my life?',
				'answer' => 'iuyb',
			], [
				'title' => 'Why do I do this? What is the benefit for me?',
				'answer' => 'liuyb',
			],
		],
	],
];

public $optionData = [
	[
		'id' => 820,
		'user_id' => 2,
		'option_id' => 7,
		'date' => '2016-09-10 19:26:04',
		'option' => [
			'id' => 7,
			'name' => 'making eye contact',
			'category_id' => 1,
			'category' => [
				'id' => 1,
				'name' => 'Restoration',
				'weight' => '0',
			],
		],
	], [
		'id' => 821,
		'user_id' => 2,
		'option_id' => 13,
		'date' => '2016-09-10 19:26:04',
		'option' => [
			'id' => 13,
			'name' => 'less time/energy for God, meetings, and church',
			'category_id' => 2,
			'category' => [
				'id' => 2,
				'name' => 'Forgetting Priorities',
				'weight' => '0.016',
			],
		],
	], [
		'id' => 822,
		'user_id' => 2,
		'option_id' => 18,
		'date' => '2016-09-10 19:26:04',
		'option' => [
			'id' => 18,
			'name' => 'changes in goals',
			'category_id' => 2,
			'category' => [
				'id' => 2,
				'name' => 'Forgetting Priorities',
				'weight' => '0.016',
			],
		],
	], [
		'id' => 823,
		'user_id' => 2,
		'option_id' => 29,
		'date' => '2016-09-10 19:26:04',
		'option' => [
			'id' => 29,
			'name' => 'using profanity',
			'category_id' => 3,
			'category' => [
				'id' => 3,
				'name' => 'Anxiety',
				'weight' => '0.032',
			],
		],
	], [
		'id' => 824,
		'user_id' => 2,
		'option_id' => 41,
		'date' => '2016-09-10 19:26:04',
		'option' => [
			'id' => 41,
			'name' => 'co-dependent rescuing',
			'category_id' => 3,
			'category' => [
				'id' => 3,
				'name' => 'Anxiety',
				'weight' => '0.032',
			],
		],
	], [
		'id' => 825,
		'user_id' => 2,
		'option_id' => 48,
		'date' => '2016-09-10 19:26:04',
		'option' => [
			'id' => 48,
			'name' => 'workaholic',
			'category_id' => 4,
			'category' => [
				'id' => 4,
				'name' => 'Speeding Up',
				'weight' => '0.064',
			],
		],
	], [
		'id' => 826,
		'user_id' => 2,
		'option_id' => 72,
		'date' => '2016-09-10 19:26:04',
		'option' => [
			'id' => 72,
			'name' => 'black and white, all or nothing thinking',
			'category_id' => 5,
			'category' => [
				'id' => 5,
				'name' => 'Ticked Off',
				'weight' => '0.128',
			],
		],
	], [
		'id' => 827,
		'user_id' => 2,
		'option_id' => 79,
		'date' => '2016-09-10 19:26:04',
		'option' => [
			'id' => 79,
			'name' => 'blaming',
			'category_id' => 5,
			'category' => [
				'id' => 5,
				'name' => 'Ticked Off',
				'weight' => '0.128',
			],
		],
	], [
		'id' => 828,
		'user_id' => 2,
		'option_id' => 89,
		'date' => '2016-09-10 19:26:04',
		'option' => [
			'id' => 89,
			'name' => 'obsessive (stuck) thoughts',
			'category_id' => 5,
			'category' => [
				'id' => 5,
				'name' => 'Ticked Off',
				'weight' => '0.128',
			],
		],
	], [
		'id' => 829,
		'user_id' => 2,
		'option_id' => 111,
		'date' => '2016-09-10 19:26:04',
		'option' => [
			'id' => 111,
			'name' => 'seeking out old unhealthy people and places',
			'category_id' => 6,
			'category' => [
				'id' => 6,
				'name' => 'Exhausted',
				'weight' => '0.256',
			],
		],
	], [
		'id' => 830,
		'user_id' => 2,
		'option_id' => 118,
		'date' => '2016-09-10 19:26:04',
		'option' => [
			'id' => 118,
			'name' => 'not returning phone calls',
			'category_id' => 6,
			'category' => [
				'id' => 6,
				'name' => 'Exhausted',
				'weight' => '0.256',
			],
		],
	], [
		'id' => 831,
		'user_id' => 2,
		'option_id' => 122,
		'date' => '2016-09-10 19:26:04',
		'option' => [
			'id' => 122,
			'name' => 'returning to the place you swore you would never go again',
			'category_id' => 7,
			'category' => [
				'id' => 7,
				'name' => 'Relapse/Moral Failure',
				'weight' => '0.512',
			],
		],
	],
];

public $userOptions = [
	1 => [
		'category_name' => 'Restoration',
		'options' => [
			[
				'id' => 7,
				'name' => 'making eye contact',
			],
		],
	],
	2 => [
		'category_name' => 'Forgetting Priorities',
		'options' => [
			[
				'id' => 13,
				'name' => 'less time/energy for God, meetings, and church',
			], [
				'id' => 18,
				'name' => 'changes in goals',
			],
		],
  ],
  3 => [
		'category_name' => 'Anxiety',
		'options' => [
			[
				'id' => 29,
				'name' => 'using profanity',
			], [
				'id' => 41,
				'name' => 'co-dependent rescuing',
			],
		],
	],
	4 => [
		'category_name' => 'Speeding Up',
		'options' => [
			[
				'id' => 48,
				'name' => 'workaholic',
			],
		],
	],
	5 => [
		'category_name' => 'Ticked Off',
		'options' => [
			[
				'id' => 72,
				'name' => 'black and white, all or nothing thinking',
			], [
				'id' => 79,
				'name' => 'blaming',
			], [
				'id' => 89,
				'name' => 'obsessive (stuck) thoughts',
			],
		],
	],
	6 => [
		'category_name' => 'Exhausted',
		'options' => [
			[
				'id' => 111,
				'name' => 'seeking out old unhealthy people and places',
			], [
				'id' => 118,
				'name' => 'not returning phone calls',
			],
		],
	],
	7 => [
		'category_name' => 'Relapse/Moral Failure',
		'options' => [
			[
				'id' => 122,
				'name' => 'returning to the place you swore you would never go again',
			],
		],
	],
];

  public function setUp() {
    parent::setUp();
  }

  protected function tearDown() {
    parent::tearDown();
  }

  public function testParseQuestionData() {
    $this->specify('parseQuestionData should function correctly', function () {
      expect('parseQuestionData should return the correct structure with expected data', $this->assertEquals(User::parseQuestionData($this->questionData), $this->userQuestions));
      expect('parseQuestionData should return empty with the empty set', $this->assertEmpty(User::parseQuestionData([])));
    });
  }

  public function testParseOptionData() {
    $this->specify('parseOptionData should function correctly', function () {
      expect('parseOptionData should return the correct structure with expected data', $this->assertEquals(User::parseOptionData($this->optionData), $this->userOptions));
      expect('parseOptionData should return empty with the empty set', $this->assertEmpty(User::parseOptionData([])));
    });
  }
}