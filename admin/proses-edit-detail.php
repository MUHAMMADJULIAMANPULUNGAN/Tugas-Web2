<?php

include "../koneksi.php";

$id=$_POST['id_detail'];
$nama=$_POST['nama'];
$ukuran=$_POST['ukuran'];
$bentuk=$_POST['bentuk'];
$varian=$_POST['varian'];
$toping=$_POST['toping'];
$harga=$_POST['harga'];


$ubah=$koneksi->query("update detail set nama='$nama', ukuran='$ukuran', bentuk='$bentuk', varian='$varian', toping='$toping', harga='$harga'  where id_detail='$id'");


if($ubah==true){

    header("location:tampil-detail.php?pesan=editBerhasil");
} else{
    echo "Error";
}

?>