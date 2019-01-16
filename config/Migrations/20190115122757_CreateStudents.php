<?php
use Migrations\AbstractMigration;

class CreateStudents extends AbstractMigration
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
        $table = $this->table('students');

		$table->addColumn('last_name', 'string', [
			'default' => null,
			'limit'   => 31,
			'null'    => false,
		]);
		$table->addColumn('first_name', 'string', [
			'default' => null,
			'limit'   => 31,
			'null'    => false,
		]);
		$table->addColumn('grade', 'integer', [
			'default' => null,
			'null'    => false,
		]);
		$table->addColumn('school', 'string',[
			'default' => null,
			'limit'   => 31,
			'null'    => false,
		]);

        $table->create();
    }
}
