<?php

$values = array(1,2.5,3,4);
var_dump($values);

$nama = ["Noval","Adi","Vall"];
var_dump($nama);

var_dump($nama[0]);

$sekolah = [
    "id" => "1",
    "nama" => "IDN",
    "alamat" => [
        "desa" => "Gunung Pamijahan",
        "kota" => "Bogor",
        "provinsi" => "Jawa Barat"
    ]
];

var_dump($sekolah);

var_dump($sekolah["nama"]);
var_dump($sekolah["alamat"]["desa"]);