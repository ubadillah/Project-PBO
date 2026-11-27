<?php

namespace Pbo\Marketplace;

require_once('./PropertyConstant.php');

use Pbo\Marketplace\product;

class jasa  {

    use product;
    
    public function payment($tipe) {

        return match ($tipe){
            "virtual" => "virtual account",
            "qris" => "QRIS",
            default => "hanya bisa va dan qris"
        };
    }

}