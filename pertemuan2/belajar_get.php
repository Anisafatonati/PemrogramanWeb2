<?php
$nama = $_GET['nama'];
$jk = $_GET['jenis_kelamin'];
$hobi = $_GET['hobi'];
$umur = $_GET['umur'];
$tl = $_GET['tanggal_lahir'];
$prodi = $_GET['prodi'];



echo "Hasil Formulir Pendaftaran : <br>";
echo "Nama : " . $nama . "<br>";
echo "jenis Kelamin : " . $jk . "<br>";
echo "Hobi : ";
foreach($hobi as $h){
    echo $h . ",";
} 
echo "<br>";
echo "Umur : " . $umur . "<br>";
echo "Tanggal Lahir : " . $tl . "<br>";
echo "Prodi : " . $prodi . "<br>";