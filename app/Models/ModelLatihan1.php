<?php 

namespace App\Models;

use CodeIgniter\Model;

class modelLatihan1 extends Model
{
  // Membuat variable untuk menampung nilai
  public $nilai1, $nilai2, $hasil;

  // Method penjumlahan
  public function sum($n1 = null, $n2 = null)
  {
    $this->nilai1 = $n1;
    $this->nilai2 = $n2;
    $this->hasil = $n1 + $n2;

    return $this->hasil;
  }
}