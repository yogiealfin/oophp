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
        return "$this->judul, $this->penulis";
    }
}

$produk1 = new Produk("One Piece", "Eichiro Oda", "Shonen Jump", 30000);


echo $produk1->getLabel();
// $produk2 = new Produk();
