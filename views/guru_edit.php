<?php
$id=$_GET['id'];
$ambil=  mysqli_query($koneksi, "SELECT * FROM tbl_guru WHERE id='$id'") or die ("SQL Edit error");
$data= mysqli_fetch_array($ambil);
?>
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Update Data Guru</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
                        <div class="form-group">
                            <label for="nik" class="col-sm-3 control-label">Nik</label>
                             <div class="col-sm-9">
								<input type="text" name="nik" value="<?=$data['nik']?>"class="form-control" id="inputEmail3" placeholder="Nik">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="nama_guru" class="col-sm-3 control-label">Nama Guru</label>
                            <div class="col-sm-9">
                                <input type="text" name="nama_guru" value="<?=$data['nama_guru']?>"class="form-control" id="inputEmail3" placeholder="Nama Guru">
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
                            <label for="ket" class="col-sm-3 control-label">Keterangan</label>
                            <div class="col-sm-9">
                                <input type="text" name="ket" value="<?=$data['ket']?>" class="form-control" id="inputPassword3" placeholder="Keterangan">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success">
                                    <span class="fa fa-edit"></span> Update Data Guru</button>
                            </div>
                        </div>
                    </form>


                </div>
                <div class="panel-footer">
                    <a href="?page=guru&actions=tampil" class="btn btn-danger btn-sm">
                        Kembali Ke Data Guru
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
    $sql="UPDATE tbl_guru SET nik = '$nik', nama_guru='$nama_guru', jenis_kelamin='$jenis_kelamin',agama = '$agama',ket='$ket' WHERE id='$id'"; 
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Edit MHS Error");
    if ($query){
        echo "<script>window.location.assign('?page=guru&actions=tampil');</script>";
    }else{
        echo "<script>alert('Edit Data Gagal');<script>";
    }
    }

?>



