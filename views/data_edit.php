<?php
$id=$_GET['id'];
$ambil=  mysqli_query($koneksi, "SELECT * FROM tbl_data WHERE id ='$id'") or die ("SQL Edit error");
$data= mysqli_fetch_array($ambil);
?>
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Form Update Data Anak Didik</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
                        <div class="form-group">
                            <label for="nis" class="col-sm-3 control-label">NIS</label>
                            <div class="col-sm-9">
                                <input type="text" name="nis" value="<?=$data['nis']?>"class="form-control" id="inputEmail3" placeholder="NIS">
                            </div>
                        </div>
						<div class="form-group">
                            <label for="nama_lengkap" class="col-sm-3 control-label">Nama Lengkap</label>
                            <div class="col-sm-9">
                                <input type="text" name="nama_lengkap" value="<?=$data['nama_lengkap']?>"class="form-control" id="inputEmail3" placeholder="Nama Lengkap">
                            </div>
                        </div>
						<div class="form-group">
                            <label for="jenis_kelamin" class="col-sm-3 control-label">Jenis Kelamin</label>
                            <div class="col-sm-9">
                                <input type="text" name="jenis_kelamin" value="<?=$data['jenis_kelamin']?>"class="form-control" id="inputEmail3" placeholder="Jenis Kelamin">
                            </div>
                        </div>
						<div class="form-group">
                            <label for="agama" class="col-sm-3 control-label">Agama</label>
                            <div class="col-sm-9">
                                <input type="text" name="agama" value="<?=$data['agama']?>"class="form-control" id="inputEmail3" placeholder="Agama">
                            </div>
                        </div>
							<div class="form-group">
                            <label for="nama_orangtua" class="col-sm-3 control-label">Nama Orangtua</label>
                            <div class="col-sm-9">
                                <input type="text" name="nama_orangtua" value="<?=$data['nama_orangtua']?>"class="form-control" id="inputEmail3" placeholder="Nama Orangtua" >
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success">
                                    <span class="fa fa-edit"></span> Update Data Anak Didik</button>
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
    $nama_lengkap=$_POST['nama_lengkap'];
	$jenis_kelamin=$_POST['jenis_kelamin'];
    $agama=$_POST['agama'];
	$nama_orangtua=$_POST['nama_orangtua'];
    //buat sql
    $sql="UPDATE tbl_data SET nis='$nis',nama_lengkap='$nama_lengkap',jenis_kelamin='$jenis_kelamin',agama='$agama',nama_orangtua='$nama_orangtua' WHERE id ='$id'"; 
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Edit MHS Error");
    if ($query){
        echo "<script>window.location.assign('?page=data&actions=tampil');</script>";
    }else{
        echo "<script>alert('Edit Data Gagal');<script>";
    }
    }

?>



