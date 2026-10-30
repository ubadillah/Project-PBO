<?php

require('./propertyConstant.php');

use Pbo\Marketplace\Product;

//object
$produk = new Product('P0001','Laptop',1000000,5);

//hasil
echo "produk: ". $produk->nama;
echo "<br/>";

echo "harga: rp.". $produk->harga;
echo "<br/>";

echo "stok: ". $produk->stok;
echo "<br/>";

echo "pajak: ". $produk->pajak(). "%";
echo "<br/>";

echo "total harga setelah pajak: RP". $produk->total();