<?php 

namespace App\Controllers;

class Matakuliah extends BaseController
{
  public function index()
  {
    return view('Matakuliah/Form');
  }

  public function cetak()
  {
    $data = [
      'kode' => $this->request->getVar('kode'),
      'nama' => $this->request->getVar('nama'),
      'sks' => $this->request->getVar('sks')
    ];

    return view('Matakuliah/Data', $data);
  }
}