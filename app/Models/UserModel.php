<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'users'; // Nama tabel dalam basis data yang digunakan oleh model ini
    protected $primaryKey = 'id'; // Nama kolom yang digunakan sebagai primary key
    protected $allowedFields = ['username', 'email', 'password', 'created_at', 'updated_at'];// Array yang berisi daftar kolom yang diizinkan untuk diisi
    protected $useTimestamps = true; // Mengaktifkan penggunaan timestamp untuk createdAt dan updatedAt
    protected $createdField = 'created_at'; // Nama kolom untuk timestamp createdAt
    protected $updatedField = 'updated_at'; // Nama kolom untuk timestamp updatedAt

    public function saveuser($data)  {
        $query = $this->db->table('users')->insert($data);
        return $query;
    }

    public function updateuser($data, $id)  {
        $query = $this->db->table('users')->update($data, array('id'=> $id));
        return $query;
    }

}
