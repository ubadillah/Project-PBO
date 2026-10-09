<?php

class product {

    //property
    public string $kode;
    public string $nama;
    public int $harga;
    public int $stok;

    //constant
    public const PAJAK = 0.11;


}

//object
$produk = new product();
$produk->kode = 'P000';
$produk->nama = 'Laptop';
$produk->harga = 10000000;
$produk->stok = 5;

//hitung pajak
$pajak = product::PAJAK * 100; // 11
$jumlahpajak = $produk->harga * product::PAJAK; //1,1 juta

//total
$total = $produk->harga + $jumlahpajak;

//hasil
echo "produk: ". $produk->nama;
echo "<br/>";

echo "harga: rp.". $produk->harga;
echo "<br/>";

echo "stok: ". $produk->stok;
echo "<br/>";

echo "pajak: ". $pajak. "%";
echo "<br/>";

echo "total harga setelah pajak: rp". $total;