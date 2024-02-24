<?php include "header.php"; ?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
        <h1>Detail Kue</h1>
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
                <th>NAMA</th><th>UKURAN</th><th>BENTUK</th><th>VARIAN</th><th>TOPING</th><th>HARGA</th>
                <th>
                    <a href="input-detail.php">
                        <button class="btn btn-info glyphicon glyphicon-plus"></button>
                    </a>
                </th>
            </tr> 
        </thead> 
        <tbody>
        <?php

        include "../koneksi.php";
        $sql=$koneksi->query("select * from detail order by nama ASC");

        while($row= $sql->fetch_assoc()){
        ?>

            <tr>
                <td><?php echo $row['nama']?></td>
                <td><?php echo $row['ukuran']?></td>
                <td><?php echo $row['bentuk']?></td>
                <td><?php echo $row['varian']?></td>
                <td><?php echo $row['toping']?></td>
                <td><?php echo $row['harga']?></td>
                <td>

                <a href="edit-detail.php?id=<?php echo $row['id_detail']?>">
                    <button class="btn btn-xs btn-danger glyphicon glyphicon-edit"></button>
                </a>

                <a href="hapus-detail.php?id=<?php echo $row['id_detail']?>" onclick=" return confirm('Anda yakin menghapus data?')">
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