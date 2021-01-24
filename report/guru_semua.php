<!DOCTYPE html>
<html>
    <head>
        <title>Cetak Semua Data Guru</title>
        <link href="../Assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    </head>
    <body onload="print()">
        <!--Menampilkan data detail arsip-->
        <?php
        include '../config/koneksi.php';
        ?>

        <div class="container">
            <div class='row'>
                <div class="col-sm-12">
                    <!--dalam tabel--->
                    <div class="text-center">
                        <h2>Sistem Informasi TK Sei Serindan </h2>
                        <h4>Jalan Jendral Ahmad No. 31, Sei Serindan, Medan,<br> Medan Barat, Sumatera Utara, 22222</h4>
                        <hr>
                        <h3>DATA SELURUH GURU</h3>
                        <table class="table table-bordered table-striped table-hover">
                        <tbody>
                                <thead>
								<tr>
									<th><center>No.</center></th><th width="18%"><center>NIK</center></th><th><center>Nama Guru</center></th><th width="14%"><center>Jenis Kelamin</center></th><th width="15%"><center>Agama</center></th><th width="10%"><center>Keterangan</center></th>
								</tr>
								</thead>
							<tbody>
                            <!--ambil data dari database, dan tampilkan kedalam tabel-->
                            <?php
                            //buat sql untuk tampilan data, gunakan kata kunci select
                            $sql = "SELECT * FROM tbl_guru";
                            $query = mysqli_query($koneksi, $sql) or die("SQL Anda Salah");
                            //Baca hasil query dari databse, gunakan perulangan untuk
                            //Menampilkan data lebh dari satu. disini akan digunakan
                            //while dan fungdi mysqli_fecth_array
                            //Membuat variabel untuk menampilkan nomor urut
                            $nomor = 0;
                            //Melakukan perulangan u/menampilkan data
                            while ($data = mysqli_fetch_array($query)) {
                                $nomor++; //Penambahan satu untuk nilai var nomor
                                ?>
                                <tr>
                                    <td><?= $nomor ?></td>
                                    <td><?= $data['nik'] ?></td>
                                    <td><?= $data['nama_guru'] ?></td>
                                    <td><?= $data['jenis_kelamin'] ?></td>
                                    <td><?= $data['agama'] ?></td>
                                    <td><?= $data['ket'] ?></td>
                                </tr>
                                <!--Tutup Perulangan data-->
                            <?php } ?>
							</tbody>
                        </tbody>
                            <tfoot>
                                <tr>
                                    <td colspan="8" class="text-right">
                                        Medan  <?= date("d-m-Y") ?>
                                        <br><br><br><br>
                                        <u>Ketua Yayasan<strong></u><br>
                                        NIP.1212121212
									</td>
								</tr>
							</tfoot>
                        </table>
                    </div>
                </div>
            </div>
    </body>
</html>
