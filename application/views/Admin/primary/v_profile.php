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
			<li class="<?php if($title=="Halaman Profile"){echo "active";} ?>"><a href="<?php echo site_url('admin') ?>"><svg class="glyph stroked dashboard-dial"><use xlink:href="#stroked-dashboard-dial"/></svg> Dashboard</a></li>
			<!-- <li class="<?php if($title=="Informasi"){echo "active";} ?>"><a href="<?php echo site_url('C_penyuluhKB/informasi') ?>"><svg class="glyph stroked map"><use xlink:href="#stroked-map"/></svg> Informasi KB</a></li>
			<li class="<?php if($title=="Layanan"){echo "active";} ?>"><a href="<?php echo site_url('C_penyuluhKB/layanan') ?>"><svg class="glyph stroked map"><use xlink:href="#stroked-map"/></svg> Layanan KB</a></li>
			<li class="parent">
				<a href="#">
					<span data-toggle="collapse" href="#sub-item-2"><svg class="glyph stroked chevron-down"><use xlink:href="#stroked-chevron-down"></use></svg></span> Data Tribina
				</a>
				<ul class="children collapse" id="sub-item-2">
					<li>
						<a class="<?php if($title=="tribina"){echo "active";} ?>" href="<?php echo site_url('C_penyuluhKB/tribina') ?>">
							<svg class="glyph stroked chevron-right"><use xlink:href="#stroked-chevron-right"></use></svg> Bina Keluarga Remaja
						</a>
					</li>
					<li>
						<a class="<?php if($title=="Bina Keluarga Balita"){echo "active";} ?>" href="<?php echo site_url('C_penyuluhKB/BKB') ?>">
							<svg class="glyph stroked chevron-right"><use xlink:href="#stroked-chevron-right"></use></svg> Bina Keluarga Balita
						</a>
					</li> -->
		</ul>
		
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
		<form action="<?= site_url('admin/update') ?>" method="POST">
			<div class="panel-heading">Profile Kader PPKBD
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

			<form>
				<div class="form-group">
   					<label for="exampleInputEmail1">Nama Lengkap</label>
    				<input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Lengkap">
  				</div>
  				<div class="form-group">
    				<label for="exampleInputPassword1">Username</label>
    				<input type="text" class="form-control" id="exampleInputPassword1" placeholder="Username">
  				</div>
				<div class="form-group">
    				<label for="exampleInputPassword1">Password</label>
    				<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  				</div>
  				<div class="form-group">
   					<label for="exampleInputEmail1">Email</label>
    				<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
   	 				<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  				</div>
				<div class="form-group">
   					<label for="exampleInputEmail1">Jabatan</label>
    				<input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Jabatan">
  				</div>
  				<button type="submit" class="btn btn-primary">Edit Profil</button>
			</form>