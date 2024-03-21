	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><span class="glyphicon glyphicon-home"></span></a></li>
				<li class="active">Forms</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Biodata</h1>
			</div>
		</div><!--/.row-->
				
		
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">Formulir Biodata</div>
					<div class="panel-body">
						<?php
						if(session()->get('error_list')!=""){
							?>
							<div class="alert bg-danger" role="alert">
								<?= session()->get('error_list');?>
							</div>
							<?php
						}
						?>
						<div class="col-md-6">
							<form role="form" method="post" action="<?= base_url('admin/post-form');?>">
							
								<div class="form-group">
									<label>NIM</label>
									<input type="text" class="form-control" placeholder="Masukan NIM" name="nim" onKeypress="return goodchars(event, '012345689', this)" maxlength="8" required>
								</div>

								<div class="form-group">
									<label>Nama</label>
									<input type="text" class="form-control" placeholder="Masukan Nama" name="nama" onKeypress="return goodchars(event, 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ ', this)" maxlength="50" required>
								</div>

								<div class="form-group">
									<label>E-mail</label>
									<input type="email" class="form-control" placeholder="Masukan E-mail" name="email" onKeypress="return goodchars(event, '@012345689abcgefghijklmnopqrstuvwxyz_.', this)" maxlength="50" required>
								</div>

                                <div class="form-group">
									<label>Jenis Kelamin</label>
									<div class="radio">
										<br/><input type="radio" name="jekel" value="Laki-laki"> Laki-laki
                                        &nbsp;<input type="radio" name="jekel" value="Perempuan"> Perempuan
                                    </div>		
                                </div>

                                <div class="form-group">
									<label>Kode Cabang</label>
									<select class="form-control" name="kode_cabang" id="kode_cabang">
                                        <option value="01">01</option>
                                        <option value="02">02</option>
                                        <option value="03">03</option>
                                        <option value="04">04</option>
									</select>
								</div>
								
								<div class="form-group">
									<label>Kelas</label>
									<input type="text" class="form-control" placeholder="Masukan Kelas" name="kelas" onKeypress="return goodchars(event, '012345689ABCDEFGHIJKLMNOPQRSTU.', this)" maxlength="8" required>
								</div>

                                <div class="form-group">
                                    <label>Alamat</label>
                                    <textarea class="form-control" placeholder="Masukan Alamat"name="alamat" rows="5"></textarea>
                                </div>
								
								
								<button type="submit" class="btn btn-primary">Submit Button</button>
								<button type="reset" class="btn btn-default">Reset Button</button>
							</div>
						</form>
					</div>
				</div>
			</div><!-- /.col-->
		</div><!-- /.row -->
		
	</div><!--/.main-->

	
