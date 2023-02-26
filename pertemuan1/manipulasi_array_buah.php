<?php
$arrayBuah = ["mangga", "rambutan", "ceri", "nanas", "semangka"];

//mengurutkan array
sort($arrayBuah);

//menghapus nilai array paling belakang
array_pop($arrayBuah);

//menghapus spesifik value array tertentu
unset($arrayBuah[1]);

//menambah value array dibelakang
array_push($arrayBuah,"lemon");

//menghapus value array paling depan
array_shift($arrayBuah);

//enambah value array didepan
array_unshift($arrayBuah, "pisang");

foreach($arrayBuah as $buah){
    echo $buah . "<br>";
}

