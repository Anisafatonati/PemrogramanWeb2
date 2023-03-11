<?php
$nama = $_POST['nama'];
$jk = $_POST['jenis_kelamin'];
$hobi = $_POST['hobi'];
$umur = $_POST['umur'];
$tl = $_POST['tanggal_lahir'];
$prodi = $_POST['prodi'];



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