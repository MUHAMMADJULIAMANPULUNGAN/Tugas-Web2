<?php include "header.php"; ?>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <form action="proses-edit-buy.php" method="POST">
                <?php
                $id=$_GET['id'];
                include "../koneksi.php";
                $tampil=$koneksi->query("select * from pembeli where id_pembeli='$id'");
                $row=$tampil->fetch_assoc();
                ?>
                    <div class="form-group">
                        <label for="nama">NAMA</label>
                        <input type="hidden" name="id_pembeli" value="<?php echo $row['id_pembeli']?>" class="form-control">
                        <input type="text" name="nama" value="<?php echo $row['nama']?>" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="no_hp">NO HANDPHONE</label>
                        <input type="number" name="no_hp"  value="<?php echo $row['no_hp']?>" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="email">E-MAIL</label>
                        <input type="text" name="email"  value="<?php echo $row['email']?>" class="form-control">
                    </div>

                    <div class="form-group">
                        <label class="form-label">KECAMATAN</label>
			            <select name="kecamatan" class="form-control pilihan" >
                            <option value="<?php echo $row['kecamatan']?>" selected><?php echo $row['kecamatan']?></option>
                            <option value="">-- PILIH  KECAMATAN --</option>
                            <option value="MEDAN_AMPLAS">MEDAN AMPLAS</option>
                            <option value="MEDAN_AREA">MEDAN AREA</option>
                            <option value="MEDAN_BARAT">MEDAN BARAT</option>
                            <option value="MEDAN_BARU">MEDAN BARU</option>
                            <option value="MEDAN_BELAWAN">MEDAN BELAWAN</option>
                            <option value="MEDAN_DELI">MEDAN DELI</option>
                            <option value="MEDAN_DENAI">MEDAN DENAI</option>
                            <option value="MEDAN_HELVETIA">MEDAN HELVETIA</option>
                            <option value="MEDAN_JOHOR">MEDAN JOHOR</option>
                            <option value="MEDAN_KOTA">MEDAN KOTA</option>
                            <option value="MEDAN_LABUHAN">MEDAN LABUHAN</option>
                            <option value="MEDAN_MAIMUN">MEDAN MAIMUN</option>
                            <option value="MEDAN_MARELAN">MEDAN MARELAN</option>
                            <option value="MEDAN_PERJUANGAN">MEDAN PERJUANGAN</option>
                            <option value="MEDAN_PETISAH">MEDAN PETISAH</option>
                            <option value="MEDAN_POLONIA">MEDAN POLONIA</option>
                            <option value="MEDAN_SUNGGAL">MEDAN SUNGGAL</option>
                            <option value="MEDAN_SELAYANG">MEDAN SELAYANG</option>
                            <option value="MEDAN_TEMBUNG">MEDAN TEMBUNG</option>
                            <option value="MEDAN_TUNTUNGAN">MEDAN TUNTUNGAN</option>
                            <option value="MEDAN_TIMUR">MEDAN TIMUR</option>

			            </select>
                    </div>			
                    
                    <div class="form-group">
                        <label for="alamat">ALAMAT LENGKAP</label>
                        <textarea name="alamat" class="form-control"><?php echo $row['alamat']?></textarea>
                    </div>


                    <div class="form-group">
                    <label for="barang" class="form-label">NAMA KUE</label>
                        <select name="barang" class="form-control pilihan">
                            <option value="<?php echo $row['barang']?>" selected><?php echo $row['barang']?></option>
                            <option value="">-- PILIH  KUE --</option>
                            <option value="Kue_krim_vanila">Kue Krim Vanila - Rp 80.000</option>
                            <option value="Kue_krim_moka">Kue Krim Moca - 80.000</option>
                            <option value="Kue_beludru_merah">Kue Beludru Merah - Rp.80.000</option>
                            <option value="Kue_krim_merah">Kue Krim Merah - Rp.80.000</option>
                            <option value="Kue_krim_biru">Kue Krim Biru - Rp.80.000</option>
                            <option value="Kue_krim_coklat">Kue Krim Coklat - Rp.80.000</option>
                            <option value="Kue_coklat_strowberry">Kue Coklat Strowberry - Rp.80.000</option>
                            <option value="Kue_coklat_oreo">Kue Coklat Oreo - Rp.80.000</option>
                            <option value="Kue_coklat_moca">Kue Coklat Moca - Rp.80.000</option>
                            <option value="Kue_ulang_tahun_p">Kue Ulang Tahun P- Rp.100.000</option>
                            <option value="Kue_ulang_tahun_n">Kue Ulang Tahun N - Rp.100.000</option>
                            <option value="Kue_ulang_tahun_c">Kue Ulang Tahun C - Rp.100.000</option>
                            <option value="Kue_ulang_tahun_w">Kue Ulang Tahun W - Rp.80.000</option>
                            <option value="Kue_ulang_tahun_cp">Kue Ulang Tahun CP - Rp.80.000</option>
                            <option value="Kue_ulang_tahun_g">Kue Ulang Tahun G - Rp.80.000</option>
                            <option value="Kue_ulang_tahun_dan_lilin_magic">Kue Ulang Tahun dan Lilin Magic - Rp.90.000</option>
                            <option value="Kue_ulang_tahun_mini">Kue Ulang Tahun Mini - Rp.50.000</option>
                            <option value="Kue_pernikahan_1">Kue Pernikahan 1 - Rp.200.000</option>
                            <option value="Kue_pernikahan_2">Kue Pernikahan 2 - Rp.200.000</option>
                            <option value="Kue_pernikahan_3">Kue Pernikahan 3 - Rp.200.000</option>
                            <option value="Kue_pernikahan_4">Kue Pernikahan 4 - Rp.150.000</option>
                            <option value="Kue_pernikahan_5">Kue Pernikahan 5 - Rp.150.000</option>
                            <option value="Kue_pernikahan_6">Kue Pernikahan 6 - Rp.200.000</option>
                            <option value="Kue_pernikahan_7">Kue Pernikahan 7 - Rp.200.000</option>
                            <option value="Kue_pernikahan_diskon">Kue Pernikahan (Diskon) - Rp.100.000</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="jumlah_barang" class="form-label">JUMLAH BARANG</label>
                        <input type="number" name="jumlah_barang" value="<?php echo $row['jumlah_barang']?>" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="ongkir" class="form-label">ONGKIR</label>
                        <input type="text" id="ongkir" name="ongkir" value="<?php echo $row['ongkir']?>" class="form-control" readonly>
                    </div>

                    <div class="form-group">
                        <label for="total" class="form-label">TOTAL HARGA</label>
                        <input type="text" id="total" name="total" value="<?php echo $row['total']?>" class="form-control" readonly>
                    </div>

                    <div class="form-group">
                        <label for="pembayaran">PEMBAYARAN</label>
                        <select name="pembayaran" class="form-control">
                        <option value="<?php echo $row['pembayaran']?>" selected><?php echo $row['pembayaran']?></option>
                            <option value="cod">COD</option>
                            <option value="transfer">TRANSFER</option>
                        </select>
                    </div>
                    <br>
                    <br>


                    <input type="submit" name="kirim" value="Ubah" class="btn btn-info">
                    <input type="reset" name="kosongkan" value="Kosongkan" class="btn btn-danger"> 
                </form>
            </div>
        </div>
    </div>

    
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const itemPrices = {
            Kue_krim_vanila: 80000,
            Kue_krim_moka: 80000,
            Kue_beludru_merah: 80000,
            Kue_krim_merah:80000,
            Kue_krim_biru: 80000,
            Kue_krim_coklat: 80000,
            Kue_coklat_strowberry: 80000,
            Kue_coklat_oreo: 80000,
            Kue_coklat_moca: 80000,
            Kue_ulang_tahun_p: 100000,
            Kue_ulang_tahun_n: 100000,
            Kue_ulang_tahun_c: 100000,
            Kue_ulang_tahun_w:80000,
            Kue_ulang_tahun_cp:80000,
            Kue_ulang_tahun_g: 80000,
            Kue_ulang_tahun_dan_lilin_magic: 90000,
            Kue_ulang_tahun_mini: 50000,
            Kue_pernikahan_1: 200000,
            Kue_pernikahan_2: 200000,
            Kue_pernikahan_3: 200000,
            Kue_pernikahan_4: 150000,
            Kue_pernikahan_5: 150000,
            Kue_pernikahan_6: 200000,
            Kue_pernikahan_7: 200000,
            Kue_pernikahan_diskon: 100000,
        };

        const shippingCosts = {
            MEDAN_AMPLAS: 15000,
            MEDAN_AREA: 15000,
            MEDAN_BARAT: 15000,
            MEDAN_BARU: 15000,
            MEDAN_BELAWAN: 20000,
            MEDAN_DELI : 15000,
            MEDAN_DENAI: 15000,
            MEDAN_HELVETIA: 15000,
            MEDAN_JOHOR: 15000,
            MEDAN_KOTA : 10000,
            MEDAN_LABUHAN : 20000,
            MEDAN_MAIMUN: 15000,
            MEDAN_MARELAN: 20000,
            MEDAN_PERJUANGAN: 20000,
            MEDAN_PETISAH: 15000,
            MEDAN_POLONIA: 15000,
            MEDAN_SUNGGAL: 10000,
            MEDAN_SELAYANG: 10000,
            MEDAN_TEMBUNG: 10000,
            MEDAN_TUNTUNGAN: 20000,
            MEDAN_TIMUR: 15000,
        };

        function updateOngkir() {
            const selectedDistrict = document.querySelector('select[name="kecamatan"]').value;
            const selectedItem = document.querySelector('select[name="barang"]').value;
            const jumlahBarang = parseInt(document.querySelector('input[name="jumlah_barang"]').value) || 0;

            const ongkir = shippingCosts[selectedDistrict] || 0;
            const hargaBarang = itemPrices[selectedItem] || 0;

            const totalHarga = (hargaBarang * jumlahBarang) + ongkir;

            document.getElementById('ongkir').value = `Rp.${ongkir}`;
            document.getElementById('total').value = `Rp.${totalHarga}`;
        }

        document.querySelector('select[name="kecamatan"]').addEventListener('change', updateOngkir);
        document.querySelector('select[name="barang"]').addEventListener('change', updateOngkir);
        document.querySelector('input[name="jumlah_barang"]').addEventListener('input', updateOngkir);
    });
</script>

    <br>
    <br>

<?php include "footer.php";?>