<?php

class product {

    //property
    public string $kode;
    public string $nama;
    public int $harga;
    public int $stok;

    //constant
    public const PAJAK = 0.11;

    public function __construct($kode, $nama, $harga, $stok) {
        $this->kode = $kode;
        $this->nama = $nama;
        $this->harga = $harga;
        $this->stok = $stok;
    }
    
    public function pajak() {
        return self::PAJAK * 100; // 11

    }

    public function total(){
        return $this->harga + ($this->harga * self::PAJAK);
    }
}    

//object
$produk = new product('P0001','Laptop',1000000,5);

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