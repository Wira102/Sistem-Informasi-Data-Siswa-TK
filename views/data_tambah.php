<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Form Tambah Data Anak Didik</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
						 <div class="form-group">
                            <label for="nis" class="col-sm-3 control-label">Nis</label>
                            <div class="col-sm-9">
                                <input type="text" name="nis" class="form-control" id="inputEmail3" placeholder="Inputkan Nis" required>
                            </div>
                        </div>
						 <div class="form-group">
                            <label for="nm_lengkap" class="col-sm-3 control-label">Nama Lengkap</label>
                            <div class="col-sm-9">
                                <input type="text" name="nm_lengkap" class="form-control" id="inputEmail3" placeholder="Inputkan Nama Lengkap" required>
                            </div>
                        </div>
						 <div class="form-group">
                            <label for="jns_kelamin" class="col-sm-3 control-label">Jenis Kelamin</label>
                            <div class="col-sm-9">
                                <input type="text" name="jns_kelamin" class="form-control" id="inputEmail3" placeholder="Inputkan Jenis Kelamin" required>
                            </div>
                        </div>
						 <div class="form-group">
                            <label for="agama" class="col-sm-3 control-label">Agama</label>
                            <div class="col-sm-9">
                                <input type="text" name="agama" class="form-control" id="inputEmail3" placeholder="Inputkan Agama Anda" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="nm_ortu" class="col-sm-3 control-label">Nama Orangtua</label>
                            <div class="col-sm-9">
                                <input type="text" name="nm_ortu"class="form-control" id="inputEmail3" placeholder="Inputkan Nama Orangtua" required>
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
                    <a href="?page=data&actions=tampil" class="btn btn-danger btn-sm">
                        Kembali Ke Data Anak Didik
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>

<?php
if($_POST){
    //Ambil data dari form
    $nis=$_POST['nis'];
	$nama_lengkap=$_POST['nm_lengkap'];
	$jenis_kelamin=$_POST['jns_kelamin'];
    $agama=$_POST['agama'];
    $nama_orangtua=$_POST['nm_ortu'];
    //buat sql
    $sql="INSERT INTO tbl_data VALUES ('','$nis','$nama_lengkap','$jenis_kelamin','$agama','$nama_orangtua')";
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Simpan Arsip Error");
    if ($query){
        echo "<script>window.location.assign('?page=data&actions=tampil');</script>";
    }else{
        echo "<script>alert('Simpan Data Gagal');<script>";
    }
    }

?>
