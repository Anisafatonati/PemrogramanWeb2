<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    <meta name="description" content="css">
    <style>
        body{
            background-color: #EF96C5;
        }

        h3{
            text-align: center;
            font: 1em Verdana;
        }

        .tabel{
            background-color: #CCFBFF;
        }
        
        #pink{
            background-color: #EAD6DE;
        }

        #biru{
            background-color: #A3C9E2;
        }

    </style>
</head>
<body>
<?php
$ns1 = ['id'=>1,'nim'=>'01101','uts'=>80,'uas'=>84,'tugas'=>78];
$ns2 = ['id'=>2,'nim'=>'01121','uts'=>70,'uas'=>50,'tugas'=>68];
$ns3 = ['id'=>3,'nim'=>'01130','uts'=>60,'uas'=>86,'tugas'=>70];
$ns4 = ['id'=>4,'nim'=>'01134','uts'=>90,'uas'=>91,'tugas'=>82];

$ar_nilai = [$ns1, $ns2 , $ns3, $ns4];

?>
<h3>Daftar Nilai Siswa</h3>
<table border="1" width="100%" class="tabel">
<thead>
<tr>
<th>No</th><th>NIM</th><th>UTS</th>
<th>UAS</th><th>Tugas</th><th>Nilai Akhir</th>
</tr>
</thead>
<tbody>
    <?php
        $nomor = 1;
        foreach($ar_nilai as $ns){
            echo '<tr><td id = "pink">'.$nomor.'</td>';
            echo '<td id = "biru">'.$ns['nim'].'</td>';
            echo '<td id = "pink">'.$ns['uts'].'</td>';
            echo '<td id = "biru">'.$ns['uas'].'</td>';
            echo '<td id = "pink">'.$ns['tugas'].'</td>';
            $nilai_akhir = ($ns['uts'] + $ns['uas']+$ns['tugas'])/3;
            echo '<td id = "biru">'.number_format($nilai_akhir,2,',','.').'</td>';
            echo '<tr/>';
            $nomor++;
        }
    ?>
</tbody>
</table>
</body>
</html>