<?php
use Migrations\AbstractSeed;

/**
 * Teachers seed.
 */
class TeachersSeed extends AbstractSeed
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeds is available here:
     * http://docs.phinx.org/en/latest/seeding.html
     *
     * @return void
     */
    public function run()
    {
        $data = [
        	[
        		'last_name' => '堀江',
				'first_name' => '悟'
			],
			[
				'last_name' => '増田',
				'first_name' => '義一'
			],
			[
				'last_name' => '林',
				'first_name' => '元長'
			],
			[
				'last_name' => '菊池',
				'first_name' => 'ゆうや'
			],
			[
				'last_name' => '菊竹',
				'first_name' => 'カズマ'
			],
			[
				'last_name' => '榎田',
				'first_name' => '誠'
			],
			[
				'last_name' => '森本',
				'first_name' => 'マサル'
			],
			[
				'last_name' => '安倍',
				'first_name' => '紀香'
			],
			[
				'last_name' => '森田',
				'first_name' => '一重'
			],
			[
				'last_name' => '和田',
				'first_name' => '涼'
			],
			[
				'last_name' => '上久保',
				'first_name' => '竜'
			],
			[
				'last_name' => '野田',
				'first_name' => '源太'
			],
			[
				'last_name' => '新沢',
				'first_name' => 'はじめ'
			],
			[
				'last_name' => '坂本',
				'first_name' => 'みさき'
			],
			[
				'last_name' => '坂口',
				'first_name' => '隼人'
			],
			[
				'last_name' => '須田',
				'first_name' => '光太郎'
			],
			[
				'last_name' => '河合',
				'first_name' => '塾'
			],
			[
				'last_name' => '明光',
				'first_name' => '義塾'
			],
			[
				'last_name' => '全教',
				'first_name' => '研'
			],
			[
				'last_name' => '野原',
				'first_name' => 'しんのすけ'
			],
			[
				'last_name' => '野比',
				'first_name' => 'のび太'
			],
			[
				'last_name' => '江田',
				'first_name' => 'たけし'
			],
			[
				'last_name' => '後藤',
				'first_name' => '正和'
			],
			[
				'last_name' => '黒川',
				'first_name' => '愛華'
			],
			[
				'last_name' => '江口',
				'first_name' => '美和'
			],
			[
				'last_name' => '本田',
				'first_name' => '元基'
			],
		];

        $table = $this->table('teachers');
        $table->insert($data)->save();
    }
}
