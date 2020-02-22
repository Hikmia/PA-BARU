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
			<div class="panel-heading">Data Pembangunan Keluarga
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
					  <th>Jawaban</th>
					  <th>Jumlah Makan Dalam Sehari</th>
                      <th>Fasilitas Kesehatan</th>
                      <th>Jenis Pakaian</th>
					  <th>Jenis Makanan</th>
					  <th>Kesesuaian Ibadah</th>
					  <th>Pasangan Usia Subur</th>
					  <th>Kepemilikan Tabungan</th>
					  <th>Komunikasi</th>
                      <th>Kegiatan Sosial</th>
                      <th>Akses Informasi</th>
					  <th>Pengurus Kegiatan Sosial</th>
					  <th>Kegiatan Posyandu</th>
					  <th>Kegiatan BKB</th>
					  <th>Kegiatan BKR</th>
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
							<td><?php echo $key->jawaban; ?></td>
							<td><?php echo $key->makan; ?></td>
                            <td><?php echo $key->berobat; ?></td>
                            <td><?php echo $key->pakaian; ?></td>
                            <td><?php echo $key->jenismakanan; ?></td>
							<td><?php echo $key->ibadah; ?></td>
							<td><?php echo $key->usiasubur; ?></td>
							<td><?php echo $key->tabungan; ?></td>
                            <td><?php echo $key->komunikasi; ?></td>
                            <td><?php echo $key->kegiatansosial; ?></td>
							<td><?php echo $key->aksesinformasi; ?></td>
							<td><?php echo $key->anggotapengurus; ?></td>
							<td><?php echo $key->kegPosyandu; ?></td>
							<td><?php echo $key->kegBKR; ?></td>
							<td><?php echo $key->kegPIKR; ?></td>
							<td>
                            <a href="<?= site_url('admin/lanjutan4') ?>" class="btn btn-success btn-sm text-light">Selanjutnya</a>
							<a href="<?= site_url('admin/lanjutan2') ?>" class="btn btn-warning btn-sm text-light">Sebelumnya</a>
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
				<h3 class="modal-title">Update Data Pembangunan Keluarga</h3> <span>Id Anggota : <?php echo $key->kd_dataKeluarga ?></span>
			</div>
				<div class="modal-body">
					<form method="post" action="<?php echo site_url('admin/update_PK/'.$key->kodePK) ?> ">
						<div class="row">
						<div class="form-group">
									<label>NIK </label>
									<input type="text" name="NIK" placeholder="NIK" required="" autofocus="" class="form-control" value="<?php echo $key->NIK ?>">
								</div>
							<div class="col col-lg-12">
							<fieldset>
								<legend>Keluarga membeli satu stel pakaian baru untuk seluruh anggota keluarga minimal setahun sekali</legend>
                                    <td><input type="radio" class="form-radio" name="jawaban" value="Ya" <?php if($key->jawaban == 'Ya'){echo 'checked';} ?>> Ya</td>
									<br>
									<td><input type="radio" class="form-radio" name="jawaban" value="Tidak" <?php if($key->jawaban == 'Tidak'){echo 'checked';} ?>> Tidak</td>
									<br>
								</fieldset>
								<fieldset>
								<legend>Seluruh anggota keluarga makan minimal 2 kali sehari</legend>
                                    <td><input type="radio" class="form-radio" name="makan" value="Ya" <?php if($key->makan == 'Ya'){echo 'checked';} ?>> Ya</td>
									<br>
									<td><input type="radio" class="form-radio" name="makan" value="Tidak" <?php if($key->makan == 'Tidak'){echo 'checked';} ?>> Tidak</td>
									<br>
									<td><input type="radio" class="form-radio" name="makan" value="Tidak Berlaku" <?php if($key->makan == 'Tidak Berlaku'){echo 'checked';} ?>> Tidak Berlaku</td>
									<br>
								</fieldset>
								<fieldset>
								<legend>Seluruh anggota keluarga bila sakit berobat ke fasilitas kesehatan</legend>
                                    <td><input type="radio" class="form-radio" name="berobat" value="Ya" <?php if($key->berobat== 'Ya'){echo 'checked';} ?>> Ya</td>
									<br>
									<td><input type="radio" class="form-radio" name="berobat" value="Tidak" <?php if($key->berobat == 'Tidak'){echo 'checked';} ?>> Tidak</td>
									<br>
								</fieldset>
								<fieldset>
								<legend>Seluruh anggota keluarga memiliki pakaian yang berbeda untuk di rumah, bekerja/sekolah dan bepergian</legend>
                                    <td><input type="radio" class="form-radio" name="pakaian" value="Ya" <?php if($key->pakaian == 'Ya'){echo 'checked';} ?>> Ya</td>
									<br>
									<td><input type="radio" class="form-radio" name="pakaian" value="Tidak" <?php if($key->pakaian == 'Tidak'){echo 'checked';} ?>> Tidak</td>
									<br>
								</fieldset>
								<fieldset>
								<legend>Seluruh anggota keluarga makan daging/ikan/telur minimal seminggu sekali</legend>
                                    <td><input type="radio" class="form-radio" name="jenismakanan" value="Ya" <?php if($key->jenismakanan == 'Ya'){echo 'checked';} ?>> Ya</td>
									<br>
									<td><input type="radio" class="form-radio" name="jenismakanan" value="Tidak" <?php if($key->jenismakanan == 'Tidak'){echo 'checked';} ?>> Tidak</td>
									<br>
								</fieldset>
								<fieldset>
								<legend>Seluruh anggota keluarga menjalankan ibadah agama sesuai ketentuan agama yang dianut</legend>
                                    <td><input type="radio" class="form-radio" name="ibadah" value="Ya" <?php if($key->ibadah == 'Ya'){echo 'checked';} ?>> Ya</td>
									<br>
									<td><input type="radio" class="form-radio" name="ibadah" value="Tidak" <?php if($key->ibadah == 'Tidak'){echo 'checked';} ?>> Tidak</td>
									<br>
								</fieldset>
								<fieldset>
								<legend>Pasangan usia subur dengan dua anak atau lebih menjadi peserta KB</legend>
                                    <td><input type="radio" class="form-radio" name="usiasubur" value="Ya" <?php if($key->usiasubur == 'Ya'){echo 'checked';} ?>> Ya</td>
									<br>
									<td><input type="radio" class="form-radio" name="usiasubur" value="Tidak" <?php if($key->usiasubur == 'Tidak'){echo 'checked';} ?>> Tidak</td>
									<br>
									<td><input type="radio" class="form-radio" name="usiasubur" value="Tidak Berlaku" <?php if($key->usiasubur == 'Tidak Berlaku'){echo 'checked';} ?>> Tidak Berlaku</td>
									<br>
								</fieldset>
								<fieldset>
								<legend>Keluarga memiliki tabungan dalam bentuk uang/emas/tanah/hewan minimal senilai Rp 1.000.000,-</legend>
                                    <td><input type="radio" class="form-radio" name="tabungan" value="Ya" <?php if($key->tabungan == 'Ya'){echo 'checked';} ?>> Ya</td>
									<br>
									<td><input type="radio" class="form-radio" name="tabungan" value="Tidak" <?php if($key->tabungan == 'Tidak'){echo 'checked';} ?>> Tidak</td>
									<br>
								</fieldset>
								<fieldset>
								<legend>Keluarga memiliki kebiasaan berkomunikasi dengan seluruh anggota keluarga</legend>
                                    <td><input type="radio" class="form-radio" name="komunikasi" value="Ya" <?php if($key->komunikasi == 'Ya'){echo 'checked';} ?>> Ya</td>
									<br>
									<td><input type="radio" class="form-radio" name="komunikasi" value="Tidak" <?php if($key->komunikasi == 'Tidak'){echo 'checked';} ?>> Tidak</td>
									<br>
								</fieldset>
								<fieldset>
								<legend>Keluarga ikut dalam kegiatan sosial di lingkungan RT</legend>
                                    <td><input type="radio" class="form-radio" name="kegiatansosial" value="Ya" <?php if($key->kegiatansosial == 'Ya'){echo 'checked';} ?>> Ya</td>
									<br>
									<td><input type="radio" class="form-radio" name="kegiatansosial" value="Tidak" <?php if($key->kegiatansosial == 'Tidak'){echo 'checked';} ?>> Tidak</td>
									<br>
								</fieldset>
								<fieldset>
								<legend>Keluarga memiliki akses informasi dari surat kabar/majalah/radio/tv/lainnya</legend>
                                    <td><input type="radio" class="form-radio" name="aksesinformasi" value="Ya" <?php if($key->aksesinformasi == 'Ya'){echo 'checked';} ?>> Ya</td>
									<br>
									<td><input type="radio" class="form-radio" name="aksesinformasi" value="Tidak" <?php if($key->aksesinformasi == 'Tidak'){echo 'checked';} ?>> Tidak</td>
									<br>
								</fieldset>
								<fieldset>
								<legend>Keluarga memiliki anggota yang menjadi pengurus kegiatan sosial</legend>
                                    <td><input type="radio" class="form-radio" name="anggotapengurus" value="Ya" <?php if($key->anggotapengurus == 'Ya'){echo 'checked';} ?>> Ya</td>
									<br>
									<td><input type="radio" class="form-radio" name="anggotapengurus" value="Tidak" <?php if($key->anggotapengurus == 'Tidak'){echo 'checked';} ?>> Tidak</td>
									<br>
								</fieldset>
								<fieldset>
								<legend>Keluarga mempunyai balita ikut kegiatan Posyandu</legend>
                                    <td><input type="radio" class="form-radio" name="kegPosyandu" value="Ya" <?php if($key->kegPosyandu == 'Ya'){echo 'checked';} ?>> Ya</td>
									<br>
									<td><input type="radio" class="form-radio" name="kegPosyandu" value="Tidak" <?php if($key->kegPosyandu == 'Tidak'){echo 'checked';} ?>> Tidak</td>
									<br>
									<td><input type="radio" class="form-radio" name="kegPosyandu" value="Tidak Berlaku" <?php if($key->kegPosyandu == 'Tidak Berlaku'){echo 'checked';} ?>> Tidak Berlaku</td>
									<br>
								</fieldset>
								<fieldset>
								<legend>Keluarga mempunyai balita ikut kegiatan BKB</legend>
                                    <td><input type="radio" class="form-radio" name="kegBKB" value="Ya" <?php if($key->kegBKB == 'Ya'){echo 'checked';} ?>> Ya</td>
									<br>
									<td><input type="radio" class="form-radio" name="kegBKB" value="Tidak" <?php if($key->kegBKB == 'Tidak'){echo 'checked';} ?>> Tidak</td>
									<br>
									<td><input type="radio" class="form-radio" name="kegBKB" value="Tidak Berlaku" <?php if($key->kegBKB == 'Tidak Berlaku'){echo 'checked';} ?>> Tidak Berlaku</td>
									<br>
								</fieldset>
								<fieldset>
								<legend>Keluarga mempunyai remaja ikut kegiatan BKR</legend>
                                    <td><input type="radio" class="form-radio" name="kegBKR" value="Ya" <?php if($key->kegBKR == 'Ya'){echo 'checked';} ?>> Ya</td>
									<br>
									<td><input type="radio" class="form-radio" name="kegBKR" value="Tidak" <?php if($key->kegBKR == 'Tidak'){echo 'checked';} ?>> Tidak</td>
									<br>
									<td><input type="radio" class="form-radio" name="kegBKR" value="Tidak Berlaku" <?php if($key->kegBKR == 'Tidak Berlaku'){echo 'checked';} ?>> Tidak Berlaku</td>
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
					