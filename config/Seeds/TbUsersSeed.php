<?php
declare(strict_types=1);

use Cake\Auth\DefaultPasswordHasher;
use Migrations\AbstractSeed;

/**
 * TbUsers seed.
 */
class TbUsersSeed extends AbstractSeed
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeds is available here:
     * https://book.cakephp.org/phinx/0/en/seeding.html
     *
     * @return void
     */
    public function run(): void
    {
        $hash = new DefaultPasswordHasher();
        $data = [
            "name" => "Charles Wafula",
            'email' => "charles@gmail.com",
            'phone_no' => "0712345678",
            'password' => $hash->hash('admin@123'),
        ];

        $table = $this->table('tb_users');
        $table->insert($data)->save();
    }
}
