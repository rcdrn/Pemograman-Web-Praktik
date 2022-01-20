<?php

namespace App\Database\Migrations;

class Users extends \CodeIgniter\Database\Migration
{

    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => TRUE,
                'auto_increment' => TRUE,
            ],
            'ruangan' => [
                'type' => 'TEXT',
                'constraint' => '6',
            ],
            'username' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
            'password' => [
                'type' => 'TEXT',
            ],
            'salt' => [
                'type' => 'TEXT',
            ],
            'suhu' => [
                'type' => 'FLOAT'
            ],
            'kelembapan' => [],
            'created_by' => [
                'type' => 'TEXT',
                'constraint' => 11,
            ],
            'created_date' => [
                'type' => 'DATETIME',
                'null' => TRUE,
            ]

        ]);

        $this->forge->addKey('id', TRUE);
        $this->forge->createTable('users');
    }

    public function down()
    {
        $this->forge->dropTable('users');
    }
}
