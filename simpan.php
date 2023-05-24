<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php

if ($_GET) {
    //variable penampung
    $mobil = $_GET['MerkMobil'] 
        . "-" . $_GET['NamaMobil'] 
        . "-" . $_GET['TypeMobil']  
        . "-" . $_GET['TypeMesin'] 
        . "-" . $_GET['TahunRilis'] 
        . "-" . $_GET['CCMobil'] 
        . "-" . $_GET['HPMobil'] 
        . "-" . $_GET['BahanBakar'] 
        . "-" . $_GET['Upload']. "\n" ;
    //simpan ke file
    $file_name = "mobildata.txt";
    if (file_put_contents($file_name, $mobil, FILE_APPEND) > 0) {
        echo "Data berhasil disimpan";
    } else {
        echo "Data gagal disimpan";
    }

    echo '<br><br><a href="form.php">Kembali ke Form</a>';
    echo '<br><br><a href="baca.php">Lihat Data</a>';
}
?>
</body>
</html>
