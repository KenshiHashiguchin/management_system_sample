<?php

use Migrations\AbstractMigration;

class CreateTeachers extends AbstractMigration
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
		$table = $this->table('teachers');
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
        $table->create();
    }
}
