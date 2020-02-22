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
			<div class="panel-heading">Dokumen Kegiatan 
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
					  <th>Nama Kegiatan</th>
					  <th>Foto Kegiatan</th>
					  <th>Tanggal Kegiatan</th>
					  <th>Deskripsi</th>
					  <th>Aksi</th>
                    </tr>
                    <?php
                      if ($offset == "") { $id = 0; } else { $id = $offset; }
                      foreach ($query as $row) {
                          $id++;
                          ?>
                          <tr>
                            <td><?php echo $id; ?></td>
							<td><?php echo $row->judul; ?></td>
							<td>
								<img src="<?php echo base_url('assets3/gambar/' .$row->foto.'');?>" width="200" height="200">
							</td>
							<td><?php echo $row->tglKegiatan; ?></td>
							<td><?php echo $row->deskripsi; ?></td>
							<td>
                              <a title="Hapus" href="<?php echo site_url(); ?>/admin/delete_dokumentasi/<?php echo $row->id_foto; ?>" onclick="return confirm('Are You Sure?');" class="btn btn-sm btn-danger">✕<i class="fa fa-trash"></i></a>
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
				<h3 class="modal-title">Tambah Dokumentasi Kegiatan</h3>
			</div>
				<div class="modal-body">
                    <form method="post" action="<?php echo site_url('admin/add_dokumentasi') ?>" enctype="multipart/form-data">
					<div class="row">
							<div class="col col-lg-12">
								<div class="form-group">
									<label>Nama Kegiatan</label>
									<input type="text" name="judul" placeholder="Nama Kegiatan" required="" autofocus="" class="form-control">
								</div>
								<div class="form-group">
									<label>Tanggal Kegiatan</label>
									<input type="date" name="tglKegiatan" placeholder="Tanggal Kegiatan" required="" autofocus="" class="form-control">
								</div>
								<label class="tg-fileuploadlabel" for="tg-photogallery">
                                    <span>Upload foto kegiatan yang telah dilaksanakan</span>
                                    <br>
			                        <span>Ukuran maksimal untuk upload : 500 KB</span>
		                            <input class="" type="file" name="foto" multiple="">
                                </label>
                                <div class="form-group">
									<label>Deskripsi</label>
									<input type="text" name="deskripsi" placeholder="Deskripsi" required="" autofocus="" class="form-control">
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
    }
 ?>