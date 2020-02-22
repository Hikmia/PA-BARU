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
			<div class="panel-heading">Data Pembangunan Keluarga
			<button class="btn btn-primary pull-right" data-toggle="modal" data-target="#myModal">Tambah</button>
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
                      <th width="10%">Aksi</th>
                    </tr>
                    <?php
    					if ($offset == "") { $id = 0; } else { $id = $offset; }
    					foreach ($query as $row) {
						$id++;
						?>
                          <tr>
							<td><?php echo $id; ?></td>
                            <td><?php echo $row->jawaban; ?></td>
							<td><?php echo $row->makan; ?></td>
                            <td><?php echo $row->berobat; ?></td>
                            <td><?php echo $row->pakaian; ?></td>
                            <td><?php echo $row->jenismakanan; ?></td>
							<td><?php echo $row->ibadah; ?></td>
							<td><?php echo $row->usiasubur; ?></td>
							<td><?php echo $row->tabungan; ?></td>
                            <td><?php echo $row->komunikasi; ?></td>
                            <td><?php echo $row->kegiatansosial; ?></td>
							<td><?php echo $row->aksesinformasi; ?></td>
							<td><?php echo $row->anggotapengurus; ?></td>
							<td><?php echo $row->kegPosyandu; ?></td>
							<td><?php echo $row->kegBKR; ?></td>
							<td><?php echo $row->kegPIKR; ?></td>
                            <td>
							<a href="<?= site_url('admin/lanjutanPK') ?>" class="btn btn-success btn-sm text-light">Selanjutnya</a>
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

<div id="myModal" class="modal fade" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h3 class="modal-title">Tambah Data Pembangunan Keluarga</h3>
			</div>
				<div class="modal-body">
					<form method="post" action="<?php echo site_url('admin/add_PK') ?>">
						<div class="row">
							<div class="col col-lg-12">
								<fieldset>
								<legend>Keluarga membeli satu stel pakaian baru untuk seluruh anggota keluarga minimal setahun sekali</legend>
                                    <td><input type="radio" class="form-radio" name="jawaban" value="Ya"> Ya</td>
									<br>
									<td><input type="radio" class="form-radio" name="jawaban" value="Tidak"> Tidak</td>
									<br>
								</fieldset>
								<fieldset>
								<legend>Seluruh anggota keluarga makan minimal 2 kali sehari</legend>
                                    <td><input type="radio" class="form-radio" name="makan" value="Ya"> Ya</td>
									<br>
									<td><input type="radio" class="form-radio" name="makan" value="Tidak"> Tidak</td>
									<br>
									<td><input type="radio" class="form-radio" name="makan" value="Tidak Berlaku"> Tidak Berlaku</td>
									<br>
								</fieldset>
								<fieldset>
								<legend>Seluruh anggota keluarga bila sakit berobat ke fasilitas kesehatan</legend>
                                    <td><input type="radio" class="form-radio" name="berobat" value="Ya"> Ya</td>
									<br>
									<td><input type="radio" class="form-radio" name="berobat" value="Tidak"> Tidak</td>
									<br>
								</fieldset>
								<fieldset>
								<legend>Seluruh anggota keluarga memiliki pakaian yang berbeda untuk di rumah, bekerja/sekolah dan bepergian</legend>
                                    <td><input type="radio" class="form-radio" name="pakaian" value="Ya"> Ya</td>
									<br>
									<td><input type="radio" class="form-radio" name="pakaian" value="Tidak"> Tidak</td>
									<br>
								</fieldset>
								<fieldset>
								<legend>Seluruh anggota keluarga makan daging/ikan/telur minimal seminggu sekali</legend>
                                    <td><input type="radio" class="form-radio" name="jenismakanan" value="Ya"> Ya</td>
									<br>
									<td><input type="radio" class="form-radio" name="jenismakanan" value="Tidak"> Tidak</td>
									<br>
								</fieldset>
								<fieldset>
								<legend>Seluruh anggota keluarga menjalankan ibadah agama sesuai ketentuan agama yang dianut</legend>
                                    <td><input type="radio" class="form-radio" name="ibadah" value="Ya"> Ya</td>
									<br>
									<td><input type="radio" class="form-radio" name="ibadah" value="Tidak"> Tidak</td>
									<br>
								</fieldset>
								<fieldset>
								<legend>Pasangan usia subur dengan dua anak atau lebih menjadi peserta KB</legend>
                                    <td><input type="radio" class="form-radio" name="usiasubur" value="Ya"> Ya</td>
									<br>
									<td><input type="radio" class="form-radio" name="usiasubur" value="Tidak"> Tidak</td>
									<br>
									<td><input type="radio" class="form-radio" name="usiasubur" value="Tidak Berlaku"> Tidak Berlaku</td>
									<br>
								</fieldset>
								<fieldset>
								<legend>Keluarga memiliki tabungan dalam bentuk uang/emas/tanah/hewan minimal senilai Rp 1.000.000,-</legend>
                                    <td><input type="radio" class="form-radio" name="tabungan" value="Ya"> Ya</td>
									<br>
									<td><input type="radio" class="form-radio" name="tabungan" value="Tidak"> Tidak</td>
									<br>
								</fieldset>
								<fieldset>
								<legend>Keluarga memiliki kebiasaan berkomunikasi dengan seluruh anggota keluarga</legend>
                                    <td><input type="radio" class="form-radio" name="komunikasi" value="Ya"> Ya</td>
									<br>
									<td><input type="radio" class="form-radio" name="komunikasi" value="Tidak"> Tidak</td>
									<br>
								</fieldset>
								<fieldset>
								<legend>Keluarga ikut dalam kegiatan sosial di lingkungan RT</legend>
                                    <td><input type="radio" class="form-radio" name="kegiatansosial" value="Ya"> Ya</td>
									<br>
									<td><input type="radio" class="form-radio" name="kegiatansosial" value="Tidak"> Tidak</td>
									<br>
								</fieldset>
								<fieldset>
								<legend>Keluarga memiliki akses informasi dari surat kabar/majalah/radio/tv/lainnya</legend>
                                    <td><input type="radio" class="form-radio" name="aksesinformasi" value="Ya"> Ya</td>
									<br>
									<td><input type="radio" class="form-radio" name="aksesinformasi" value="Tidak"> Tidak</td>
									<br>
								</fieldset>
								<fieldset>
								<legend>Keluarga memiliki anggota yang menjadi pengurus kegiatan sosial</legend>
                                    <td><input type="radio" class="form-radio" name="anggotapengurus" value="Ya"> Ya</td>
									<br>
									<td><input type="radio" class="form-radio" name="anggotapengurus" value="Tidak"> Tidak</td>
									<br>
								</fieldset>
								<fieldset>
								<legend>Keluarga mempunyai balita ikut kegiatan Posyandu</legend>
                                    <td><input type="radio" class="form-radio" name="kegPosyandu" value="Ya"> Ya</td>
									<br>
									<td><input type="radio" class="form-radio" name="kegPosyandu" value="Tidak"> Tidak</td>
									<br>
									<td><input type="radio" class="form-radio" name="kegPosyandu" value="Tidak Berlaku"> Tidak Berlaku</td>
									<br>
								</fieldset>
								<fieldset>
								<legend>Keluarga mempunyai balita ikut kegiatan BKB</legend>
                                    <td><input type="radio" class="form-radio" name="kegBKB" value="Ya"> Ya</td>
									<br>
									<td><input type="radio" class="form-radio" name="kegBKB" value="Tidak"> Tidak</td>
									<br>
									<td><input type="radio" class="form-radio" name="kegBKB" value="Tidak Berlaku"> Tidak Berlaku</td>
									<br>
								</fieldset>
								<fieldset>
								<legend>Keluarga mempunyai remaja ikut kegiatan BKR</legend>
                                    <td><input type="radio" class="form-radio" name="kegBKR" value="Ya"> Ya</td>
									<br>
									<td><input type="radio" class="form-radio" name="kegBKR" value="Tidak"> Tidak</td>
									<br>
									<td><input type="radio" class="form-radio" name="kegBKR" value="Tidak Berlaku"> Tidak Berlaku</td>
									<br>
								</fieldset>
								<fieldset>
								<legend>Keluarga mempunyai remaja ikut kegiatan PIKR/M</legend>
                                    <td><input type="radio" class="form-radio" name="kegPIKR" value="Ya"> Ya</td>
									<br>
									<td><input type="radio" class="form-radio" name="kegPIKR" value="Tidak"> Tidak</td>
									<br>
									<td><input type="radio" class="form-radio" name="kegPIKR" value="Tidak Berlaku"> Tidak Berlaku</td>
									<br>
								</fieldset>
								<fieldset>
								<legend>Keluarga mempunyai lansia ikut kegiatan BKL</legend>
                                    <td><input type="radio" class="form-radio" name="kegBKL" value="Ya"> Ya</td>
									<br>
									<td><input type="radio" class="form-radio" name="kegBKL" value="Tidak"> Tidak</td>
									<br>
									<td><input type="radio" class="form-radio" name="kegBKL" value="Tidak Berlaku"> Tidak Berlaku</td>
									<br>
								</fieldset>
								<fieldset>
								<legend>Keluarga mengikuti kegiatan UPPKS</legend>
                                    <td><input type="radio" class="form-radio" name="kegUPPKS" value="Ya"> Ya</td>
									<br>
									<td><input type="radio" class="form-radio" name="kegUPPKS" value="Tidak"> Tidak</td>
									<br>
								</fieldset>
								<br>
								<fieldset>
                                    <legend>Apakah jenis atap rumah terluas ?</legend>
                                    <td><input type="radio" class="form-radio" name="jenisatap" value="Daun/Rumbia"> Daun/Rumbia</td>
                                    <br>
                                    <td><input type="radio" class="form-radio" name="jenisatap" value="Seng/Asbes"> Seng/Asbes</td>
                                    <br>
                                    <td><input type="radio" class="form-radio" name="jenisatap" value="Genteng/Sirap"> Genteng/Sirap</td>
                                    <br>
                                    <td><input type="radio" class="form-radio" name="jenisatap" value="Lainnya"> Lainnya</td>
								</fieldset>
								<br>
								<fieldset>
                                    <legend>Apakah jenis dinding rumah terluas ?</legend>
                                    <td><input type="radio" class="form-radio" name="jenisdinding" value="Tembok"> Tembok</td>
                                    <br>
                                    <td><input type="radio" class="form-radio" name="jenisdinding" value="Kayu/Seng"> Kayu/Seng</td>
                                    <br>
                                    <td><input type="radio" class="form-radio" name="jenisdinding" value="Bambu"> Bambu</td>
                                    <br>
                                    <td><input type="radio" class="form-radio" name="jenisdinding" value="Lainnya"> Lainnya</td>
								</fieldset>
								<br>
                                <fieldset>
                                    <legend>Apakah jenis lantai rumah terluas?</legend>
                                    <td><input type="radio" class="form-radio" name="jenislantai" value="Ubin/Keramik/Marmer"> Ubin/Keramik/Marmer</td>
                                    <br>
                                    <td><input type="radio" class="form-radio" name="jenislantai" value="Semen/Papan"> Semen/Papan</td>
                                    <br>
                                    <td><input type="radio" class="form-radio" name="jenislantai" value="Tanah"> Tanah</td>
                                    <br>
                                    <td><input type="radio" class="form-radio" name="jenislantai" value="Lainnya"> Lainnya</td>
                                    <br>
                                </fieldset>
								<br>
								<fieldset>
                                    <legend>Apakah sumber penerangan utama ?</legend>
                                    <td><input type="radio" class="form-radio" name="smbrpenerangan" value="Listrik"> Listrik</td>
                                    <br>
                                    <td><input type="radio" class="form-radio" name="smbrpenerangan" value="Genset/Diesel"> Genset/Diesel</td>
                                    <br>
                                    <td><input type="radio" class="form-radio" name="smbrpenerangan" value="Lampu Minyak"> Lampu Minyak</td>
                                    <br>
                                    <td><input type="radio" class="form-radio" name="smbrpenerangan" value="Lainnya"> Lainnya</td>
                                    <br>
								</fieldset>
								<br>
                                <fieldset>
                                    <legend>Apakah sumber air minum ?</legend>
                                    <td><input type="radio" class="form-radio" name="sumberair" value="Ledeng/Kemasan"> Ledeng/Kemasan</td>
                                    <br>
                                    <td><input type="radio" class="form-radio" name="sumberair" value="Sumur Terlindung/Pompa"> Sumur Terlindung/Pompa</td>
                                    <br>
                                    <td><input type="radio" class="form-radio" name="sumberair" value="Air Hujan/Air Sungai"> Air Hujan/Air Sungai</td>
                                    <br>
                                    <td><input type="radio" class="form-radio" name="sumberair" value="Lainnya"> Lainnya</td>
                                    <br>
								</fieldset>
								<br>
								<fieldset>
                                    <legend>Apakah bahan bakar utama untuk memasak ?</legend>
                                    <td><input type="radio" class="form-radio" name="smbrbhnbakar" value="Listrik/Gas"> Listrik/Gas</td>
                                    <br>
                                    <td><input type="radio" class="form-radio" name="smbrbhnbakar" value="Minyak Tanah"> Minyak Tanah</td>
                                    <br>
                                    <td><input type="radio" class="form-radio" name="smbrbhnbakar" value="Arang/Kayu"> Arang/Kayu</td>
                                    <br>
                                    <td><input type="radio" class="form-radio" name="smbrbhnbakar" value="Lainnya"> Lainnya</td>
                                    <br>
								</fieldset>
								<br>
								<fieldset>
                                    <legend>Apakah fasilitas tempat buang air besar ?</legend>
                                    <td><input type="radio" class="form-radio" name="mck" value="Jamban sendiri"> Jamban sendiri</td>
                                    <br>
                                    <td><input type="radio" class="form-radio" name="mck" value="Jamban Bersama"> Jamban Bersama</td>
                                    <br>
                                    <td><input type="radio" class="form-radio" name="mck" value="Jamban Umum"> Jamban Umum</td>
                                    <br>
                                    <td><input type="radio" class="form-radio" name="mck" value="Lainnya"> Lainnya</td>
                                    <br>
								</fieldset>
								<br>
								<fieldset>
                                    <legend>Status kepemilikan rumah/bangunan tempat tinggal ?</legend>
                                    <td><input type="radio" class="form-radio" name="tmptTinggal" value="Milik Sendiri"> Milik Sendiri</td>
                                    <br>
                                    <td><input type="radio" class="form-radio" name="tmptTinggal" value="Sewa/Kontrak"> Sewa/Kontrak</td>
                                    <br>
                                    <td><input type="radio" class="form-radio" name="tmptTinggal" value="Menumpang"> Menumpang</td>
                                    <br>
                                    <td><input type="radio" class="form-radio" name="tmptTinggal" value="Lainnya"> Lainnya</td>
                                    <br>
								</fieldset>
								<br>
								<div class="form-group">
									<label>Berapa Luas rumah/bangunan keseluruhan ?</label>
									<input type="text" name="luasrumah" placeholder="Luas Rumah" required="" autofocus="" class="form-control">
								</div>
								<div class="form-group">
									<label>Berapa orang yang tinggal dan menetap di rumah/bangunan ini ?</label>
									<input type="text" name="jmlOrgTinggal" placeholder="Jumlah Orang Tinggal" required="" autofocus="" class="form-control">
								</div>
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
				<h3 class="modal-title">Update Data Pembangunan Keluarga</h3> <span>Id Anggota : <?php echo $key->kd_dataKeluarga ?></span>
			</div>
				<div class="modal-body">
					<form method="post" action="<?php echo site_url('admin/update_PK/'.$key->kodePK) ?> ">
						<div class="row">
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
					