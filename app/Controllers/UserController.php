<?php

namespace App\Controllers;

use App\Models\UserModel;

class UserController extends BaseController
{
    public function index()
{
    return view('change_password');
}

public function changePassword()
{
    $validationRules = [
        'current_password' => 'required',
        'new_password'     => 'required|min_length[6]',
        'confirm_password' => 'required|matches[new_password]',
    ];

    $validationMessages = [
        'confirm_password.matches' => 'The confirmation password does not match the new password.',
    ];

    $validation = \Config\Services::validation();
    $validation->setRules($validationRules, $validationMessages);

    if (!$validation->withRequest($this->request)->run()) {
        return redirect()->back()->withInput()->with('errors', $validation->getErrors());
    }

    $userModel = new UserModel();

    if (!session()->has('user')) {
        return redirect()->to('/login')->with('error', 'User not logged in.');
    }

    $userId = session('user')['id'];
    $user = $userModel->find($userId);

    if (!$user) {
        
        return redirect()->to('/login')->with('error', 'User not found.');
        session()->destroy();
    }

    if (!password_verify($this->request->getPost('current_password'), $user['password'])) {
        return redirect()->back()->withInput()->with('error', 'Incorrect current password.');
    }

    $newPassword = password_hash($this->request->getPost('new_password'), PASSWORD_DEFAULT);
    $userModel->update($userId, ['password' => $newPassword]);

    
    return redirect()->to('/login')->with('success', 'Password has been changed successfully.');
    session()->destroy();
}



}