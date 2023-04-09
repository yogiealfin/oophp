<?php

class Produk
{
    public $judul, $penulis, $penerbit, $harga;

    public function __construct($judul, $penulis, $penerbit, $harga)
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    public function getLabel()
    {
        return "$this->penulis, $this->penerbit";
    }
}

class cetakInfoProduk
{
    public function cetak(Produk $produk)
    {
        $str = "{$produk->judul} | {$produk->getLabel()} (Rp.{$produk->harga})";
        return $str;
    }
}

$produk1 = new Produk("One Piece", "Eichiro Oda", "Shonen Jump", 30000);
$infoProduk1 = new cetakInfoProduk;
echo $infoProduk1->cetak($produk1);


// echo $produk1->getLabel();
// $produk2 = new Produk();
