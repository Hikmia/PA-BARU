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
					  <th>Kegiatan PIKR</th>
					  <th>Kegiatan BKL</th>
					  <th>Kegiatan UPPKS</th>
                      <th>Jenis Atap</th>
                      <th>Jenis Dinding</th>
                      <th>Jenis Lantai</th>
					  <th>Sumber Penerangan</th>
					  <th>Sumber Air</th>
					  <th>Sumber Bahan Bakar</th>
					  <th>MCK</th>
					  <th>Tempat Tinggal</th>
                      <th>Luas Rumah</th>
                      <th>Jumlah Orang Yang Tinggal</th>
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
                            <td><?php echo $key->kegPIKR; ?></td>
							<td><?php echo $key->kegBKL; ?></td>
							<td><?php echo $key->kegUPPKS; ?></td>
                            <td><?php echo $key->jenisatap; ?></td>
                            <td><?php echo $key->jenisdinding; ?></td>
                            <td><?php echo $key->jenislantai; ?></td>
                            <td><?php echo $key->smbrpenerangan; ?></td>
							<td><?php echo $key->sumberair; ?></td>
							<td><?php echo $key->smbrbhnbakar; ?></td>
							<td><?php echo $key->mck; ?></td>
                            <td><?php echo $key->tmptTinggal; ?></td>
                            <td><?php echo $key->luasrumah; ?></td>
							<td><?php echo $key->jmlOrgTinggal; ?></td>
							<td>
                            <a href="<?= site_url('admin/lanjutan3') ?>" class="btn btn-warning btn-sm text-light">Sebelumnya</a>
							<a title="Hapus" href="<?php echo site_url(); ?>/admin/delete_lanjutan4/<?php echo $key->kodePK; ?>" onclick="return confirm('Are You Sure?');" class="btn btn-sm btn-danger">✕<i class="fa fa-trash"></i></a>
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
				<h3 class="modal-title">Update Data Pembangunan Keluarga</h3> <span>Id Anggota : <?php echo $key->kd_dataKeluarga ?></span>
			</div>
				<div class="modal-body">
					<form method="post" action="<?php echo site_url('admin/update_lanjutan4/'.$key->kodePK) ?> ">
						<div class="row">
						<div class="form-group">
									<label>NIK </label>
									<input type="text" name="NIK" placeholder="NIK" required="" autofocus="" class="form-control" value="<?php echo $key->NIK ?>">
								</div>
							<div class="col col-lg-12">
								<fieldset>
								<legend>Keluarga mempunyai remaja ikut kegiatan PIKR/M</legend>
                                    <td><input type="radio" class="form-radio" name="kegPIKR" value="Ya" <?php if($key->kegPIKR== 'Ya'){echo 'checked';} ?>> Ya</td>
									<br>
									<td><input type="radio" class="form-radio" name="kegPIKR" value="Tidak" <?php if($key->kegPIKR == 'Tidak'){echo 'checked';} ?>> Tidak</td>
									<br>
									<td><input type="radio" class="form-radio" name="kegPIKR" value="Tidak Berlaku" <?php if($key->kegPIKR == 'Tidak Berlaku'){echo 'checked';} ?>> Tidak Berlaku</td>
									<br>
								</fieldset>
								<fieldset>
								<legend>Keluarga mempunyai lansia ikut kegiatan BKL</legend>
                                    <td><input type="radio" class="form-radio" name="kegBKL" value="Ya" <?php if($key->kegBKL == 'Ya'){echo 'checked';} ?>> Ya</td>
									<br>
									<td><input type="radio" class="form-radio" name="kegBKL" value="Tidak" <?php if($key->kegBKL == 'Tidak'){echo 'checked';} ?>> Tidak</td>
									<br>
									<td><input type="radio" class="form-radio" name="kegBKL" value="Tidak Berlaku" <?php if($key->kegBKL == 'Tidak Berlaku'){echo 'checked';} ?>> Tidak Berlaku</td>
									<br>
								</fieldset>
								<fieldset>
								<legend>Keluarga mengikuti kegiatan UPPKS</legend>
                                    <td><input type="radio" class="form-radio" name="kegUPPKS" value="Ya" <?php if($key->kegUPPKS == 'Ya'){echo 'checked';} ?>> Ya</td>
									<br>
									<td><input type="radio" class="form-radio" name="kegUPPKS" value="Tidak" <?php if($key->kegUPPKS == 'Tidak'){echo 'checked';} ?>> Tidak</td>
									<br>
								</fieldset>
								<br>

								<fieldset>
                                    <legend>Apakah jenis atap rumah terluas?</legend>
                                    <td><input type="radio" class="form-radio" name="jenisatap" value="Daun Rumbia" <?php if($key->jenisatap == 'Daun Rumbia'){echo 'checked';} ?>> Daun/Rumbia</td>
                                    <br>
                                    <td><input type="radio" class="form-radio" name="jenisatap" value="Seng/Asbes" <?php if($key->jenisatap == 'Seng/Asbes'){echo 'checked';} ?>> Seng/Asbes</td>
                                    <br>
                                    <td><input type="radio" class="form-radio" name="jenisatap" value="Genteng/Sirap" <?php if($key->jenisatap == 'Genteng/Sirap'){echo 'checked';} ?>> Genteng/Sirap</td>
                                    <br>
                                    <td><input type="radio" class="form-radio" name="jenisatap" value="Lainnya" <?php if($key->jenisatap == 'Lainnya'){echo 'checked';} ?>> Lainnya</td>
								</fieldset>
								<br>
								<fieldset>
                                    <legend>Apakah jenis dinding rumah terluas?</legend>
                                    <td><input type="radio" class="form-radio" name="jenisdinding" value="Tembok" <?php if($key->jenisdinding == 'Tembok'){echo 'checked';} ?>> Tembok</td>
                                    <br>
                                    <td><input type="radio" class="form-radio" name="jenisdinding" value="Kayu/Seng" <?php if($key->jenisdinding == 'Kayu/Seng'){echo 'checked';} ?>> Kayu/Seng</td>
                                    <br>
                                    <td><input type="radio" class="form-radio" name="jenisdinding" value="Bambu" <?php if($key->jenisdinding == 'Bambu'){echo 'checked';} ?>> Bambu</td>
                                    <br>
                                    <td><input type="radio" class="form-radio" name="jenisdinding" value="Lainnya" <?php if($key->jenisdinding == 'Lainnya'){echo 'checked';} ?>> Lainnya</td>
								</fieldset>
								<br>
                                <fieldset>
                                    <legend>Apakah jenis lantai rumah terluas?</legend>
                                    <td><input type="radio" class="form-radio" name="jenislantai" value="Ubin/Keramik/Mamer" <?php if($key->jenislantai == 'Ubin/Keramik/Marmer'){echo 'checked';} ?>> Ubin/Keramik/Marmer</td>
                                    <br>
                                    <td><input type="radio" class="form-radio" name="jenislantai" value="Semen/Papan" <?php if($key->jenislantai == 'Semen/Papan'){echo 'checked';} ?>> Semen/Papan</td>
                                    <br>
                                    <td><input type="radio" class="form-radio" name="jenislantai" value="Tanah" <?php if($key->jenislantai == 'Tanah'){echo 'checked';} ?>> Tanah</td>
                                    <br>
                                    <td><input type="radio" class="form-radio" name="jenislantai" value="Lainnya" <?php if($key->jenislantai == 'Lainnya'){echo 'checked';} ?>> Lainnya</td>
                                    <br>
                                </fieldset>
								<br>
								<fieldset>
                                    <legend>Apakah sumber penerangan utama ?</legend>
                                    <td><input type="radio" class="form-radio" name="smbrpenerangan" value="Listrik" <?php if($key->smbrpenerangan == 'Listrik'){echo 'checked';} ?>> Listrik</td>
                                    <br>
                                    <td><input type="radio" class="form-radio" name="smbrpenerangan" value="Genset/Diesel" <?php if($key->smbrpenerangan == 'Genset/Diesel'){echo 'checked';} ?>> Genset/Diesel</td>
                                    <br>
                                    <td><input type="radio" class="form-radio" name="smbrpenerangan" value="Lampu Minyak" <?php if($key->smbrpenerangan == 'Lampu Minyak'){echo 'checked';} ?>> Lampu Minyak</td>
                                    <br>
                                    <td><input type="radio" class="form-radio" name="smbrpenerangan" value="Lainnya" <?php if($key->smbrpenerangan == 'Lainnya'){echo 'checked';} ?>> Lainnya</td>
                                    <br>
								</fieldset>
								<br>
                                <fieldset>
                                    <legend>Apakah sumber air minum ?</legend>
                                    <td><input type="radio" class="form-radio" name="sumberair" value="Ledeng/Kemasan" <?php if($key->sumberair == 'Ledeng/Kemasan'){echo 'checked';} ?>> Ledeng/Kemasan</td>
                                    <br>
                                    <td><input type="radio" class="form-radio" name="sumberair" value="Sumur Terlindung/Pompa" <?php if($key->sumberair == 'Sumur Terlindung/Pompa'){echo 'checked';} ?>> Sumur Terlindung/Pompa</td>
                                    <br>
                                    <td><input type="radio" class="form-radio" name="sumberair" value="Air Hujan/Air Sungai" <?php if($key->sumberair == 'Air Hujan/Air Sungai'){echo 'checked';} ?>> Air Hujan/Air Sungai</td>
                                    <br>
                                    <td><input type="radio" class="form-radio" name="sumberair" value="Lainnya" <?php if($key->sumberair == 'Lainnya'){echo 'checked';} ?>> Lainnya</td>
                                    <br>
								</fieldset>
								<br>
								<fieldset>
                                    <legend>Apakah bahan bakar utama untuk memasak ?</legend>
                                    <td><input type="radio" class="form-radio" name="smbrbhnbakar" value="Listrik/Gas" <?php if($key->smbrbhnbakar == 'Listrik/Gas'){echo 'checked';} ?>> Listrik/Gas</td>
                                    <br>
                                    <td><input type="radio" class="form-radio" name="smbrbhnbakar" value="Minyak tanah" <?php if($key->smbrbhnbakar == 'Minyak Tanah'){echo 'checked';} ?>> Minyak Tanah</td>
                                    <br>
                                    <td><input type="radio" class="form-radio" name="smbrbhnbakar" value="Arang/Kayu" <?php if($key->smbrbhnbakar == 'Arang/Kayu'){echo 'checked';} ?>> Arang/Kayu</td>
                                    <br>
                                    <td><input type="radio" class="form-radio" name="smbrbhnbakar" value="Lainnya" <?php if($key->smbrbhnbakar == 'Lainnya'){echo 'checked';} ?>> Lainnya</td>
                                    <br>
								</fieldset>
								<br>
								<fieldset>
                                    <legend>Apakah fasilitas tempat buang air besar ?</legend>
                                    <td><input type="radio" class="form-radio" name="mck" value="Jamban Sendiri" <?php if($key->mck == 'Jamban Sendiri'){echo 'checked';} ?>> Jamban sendiri</td>
                                    <br>
                                    <td><input type="radio" class="form-radio" name="mck" value="Jamban Bersama" <?php if($key->mck == 'Jamban Bersama'){echo 'checked';} ?>> Jamban Bersama</td>
                                    <br>
                                    <td><input type="radio" class="form-radio" name="mck" value="Jamban Umum" <?php if($key->mck == 'Jamban Umum'){echo 'checked';} ?>> Jamban Umum</td>
                                    <br>
                                    <td><input type="radio" class="form-radio" name="mck" value="Lainnya" <?php if($key->mck == 'Lainnya'){echo 'checked';} ?>> Lainnya</td>
                                    <br>
								</fieldset>
								<br>
								<fieldset>
                                    <legend>Status kepemilikan rumah/bangunan tempat tinggal ?</legend>
                                    <td><input type="radio" class="form-radio" name="tmptTinggal" value="Milik Sendiri" <?php if($key->tmptTinggal == 'Milik Sendiri'){echo 'checked';} ?>> Milik Sendiri</td>
                                    <br>
                                    <td><input type="radio" class="form-radio" name="tmptTinggal" value="Sewa/Kontrak" <?php if($key->tmptTinggal == 'Sewa/Kontrak'){echo 'checked';} ?>> Sewa/Kontrak</td>
                                    <br>
                                    <td><input type="radio" class="form-radio" name="tmptTinggal" value="Menumpang" <?php if($key->tmptTinggal == 'Menumpang'){echo 'checked';} ?>> Menumpang</td>
                                    <br>
                                    <td><input type="radio" class="form-radio" name="tmptTinggal" value="Lainnya" <?php if($key->tmptTinggal == 'Lainnya'){echo 'checked';} ?>> Lainnya</td>
                                    <br>
								</fieldset>
								<br>
								<div class="form-group">
									<label>Berapa Luas rumah/bangunan keseluruhan ?</label>
									<input type="text" name="luasrumah" placeholder="Luas Rumah" required="" autofocus="" class="form-control" value="<?php echo $key->luasrumah?>" >
								</div>
								<div class="form-group">
									<label>Berapa orang yang tinggal dan menetap di rumah/bangunan ini ?</label>
									<input type="text" name="jmlOrgTinggal" placeholder="Jumlah Orang Tinggal" required="" autofocus="" class="form-control" value="<?php echo $key->jmlOrgTinggal?>" >
								</div>
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
					