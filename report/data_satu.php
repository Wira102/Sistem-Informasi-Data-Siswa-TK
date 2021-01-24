<!DOCTYPE html>
<html>
    <head>
        <title>Cetak Data Anak Didik</title>
        <link href="../Assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    </head>  
    <body onload="print()">
        <!--Menampilkan data detail arsip-->
        <?php
        include '../config/koneksi.php';
        $sql = "SELECT * FROM tbl_data WHERE id='" . $_GET ['id'] . "'";
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
                        <h3>DATA ANAK DIDIK</h3>
                        <table class="table table-bordered table-striped table-hover"> 
                            <tbody>
								<tr>
                                    <td>Nis</td> <td><?= $data['nis'] ?></td>
                                </tr>
                                <tr>
                                    <td>Nama Lengkap</td> <td><?= $data['nama_lengkap'] ?></td>
                                </tr>
								<tr>
                                    <td>Jenis Kelamin</td> <td><?= $data['jenis_kelamin'] ?></td>
                                </tr>
								<tr>
                                    <td>Agama</td> <td><?= $data['agama'] ?></td>
                                </tr>
								<tr>
                                    <td>Nama Orangtua</td> <td><?= $data['nama_orangtua'] ?></td>
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