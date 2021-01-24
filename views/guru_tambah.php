<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Form Tambah Data Guru</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
                         <div class="form-group">
                            <label for="nik" class="col-sm-3 control-label">Nik</label>
                            <div class="col-sm-9">
                                <input type="text" name="nik" class="form-control" id="inputEmail3" placeholder="Inputkan Nik" required>
                            </div>
                        </div>
                         <div class="form-group">
                            <label for="nama_guru" class="col-sm-3 control-label">Nama Guru</label>
                            <div class="col-sm-9">
                                <input type="text" name="nama_guru" class="form-control" id="inputEmail3" placeholder="Inputkan Nama Guru" required>
                            </div>
                        </div>
                         <div class="form-group">
                            <label for="jenis_kelamin" class="col-sm-3 control-label">Jenis Kelamin</label>
                            <div class="col-sm-9">
                                <input type="text" name="jenis_kelamin" class="form-control" id="inputEmail3" placeholder="Inputkan Jenis Kelamin" required>
                            </div>
                        </div>
                         <div class="form-group">
                            <label for="agama" class="col-sm-3 control-label">Agama</label>
                            <div class="col-sm-9">
                                <input type="text" name="agama" class="form-control" id="inputEmail3" placeholder="Inputkan Agama Anda" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="ket" class="col-sm-3 control-label">Keterangan</label>
                            <div class="col-sm-9">
                                <input type="text" name="ket"class="form-control" id="inputEmail3" placeholder="Inputkan Keterangan" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success">
                                    <span class="fa fa-save"></span> Simpan Data</button>
                            </div>
                        </div>
                    </form>


                </div>
                <div class="panel-footer">
                    <a href="?page=guru&actions=tampil" class="btn btn-danger btn-sm">
                        Kembali Ke Data guru
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>

<?php
if($_POST){
    //Ambil data dari form
    $nik=$_POST['nik'];
    $nama_guru=$_POST['nama_guru'];
    $jenis_kelamin=$_POST['jenis_kelamin'];
    $agama=$_POST['agama'];
    $ket=$_POST['ket'];
    //buat sql
    $sql="INSERT INTO tbl_guru VALUES ('','$nik','$nama_guru','$jenis_kelamin','$agama','$ket')";
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Simpan Data Error");
    if ($query){
        echo "<script>window.location.assign('?page=guru&actions=tampil');</script>";
    }else{
        echo "<script>alert('Simpan Data Gagal');<script>";
    }
    }

?>
