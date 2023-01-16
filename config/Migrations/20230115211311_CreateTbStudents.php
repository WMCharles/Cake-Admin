<?php
declare(strict_types=1);

use Migrations\AbstractMigration;

class CreateTbStudents extends AbstractMigration
{
    public $autoId = false;

    /**
     * Change Method.
     *
     * More information on this method is available here:
     * https://book.cakephp.org/phinx/0/en/migrations.html#the-change-method
     * @return void
     */
    public function change(): void
    {
        $table = $this->table('tb_students');
        $table->addColumn('id', 'integer', [
            'autoIncrement' => true,
            'default' => null,
            'limit' => 11,
            'null' => false,
        ]);
        $table->addColumn('name', 'string', [
            'default' => null,
            'limit' => 120,
            'null' => false,
        ]);
        $table->addColumn('profile_image', 'string', [
            'default' => null,
            'limit' => 120,
            'null' => true,
        ]);
        $table->addColumn('college_id', 'int', [
            'default' => null,
            'limit' => 5,
            'null' => false,
        ]);
        $table->addColumn('branch_id', 'int', [
            'default' => null,
            'limit' => 5,
            'null' => false,
        ]);
        $table->addColumn('dob', 'string', [
            'default' => null,
            'limit' => 50,
            'null' => true,
        ]);
        $table->addColumn('blood_group', 'enum', [
            'default' => null,
            'null' => false,
            'values' => array('A+', 'A-', 'B+', 'O+', 'O-', 'AB+', 'AB-'),
        ]);
        $table->addColumn('gender', 'enum', [
            'default' => null,
            'null' => false,
            'values' => array('male', 'female', 'other'),
        ]);
        $table->addColumn('email', 'string', [
            'default' => null,
            'limit' => 120,
            'null' => true,
        ]);
        $table->addColumn('phone_number', 'string', [
            'default' => null,
            'limit' => 30,
            'null' => true,
        ]);
        $table->addColumn('address', 'text', [
            'default' => null,
            'limit' => 255,
            'null' => true,
        ]);
        $table->addColumn('status', 'integer', [
            'default' => 1,
            'limit' => 5,
            'null' => false,
        ]);
        $table->addColumn('create_at', 'datetime', [
            'default' => 'CURRENT_TIMESTAMP',
            'null' => false,
        ]);
        $table->addColumn('modified_at', 'datetime', [
            'default' => 'CURRENT_TIMESTAMP',
            'null' => false,
        ]);
        $table->addPrimaryKey([
            'id',
        ]);
        $table->create();
    }
}
