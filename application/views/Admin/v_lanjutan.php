<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
	<div class="row">
		<ol class="breadcrumb">
			<li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
			<li class="active"><?php echo $title ?></li>
		</ol>
	</div><!--/.row-->
	
	<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header"><?php echo $title ?></h1>
		</div>
	</div><!--/.row batas untuk pencarian anggota-->
<div class="row">
	<div class="col-lg-12">
		<div class="panel panel-default">
			<div class="panel-heading">Data Keluarga
		</div>
				<?php if($this->session->userdata('jabatan')=="kaderPPKBD"){?>
				<?php } ?>
			<div class="panel-body">
				<?php 
				if ($this->session->flashdata('error')!==null) {
					?>
					<div class="alert alert-danger">
						<?php echo $this->session->flashdata('error') ?>
					</div>
					<?php
				}

				if ($this->session->flashdata('success')!==null) {
					?>
					<div class="alert alert-success">
						<?php echo $this->session->flashdata('success') ?>
					</div>
					<?php
				}
				 ?>
				 <?php if (validation_errors()) : ?>
				      <div class="alert alert-danger">
				        Username telah digunakan
				      </div>
				  <?php endif; ?>
				  <table class="table table-hover table-bordered">
                    <tr>
					 <th>No</th>
                      <th>NIK</th>
                      <th>RT</th>
					  <th>RW</th>
					  <th>Kecamatan</th>
					  <th>Provinsi</th>
					  <th>Jaminan Kesehatan Nasional</th>
					  <th>Jumlah Jiwa</th>
					  <th>Jumlah PUS</th>
					  <th>Nomor Rumah</th>
					  <th>Desa</th>
					  <th>Dusun</th>
					  <th>Aksi</th>
                    </tr>
                    <?php
    					if ($offset == "") { $id = 0; } else { $id = $offset; }
    					foreach ($query as $key) {
						$id++;
						?>
                          <tr>
							<td><?php echo $id; ?></td>
                            <td><?php echo $key->NIK; ?></td>
							<td><?php echo $key->RT; ?></td>
							<td><?php echo $key->RW; ?></td>
							<td><?php echo $key->kecamatan; ?></td>
							<td><?php echo $key->provinsi; ?></td>
                            <td><?php echo $key->jkn; ?></td>
							<td><?php echo $key->JmlJiwa; ?></td>
                            <td><?php echo $key->JmlPUS; ?></td>
							<td><?php echo $key->NoRumah;?></td>
							<td><?php echo $key->desa; ?></td>
							<td><?php echo $key->dusun; ?></td>
							<td>
                            <a href="<?= site_url('admin/lanjutan2') ?>" class="btn btn-success btn-sm text-light">Selanjutnya</a>
                            <a href="<?= site_url('admin/cek_DataKeluarga') ?>" class="btn btn-warning btn-sm text-light">Sebelumnya</a>
							<a title="Hapus" href="<?php echo site_url(); ?>/admin/delete_lanjutan/<?php echo $key->kd_dataKeluarga; ?>" onclick="return confirm('Are You Sure?');" class="btn btn-sm btn-danger">✕<i class="fa fa-trash"></i></a>
                              <button class="btn btn-primary" title="update" data-toggle="modal" data-target="#edit<?php echo $id ?>">✎</button>
						</td>
                          </tr>
                      <?php
                      }
                      if($query==NULL){
                      ?>
                      <tr>
                        <td colspan="8"> <center>Tidak Ada Data</center> </td>
						<td><?php echo $id; ?></td>
                            <td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<!-- <td></td> -->
                            <!-- <td></td> -->
                            <!-- <td></td> -->
							<!-- <td></td> -->
                            <!-- <td></td> -->
							<!-- <td></td> -->
							<!-- <td></td> -->
					</tr>
                      <?php
                      }
					  ?>
					  <?php echo $this->pagination->create_links(); ?>
                   </table>
			</div>
		</div>
	</div>
</div><!--/.row-->
</div>

