<?php

class Produk
{
    public $judul, $penulis, $penerbit, $harga;

    public function getLabel()
    {
        return "$this->judul, $this->penulis";
    }
}

$produk1 = new Produk();
$produk1->judul = "One Piece";
$produk1->penulis = "Eichiro Oda";
$produk1->penerbit = "Shonen Jump";
$produk1->harga = 30000;

echo $produk1->getLabel();
// $produk2 = new Produk();
