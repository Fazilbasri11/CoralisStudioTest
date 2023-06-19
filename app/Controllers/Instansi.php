<?php

namespace App\Controllers;

use App\Models\InstansiModel;
use CodeIgniter\Controller;

class Instansi extends Controller
{
    public function index()
{
    $instansiModel = new \App\Models\InstansiModel();
    $data['instansi'] = $instansiModel->findAll();

    return view('instansi/index', $data);
}


    public function create()
    {
        return view('instansi/create');
    }

    public function store()
    {
        $instansiModel = new InstansiModel();

        $data = [
            'nama' => $this->request->getPost('nama'),
            'alamat' => $this->request->getPost('alamat'),
            'telepon' => $this->request->getPost('telepon'),
        ];

        $instansiModel->insert($data);

        return redirect()->to('/instansi');
    }

    public function edit($id)
    {
        $instansiModel = new InstansiModel();
        $data['instansi'] = $instansiModel->find($id);

        return view('instansi/edit', $data);
    }

    public function update($id)
    {
        $instansiModel = new InstansiModel();

        $data = [
            'nama' => $this->request->getPost('nama'),
            'alamat' => $this->request->getPost('alamat'),
            'telepon' => $this->request->getPost('telepon'),
        ];

        $instansiModel->update($id, $data);

        return redirect()->to('/instansi');
    }

    public function delete($id)
    {
        $instansiModel = new InstansiModel();
        $instansiModel->delete($id);

        return redirect()->to('/instansi');
    }
}