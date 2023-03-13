<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Ville extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_ville'          => [
                'type'              => 'INT',
                'auto_increment'    => true,
                'null'              => false
            ],
            'nom'               => [
                'type'              => 'TEXT',
                'null'              => false
            ],
            'statut_ville'      => [
                'type'              => 'INT'
            ],
            'created_at'        => [
                'type'              => 'TIMESTAMP',
                'null'              => true
            ],
            'updated_at'        => [
                'type'              => 'TIMESTAMP',
                'null'              => true
            ],
            'deleted_at'        => [
                'type'              => 'TIMESTAMP',
                'null'              => true
            ] 
        ]);

         $this->forge->addPrimaryKey('id_ville');
         $this->forge->addForeignKey
         $this->forge->createTable('ville');
    }

    public function down()
    {
        $this->forge->dropTable('ville');
    }
}
