<?php

namespace App\Controllers;

use App\Models\SaungModel;

class Saung extends BaseController
{

    //Inheritance
    protected $saungModel;
    public function __construct()
    {
        $this->saungModel = new SaungModel();
    }

    //Method Read
    public function index()
    {
        $curpage = $this->request->getVar('page_saung') ? $this->request->getVar('page_saung') : 1;

        $keyword = $this->request->getVar('keyword');
        if ($keyword) {
            $saung = $this->saungModel->search($keyword);
        } else {
            $saung = $this->saungModel;
        }

        $data = [
            'saung' => $saung->paginate(5, 'saung'),
            'pager' => $this->saungModel->pager,
            'curpage' => $curpage
        ];
        return view('main/saung', $data);
    }

    //Method Save
    public function save()
    {
        $data = $this->request->getPost();

        // validation
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

        $this->saungModel->save($data);

        session()->setFlashdata('Pesan', 'PENDAFTARAN BERHASIL^^..., segera Konfirmasi Pendaftaran & Melakukan Pembayaran!');
        return redirect()->to('/saung');
    }
}
