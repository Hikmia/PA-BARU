<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>BKKBN Kabupaten Jombang</title>

<link href="<?php echo base_url() ?>assets/css/bootstrap.min.css" rel="stylesheet">
<link href="<?php echo base_url() ?>assets/css/datepicker3.css" rel="stylesheet">
<link href="<?php echo base_url() ?>assets/css/styles.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/dist/css/dropify.css">
<script src="<?php echo base_url() ?>assets/js/lumino.glyphs.js"></script>


<!--[if lt IE 9]>
<script src="<?php echo base_url() ?>assets/js/html5shiv.js"></script>
<script src="<?php echo base_url() ?>assets/js/respond.min.js"></script>
<![endif]-->

</head>

<body>
	<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#"><span>BKKBN</span>&nbspKecamatan Diwek</a>
				<ul class="user-menu">
					<li class="dropdown pull-right">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> <?php echo $this->session->userdata('username') ?> <span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu">
							<li><a href="#"><svg class="glyph stroked gear"><use xlink:href="#stroked-gear"></use></svg> Settings</a></li>
							<li><a href="<?php echo site_url('login/logout') ?>"><svg class="glyph stroked cancel"><use xlink:href="#stroked-cancel"></use></svg> Logout</a></li>
							<li><a href="<?php echo site_url('Admin/profile') ?>"><svg class="glyph stroked gear"><use xlink:href="#stroked-gear"></use></svg>Edit Profile</a></li>
						</ul>
					</li>
				</ul>
			</div>
							
		</div><!-- /.container-fluid -->
	</nav>
		
	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<form role="search">
			<div class="form-group">
				<input type="text" class="form-control" placeholder="Search">
			</div>
		</form>
		<ul class="nav menu">
			<li class="<?php if($title=="Dashboard"){echo "active";} ?>"><a href="<?php echo site_url('admin') ?>"><svg class="glyph stroked dashboard-dial"><use xlink:href="#stroked-dashboard-dial"/></svg> Dashboard</a></li>
			<li class="<?php if($title=="Dokumentasi Kegiatan"){echo "active";} ?>"><a href="<?php echo site_url('admin/dokumentasi') ?>"><svg class="glyph stroked clipboard with paper"><use xlink:href="#stroked-clipboard-with-paper"/></svg> Dokumetasi Kegiatan</a></li>
			<li class="<?php if($title=="Informasi"){echo "active";} ?>"><a href="<?php echo site_url('admin/show_data') ?>"><svg class="glyph stroked map"><use xlink:href="#stroked-map"/></svg> Informasi KB</a></li>
			<li class="parent ">
				<a href="#">
					<span data-toggle="collapse" href="#sub-item-1"><svg class="glyph stroked chevron-down"><use xlink:href="#stroked-chevron-down"></use></svg></span> Pencatatan Data
				</a>
				<ul class="children collapse" id="sub-item-1">
					<li>
						<a class="<?php if($title=="Data Keluarga"){echo "active";} ?>" href="<?php echo site_url('admin/anggota'); ?>">
							<svg class="glyph stroked chevron-right"><use xlink:href="#stroked-chevron-right"></use></svg> Data Keluarga
						</a>
					</li>
					<li>
						<a class="<?php if($title=="Data Keluarga Berencana"){echo "active";} ?>" href="<?php echo site_url('admin/kb'); ?>">
							<svg class="glyph stroked chevron-right"><use xlink:href="#stroked-chevron-right"></use></svg> Data Keluarga Berencana
						</a>
					</li>
					<li>
						<a class="<?php if($title=="Data Pembangunan Keluarga"){echo "active";} ?>" href="<?php echo site_url('admin/pembangunanKel'); ?>">
							<svg class="glyph stroked chevron-right"><use xlink:href="#stroked-chevron-right"></use></svg> Data Pembangunan Keluarga
						</a>
					</li>
				</ul>
			</li>
			<li class="<?php if($title=="Layanan"){echo "active";} ?>"><a href="<?php echo site_url('admin/layanan') ?>"><svg class="glyph stroked map"><use xlink:href="#stroked-map"/></svg> Layanan KB</a></li>
			<li class="parent">
				<a href="#">
					<span data-toggle="collapse" href="#sub-item-2"><svg class="glyph stroked chevron-down"><use xlink:href="#stroked-chevron-down"></use></svg></span> Data Tribina
				</a>
				<ul class="children collapse" id="sub-item-2">
					<li>
						<a class="<?php if($title=="tribina"){echo "active";} ?>" href="<?php echo site_url('admin/tribina') ?>">
							<svg class="glyph stroked chevron-right"><use xlink:href="#stroked-chevron-right"></use></svg> Bina Keluarga Remaja
						</a>
					</li>
					<li>
					<a class="" href="#">
							<svg class="glyph stroked chevron-right"><use xlink:href="#stroked-chevron-right"></use></svg> Bina Keluarga Balita
						</a>
					</li>
					<li>
						<a class="" href="#">
							<svg class="glyph stroked chevron-right"><use xlink:href="#stroked-chevron-right"></use></svg> Bina Keluarga Lansia
						</a>
					</li>
				</ul>
			</li>
				</ul>
			</li>
		</ul>
		<div class="attribution">Template by <a href="http://www.medialoot.com/item/lumino-admin-bootstrap-template/">Medialoot</a><br/><a href="http://www.glyphs.co" style="color: #333;">Icons by Glyphs</a></div>
	</div><!--/.sidebar-->

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
			<button class="btn btn-primary pull-right" data-toggle="modal" data-target="#myModal" >Tambah</button>
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
                    </tr>
                    <?php
    					if ($offset == "") { $id = 0; } else { $id = $offset; }
    					foreach ($query as $row) {
						$id++;
						?>
                          <tr>
							<td><?php echo $id; ?></td>
                            <td><?php echo $row->u_kawinsuami; ?></td>
                            <td><?php echo $row->u_kawinistri; ?></td>
                            <td><?php echo $row->prnhDilahirkanLaki; ?></td>
                            <td><?php echo $row->prnhDilahirkanCewek; ?></td>
                            <td><?php echo $row->dilahirkanHidupLaki; ?></td>
                            <td><?php echo $row->dilahirkanHidupCewek; ?></td>
							<td><?php echo $row->kesertaanKB; ?></td>
							<td><?php echo $row->metodekon; ?></td>
							<td><?php echo $row->jangkawaktu; ?></td>
                            <td><?php echo $row->rencanaPnyAnak; ?></td>
                            <td><?php echo $row->tmptPel; ?></td>
                            <td><?php echo $row->alasan; ?></td>
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

<div id="myModal" class="modal fade" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h3 class="modal-title">Tambah Keluarga Berencana</h3>
			</div>
				<div class="modal-body">
					<form method="post" action="<?php echo site_url('admin/add_KB') ?>">
						<div class="row">
							<div class="col col-lg-12">
								<div class="form-group">
									<label>Usia Kawin Suami</label>
									<input type="text" name="u_kawinsuami" placeholder="Usia Kawin Suami" required="" autofocus="" class="form-control">
								</div>
								<div class="form-group">
									<label>Usia Kawin Istri</label>
									<input type="text" name="u_kawinistri" placeholder="Usia Kawin Istri" required="" autofocus="" class="form-control">
                                </div>
                                <div class="form-group">
									<label>Jumlah Anak Pernah Dilahirkan Hidup Laki-Laki</label>
									<input type="text" name="prnhDilahirkanLaki" placeholder="Laki-Laki" required="" autofocus="" class="form-control">
                                </div>
                                <div class="form-group">
									<label>Jumlah Anak Pernah Dilahirkan Hidup Perempuan</label>
									<input type="text" name="prnhDilahirkanCewek" placeholder="Perempuan" required="" autofocus="" class="form-control">
                                </div>
                                <div class="form-group">
									<label>Jumlah Anak Masih Hidup Laki-Laki</label>
									<input type="text" name="dilahirkanHidupLaki" placeholder="Laki-Laki" required="" autofocus="" class="form-control">
                                </div>
                                <div class="form-group">
									<label>Jumlah Anak Masih Hidup Perempuan</label>
									<input type="text" name="dilahirkanHidupCewek" placeholder="Perempuan" required="" autofocus="" class="form-control">
								</div>
								<fieldset>
                                    <legend>Kesertaan KB</legend>
                                    <td><input type="radio" class="form-radio" name="kesertaanKB" value="Sedang"> Sedang</td>
                                    <br>
                                    <td><input type="radio" class="form-radio" name="kesertaanKB" value="Pernah"> Pernah</td>
                                    <br>
                                    <td><input type="radio" class="form-radio" name="kesertaanKB" value="Tidak Pernah"> Tidak Pernah</td>
								</fieldset>
								<br>
								<fieldset>
                                    <legend>Metode Kontrasepsi Yang Sedang/Pernah Digunakan</legend>
                                    <td><input type="radio" class="form-radio" name="metodekon" value="IUD"> IUD</td>
                                    <br>
                                    <td><input type="radio" class="form-radio" name="metodekon" value="MOW"> MOW</td>
                                    <br>
                                    <td><input type="radio" class="form-radio" name="metodekon" value="MOP"> MOP</td>
                                    <br>
                                    <td><input type="radio" class="form-radio" name="metodekon" value="Implan"> Implan</td>
                                    <br>
                                    <td><input type="radio" class="form-radio" name="metodekon" value="Suntik"> Suntik</td>
                                    <br>
                                    <td><input type="radio" class="form-radio" name="kesertaanKB" value="Pil"> Pil</td>
                                    <br>
                                    <td><input type="radio" class="form-radio" name="metodekon" value="Tradisional"> Tradisional</td>
                                    <br>
                                    <td><input type="radio" class="form-radio" name="kesertaanKB" value="Kondom"> Kondom</td>
								</fieldset>
								<br>
								<div class="form-group">
									<label>Jangka Waktu</label>
									<input type="text" name="jangkawaktu" placeholder="Jangka Waktu" required="" autofocus="" class="form-control">
                                </div>
								<br>
                                <fieldset>
                                    <legend>Apakah Ingin Punya Anak Lagi</legend>
                                    <td><input type="radio" class="form-radio" name="rencanaPnyAnak" value="Ya, Segera (kurang dari 2 tahun)"> Ya, Segera (kurang dari 2 tahun)</td>
                                    <br>
                                    <td><input type="radio" class="form-radio" name="rencanaPnyAnak" value="Ya, Kemudian (lebih dari 2 tahun)"> Ya, Kemudian (lebih dari 2 tahun)</td>
                                    <br>
                                    <td><input type="radio" class="form-radio" name="rencanaPnyAnak" value="Tidak ingin punya anak lagi"> Tidak ingin punya anak lagi</td>
								</fieldset>
								<br>
								<fieldset>
                                    <legend>Tempat Pelayanan KB</legend>
                                    <td><input type="radio" class="form-radio" name="tmptPel" value="RSUP/RSUD"> RSUP/RSUD</td>
                                    <br>
                                    <td><input type="radio" class="form-radio" name="tmptPel" value="RS TNI"> RS TNI</td>
                                    <br>
                                    <td><input type="radio" class="form-radio" name="tmptPel" value="RS POLRI"> RS POLRI</td>
                                    <br>
                                    <td><input type="radio" class="form-radio" name="tmptPel" value="RS SWASTA"> RS SWASTA</td>
                                    <br>
                                    <td><input type="radio" class="form-radio" name="tmptPel" value="Klinik Utama"> Klinik Utama</td>
                                    <br>
                                    <td><input type="radio" class="form-radio" name="tmptPel" value="Puskesmas"> Puskesmas</td>
                                    <br>
                                    <td><input type="radio" class="form-radio" name="tmptPel" value="Klinik Pratama"> Klinik Pratama</td>
                                    <br>
                                    <td><input type="radio" class="form-radio" name="tmptPel" value="Praktek Dokter"> Praktek Dokter</td>
                                    <br>
                                    <td><input type="radio" class="form-radio" name="tmptPel" value="RS Pratama"> RS Pratama</td>
                                    <br>
                                    <td><input type="radio" class="form-radio" name="tmptPel" value="Bidan Desa"> Bidan Desa</td>
                                    <br>
                                    <td><input type="radio" class="form-radio" name="tmptPel" value="Poskesdes"> Poskesdes</td>
                                    <br>
                                    <td><input type="radio" class="form-radio" name="tmptPel" value="Praktek Bidan"> Praktek Bidan</td>
                                    <br>
                                    <td><input type="radio" class="form-radio" name="tmptPel" value="Pelayanan Bergerak"> Pelayanan Bergerak</td>
                                    <br>
								</fieldset>
								<br>
                                <fieldset>
                                    <legend>Alasan Tidak Ber-KB</legend>
                                    <td><input type="radio" class="form-radio" name="alasan" value="Sedang Hamil"> Sedang Hamil</td>
                                    <br>
                                    <td><input type="radio" class="form-radio" name="alasan" value="Alasan Fertilitas"> Alasan Fertilitas</td>
                                    <br>
                                    <td><input type="radio" class="form-radio" name="alasan" value="Tidak Menyetujui KB"> Tidak menyetujui KB</td>
                                    <br>
                                    <td><input type="radio" class="form-radio" name="alasan" value="Tidak tahu Tentang KB"> Tidak tahu Tentang KB</td>
                                    <br>
                                    <td><input type="radio" class="form-radio" name="alasan" value="Takut Efek Samping"> Takut Efek Samping</td>
                                    <br>
                                    <td><input type="radio" class="form-radio" name="alasan" value="Pelayanan KB Jauh"> Pelayanan KB Jauh</td>
                                    <br>
                                    <td><input type="radio" class="form-radio" name="alasan" value="Tidak mampu/mahal"> Tidak mampu/mahal</td>
                                    <br>
								</fieldset>
								<br>
								<button type="submit" class="btn btn-primary pull-right">Tambah Data</button>
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
					<form method="post" action="<?php echo site_url('admin/update_KB/'.$key->kodeKB) ?> ">
						<div class="row">
							<div class="col col-lg-12">
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
					