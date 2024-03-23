<?php
class contoh2 extends CI_Controller
{
    public function index()
    {
        echo "Selamat Datang.. selamat belajar Web Programming";
        //$this->load->view('view-latihan1');
    }

    public function penjumlahan($n1, $n2)
    {
        $this->load->model('model_contoh2');
        $hasil = $this->model_contoh2->jumlah($n1, $n2);
        echo "Hasil Penjumlahan dari". $n1 ." + ". $n2 ." = "
        .$hasil;
    }
}