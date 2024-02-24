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
                <th>NAMA KUE</th><th>DETAIL</th>
            </tr> 
        </thead> 
        <tbody>
        <?php

        include "koneksi.php";
        $sql=$koneksi->query("select * from detail order by nama ASC");

        while($row= $sql->fetch_assoc()){
        ?>

            <tr>
                <td><?php echo $row['nama']?></td>
                <td>

                <a href="edit-detail.php?id=<?php echo $row['id_detail']?>">
                    <button class="btn btn-xs btn-danger">Detail</button>
                </a>

                </td>
            </tr>

        <?php    
        }
        ?>
        </tbody>
        </table>
            <a class="btn btn-info" href="kue krim mentega.php" role="button">Kembali</a> 
                
        </div>
    </div>
</div>
<br>
<br>

<?php include "footer.php";?>