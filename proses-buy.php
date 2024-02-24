<?php

$nama=$_POST['nama'];
$no_hp=$_POST['no_hp'];
$email=$_POST['email'];
$kecamatan=$_POST['kecamatan'];
$alamat=$_POST['alamat'];
$barang=$_POST['barang'];
$jumlah_barang=$_POST['jumlah_barang'];
$ongkir=$_POST['ongkir'];
$total=$_POST['total'];
$pembayaran=$_POST['pembayaran'];



include "koneksi.php";

$simpan=$koneksi->query("insert into pembeli(nama,no_hp,email,kecamatan,alamat,barang,jumlah_barang,ongkir,total,pembayaran) 
                        values ('$nama','$no_hp','$email','$kecamatan', '$alamat','$barang','$jumlah_barang','$ongkir','$total','$pembayaran')");

if($simpan==true){

    header("location:buy.php?pesan=inputBerhasil");
} else{
    echo "Error";
}




?>