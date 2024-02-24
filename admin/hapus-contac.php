<?php

$id=$_GET['id'];

include "../koneksi.php";

$hapus=$koneksi->query("delete from pesan where id_pesan='$id'");

if($hapus==true){

    header("location:tampil-contac.php?pesan=hapusBerhasil");

} else{
    echo "Error";
}


?>