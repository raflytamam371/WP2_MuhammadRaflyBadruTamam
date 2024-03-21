<?php
$session = session();
if (!isset($_SESSION['nim'])) {
?>
    <script>
        alert('Kamu Belum Melakukan Input');
        document.location = "<?= base_url('admin/belajar-form') ?>";
    </script>
<?php
} else {
?>
    <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
        <div class="row">
            <ol class="breadcrumb">
                <li><a href="#"><span class="glyphicon glyphicon-home"></span></a></li>
                <li class="active">Page Sukses</li>
            </ol>
        </div><!--/.row-->
        <div class="row">
            <div class="col-md-8">
                <div class="panel panel-default">
                    <div class="panel-heading"><span class="glyphicon glyphicon-user"></span> Sukses</div>
                    <div class="panel-body">
                        
                            <h1>SUKSES</h1>
                        
                        <form class="form-horizontal">
                            <fieldset>
                                
                                <div class="form-group">
                                    <label class="col-md-3 control-label" for="nim">NIM</label>
                                    <div class="col-md-9">
                                        <input readonly type="text" name="nim" id="nim" class="form-control" placeholder="<?= $_SESSION['nim']; ?>">
                                    </div>
                                </div>

                                
                                <div class="form-group">
                                    <label class="col-md-3 control-label" for="nama">Nama Lengkap</label>
                                    <div class="col-md-9">
                                        <input readonly id="nama" name="nama" type="text" class="form-control" placeholder="<?= $_SESSION['nama']; ?>">
                                    </div>
                                </div>

                                
                                <div class="form-group">
                                    <label class="col-md-3 control-label" for="email">Email</label>
                                    <div class="col-md-9">
                                        <input readonly id="email" name="email" type="text" class="form-control" placeholder="<?= $_SESSION['email']; ?>">
                                    </div>
                                </div>

                                
                                <div class="form-group">
                                    <label class="col-md-3 control-label" for="jk">Jenis Kelamin</label>
                                    <div class="col-md-9">
                                        <input readonly type="text" name="jekel" id="jk1" placeholder="<?= $_SESSION['jekel']; ?>">
                                    </div>
                                </div>

                                
                                <div class="form-group">
                                    <label class="col-md-3 control-label" for="kode_cabang">Kode Cabang</label>
                                    <div class="col-md-9">
                                        <input type="text" name="kode_cabang" readonly placeholder="<?= $_SESSION['kode_cabang']; ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-3 control-label" for="kodecabang">Kampus</label>
                                    <div class="col-md-9">
                                        <input type="text" name="kampus" readonly placeholder="<?= $_SESSION['kampus']; ?>">
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <label class="col-md-3 control-label" for="kelas">Kelas</label>
                                    <div class="col-md-9">
                                        <input readonly id="kelas" name="kelas" type="text" class="form-control" placeholder="<?= $_SESSION['kelas']; ?>">
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <label class="col-md-3 control-label" for="alamat">Alamat</label>
                                    <div class="col-md-9">
                                        <textarea name="alamat" id="alamat" class="form-control" readonly><?= $_SESSION['alamat']; ?></textarea>
                                    </div>
                                </div>
                            </fieldset>
                        </form>



                        <a href="belajar-form" class="btn btn-primary">input Kembali</a>
                    </div>
                </div>
                <?php  ?>

            </div><!--/.col-->

            <div class="col-md-4">

            </div><!--/.col-->
        </div><!--/.row-->
    </div> <!--/.main-->
<?php } ?>