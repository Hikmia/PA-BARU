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
		
	<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>BKKBN Kecamatan Diwek</title>

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
						<a class="<?php if($title=="Bina Keluarga Balita"){echo "active";} ?>" href="<?php echo site_url('admin/BKB') ?>">
							<svg class="glyph stroked chevron-right"><use xlink:href="#stroked-chevron-right"></use></svg> Bina Keluarga Balita
						</a>
					</li>
					<li>
						<a class="<?php if($title=="Bina Keluarga Lansia"){echo "active";} ?>" href="<?php echo site_url('admin/BKL') ?>">
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
			<div class="panel-heading">Bina Keluarga Lansia
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
					  <th>Narasumber</th>
					  <th>Nama Kelompok Kegiatan</th>
					  <th>Diskusi</th>
					  <th>Materi</th>
					  <th>Kode Keluarga Indonesia</th>
					  <th>Nama Lengkap</th>
					  <th>Tanggal Kegiatan</th>
                      <th>Status</th>
                      <th width="10%">Aksi</th>
                    </tr>
                    <?php
    					if ($offset == "") { $id = 0; } else { $id = $offset; }
    					foreach ($query as $row) {
						$id++;
						?>
                          <tr>
							<td><?php echo $id; ?></td>
							<td><?php echo $row->narasumber; ?></td>
							<td><?php if($row->diskusi=="l"){echo "Ada";}else{ echo "Tidak Ada";} ?></td>
							<td><?php echo $row->nm_kelKegiatan; ?></td>
							<td><?php echo $row->materi; ?></td>
							<td><?php echo $row->tanggalkegiatan; ?></td>
							<td><?php echo $row->KKI; ?></td>
							<td><?php echo $row->namalengkap; ?></td>
							<td><?= $row->status ?></td> 
                            <td>
                              <a title="Hapus" href="<?php echo site_url(); ?>/admin/delete_BKL/<?php echo $row->id_BKL; ?>" onclick="return confirm('Are You Sure?');" class="btn btn-sm btn-danger">✕<i class="fa fa-trash"></i></a>
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

<div id="myModal" class="modal fade" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h3 class="modal-title">Tambah Bina Keluarga Lansia</h3>
			</div>
				<div class="modal-body">
					<form method="post" action="<?php echo site_url('admin/add_BKL') ?>">
						<div class="row">
							<div class="col col-lg-12">
							<div class="form-group">
									<label>Nama Kelompok Kegiatan</label>
									<input type="text" name="nm_kelKegiatan" placeholder="Nama Kelompok Kegiatan" required="" autofocus="" class="form-control">
								</div>
							<div class="form-group row">
								<div class="col-md-12">
									<label>Penyaji Narasumber</label>
									<select class="custom-select form-control"  name="narasumber" required="">
									<option disabled selected value>Penyaji Narasumber</option>
									<option value="PPLKB">PPLKB</option>
									<option value="PKB/PLKB">PKB/PLKB</option>
									<option value="PPKBD">PPKBD</option>
									<option value="Sub PPKBD">Sub PPKBD</option>
									<option value="Lainnya">Lainnya</option>
									</select>
								</div>
							</div>
							<div class="form-group row">
								<div class="col-md-12">
								<label>Diskusi</label>
									<select class="custom-select form-control" name="diskusi" required="">
									<option disabled selected value>Diskusi</option>
										<option value="Ada">Ada</option>
										<option value="Tidak Ada">Tidak Ada</option>
									</select>
								</div>
								</div>
								<div class="form-group row">
								<div class="col-md-12">
									<label>Materi</label>
									<select class="custom-select form-control" name="materi" required="">
									<option disabled selected value>Materi Penyuluhan</option>
									<option value="Kebijakan pembangunan keluarga">Pendewasaan usia perkawinan</option>
									<option value="Konsep dasar lansia tangguh">Fungsi keluarga</option>
									<option value="Pembangunan lansia tangguh dimensi spiritual">Nilai gender dalam keluarga</option>
									<option value="Pembangunan lansia tangguh dimensi intelektual">Seksualitas</option>
									<option value="Pembangunan lansia tangguh dimensi fisik">NAPZA</option>
									<option value="Pembangunan lansia tangguh dimensi emosional">HIV/AIDS</option>
									<option value="Pembangunan lansia tangguh dimensi profesional vokasional">Komunikasi efektif Orangtua terhadap remaja</option>
									<option value="Pembangunan lansia tangguh dimensi lingkungan">Peran orangtua dalam pembinaan tumbuh kembang remaja</option>
									<option value="Kebersihan dan kesehatan reproduksi">Kebersihan dan kesehatan diri remaja</option>
									<option value="Lainnya">Lainnya</option>
									</select>
								</div>
								</div>
								<div class="form-group">
									<label>Tanggal Kegiatan</label>
									<input type="date" name="tanggalkegiatan" placeholder="Tanggal Kegiatan" required="" autofocus="" class="form-control">
								</div>
								<div class="form-group">
									<label>Nama Lengkap</label>
									<input type="text" name="namalengkap" placeholder="Nama Lengkap" required="" autofocus="" class="form-control">
								</div>
								<div class="form-group">
									<label>Kode keluarga Indonesia</label>
									<input type="text" name="KKI" placeholder="KKI" required="" autofocus="" class="form-control">
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
			<h3 class="modal-title">Bina Keluarga Lansia</h3> <span>Id Anggota : <?php echo $key->kd_dataKeluarga?></span>
			</div>
				<div class="modal-body">
					<form method="post" action="<?php echo site_url('admin/update_BKL/'.$key->id_BKL) ?>">
						<div class="row">
							<div class="col col-lg-12">
							<div class="form-group">
									<label>Nama Kelompok Kegiatan</label>
									<input type="text" name="nm_kelKegiatan" placeholder="Nama Kelompok Kegiatan" required="" autofocus="" class="form-control" value="<?php echo $key->nm_kelKegiatan?>">
								</div>
							<div class="form-group">
									<label>Narasumber</label>
									<select class="form-control" name="narasumber" required="">
									<option value="<?php echo $key->narasumber?>">PPLKB</option>
									<option value="<?php echo $key->narasumber?>">PKB/PLKB</option>
									<option value="<?php echo $key->narasumber?>">PPKBD</option>
									<option value="<?php echo $key->narasumber?>">Sub PPKBD</option>
									<option value="<?php echo $key->narasumber?>">Lainnya</option>
									</select>
								</div>
								<div class="form-group">
									<label>Diskusi</label>
									<select class="form-control" name="diskusi" required="">
										<option value="<?php echo $key->diskusi?>">Ada</option>
										<option value="<?php echo $key->diskusi?>">Tidak Ada</option>
									</select>
								</div>
								<div class="form-group">
									<label>Materi</label>
									<select class="form-control" name="materi" required="">
									<option value="<?php echo $key->materi?>">Pendewasaan usia perkawinan</option>
									<option value="<?php echo $key->materi?>">Fungsi keluarga</option>
									<option value="<?php echo $key->materi?>">Nilai gender dalam keluarga</option>
									<option value="<?php echo $key->materi?>">Seksualitas</option>
									<option value="<?php echo $key->materi?>">NAPZA</option>
									<option value="<?php echo $key->materi?>">HIV/AIDS</option>
									<option value="<?php echo $key->materi?>">Komunikasi efektif Orangtua terhadap remaja</option>
									<option value="<?php echo $key->materi?>">Peran orangtua dalam pembinaan tumbuh kembang remaja</option>
									<option value="<?php echo $key->materi?>">Kebersihan dan kesehatan diri remaja</option>
									<option value="<?php echo $key->materi?>">Lainnya</option>
									</select>
								</div>
								<div class="form-group">
									<label>Tanggal Kegiatan</label>
									<input type="date" name="tanggalKegiatan" placeholder="Tanggal Kegiatan" required="" autofocus="" class="form-control" value="<?php echo $key->tanggalKegiatan?>">
								</div>
								<div class="form-group">
									<label>Kode keluarga Indonesia</label>
									<input type="text" name="KKI" placeholder="KKI" required="" autofocus="" class="form-control" value="<?php echo $key->KKI?>">
								</div>
								<div class="form-group">
									<label>Nama Lengkap</label>
									<input type="text" name="namalengkap" placeholder="Nama Lengkap" required="" autofocus="" class="form-control" value="<?php echo $key->namalengkap?>">
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
					