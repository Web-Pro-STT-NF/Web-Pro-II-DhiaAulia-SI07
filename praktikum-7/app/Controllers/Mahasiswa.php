<?php

namespace App\Controllers;

use App\Models\MahasiswaModel;

class Mahasiswa extends BaseController
{
    public function index()
    {
        // membuat object model mahasiswa
        $this->mhs1 = new MahasiswaModel();
        $this->mhs2 = new MahasiswaModel();
        $this->mhs3 = new MahasiswaModel();

        // memberikan nilai kepada object
        $this->mhs1->id = 1;
        $this->mhs1->nama = "Dhia Aulia";
        $this->mhs1->nim = "0110121149";
        $this->mhs1->gender = "P";
        $this->mhs1->tmp_lahir = "Balikpapan";
        $this->mhs1->tgl_lahir = "4 September";
        $this->mhs1->ipk = 3.89;

        $this->mhs2->id = 2;
        $this->mhs2->nama = "Fadila Adelia";
        $this->mhs2->nim = "0110121150";
        $this->mhs2->gender = "P";
        $this->mhs2->tmp_lahir = "Jakarta";
        $this->mhs2->tgl_lahir = "4 Agustus";
        $this->mhs2->ipk = 3.88;

        $this->mhs3->id = 3;
        $this->mhs3->nama = "Mufida Anjani";
        $this->mhs3->nim = "0110121156";
        $this->mhs3->gender = "P";
        $this->mhs3->tmp_lahir = "Jakarta";
        $this->mhs3->tgl_lahir = "20 Juni";
        $this->mhs3->ipk = 3.87;
        
        $list_mhs = [$this->mhs1, $this->mhs2, $this->mhs3];
        $data['list_mhs'] = $list_mhs;

        // return sebuah view dan mengirimkan sebuah data array
        return view('mahasiswa/index', $data);
    }
}