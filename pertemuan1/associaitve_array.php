<?php
$profileArray = [
    [
        "nama" => "Anisa Fatonati", //string
        "kelas" => "TI06", //string
        "NIM" => 0110222154, //integer
        "sudah_lulus" => false //boolean true atau false
    ], [
        "nama" => "Eva Masdareva", 
        "kelas" => "TI06", 
        "NIM" => 0110222154, 
        "sudah_lulus" => false 
    ]
];

foreach ($profileArray as $profile) {
    echo $profile['nama'];
}