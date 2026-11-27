<?php

require('./jasa.php');

use Pbo\Marketplace\jasa;

//object
$produk = new jasa();

$produk->setKode('P0001')
        ->setNama('Laptop')
        ->setHarga(10000000)
        ->setStok(5);

//hasil
echo "produk: ". $produk->getNama();
echo "<br/>";

echo "harga: rp.". $produk->getHarga();
echo "<br/>";

echo "stok: ". $produk->getStok();
echo "<br/>";

echo "pajak: ". $produk->pajak(). "%";
echo "<br/>";

echo "total harga setelah pajak: RP". $produk->total();

echo "<br/>";
echo "metode pembayaran: ". $produk->payment('qris');