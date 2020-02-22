
<div id="myModal" class="modal fade" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h3 class="modal-title">Tambah Bina Keluarga Remaja</h3>
			</div>
				<div class="modal-body">
					<form method="post" action="<?php echo site_url('C_penyuluhKB/ket_data') ?>">
						<div class="row">
							<div class="col col-lg-12">
							<div class="form-group">
									<label>Keterangan</label>
									<input type="text" name="keterangan" placeholder="Keterangan" required="" autofocus="" class="form-control">
								</div>
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