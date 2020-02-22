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
                      <th>Nama Istri</th>
					  <th>Umur Istri</th>
					  <th>Nama Suami</th>
					  <th>Jumlah Anak</th>
					  <th>Alat Kontrasepsi</th>
					  <th>Alamat</th>
					  <th>Desa</th>
					  <th>Kecamatan</th>
					  <th>Bulan</th>
					  <th>Kabupaten</th>
					  <th>Dokumen</th>
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
							<td><?php echo $row->namaIstri; ?></td>
							<td><?php echo $row->umurIstri; ?></td>
							<td><?php echo $row->nmSuami; ?></td>
							<td><?php echo $row->jmlAnak; ?></td>
							<td><?php echo $row->alkon; ?></td>
							<td><?php echo $row->alamat; ?></td>
							<td><?php echo $row->desa; ?></td>
							<td><?php echo $row->kecamatan; ?></td>
							<td><?php echo $row->bulan; ?></td>
							<td><?php echo $row->kabupaten; ?></td>
							<td><?php echo $row->dokumen; ?></td>
							<td><?= $row->status ?></td>
                            <td>
                              <a title="Hapus" href="<?php echo site_url(); ?>admin/delete_layanan/<?php echo $row->kodeLKB; ?>" onclick="return confirm('Are You Sure?');" class="btn btn-sm btn-danger">✕<i class="fa fa-trash"></i></a>
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
				<h3 class="modal-title">Tambah Data Layanan KB</h3>
			</div>
				<div class="modal-body">
					<form method="post" action="<?php echo site_url('admin/add_layanan') ?>" enctype="multipart/form-data">
						<div class="row">
							<div class="col col-lg-12">
								<div class="form-group">
									<label>Desa</label>
									<input type="text" name="desa" placeholder="Desa" required="" autofocus="" class="form-control">
								</div>
								<div class="form-group">
									<label>Kecamatan</label>
									<input type="text" name="kecamatan" placeholder="Kecamatan" required="" autofocus="" class="form-control">
								</div>
								<div class="form-group">
									<label>Kabupaten</label>
									<input type="text" name="kabupaten" placeholder="Kabupaten" required="" autofocus="" class="form-control">
								</div>
								<div class="form-group">
									<label>Bulan</label>
									<input type="text" name="bulan" placeholder="Bulan" required="" autofocus="" class="form-control">
								</div>
								<div class="form-group">
									<label>Nama Istri</label>
									<input type="text" name="namaIstri" placeholder="Nama Istri" required="" autofocus="" class="form-control">
								</div>
								<div class="form-group">
									<label>Nama Suami</label>
									<input type="text" name="nmSuami" placeholder="Nama Lengkap Suami" required="" autofocus="" class="form-control">
								</div>
								<div class="form-group">
									<label>Umur Istri</label>
									<input type="text" name="umurIstri" placeholder="Umur Istri" required="" autofocus="" class="form-control">
								</div>
								<div class="form-group">
									<label>Jumlah Anak</label>
									<input type="text" name="jmlAnak" placeholder="Jumlah Anak" required="" autofocus="" class="form-control">
								</div>
								<div class="form-group row">
								<div class="col-md-12">
								<label>Alat Kontrasepsi</label>
									<select class="custom-select form-control" name="alkon" required="">
										<option disabled selected value>Alat Kontrasepsi</option>
										<option value="Pil KB">Pil KB</option>
										<option value="Suntik KB">Suntik KB</option>
										<option value="IUD">IUD</option>
										<option value="KB Implan">KB Implan</option>
										<option value="Kondom>">Kondom</option>
									</select>
									</div>
								</div>
								<label class="tg-fileuploadlabel" for="tg-photogallery">
                                    <span>Upload Upload dokumen KTP dan JKN</span>
                                    <br>
			                        <span>Ukuran maksimal untuk upload : 500 KB</span>
		                            <input id="" class="" type="file" name="dokumen" multiple="">
                                </label>
								<div class="form-group">
									<label>Alamat</label>
									<input type="text" name="alamat" placeholder="Alamat" required="" autofocus="" class="form-control">
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
			<h3 class="modal-title">Update Data Layanan KB</h3> <span>Id Anggota : <?php echo $key->kodeLKB?></span>
			</div>
				<div class="modal-body">
					<form method="post" action="<?php echo site_url('admin/update_layanan/'.$key->kodeLKB) ?>">
						<div class="row">
							<div class="col col-lg-12">
								<div class="form-group">
								<div class="form-group">
									<label>Desa</label>
									<input type="text" name="desa" placeholder="Desa" required="" autofocus="" class="form-control" value="<?php echo $key->desa?>">
								</div>
								<div class="form-group">
									<label>Kecamatan</label>
									<input type="text" name="kecamatan" placeholder="Kecamatan" required="" autofocus="" class="form-control" value="<?php echo $key->kecamatan?>">
								</div>
								<div class="form-group">
									<label>Kabupaten</label>
									<input type="text" name="kabupaten" placeholder="Kabupaten" required="" autofocus="" class="form-control" value="<?php echo $key->kabupaten?>">
								</div>
								<div class="form-group">
									<label>Bulan</label>
									<input type="text" name="bulan" placeholder="Bulan" required="" autofocus="" class="form-control" value="<?php echo $key->bulan?>">
								</div>
								<div class="form-group">
									<label>Nama Istri</label>
									<input type="text" name="namaIstri" placeholder="Nama Istri" required="" autofocus="" class="form-control" value="<?php echo $key->namaIstri?>">
								</div>
								<div class="form-group">
									<label>Nama Suami</label>
									<input type="text" name="nmSuami" placeholder="Nama Suami" required="" autofocus="" class="form-control" value="<?php echo $key->nmSuami?>">
								</div>
								<div class="form-group">
									<label>Umur Istri</label>
									<input type="text" name="umurIstri" placeholder="Umur Istri" required="" autofocus="" class="form-control" value="<?php echo $key->umuristri?>">
								</div>
								<div class="form-group">
									<label>Jumlah Anak</label>
									<input type="text" name="jmlAnak" placeholder="Jumlah Anak" required="" autofocus="" class="form-control" value="<?php echo $key->jmlAnak?>">
								</div>
								<div class="form-group">
									<label>KB</label>
									<input type="text" name="KB" placeholder="KB" required="" autofocus="" class="form-control" value="<?php echo $key->KB?>">
								</div>
								<div class="form-group row">
								<div class="col-md-12">
								<label>Alat Kontrasepsi</label>
									<select class="custom-select form-control" name="alkon" required="">
										<option disabled selected value>Alat Kontrasepsi</option>
										<option value="<?php echo $key->alkon?>">Pil KB</option>
										<option value="<?php echo $key->alkon?>">Suntik KB</option>
										<option value="<?php echo $key->alkon?>">IUD</option>
										<option value="<?php echo $key->alkon?>">KB Implan</option>
										<option value="<?php echo $key->alkon?>">Kondom</option>
									</select>
									</div>
								</div>
								<div class="form-group">
									<label>Alamat</label>
									<input type="text" name="alamat" placeholder="Alamat" required="" autofocus="" class="form-control" value="<?php echo $key->alamat?>">
								</div>
								<label class="tg-fileuploadlabel" for="tg-photogallery">
                                    <span>Upload dokumen KTP dan JKN</span>
                                    <br>
			                        <span>Ukuran maksimal untuk upload : 500 KB</span>
		                            <input id="" class="" type="file" name="dokumen" multiple="" value="<?php echo $key->dokumen?>">
                                </label>
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