<?php 
    if ($offset == "") { $id = 0; } else { $id = $offset; }
    foreach ($query as $key) {
    	$id++;
    	?>
		<div id="edit<?php echo $id ?>" class="modal fade" role="dialog">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
				<h3 class="modal-title">Update </h3> <span>Id Anggota : <?php echo $key->kd_dataKeluarga ?></span>
			</div>
				<div class="modal-body">
					<form method="post" action="<?php echo site_url('admin/update_lanjutan/'.$key->kd_dataKeluarga) ?>">
						<div class="row">
							<div class="col col-lg-12">
							<div class="form-group">
									<label>NIK </label>
									<input type="text" name="NIK" placeholder="NIK" required="" autofocus="" class="form-control" value="<?php echo $key->NIK ?>">
								</div>
								<div class="form-group">
									<label>Nama Lengkap</label>
									<input type="text" name="nama" placeholder="nama" required="" autofocus="" class="form-control" value="<?php echo $key->nama ?>">
								</div>
								<div class="form-group">
									<label>Umur</label>
									<textarea placeholder="umur" name="umur" required="" class="form-control"><?php echo $key->umur ?></textarea>
								</div>
								<div class="form-group">
									<label>Tanggal Lahir</label>
									<input type="date" name="TglLahir" placeholder="Tanggal Lahir" required="" autofocus="" value="<?php echo $key->TglLahir ?>" class="form-control">
								</div>
								<div class="form-group row">
								<div class="col-md-12">
									<select class="custom-select form-control" name="hubungan" required="">
										<option disabled selected value>Hubungan</option>
										<option value="<?php echo $key->hubungan?>">Anak</option>
										<option value="<?php echo $key->hubungan?>">Suami</option>
										<option value="<?php echo $key->hubungan?>">Istri</option>
									</select>
									</div>
								</div>
								<div class="form-group row">
								<div class="col-md-12">
									<select class="custom-select form-control" name="jeniskelamin" required="">
										<option disabled selected value>Jenis Kelamin</option>
										<option value="<?php echo $key->jeniskelamin?>">Laki-Laki</option>
										<option value="<?php echo $key->jeniskelamin?>">Perempuan</option>
									</select>
								</div>
								</div>
								<div class="form-group">
								<label>Desa</label>
									<input type="text" name="desa" placeholder="desa" required="" autofocus="" class="form-control" value="<?php echo $key->desa ?>">
								</div>
								<div class="form-group">
									<label>Dusun</label>
									<textarea placeholder="dusun" name="dusun" required="" class="form-control"><?php echo $key->dusun ?></textarea>
								</div>
								<div class="form-group">
									<label>Pendidikan</label>
									<textarea placeholder="pendidikan" name="pendidikan" required="" class="form-control"><?php echo $key->pendidikan ?></textarea>
								</div>
								<div class="form-group">
									<label>Pekerjaan</label>
									<input type="text" name="pekerjaan" placeholder="pekerjaan" required="" autofocus="" value="<?php echo $key->pekerjaan ?>" class="form-control">
								</div>
								<div class="form-group">
								<label>RT</label>
									<input type="text" name="RT" placeholder="RT" required="" autofocus="" class="form-control" value="<?php echo $key->RT ?>">
								</div>
								<div class="form-group">
									<label>RW</label>
									<textarea placeholder="RW" name="RW" required="" class="form-control"><?php echo $key->RW ?></textarea>
								</div>
								<div class="form-group">
								<label>JKN</label>
									<input type="text" name="jkn" placeholder="jkn" required="" autofocus="" class="form-control" value="<?php echo $key->jkn ?>">
								</div>
								<div class="form-group">
									<label>Jumlah Jiwa</label>
									<input type="text" name="JmlJiwa" placeholder="JmlJiwa" required="" autofocus="" value="<?php echo $key->JmlJiwa ?>" class="form-control">
								</div>
								<div class="form-group">
								<label>Jumlah PUS</label>
									<input type="text" name="JmlPUS" placeholder="JmlPUS" required="" autofocus="" class="form-control" value="<?php echo $key->JmlPUS ?>">
								</div>
								<div class="form-group">
									<label>No Rumah</label>
									<textarea placeholder="NoRumah" name="NoRumah" required="" class="form-control"><?php echo $key->NoRumah ?></textarea>
								</div>
								<div class="form-group">
									<label>Provinsi</label>
									<input type="text" name="provinsi" placeholder="provinsi" required="" autofocus="" value="<?php echo $key->provinsi ?>" class="form-control">
								</div>
								<button type="submit" class="btn btn-primary pull-right">Update Data</button>
							</div>
						</div>
					</form>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				</div>
				</div>
			</div>
		</div>    	
    	<?php
    }
 ?>