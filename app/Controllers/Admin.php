<?php

namespace App\Controllers;

use App\Models\SaungModel;

class Admin extends BaseController
{

    //Inheritance
    protected $adminModel;
    public function __construct()
    {
        $this->adminModel = new SaungModel();
    }

    //Method Read
    public function index()
    {
        $curpage = $this->request->getVar('page_saung') ? $this->request->getVar('page_saung') : 1;

        $key = $this->request->getVar('key');
        if ($key) {
            $saung = $this->adminModel->searchAdmin($key);
        } else {
            $saung = $this->adminModel;
        }

        $data = [
            'saung' => $saung->paginate(5, 'saung'),
            'pager' => $this->adminModel->pager,
            'curpage' => $curpage
        ];
        return view('main/admin', $data);
    }

    //Method Save
    public function save()
    {
        $data = $this->request->getPost();
      
        $Rules = [
            'nisn' => 'required|min_length[5]|max_length[20]|is_unique[saung.nisn]',
            'nik' => 'required|min_length[5]|max_length[20]|is_unique[saung.nik]',
            'email' => 'required|valid_email|is_unique[saung.email]',

        ];

        if (!$this->validate($Rules)) {
            $error = $this->validator->getErrors();
            $error = implode("<br>", $error);
            //    redirect back with input
            return redirect()->back()->withInput()->with('error', $error);
        }
        
        $this->adminModel->save(
            $data
        );

        session()->setFlashdata('pesanAdd', 'Data berhasil ditambahkan..');
        return redirect()->to('/admin');
    }

    //Method Update
    public function update($id)
    {
        $data = $this->request->getPost();
        $this->adminModel->update($id, $data);

        session()->setFlashdata('pesanUpdate', 'Data berhasil dirubah..');
        return redirect()->to('/admin');
    }

    //Method Delete
    public function delete($id)
    {
        $this->adminModel->delete($id);
        // $this->adminModel->getReset();

        session()->setFlashdata('pesanDelete', 'Data berhasil dihapus..');
        return redirect()->to('/admin');
    }

    //Method Export Excel
    public function excel()
    {
        $data = [
            'saung' => $this->adminModel->getData()
        ];

        return view('admin/excel', $data);
    }

    //Method Print
    public function print()
    {
        $data = [
            'saung' => $this->adminModel->getData()
        ];

        return view('admin/print', $data);
    }
}
