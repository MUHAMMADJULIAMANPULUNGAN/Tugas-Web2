<?php

$nama=$_POST['nama'];
$ukuran=$_POST['ukuran'];
$bentuk=$_POST['bentuk'];
$varian=$_POST['varian'];
$toping=$_POST['toping'];
$harga=$_POST['harga'];

include "../koneksi.php";

$simpan=$koneksi->query("insert into detail(nama,ukuran,bentuk,varian,toping,harga) 
                        values ('$nama', '$ukuran', '$bentuk', '$varian', '$toping', '$harga')");

if($simpan==true){

    header("location:tampil-detail.php?pesan=inputBerhasil");
} else{
    echo "Error";
}

?>