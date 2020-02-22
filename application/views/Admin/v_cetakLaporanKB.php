<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
	<div class="row">
	</div><!--/.row-->
	
	<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header"><?php echo $title ?></h1>
		</div>
	</div><!--/.row batas untuk pencarian anggota-->
<div class="row">
	<div class="col-lg-12">
		<div class="panel panel-default">
			<div class="panel-heading">Data Layanan KB
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
					  <th>KB</th>
					  <th>Alat Kontrasepsi</th>
					  <th>Alamat</th>
					  <th>desa</th>
					  <th>Kecamatan</th>
					  <th>Bulan</th>
					  <th>Kabupaten</th>
					  <th>Dokumen</th>
                    </tr>
                    <?php
    					if ($offset == "") { $id = 0; } else { $id = $offset; }
    					foreach ($query as $key) {
						$id++;
						?>
                          <tr>
							<td><?php echo $id; ?></td>
							<td><?php echo $key->namaIstri; ?></td>
							<td><?php echo $key->umurIstri; ?></td>
							<td><?php echo $key->nmSuami; ?></td>			
							<td><?php echo $key->jmlAnak; ?></td>
							<td><?php echo $key->KB; ?></td>
							<td><?php echo $key->alkon; ?></td>
							<td><?php echo $key->alamat; ?></td>
							<td><?php echo $key->desa; ?></td>
							<td><?php echo $key->kecamatan; ?></td>
							<td><?php echo $key->dokumen; ?></td>
							<td><?php echo $key->bulan; ?></td>
							<td><?php echo $key->kabupaten; ?></td>
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
    <script>
		window.print();
	</script>