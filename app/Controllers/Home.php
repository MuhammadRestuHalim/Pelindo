<?php

namespace App\Controllers;

use App\Models\UserModel;
use CodeIgniter\Controller;

class Home extends BaseController
{
    public function index(): string
    {
        return view('login');
    }

    public function control_panel(): string
    {
        return view('control_panel');
    }

    public function users(): string
    {
        $user = new UserModel();
        $data['useres'] = $user->findAll();
        return view('users', $data);
    }

    public function save()
    {
        $model = new UserModel();
        $data = [
            'username' => $this->request->getPost('username'),
            'email' => $this->request->getPost('email'),
            'password' => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT),
            'created_at' => date('Y-m-d H:i:s')
        ];

        $model->insert($data);
        return redirect()->to('users');
    }

    public function update($id)
    {
        $model = new UserModel();
        $data = [
            'username' => $this->request->getPost('username'),
            'email' => $this->request->getPost('email'),
            'updated_at' => date('Y-m-d H:i:s')
        ];
        $model->updateuser($data, $id);
        return redirect()->to('users');
    }

    public function delete($id)
    {
        $model = new UserModel();
        $model->delete($id);

        return redirect('users')->with('success', 'Data Deleted Successfully');
    }
    public function riwayat(): string
    {
        return view('riwayat');
    }

    public function profile(): string
    {
        return view('profile');
    }
}
