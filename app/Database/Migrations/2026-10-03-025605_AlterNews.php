<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AlterNews extends Migration
{
    public function up()
    {
        // Menambahkan kolom slug pada tabel news
        $this->forge->addColumn('news', [
            'slug VARCHAR(100) UNIQUE'
        ]);
    }

    public function down()
    {
        // Menghapus kolom slug saat rollback
        $this->forge->dropColumn('news', 'slug');
    }
}
