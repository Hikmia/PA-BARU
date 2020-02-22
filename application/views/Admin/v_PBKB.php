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
			<div class="panel-heading">Bina Keluarga Remaja
			<form role="form" action="<?php echo site_url('C_penyuluhKB/cetak_laporan_BKB') ?>" target="_blank">
			<button type="submit" class="btn btn-primary pull-right" action="<?php echo site_url('C_penyuluhKB/cetak_laporan_BKB') ?>" target="_blank">Cetak Laporan</button></div>
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
					  <th>Tanggal Kegiatan</th>
					  <th>Nama Kelompok Kegiatan</th>
					  <th>Penyaji Narasumber</th>
					  <th>Materi</th>
					  <th>Kelompok Umur</th>
					  <th>Diskusi</th>
					  <th>Kode Keluarga Indonesia</th>
					  <th>Nama Lengkap</th>
                      <th>Status</th>
                      <th width="10%">Aksi</th>
                    </tr>
                    <?php
    					if ($offset == "") { $id = 0; } else { $id = $offset; }
    					foreach ($query as $key) {
						$id++;
						?>
                          <tr>
							<td><?php echo $id; ?></td>
							<td><?php echo $key->tanggalKegiatan; ?></td>
							<td><?php echo $key->nm_kelKegiatan; ?></td>
							<td><?php echo $key->narasumber; ?></td>
							<td><?php echo $key->materi; ?></td>
							<td><?php echo $key->kel_umur; ?></td>
							<td><?php if($key->diskusi=="l"){echo "Ada";}else{ echo "Tidak Ada";} ?></td>
							<td><?php echo $key->KKI; ?></td>
							<td><?php echo $key->namalengkap; ?></td>
							<td><?= $key->status ?></td> 
							<td>
							<a href="<?= site_url('C_penyuluhKB/approvedata_BKB/'.$key->BKB) ?>" class="btn btn-success btn-sm text-light">ACC</a>
							<a href="<?= site_url('C_penyuluhKB/canceldata_BKB/'.$key->BKB) ?>" class="btn btn-warning btn-sm text-light">Batalkan</a>
							<a href="<?= site_url('C_penyuluhKB/hapusdata_BKB/'.$key->BKB) ?>" class="btn btn-danger btn-sm text-light">Hapus data</a>
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