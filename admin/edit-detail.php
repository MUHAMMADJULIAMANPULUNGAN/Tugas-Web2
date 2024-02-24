<?php include "header.php"; ?>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <form action="proses-edit-DETAIL.php" method="POST">
                <?php
                $id=$_GET['id'];
                include "../koneksi.php";
                $tampil=$koneksi->query("select * from detail where id_detail='$id'");
                $row=$tampil->fetch_assoc();
                ?>

                    <div class="form-group">
                        <label for="nama">NAMA</label>
                        <input type="hidden" name="id_detail" value="<?php echo $row['id_detail']?>" class="form-control">
                        <input type="text" name="nama" value="<?php echo $row['nama']?>" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="ukuran">UKURAN</label>
                        <input type="text" name="ukuran" value="<?php echo $row['ukuran']?>" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="bentuk">BENTUK</label>
                        <input type="text" name="bentuk" value="<?php echo $row['bentuk']?>" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="varian">VARIAN</label>
                        <input type="text" name="varian" value="<?php echo $row['varian']?>" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="toping">TOPING</label>
                        <input type="text" name="toping" value="<?php echo $row['toping']?>" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="harga">HARGA</label>
                        <input type="text" name="harga" value="<?php echo $row['harga']?>" class="form-control">
                    </div>

                    <input type="submit" name="kirim" value="UBAH" class="btn btn-info">
                    <input type="reset" name="kosongkan" value="Kosongkan" class="btn btn-danger">
                </form>
            </div>
        </div>
    </div>

<?php include "footer.php";?>