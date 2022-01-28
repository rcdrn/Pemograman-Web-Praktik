<?php

namespace App\Database\Migrations;

class Users extends \CodeIgniter\Database\Migration
{

    public function up()
    {
        $this->forge->addField([

            'username' => [
                'type' => 'STRING',
                'constraint' => '100',
            ],
            'suhu' => [
                'type' => 'FLOAT',
            ],
            'kelembabpan' => [
                'type' => 'FLOAT',
            ],
            'tekanan' => [
                'type' => 'FLOAT',
            ],
            'karbondioksida' => [
                'type' => 'FLOAT',
            ],






        ]);

        $this->forge->addKey('id', TRUE);
        $this->forge->createTable('users');
    }

    public function down()
    {
        $this->forge->dropTable('users');
    }
}
