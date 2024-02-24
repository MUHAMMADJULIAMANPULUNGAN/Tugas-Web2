<?php include "header.php"; ?>
		<!-- Awal Page -->
		<div class="container">
		<!-- Awal baris -->
		<div class="row">
			<div class="col-md-8"><!-- Awal Kolom Pertama -->

			<?php 

            if(@$_GET['pesan']=="inputBerhasil"){

            ?>
                    <div class="alert alert-success">
                     Berhasil Dikirim!
                    </div>
            <?php

            }

            ?>
			<div class="panel panel-default">
				<div class="panel-body">
				<h2 style="text-muted"><span class="glyphicon glyphicon-list"></span> Contact</h2>
					<form action="proses-contac.php" method="post">
						<table class="table table-hover">
							<div class="form-group">
							<label for="nama">Nama</label>
								<input type="text" name="nama" class="form-control input-md" placeholder="Isikan nama anda dengan lengkap" required>
							</div>
					
							<div class="form-group">
							<label for="email">Alamat Email</label>
								<input type="email" name="email" class="form-control input-md" placeholder="Isikan alamat email yang masih aktif" required>
							</div>
							
							<div class="form-group">
							<label for="pesan">Pesan</label>
								<textarea name="pesan" class="form-control input-md" required> </textarea>
							</div>
							
								<td>
								<input type="submit" nama="kirim" value="Kirim" class="btn btn-lg btn-info"> <input type="reset" value="Batal" class="btn btn-lg btn-warning">
								</td>
							
						</table>
					</form>
				</div>
      </div>
			</div><!-- Akhir Kolom Pertama -->
			
			<div class="col-md-4"><!-- Awal kolom kedua -->
			<div class="panel panel-default">
				<div class="panel-body">
				<h2>JUAN CAKE SHOP </h2>
				<img src="foto/online shop.jfif" class="img-thumbnail img-responsive">
				<center><p><b>Saran Dan Kritik Anda Sangat Berguna Bagi Kami</b></p><center>
				</div>
      </div>
			</div><!-- Akhir Kolom Kedua -->
		</div><!-- Akhir Baris -->
		</div><!--  Akhir Page -->

      <br>
      <br>
<?php include "footer.php";?>