<?php

namespace App\Controllers;

use App\Models\UserModel;

class LandingPageController extends BaseController
{
    public function index()
    {
        // Mendapatkan data user yang sedang login
        $user = session('user');
        // Mengirim data user ke view
        return view('landingpage', [
            'name' => $user['name'],
            'email' => $user['email'],
            'foto' => $user['foto']
        ]);
    }
}