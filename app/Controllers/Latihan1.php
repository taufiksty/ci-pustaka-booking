<?php

namespace App\Controllers;

use App\Models\ModelLatihan1;

class Latihan1 extends BaseController
{
  protected $modelLatihan1;

  public function __construct()
  {
    $this->modelLatihan1 = new ModelLatihan1();
  }

  public function index()
  {
    $data = [
      'n1' => null,
      'n2' => null,
      'hasil' => 0
    ];
    return view('Latihan1', $data);
  }

  public function submit()
  {
    $n1 = $this->request->getVar('nilai1');
    $n2 = $this->request->getVar('nilai2');
    
    $data = [
      'n1' => $n1,
      'n2' => $n2,
      'hasil' => $this->modelLatihan1->sum($n1, $n2)
    ];

    return view('/Latihan1', $data);
  }
}