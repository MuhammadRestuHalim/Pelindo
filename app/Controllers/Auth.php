<?php

namespace App\Controllers;

use App\Models\UserModel;
use CodeIgniter\Controller;

class Auth extends Controller
{
    public function index()
    {
        // Menampilkan halaman login
        return view('login');
    }

    public function process()
    {
        // Mengakses session
        $session = session();

        // Mengambil nilai email dan password dari POST request
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');

        // Menginisialisasi model UserModel
        $model = new UserModel();

        // Mencari pengguna berdasarkan email
        $user = $model->where('email', $email)->first();

        if ($user) {
            // Jika pengguna ditemukan, verifikasi password
            if (password_verify($password, $user['password'])) {
                // Jika password cocok, set data pengguna ke dalam session
                $userData = [
                    'id' => $user['id'],
                    'username' => $user['username'],
                    'email' => $user['email'],
                    'isLoggedIn' => true
                ];

                $session->set($userData);

                // Redirect ke halaman dashboard jika login berhasil
                return redirect()->to('/dashboard');
            } else {
                // Jika password salah, set pesan kesalahan dan redirect kembali ke halaman login
                $session->setFlashdata('error', 'Password salah.');
                return redirect()->to('/login');
            }
        } else {
            // Jika email tidak ditemukan, set pesan kesalahan dan redirect kembali ke halaman login
            $session->setFlashdata('error', 'Email tidak ditemukan.');
            return redirect()->to('/login');
        }
    }

    public function register()
    {
        // Menampilkan halaman registrasi
        return view('register');
    }

    public function saveRegister()
    {
        // Validasi input - validasi ini dapat disesuaikan dengan kebutuhan
        $validation = \Config\Services::validation();
        $validation->setRules([
            'username' => 'required|min_length[3]|max_length[100]',
            'email' => 'required|valid_email|is_unique[users.email]',
            'password' => 'required|min_length[6]'
        ]);

        if (!$validation->withRequest($this->request)->run()) {
            // Jika validasi gagal, redirect kembali ke halaman registrasi dengan input sebelumnya dan pesan kesalahan
            return redirect()->back()->withInput()->with('errors', $validation->getErrors());
        }

        // Simpan data registrasi ke dalam basis data
        $model = new UserModel();
        $data = [
            'username' => $this->request->getPost('username'),
            'email' => $this->request->getPost('email'),
            'password' => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT),
            'created_at' => date('Y-m-d H:i:s')
        ];

        $model->insert($data);

        // Redirect ke halaman login setelah registrasi berhasil dengan pesan sukses
        return redirect()->to('/login')->with('success', 'Registrasi berhasil, silakan login.');
    }

    public function logout()
    {
        // Menghapus session untuk melakukan logout
        $session = session();
        $session->destroy();

        // Redirect ke halaman login setelah logout dengan pesan sukses
        return redirect()->to('/login')->with('success', 'Anda telah berhasil logout.');
    }
}
