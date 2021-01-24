<!DOCTYPE html>
<html>
    <head>
        <title>Cetak Data Guru</title>
        <link href="../Assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    </head>
    <body onload="print()">
        <!--Menampilkan data detail arsip-->
        <?php
        include '../config/koneksi.php';
        $sql = "SELECT * FROM tbl_guru WHERE id='" . $_GET ['id'] . "'";
        //proses query ke database
        $query = mysqli_query($koneksi, $sql) or die("SQL Detail error");
        //Merubaha data hasil query kedalam bentuk array
        $data = mysqli_fetch_array($query);
        ?>

        <div class="container">
            <div class='row'>
                <div class="col-sm-12">
                    <!--dalam tabel--->
                    <div class="text-center">
                        <h2>Sistem Informasi TK Sei Serindan </h2>
                        <h4>Jalan Jendral Ahmad No. 31, Sei Serindan, Medan,<br> Medan Barat, Sumatera Utara, 22222</h4>
                        <hr>
                        <h3>DATA GURU</h3>
                        <table class="table table-bordered table-striped table-hover">
                            <tbody>
								<tr>
                                    <td>Nik</td> <td><?= $data['nik'] ?></td>
                                </tr>
                                <tr>
                                    <td>Nama Guru</td> <td><?= $data['nama_guru'] ?></td>
                                </tr>
                                <tr>
                                    <td>Jenis Kelamin</td> <td><?= $data['jenis_kelamin'] ?></td>
                                </tr>
                                <tr>
                                    <td>Agama</td> <td><?= $data['agama'] ?></td>
                                </tr>
                                <tr>
                                    <td>Keterangan</td> <td><?= $data['ket'] ?></td>
                                </tr>

                            </tbody>
                            <tfoot>
                                <tr>
                                    <td colspan="2" class="text-right">
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
