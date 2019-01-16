<?php
use Migrations\AbstractMigration;

class CreateSubjects extends AbstractMigration
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
        $table = $this->table('subjects');

        $table->addColumn('subject_name','string', [
        	'default' => null,
			'null' => false
		]);

        $table->create();
    }
}
