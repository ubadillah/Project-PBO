<?php

require('./propertyConstant.php');

use Pbo\Marketplace\Product;

//object
$produk = new Product();

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