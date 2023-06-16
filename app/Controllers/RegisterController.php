<?php

namespace App\Controllers;

use App\Models\UserModel;

class RegisterController extends BaseController
{
    public function index()
    {
        return view('register');
    }

    public function store()
{
    $validationRules = [
        'name'     => 'required',
        'password' => 'required',
        'foto'     => 'uploaded[foto]|max_size[foto,1024]|is_image[foto]',
        'email'    => 'required|valid_email|is_unique[users.email]',
    ];

    if (!$this->validate($validationRules)) {
        return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
    }

    $userModel = new UserModel();

    $name  = $this->request->getPost('name');
    $email = $this->request->getPost('email');
    $foto  = $this->request->getFile('foto');

    $data = [
        'name'  => $name,
        'email' => $email,
    ];

    if ($this->request->getPost('password')) {
        $password = password_hash($this->request->getPost('password'), PASSWORD_DEFAULT);
        $data['password'] = $password;
    }

    if ($foto->isValid() && !$foto->hasMoved()) {
        $newName = $foto->getRandomName();
        $foto->move(ROOTPATH . 'public/uploads', $newName);
        $data['foto'] = $newName;
    }

    $userModel->insert($data);

    return redirect()->to('/login')->with('success', 'Registration successful!');
}


}