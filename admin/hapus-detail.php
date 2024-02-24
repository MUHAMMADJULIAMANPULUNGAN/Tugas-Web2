<?php

$id=$_GET['id'];

include "../koneksi.php";

$hapus=$koneksi->query("delete from detail where id_detail='$id'");

if($hapus==true){

    header("location:tampil-detail.php?pesan=hapusBerhasil");

} else{
    echo "Error";
}


?>