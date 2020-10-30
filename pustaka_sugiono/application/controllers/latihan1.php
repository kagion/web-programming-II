<?php
class latihan1 extends CI_Controller
{
  public function index()
  {
    echo "<h1>Assalamualaikum</h1>";
    echo "Welcome to web Programming class enjoy ......";
  }

  public function penjumlahan($n1, $n2)
  {
    $this->load->model('Model1');
    $hasil = $this->Model1->jumlah($n1, $n2);
    echo "Hasil Penjumlahan dari" . $n1 . "+" . $n2 . "=" . $hasil;
  }
}
