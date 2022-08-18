<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Product extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' =>[
                'type' => 'INT',
                'constraint' =>15,
                'unsigned'=>true,
                'auto_increment' => true
            ],
            'product_name' => [
                'constraint' => 300,
                'type' => 'VARCHAR',
            ]
            ]);
            $this->forge->addPrimaryKey('id');
            $this->forge->createTable('product');
    }

    public function down()
    {
        $this->forge->dropTable('product'); 

    }
}
