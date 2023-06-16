<?php


namespace App\Controllers;

use App\Models\UserModel;

class LoginController extends BaseController
{
    public function index()
    {
        return view('login');
    }

    public function authenticate()
    {
        // Validasi input
        $validationRules = [
            'email'    => 'required|valid_email',
            'password' => 'required',
        ];

        if (!$this->validate($validationRules)) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        $userModel = new UserModel();

        $email    = $this->request->getPost('email');
        $password = $this->request->getPost('password');

        // Cari user berdasarkan email
        $user = $userModel->where('email', $email)->first();
        if ($user && password_verify($password, $user['password'])) {
            // Login berhasil
            $userData = [
                'id'    => $user['id'],
                'name'  => $user['name'],
                'email' => $user['email'],
                'foto'  => $user['foto']
            ];
            session()->set('user', $userData);

            return redirect()->to('/')->with('success', 'Login successful!');
        } else {
            // Login gagal
            return redirect()->back()->withInput()->with('error', 'Invalid email or password.');
        }
    }

    public function logout()
    {
        // Lakukan tindakan untuk logout, seperti menghapus data user dari session, dll.
        session()->destroy(); // Menghapus semua data session

        return redirect()->to('/login')->with('success', 'Logout successful!');
    }
}