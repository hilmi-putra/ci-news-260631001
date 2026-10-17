<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        $userData = [
            'name'       => 'Hilmi Abdurrafi',
            'email'      => 'admin@widyatama.ac.id',
            'password'   => password_hash('password123', PASSWORD_DEFAULT),
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ];

        // Cek jika user sudah ada
        $existing = $this->db->table('users')->where('email', $userData['email'])->get()->getRow();
        if (!$existing) {
            $this->db->table('users')->insert($userData);
        }
    }
}
