<?php

namespace App\Controllers;
use App\Models\cvModel;

class Home extends BaseController
{
    protected $cv;
    public function __construct()
    {
        $this->uts = new cvModel();
    }
    
    public function index() : string {
        $cv = $this->uts->findAll();
        $data = [
            'title' => 'uts',
            'title' => 'Nama_Panjang',
            'title' => 'Nama_Pendek',
            'title' => 'Tanggal_lahir',
            'title' => 'Jenis_Kelamin',
            'title' => 'Alamat',
            'title' => 'No_Telepon',
            'title' => 'E-mail',
            'title' => 'LinkedIn',
            'title' => 'Github',
            'title' => 'Instagram',
            'cv' => $cv
        ];

        return view('body', $data);
    }
}
