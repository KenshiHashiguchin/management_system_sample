<?php
use Migrations\AbstractMigration;

class CreateTeacherSubjects extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-change-method
     * @return void
     */
    public function change()
    {
        $table = $this->table('teacher_subjects');
        $table->addColumn('teacher_id','integer',[
        	'null' => false
		]);
		$table->addColumn('subject_id','integer',[
			'null' => false
		]);
        $table->create();
    }
}
