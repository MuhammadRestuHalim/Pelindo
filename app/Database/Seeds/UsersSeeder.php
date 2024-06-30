<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UsersSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'username' => 'admin',
                'email'    => 'admin@example.com',
                'password' => password_hash('admin123', PASSWORD_DEFAULT),
            ],
            // Tambahkan data pengguna lainnya sesuai kebutuhan
        ];

        // Using Query Builder
        $this->db->table('users')->insertBatch($data);

        // Using Model (jika sudah ada model untuk pengguna)
        // $userModel = new \App\Models\UserModel();
        // $userModel->insertBatch($data);
    }
}
