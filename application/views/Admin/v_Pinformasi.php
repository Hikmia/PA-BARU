
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
			<div class="panel-heading">Informasi
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
                      <th>Tanggal Informasi</th>
					  <th>Tanggal Berakhir</th>
					  <th>Deskripsi</th>
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
                            <td><?php echo $row->tglinformasi; ?></td>
							<td><?php echo $row->tglberakhir; ?></td>
							<td><?php echo $row->deskripsi; ?></td>
							<td><?= $row->status ?></td> 
							<td>
                              <a title="Hapus" href="<?php echo site_url(); ?>/C_penyuluhKB/delete_informasi/<?php echo $row->id_info; ?>" onclick="return confirm('Are You Sure?');" class="btn btn-sm btn-danger">✕<i class="fa fa-trash"></i></a>
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
				<h3 class="modal-title">Tambah Informasi</h3>
			</div>
				<div class="modal-body">
					<form method="post" action="<?php echo site_url('C_penyuluhKB/add_informasi') ?>">
					<div class="row">
							<div class="col col-lg-12">
								<div class="form-group">
									<label>Tanggal Informasi </label>
									<input type="date" name="tglinformasi" placeholder="Tanggal Informasi" required="" autofocus="" class="form-control">
								</div>
								<div class="form-group">
									<label>Tanggal Berakhir</label>
									<input type="date" name="tglberakhir" placeholder="Tanggal Berakhir" required="" autofocus="" class="form-control">
								</div>
								<div class="form-group">
									<label>Deskripsi</label>
									<input type="text" placeholder="deskripsi" name="deskripsi" required="" class="form-control">
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
				<h3 class="modal-title">Update </h3> <span>Id Anggota : <?php echo $key->id_info ?></span>
			</div>
				<div class="modal-body">
					<form method="post" action="<?php echo site_url('C_penyuluhKB/update_informasi/'.$key->id_info) ?>">
						<div class="row">
							<div class="col col-lg-12">
                            <div class="form-group">
									<label>Tanggal Informasi </label>
									<input type="date" name="tglinformasi" placeholder="Tanggal Informasi" required="" autofocus="" class="form-control" value="<?php echo $key->tglinformasi?>" >
								</div>
								<div class="form-group">
									<label>Tanggal Berakhir</label>
									<input type="date" name="tglberakhir" placeholder="Tanggal Berakhir" required="" autofocus="" class="form-control" value="<?php echo $key->tglberakhir?>" >
								</div>
								<div class="form-group">
									<label>Deskripsi</label>
									<input type= "text" placeholder="deskripsi" name="deskripsi" required="" class="form-control" value="<?php echo $key->deskripsi?>" >
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