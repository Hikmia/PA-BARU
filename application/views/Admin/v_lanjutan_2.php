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
			<div class="panel-heading">Data Keluarga Berencana
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
					  <th>Usia Kawin Suami</th>
                      <th>Usia Kawin Istri</th>
                      <th>Anak Pernah Dilahirkan Hidup Laki</th>
                      <th>Anak Pernah Dilahirkan Hidup Perempuan</th>
                      <th>Anak Masih Hidup laki</th>
                      <th>Anak Masih Hidup Perempuan</th>
					  <th>Kesertaan KB</th>
					  <th>Metode Kontrasepsi</th>
					  <th>Jangka Waktu</th>
                      <th>Alasan</th>
                      <th>Tempat Pelayanan</th>
                      <th>Rencana Punya Anak</th>
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
							<td><?php echo $key->u_kawinsuami; ?></td>
                            <td><?php echo $key->u_kawinistri; ?></td>
                            <td><?php echo $key->prnhDilahirkanLaki; ?></td>
                            <td><?php echo $key->prnhDilahirkanCewek; ?></td>
                            <td><?php echo $key->dilahirkanHidupLaki; ?></td>
                            <td><?php echo $key->dilahirkanHidupCewek; ?></td>
							<td><?php echo $key->kesertaanKB; ?></td>
							<td><?php echo $key->metodekon; ?></td>
							<td><?php echo $key->jangkawaktu; ?></td>
                            <td><?php echo $key->rencanaPnyAnak; ?></td>
                            <td><?php echo $key->tmptPel; ?></td>
                            <td><?php echo $key->alasan; ?></td>
							<td>
                            <a href="<?= site_url('admin/lanjutan3') ?>" class="btn btn-success btn-sm text-light">Selanjutnya</a>
                            <a href="<?= site_url('admin/lanjutan') ?>" class="btn btn-warning btn-sm text-light">Sebelumnya</a>
							<a title="Hapus" href="<?php echo site_url(); ?>/admin/delete_KB/<?php echo $key->kodeKB; ?>" onclick="return confirm('Are You Sure?');" class="btn btn-sm btn-danger">✕<i class="fa fa-trash"></i></a>
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
				<h3 class="modal-title">Update Data Keluarga Berencana</h3> <span>Id Anggota : <?php echo $key->kd_dataKeluarga ?></span>
			</div>
				<div class="modal-body">
					<form method="post" action="<?php echo site_url('admin/update_lanjutan2/'.$key->kodeKB) ?> ">
						<div class="row">
							<div class="col col-lg-12">
							<div class="form-group">
									<label>NIK </label>
									<input type="text" name="NIK" placeholder="NIK" required="" autofocus="" class="form-control" value="<?php echo $key->NIK ?>">
								</div>
								<div class="form-group">
									<label>Usia Kawin Suami</label>
									<input type="text" name="u_kawinsuami" placeholder="Usia Kawin Suami" required="" autofocus="" class="form-control" value="<?php echo $key->u_kawinsuami?>">
								</div>
								<div class="form-group">
									<label>Usia Kawin Istri</label>
									<input type="text" name="u_kawinistri" placeholder="Usia Kawin Istri" required="" autofocus="" class="form-control" value="<?php echo $key->u_kawinistri?>">
                                </div>
                                <div class="form-group">
									<label>Jumlah Anak Pernah Dilahirkan Hidup Laki-Laki</label>
									<input type="text" name="prnhDilahirkanLaki" placeholder="Laki-Laki" required="" autofocus="" class="form-control" value="<?php echo $key->prnhDilahirkanLaki?>">
                                </div>
                                <div class="form-group">
									<label>Jumlah Anak Pernah Dilahirkan Hidup Perempuan</label>
									<input type="text" name="prnhDilahirkanCewek" placeholder="Perempuan" required="" autofocus="" class="form-control" value="<?php echo $key->prnhDilahirkanCewek?>">
                                </div>
                                <div class="form-group">
									<label>Jumlah Anak Masih Hidup Laki-Laki</label>
									<input type="text" name="dilahirkanHidupLaki" placeholder="Laki-Laki" required="" autofocus="" class="form-control" value="<?php echo $key->dilahirkanHidupLaki?>">
                                </div>
                                <div class="form-group">
									<label>Jumlah Anak Masih Hidup Perempuan</label>
									<input type="text" name="dilahirkanHidupCewek" placeholder="Perempuan" required="" autofocus="" class="form-control" value="<?php echo $key->dilahirkanHidupCewek?>">
                                </div>
								<fieldset>
                                    <legend>Kesertaan KB</legend>
                                    <td><input type="radio" class="form-radio" name="kesertaanKB" value="Sedang" <?php if($key->kesertaanKB == 'Sedang'){echo 'checked';} ?>> Sedang</td>
                                    <br>
                                    <td><input type="radio" class="form-radio" name="kesertaanKB" value="Pernah"<?php if($key->kesertaanKB == 'Pernah'){echo 'checked';} ?>> Pernah</td>
                                    <br>
                                    <td><input type="radio" class="form-radio" name="kesertaanKB" value="Tidak Pernah" <?php if($key->kesertaanKB == 'Tidak Pernah'){echo 'checked';} ?>> Tidak Pernah</td>
								</fieldset>
								<br>
								<fieldset>
                                    <legend>Metode Kontrasepsi Yang Sedang/Pernah Digunakan</legend>
                                    <td><input type="radio" class="form-radio" name="metodekon" value="IUD"<?php if($key->metodekon == 'IUD'){echo 'checked';} ?>> IUD</td>
                                    <br>
                                    <td><input type="radio" class="form-radio" name="metodekon" value="MOW"<?php if($key->metodekon == 'MOW'){echo 'checked';} ?>> MOW</td>
                                    <br>
                                    <td><input type="radio" class="form-radio" name="metodekon" value="<MOP"<?php if($key->metodekon == 'MOP'){echo 'checked';} ?>> MOP</td>
                                    <br>
                                    <td><input type="radio" class="form-radio" name="metodekon" value="Implan"<?php if($key->metodekon == 'Implan'){echo 'checked';} ?>> Implan</td>
                                    <br>
                                    <td><input type="radio" class="form-radio" name="metodekon" value="Suntik"<?php if($key->metodekon == 'Suntik'){echo 'checked';} ?>> Suntik</td>
                                    <br>
                                    <td><input type="radio" class="form-radio" name="metodekon" value="Pil" <?php if($key->metodekon == 'Pil'){echo 'checked';} ?>> Pil</td>
                                    <br>
                                    <td><input type="radio" class="form-radio" name="metodekon" value="Tradisional" <?php if($key->metodekon == 'Tradisional'){echo 'checked';} ?>> Tradisional</td>
                                    <br>
                                    <td><input type="radio" class="form-radio" name="metodekon" value="Kondom" <?php if($key->metodekon == 'Kondom'){echo 'checked';} ?>> Kondom</td>
								</fieldset>
								<br>
								<div class="form-group">
									<label>Jangka Waktu</label>
									<input type="text" name="jangkawaktu" placeholder="Jangka Waktu" required="" autofocus="" class="form-control" value="<?php echo $key->jangkawaktu ?>">
								</div>
								<br>
                                <fieldset>
                                    <legend>Apakah Ingin Punya Anak Lagi</legend>
                                    <td><input type="radio" class="form-radio" name="rencanaPnyAnak" value="Ya, Segera (kurang dari 2 tahun)" <?php if($key->rencanaPnyAnak == 'Ya, Segera (kurang dari 2 tahun)'){echo 'checked';} ?>> Ya, Segera (kurang dari 2 tahun)</td>
                                    <br>
                                    <td><input type="radio" class="form-radio" name="rencanaPnyAnak" value="Ya, Kemudian (lebih dari 2 tahun)" <?php if($key->rencanaPnyAnak == 'Ya, Kemudian (kurang dari 2 tahun)'){echo 'checked';} ?>> Ya, Kemudian (lebih dari 2 tahun)</td>
                                    <br>
                                    <td><input type="radio" class="form-radio" name="rencanaPnyAnak" value="Tidak ingin punya anak lagi" <?php if($key->rencanaPnyAnak == 'Tidak ingin punya anak lagi'){echo 'checked';} ?>> Tidak ingin punya anak lagi</td>
								</fieldset>
								<br>
                                <fieldset>
                                    <legend>Tempat Pelayanan KB</legend>
                                    <td><input type="radio" class="form-radio" name="tmptPel" value="RSUP/RSUD" <?php if($key->tmptPel == 'RSUP/RSUD'){echo 'checked';} ?>> RSUP/RSUD</td>
                                    <br>
                                    <td><input type="radio" class="form-radio" name="tmptPel" value="RS TNI" <?php if($key->tmptPel == 'RS TNI'){echo 'checked';} ?>> RS TNI</td>
                                    <br>
                                    <td><input type="radio" class="form-radio" name="tmptPel" value="RS POLRI" <?php if($key->tmptPel == 'RS POLRI'){echo 'checked';} ?>> RS POLRI</td>
                                    <br>
                                    <td><input type="radio" class="form-radio" name="tmptPel" value="RS SWASTA" <?php if($key->tmptPel == 'RS SWASTA'){echo 'checked';} ?>> RS SWASTA</td>
                                    <br>
                                    <td><input type="radio" class="form-radio" name="tmptPel" value="Klinik Utama" <?php if($key->tmptPel == 'Klinik Utama'){echo 'checked';} ?>> Klinik Utama</td>
                                    <br>
                                    <td><input type="radio" class="form-radio" name="tmptPel" value="Puskesmas" <?php if($key->tmptPel == 'Puskesmas'){echo 'checked';} ?>> Puskesmas</td>
                                    <br>
                                    <td><input type="radio" class="form-radio" name="tmptPel" value="Klinik Pratama" <?php if($key->tmptPel == 'Klinik Pratama'){echo 'checked';} ?>> Klinik Pratama</td>
                                    <br>
                                    <td><input type="radio" class="form-radio" name="tmptPel" value="Praktek Dokter" <?php if($key->tmptPel == 'Praktek Dokter'){echo 'checked';} ?>> Praktek Dokter</td>
                                    <br>
                                    <td><input type="radio" class="form-radio" name="tmptPel" value="RS Pratama" <?php if($key->tmptPel == 'RS Pratama'){echo 'checked';} ?>> RS Pratama</td>
                                    <br>
                                    <td><input type="radio" class="form-radio" name="tmptPel" value="Bidan Desa" <?php if($key->tmptPel == 'Bidan Desa'){echo 'checked';} ?>> Bidan Desa</td>
                                    <br>
                                    <td><input type="radio" class="form-radio" name="tmptPel" value="Poskesdes" <?php if($key->tmptPel == 'Poskesdes'){echo 'checked';} ?>> Poskesdes</td>
                                    <br>
                                    <td><input type="radio" class="form-radio" name="tmptPel" value="Praktek Bidan" <?php if($key->tmptPel == 'Praktek Bidan'){echo 'checked';} ?>> Praktek Bidan</td>
                                    <br>
                                    <td><input type="radio" class="form-radio" name="tmptPel" value="Pelayanan Bergerak" <?php if($key->tmptPel == 'Pelayanan Bergerak'){echo 'checked';} ?>> Pelayanan Bergerak</td>
                                    <br>
								</fieldset>
								<br>
								<fieldset>
                                    <legend>Alasan Tidak Ber-KB</legend>
                                    <td><input type="radio" class="form-radio" name="alasan" value="Sedang Hamil" <?php if($key->alasan == 'Sedang Hamil'){echo 'checked';} ?>> Sedang Hamil</td>
                                    <br>
                                    <td><input type="radio" class="form-radio" name="alasan" value="Alasan Fertilitas" <?php if($key->alasan == 'Alasan Fertilitas'){echo 'checked';} ?>> Alasan Fertilitas</td>
                                    <br>
                                    <td><input type="radio" class="form-radio" name="alasan" value="Tidak Menyetujui KB" <?php if($key->alasan == 'Tidak Menyetujui KB'){echo 'checked';} ?>> Tidak menyetujui KB</td>
                                    <br>
                                    <td><input type="radio" class="form-radio" name="alasan" value="Tidak Tahu Tentang KB" <?php if($key->alasan == 'Tidak Tahu Tentang KB'){echo 'checked';} ?>> Tidak tahu Tentang KB</td>
                                    <br>
                                    <td><input type="radio" class="form-radio" name="alasan" value="Takut Efek Samping" <?php if($key->alasan == 'Takut Efek Samping'){echo 'checked';} ?>> Takut Efek Samping</td>
                                    <br>
                                    <td><input type="radio" class="form-radio" name="alasan" value="Pelayanan KB Jauh" <?php if($key->alasan == 'Pelayanan KB Jauh'){echo 'checked';} ?>> Pelayanan KB Jauh</td>
                                    <br>
                                    <td><input type="radio" class="form-radio" name="alasan" value="Tidak mampu/mahal" <?php if($key->alasan == 'Tidak mampu/mahal'){echo 'checked';} ?>> Tidak mampu/mahal</td>
                                    <br>
								</fieldset>
								<button type="submit" class="btn btn-primary pull-right">Update Layanan</button>
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
		