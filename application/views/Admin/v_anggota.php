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
			<div class="panel-heading">Data Keluarga 
				<button class="btn btn-primary pull-right" data-toggle="modal" data-target="#myModal">Tambah</button></div>
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
					  <th>Nama Lengkap</th>
					  <th>Umur</th>
					  <th>Tanggal Lahir</th>
					  <th>Hubungan</th>
					  <th>Jenis Kelamin</th>
					  <th>Pendidikan</th>
					  <th>Pekerjaan</th>
					  <th>Status Kawin</th>
					  <th>Desa</th>
					  <th>Dusun</th>
					  <th>RT</th>
					  <th>RW</th>
					  <th>Kecamatan</th>
					  <th>Provinsi</th>
					  <th>Jaminan Kesehatan Nasional</th>
					  <th>Jumlah Jiwa</th>
					  <th>Jumlah PUS</th>
					  <th>Nomor Rumah</th>
                    </tr>
                    <?php
                      if ($offset == "") { $id = 0; } else { $id = $offset; }
                      foreach ($query as $row) {
                          $id++;
                          ?>
                          <tr>
                            <td><?php echo $id; ?></td>
							<td><?php echo $row->NIK; ?></td>
							<td><?php echo $row->nama; ?></td>
							<td><?php echo $row->umur; ?></td>
							<td><?php echo $row->TglLahir; ?></td>
							<td><?php echo $row->hubungan; ?></td>
							<td><?php if($row->jeniskelamin=="l"){echo "laki-laki";}else{ echo "Perempuan";} ?></td>
							<td><?php echo $row->pendidikan; ?></td>
							<td><?php echo $row->pekerjaan; ?></td>
							<td><?php echo $row->statuskawin; ?></td>
							<td><?php echo $row->desa; ?></td>
							<td><?php echo $row->dusun; ?></td>
							<td><?php echo $row->RT; ?></td>
							<td><?php echo $row->RW; ?></td>
							<td><?php echo $row->kecamatan; ?></td>
							<td><?php echo $row->provinsi; ?></td>
                            <td><?php echo $row->jkn; ?></td>
							<td><?php echo $row->JmlJiwa; ?></td>
                            <td><?php echo $row->JmlPUS; ?></td>
							<td><?php echo $row->NoRumah;?></td>
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
                   </table>
				   <?php echo $this->pagination->create_links(); ?>
				   </div>
		</div>
	</div>
</div><!--/.row-->
</div>

<div id="myModal" class="modal fade" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h3 class="modal-title">Tambah Data Keluarga</h3>
			</div>
				<div class="modal-body">
					<form method="post" action="<?php echo site_url('admin/add_anggota') ?>">
					<div class="row">
							<div class="col col-lg-12">
								<div class="form-group">
									<label>NIK </label>
									<input type="text" name="NIK" placeholder="Nomor Induk Keluarga" required="" autofocus="" class="form-control">
								</div>
								<div class="form-group">
									<label>Nama Lengkap</label>
									<input type="text" name="nama" placeholder="Nama Lengkap" required="" autofocus="" class="form-control">
								</div>
								<div class="form-group">
									<label>Umur</label>
									<input type="text" name="umur" placeholder="Umur" required="" autofocus="" class="form-control">
								</div>
								<div class="form-group row">
								<div class="col-md-12">
									<select class="custom-select form-control" name="jeniskelamin" required="">
										<option disabled selected value>Jenis Kelamin</option>
										<option value="Laki-Laki">Laki-Laki</option>
										<option value="Perempuan">Perempuan</option>
									</select>
								</div>
								</div>
								<div class="form-group">
									<label>Tanggal Lahir</label>
									<input type="date" name="TglLahir" placeholder="Tanggal Lahir" required="" autofocus="" class="form-control">
								</div>
								<div class="form-group row">
							<div class="col-md-12">
									<select class="custom-select form-control" name="hubungan" required="">
										<option disabled selected value>Hubungan</option>
										<option value="Anak">Anak</option>
										<option value="Suami">Suami</option>
										<option value="Istri">Istri</option>
									</select>
								</div>
							</div>
								<div class="form-group">
									<label>Pendidikan</label>
									<input type="text" name="pendidikan" placeholder="Pendidikan" required="" autofocus="" class="form-control">
								</div>
								<div class="form-group">
									<label>Pekerjaan</label>
									<input type="text" name="pekerjaan" placeholder="Pekerjaan" required="" autofocus="" class="form-control">
								</div>
								<div class="form-group">
									<label>Status Kawin</label>
									<select class="form-control" name="statuskawin" required="">
										<option value="Belum Kawin">Belum Kawin</option>
										<option value="Kawin">Kawin</option>
									</select>
								</div>
								<div class="form-group">
								<label>Desa</label>
									<input type="text" name="desa" placeholder="Desa" required="" autofocus="" class="form-control">
								</div>
								<div class="form-group">
									<label>Dusun</label>
									<input type="text" name="dusun" placeholder="Dusun" required="" autofocus="" class="form-control">
								</div>
								<div class="form-group">
								<label>RT</label>
									<input type="text" name="RT" placeholder="RT" required="" autofocus="" class="form-control">
								</div>
								<div class="form-group">
									<label>RW</label>
									<input type="text" name="RW" placeholder="RW" required="" autofocus="" class="form-control">
								</div>
								<div class="form-group">
									<label>Kecamatan</label>
									<input type="text" name="kecamatan" placeholder="Kecamatan" required="" autofocus=""  class="form-control">
								</div>
								<div class="form-group">
									<label>Provinsi</label>
									<input type="text" name="provinsi" placeholder="Provinsi" required="" autofocus="" class="form-control">
								</div>
								<div class="form-group">
								<label>Jaminan Kesehatan Nasional</label>
									<input type="text" name="jkn" placeholder="Jaminan Kesehatan Nasional" required="" autofocus="" class="form-control">
								</div>
								<div class="form-group">
									<label>Jumlah Jiwa</label>
									<input type="text" name="JmlJiwa" placeholder="Jumlah Jiwa" required="" autofocus="" value="" class="form-control">
								</div>
								<div class="form-group">
								<label>Jumlah PUS</label>
									<input type="text" name="JmlPUS" placeholder="Jumlah PUS" required="" autofocus="" class="form-control" >
								</div>
								<div class="form-group">
									<label>Nomor Rumah</label>
									<input type="text" name="NoRumah" placeholder="Nomor Rumah" required="" autofocus="" class="form-control">
								</div>
								<button type="submit" class="btn btn-primary pull-right">Tambah Data</button>
								<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
							</div>
						</div>
					</form>
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
				<h3 class="modal-title">Update </h3> <span>Id Anggota : <?php echo $key->kd_dataKeluarga ?></span>
			</div>
				<div class="modal-body">
					<form method="post" action="<?php echo site_url('admin/update_anggota/'.$key->kd_dataKeluarga) ?>">
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
									<label>Pendidikan</label>
									<textarea placeholder="pendidikan" name="pendidikan" required="" class="form-control"><?php echo $key->pendidikan ?></textarea>
								</div>
								<div class="form-group">
									<label>Pekerjaan</label>
									<input type="text" name="pekerjaan" placeholder="pekerjaan" required="" autofocus="" value="<?php echo $key->pekerjaan ?>" class="form-control">
								</div>
								<div class="form-group">
								<label>Desa</label>
									<input type="text" name="desa" placeholder="desa" required="" autofocus="" class="form-control" value="<?php echo $key->desa ?>">
								</div>
								<div class="form-group">
									<label>Status Kawin</label>
									<select class="form-control" name="statuskawin" required="">
										<option value="Belum Kawin">Belum Kawin</option>
										<option value="Kawin">Kawin</option>
									</select>
								</div>
								<div class="form-group">
									<label>Dusun</label>
									<textarea placeholder="dusun" name="dusun" required="" class="form-control"><?php echo $key->dusun ?></textarea>
								</div>
								<div class="form-group">
									<label>Kecamatan</label>
									<input type="text" name="kecamatan" placeholder="kecamatan" required="" autofocus="" value="<?php echo $key->kecamatan ?>" class="form-control">
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