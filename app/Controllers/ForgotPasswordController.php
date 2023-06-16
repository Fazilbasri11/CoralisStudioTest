<?php
namespace App\Controllers;

use App\Models\UserModel;

class ForgotPasswordController extends BaseController
{
public function index()
{
return view('forgot_password');
}

public function sendResetLink()
{
$validationRules = [
'email' => 'required|valid_email',
];

if (!$this->validate($validationRules)) {
return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
}

// Cek keberadaan email dalam database
$userModel = new UserModel();
$email = $this->request->getPost('email');
$user = $userModel->where('email', $email)->first();

if (!$user) {
return redirect()->back()->withInput()->with('error', 'Email not found.');
}

// kode ini membuuthkan smpt server atau sebagainya agar berjalan.
//  // Generate token untuk reset password
//     $token = bin2hex(random_bytes(32));

//     // Simpan token ke database untuk validasi nanti
//     $userModel->update($user['id'], ['reset_token' => $token]);

//     // Kirim email reset password
//     $to = $user['email'];
//     $subject = 'Reset Password';
//     $message = 'Silakan klik link berikut untuk mereset password Anda: ' . site_url('reset-password?token=' . $token);
//     // Kirim email menggunakan fungsi bawaan PHP mail() atau menggunakan library email lainnya


// Tampilkan popup bahwa email telah dikirim
return redirect()->to('/login')->with('success', 'Reset password link has been sent to your email.');
}
}