<?php 

namespace App\Controllers;
use App\Models\KomikModel;
class Komik extends BaseController
{
  protected $komikModel;
  public function __construct()
  {
    $this->komikModel = new KomikModel();    
  }
  public function index()
  {
    // $komik = $this->komikModel->findAll();
    $komik = $this->komikModel->getKomik();
    $data = [
      'title' => 'Komik | CodeIgniter',
      'komik' => $komik
    ];

    //cara konek db
    // $db = \Config\Database::connect();
    // $komik = $db->query("SELECT * FROM komik");
    // // dd($komik);
    // foreach($komik->getResultArray() as $row){
    //   d($row);
    // }

    // $komikModel = new KomikModel();

    return view('komik/index', $data);
  }

  public function detail($slug){
    // $komik = $this->komikModel->where(['slug' => $slug])->first();    
    // $komik = $this->komikModel->getKomik($slug);
    $data = [
      'title' => 'Detail Komik',
      'komik' => $this->komikModel->getKomik($slug)
    ];
    return view('komik/detail', $data);
  }

}

?>