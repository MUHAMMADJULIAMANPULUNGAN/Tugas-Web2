<?php

$id=$_GET['id'];

include "../koneksi.php";

$hapus=$koneksi->query("delete from custom where id_custom='$id'");

if($hapus==true){

    header("location:tampil-custom.php?pesan=hapusBerhasil");

} else{
    echo "Error";
}


?>