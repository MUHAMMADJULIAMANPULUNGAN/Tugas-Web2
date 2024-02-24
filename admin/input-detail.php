<?php include "header.php";?>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <form action="proses-input-detail.php" method="POST">
                    
                    <div class="form-group">
                        <label for="nama">NAMA</label>
                        <input type="text" name="nama" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="ukuran">UKURAN</label>
                        <input type="text" name="ukuran" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="bentuk">BENTUK</label>
                        <input type="text" name="bentuk" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="varian">VARIAN</label>
                        <input type="text" name="varian" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="toping">TOPING</label>
                        <input type="text" name="toping" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="harga">HARGA</label>
                        <input type="text" name="harga" class="form-control">
                    </div>

                    <input type="submit" name="kirim" value="SIMPAN" class="btn btn-info">
                    <input type="reset" name="kosongkan" value="Kosongkan" class="btn btn-danger">
                </form>
            </div>
        </div>
    </div>
<?php include "footer.php";?>