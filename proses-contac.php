<?php

$nama=$_POST['nama'];
$email=$_POST['email'];
$pesan=$_POST['pesan'];

include "koneksi.php";

$simpan=$koneksi->query("insert into pesan(nama,email,pesan) 
                        values ('$nama','$email','$pesan')");

if($simpan==true){

    header("location:contac.php?pesan=inputBerhasil");
} else{
    echo "Error";
}




?>