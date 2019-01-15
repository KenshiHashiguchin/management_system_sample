<?php
use Migrations\AbstractSeed;

/**
 * Subjects seed.
 */
class SubjectsSeed extends AbstractSeed
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
        		'subject_name' => '数学'
			],
			[
				'subject_name' => '国語'
			],
			[
				'subject_name' => '英語'
			],
			[
				'subject_name' => '化学'
			],
			[
				'subject_name' => '物理'
			],
			[
				'subject_name' => '生物'
			],
			[
				'subject_name' => '情報'
			],
			[
				'subject_name' => '歴史'
			],
			[
				'subject_name' => '地理'
			],
		];

        $table = $this->table('subjects');
        $table->insert($data)->save();
    }
}
