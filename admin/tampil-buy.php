<?php include "header.php"; ?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
        <h1>Data Pembeli</h1>
            <?php 

            if(@$_GET['pesan']=="inputBerhasil"){

            ?>
                    <div class="alert alert-success">
                    Penyimpanan Berhasil!
                    </div>
            <?php

            }

            ?>


            <?php 

            if(@$_GET['pesan']=="hapusBerhasil"){

            ?>
                    <div class="alert alert-success">
                    Data Berhasil Dihapus!
                    </div>
            <?php

            }

            ?>

            <?php 

            if(@$_GET['pesan']=="editBerhasil"){

            ?>
                    <div class="alert alert-success">
                    Perubahan Berhasil!
                    </div>
            <?php

            }

            ?>


        <table id="dataTables" class="table table-bordered">
        <thead>
            <tr>
                <th>NAMA</th><th>NO HANDPHONE</th><th>EMAIL</th><th>KECAMATAN</th><th>ALAMAT</th><th>NAMA KUE</th><th>JUMLAH KUE</th><th>ONGKIR</th><th>TOTAL HARGA</th><th>PEMBAYARAN</th>
                <th>
                    <a href="buy.php"></a>
                </th>
            </tr> 
        </thead> 
        <tbody>
        <?php

        include "../koneksi.php";
        $sql=$koneksi->query("select * from pembeli order by nama ASC");

        while($row= $sql->fetch_assoc()){
        ?>

            <tr>
                <td><?php echo $row['nama']?></td>
                <td><?php echo $row['no_hp']?></td>
                <td><?php echo $row['email']?></td>
                <td><?php echo $row['kecamatan']?></td>
                <td><?php echo $row['alamat']?></td>
                <td><?php echo $row['barang']?></td>
                <td><?php echo $row['jumlah_barang']?></td>
                <td><?php echo $row['ongkir']?></td>
                <td><?php echo $row['total']?></td>
                <td><?php echo $row['pembayaran']?></td>

                <td>

                <a href="edit-buy.php?id=<?php echo $row['id_pembeli']?>">
                    <button class="btn btn-xs btn-danger glyphicon glyphicon-edit"></button>
                </a>

                <a href="hapus-buy.php?id=<?php echo $row['id_pembeli']?>" onclick=" return confirm('Anda yakin menghapus data?')">
                    <button class="btn btn-xs btn-warning glyphicon glyphicon-remove"></button>
                </a>

                </td>
            </tr>

        <?php    
        }
        ?>
        </tbody>
        </table>
        </div>
    </div>
</div>
<br>
<br>

<?php include "footer.php";?>
