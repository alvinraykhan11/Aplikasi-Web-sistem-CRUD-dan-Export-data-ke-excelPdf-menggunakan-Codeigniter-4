<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Mahasiswa extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_mahasiswa' => [
                'type' => 'INT',
                'auto_increment' => true
            ],
            'email_mahasiswa' => [
                'type' => 'VARCHAR',
                'constraint' => 50,
            ],
            'nama_mahasiswa' => [
                'type' => 'VARCHAR',
                'constraint' => 30,
            ],
            'alamat' => [
                'type' => 'TEXT',
            ],
            'no_hp' => [
                'type' => 'VARCHAR',
                'constraint' => 20,
            ],
            'jk' => [
                'type' => 'VARCHAR',
                'constraint' => 10,
            ],
            'company_name' => [
                'type' => 'VARCHAR',
                'constraint' => 50,
            ],
            'deskripsi_company' => [
                'type' => 'TEXT',
            ],
            'years_company' => [
                'type' => 'VARCHAR',
                'constraint' => 20,
            ],
            'jobdesk' => [
                'type' => 'VARCHAR',
                'constraint' => 60,
            ],
            'skill_deskripsi' => [
                'type' => 'TEXT',
            ],
            'master_skill' => [
                'type' => 'VARCHAR',
                'constraint' => 50,
            ],
            'cabangskill' => [
                'type' => 'VARCHAR',
                'constraint' => 50,
            ],
            'masterduaskill' => [
                'type' => 'VARCHAR',
                'constraint' => 50,
            ],
            'cabangduaskill' => [
                'type' => 'VARCHAR',
                'constraint' => 50,
            ],
            'education_name' => [
                'type' => 'VARCHAR',
                'constraint' => 50,
            ],
            'years_edu' => [
                'type' => 'VARCHAR',
                'constraint' => 20,
            ],
            'jurusan' => [
                'type' => 'VARCHAR',
                'constraint' => 60,
            ],
            'deskripsi_jurusan' => [
                'type' => 'VARCHAR',
                'constraint' => 60,
            ],  
            'photo' => [
                'type' => 'TEXT',
            ],
            'deleted_at' => [
                'type' => 'DATETIME',
                'default' => null,
            ],
            'created_at datetime default current_timestamp',
            'updated_at datetime default current_timestamp on update current_timestamp',
        ]);
        $this->forge->addKey('id_mahasiswa', true);
        $this->forge->createTable('mahasiswa');
    }

    public function down()
    {
        $this->forge->dropTable('mahasiswa');
    }
}
