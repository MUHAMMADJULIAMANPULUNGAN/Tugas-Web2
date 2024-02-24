<?php

$id=$_GET['id'];

include "../koneksi.php";

$hapus=$koneksi->query("delete from pembeli where id_pembeli='$id'");

if($hapus==true){

    header("location:tampil-buy.php?pesan=hapusBerhasil");

} else{
    echo "Error";
}


?>