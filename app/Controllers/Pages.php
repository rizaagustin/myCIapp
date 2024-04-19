<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
      $data = [
        'title' => 'Home | CodeIgniter',
        'tes' => ['satu','dua','tiga']
      ];
      return view('pages/home',$data);
    }

    public function about()
    {
      $data = [
        'title' => 'About | CodeIgniter'
      ];      
      return view('pages/about',$data);
    }

    public function contact(){
      $data = [
        'title' => 'Contact | CodeIgniter',
        'alamat' => [
          [
            'tipe' => 'Rumah',
            'alamat' => 'Jl. Jend. Sudirman No. 10',
            'kota' => 'Bandung',
          ],
          [
            'tipe' => 'Kantor',
            'alamat' => 'Jl. Setiabudhi No. 50',
            'kota' => 'Bandung2',
          ]

        ]
      ];
      return view('pages/contact',$data);
    }

}
