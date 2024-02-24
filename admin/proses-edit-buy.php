<?php

include "../koneksi.php";

$id=$_POST['id_pembeli'];
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


$ubah=$koneksi->query("update pembeli set nama='$nama', no_hp='$no_hp', email='$email', alamat='$alamat', barang='$barang', jumlah_barang='$jumlah_barang', total='$total', pembayaran='$pembayaran'  where id_pembeli='$id'");


if($ubah==true){

    header("location:tampil-buy.php?pesan=editBerhasil");
} else{
    echo "Error";
}

?>