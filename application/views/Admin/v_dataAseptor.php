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
                      <th>Aseptor KB</th>
                      <th>Tensi Darah</th>
					  <th>Gula Darah</th>
					  <th>Nama Istri</th>
                      <th>Alamat</th>
					  <th>Alat Kontrasepsi</th>
					  <th>Aksi</th>
                    </tr>
                    <?php
    					if ($offset == "") { $id = 0; } else { $id = $offset; }
    					foreach ($query as $row) {
						$id++;
						?>
                          <tr>
							<td><?php echo $id; ?></td>
                            <td><?php echo $row->aseptorKB; ?></td>
							<td><?php echo $row->tensidarah; ?></td>
							<td><?php echo $row->guladarah; ?></td>
							<td>
							<a title="Hapus" href="<?php echo site_url(); ?>/C_puskesmas/delete_aseptor/<?php echo $key->id_aseptor; ?>" onclick="return confirm('Are You Sure?');" class="btn btn-sm btn-danger">✕<i class="fa fa-trash"></i></a>
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
				<h3 class="modal-title">Tambah Data Aseptor KB</h3>
			</div>
				<div class="modal-body">
					<form method="post" action="<?php echo site_url('C_puskesmas/getAllLayanan') ?>">
						<div class="row">
							<div class="col col-lg-12">
								<div class="form-group">
									<label>Aseptor KB</label>
									<input type="text" name="aseptorKB" placeholder="Aseptor KB" required="" autofocus="" class="form-control">
								</div>
								<div class="form-group">
									<label>Tensi Darah</label>
									<input type="text" name="tensidarah" placeholder="Tensi Darah" required="" autofocus="" class="form-control">
								</div>
								<div class="form-group">
									<label>Gula Darah</label>
									<input type="text" name="guladarah" placeholder="Gula Darah" required="" autofocus="" class="form-control">
								</div>
								<div class="form-group">
									<label>Nama Istri</label>
									<input type="text" name="namaIstri" placeholder="Nama Istri" required="" autofocus="" class="form-control" value="<?php echo $layanan1[0]->namaIstri;?>">
								</div>
								<div class="form-group">
									<label>Alat Kontrasepsi</label>
									<input type="text" name="alkon" placeholder="Alat Kontrasepsi" required="" autofocus="" class="form-control" value="<?php echo $layanan1[0]->alkon;?>">
								</div>
								<div class="form-group">
									<label>Alamat</label>
									<input type="text" name="alamat" placeholder="Alamat" required="" autofocus="" class="form-control" value="<?php echo $layanan1[0]->alamat;?>">
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