<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class News extends Seeder
{
    public function run()
    {
        // Data awal untuk tabel news (sesuai Petani Kode)
        $news_data = [
            [
                'title'   => 'Selamat datang di Codeigniter',
                'author'  => 'Hilmi Abdurrafi',
                'slug'    => 'codeigniter-intro',
                'status'  => 'published',
                'content' => 'Pengenalan Codeigniter untuk Pemula.'
            ],
            [
                'title'   => 'Hello World',
                'author'  => 'Hilmi Abdurrafi',
                'slug'    => 'hello-world',
                'status'  => 'published',
                'content' => 'Hello World, ini contoh artikel'
            ],
            [
                'title'   => 'Meetup komunitas Codeigniter Indonesia',
                'author'  => 'Hilmi Abdurrafi',
                'slug'    => 'codeigniter-meetup',
                'status'  => 'published',
                'content' => 'Seru sekali meetup perdana komunitas codeigniter..'
            ]
        ];

        foreach ($news_data as $data) {
            // Insert data ke tabel news
            $this->db->table('news')->insert($data);
        }
    }
}
