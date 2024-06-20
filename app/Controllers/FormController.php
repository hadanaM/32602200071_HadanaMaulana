<?php

namespace App\Controllers;
use CodeIgniter\Controller;
class FormController extends Controller{
    public function submitForm(){
        //Ambil data yang dikirim lewat form
        $nama = $this->request->getpost('nama');
        $nim = $this->request->getpost('nim');
        $kelas = $this->request->getpost('kelas');
        $matkul = $this->request->getpost('matkul');
        $dosen = $this->request->getpost('dosen');
        $asprak = $this->request->getpost('asprak');

        //menyiapkan data yg akan dikirim ke view
        $data = [
            'nama' => $nama,
            'nim' => $nim,
            'kelas' => $kelas,
            'matkul' => $matkul,
            'dosen' => $dosen,
            'asprak' => $asprak,
        ];
        //menampilkan view dgn data yg telah disiapkan
        return $this->response->setJSON($data);
    }

}