<?php

namespace App\Controllers;

class Coba extends BaseController
{
    public function index()
    {
      echo "halaman coba";
    }

    public function about($nama = '', $umur = 0){
      echo "nama $nama, umur $umur.";
    }
}
