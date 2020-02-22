
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>REGISTRASI BKKBN</title>

<link href="<?php echo base_url() ?>assets/css/bootstrap.min.css" rel="stylesheet">
<link href="<?php echo base_url() ?>assets/css/datepicker3.css" rel="stylesheet">
<link href="<?php echo base_url() ?>assets/css/styles.css" rel="stylesheet">

<!--[if lt IE 9]>
<script src="<?php echo base_url() ?>assets/js/html5shiv.js"></script>
<script src="<?php echo base_url() ?>assets/js/respond.min.js"></script>
<![endif]-->

</head>

<body>
	
	<div class="row">
		<div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
			<div class="login-panel panel panel-default">
				<div class="panel-heading">Sign Up</div>
				<div class="panel-body">
					<?php 
					if ($this->session->flashdata('error')!==null) {
						?>
						<div class="alert alert-danger">
							<?php echo $this->session->flashdata('error') ?>
						</div>
						<?php
					}
					 ?>
					<form role="form" action="<?php echo site_url('C_registrasi/doregistrasi') ?>" method="post">
						<fieldset>
							<div class="form-group">
								<input class="form-control" placeholder="Nama Lengkap" name="namalengkap" type="text" required="">
							</div>
							<div class="form-group">
								<input class="form-control" placeholder="Username" name="username" type="text" required="">
							</div>
							<div class="form-group">
								<input class="form-control" placeholder="Email" name="email" type="email" required="">
							</div>
							<div class="form-group row">
							<div class="col-md-12">
									<select class="custom-select form-control" name="jk" required="">
										<option disabled selected value>Jenis Kelamin</option>
										<option value="Laki-Laki">Laki-Laki</option>
										<option value="Perempuan">Perempuan</option>
									</select>
								</div>
							</div>
							<div class="form-group">
								<input class="form-control" placeholder="Password" name="password" type="password" required="">
                            </div>
                            <div class="form-group row">
							<div class="col-md-12">
									<select class="custom-select form-control" name="jabatan" id="checkstatus">
										<option disabled selected value>Jabatan</option>
										<option value="2">petugas puskesmas</option>
										<option value="3">kaderPPKBD</option>
										<option value="4">penyuluhKB</option>
										<option value="5">administrator</option>
									</select>
								</div>
							</div>
							<div class="form-group" id="nip">
								<input class="form-control" placeholder="Nomor Induk Pegawai" name="nip" type="text" value="<?= set_value('nip')?>">
							</div>
							<div class="form-group" id="nik">
								<input class="form-control" placeholder="Nomor Induk Keluarga" name="NIK" type="text" value="<?= set_value('NIK')?>">
                            </div>
							<div class="form-group" id="NoKK">
								<input class="form-control" placeholder="Nomor Kartu Keluarga" name="NoKK" type="text" value="<?= set_value('NoKK')?>">
                            </div>
							<div class="form-group" id="desa">
								<input class="form-control" placeholder="Desa" name="desa" type="text" value="<?= set_value('desa')?>">
                            </div>
							<button type="submit" class="btn btn-primary">Daftar</button>
							<a title="Buat Akun" href="<?php echo site_url('Login/dologin') ?>">Log In<i class="fa fa-trash pull-right"></i></a>
						</fieldset>
					</form>
				</div>
			</div>
		</div><!-- /.col-->
	</div><!-- /.row -->	
	
		

	<script src="<?php echo base_url() ?>assets/js/jquery-1.11.1.min.js"></script>
	<script src="<?php echo base_url() ?>assets/js/bootstrap.min.js"></script>
	<script src="<?php echo base_url() ?>assets/js/chart.min.js"></script>
	<script src="<?php echo base_url() ?>assets/js/chart-data.js"></script>
	<script src="<?php echo base_url() ?>assets/js/easypiechart.js"></script>
	<script src="<?php echo base_url() ?>assets/js/easypiechart-data.js"></script>
	<script src="<?php echo base_url() ?>assets/js/bootstrap-datepicker.js"></script>
	<script>
		!function ($) {
			$(document).on("click","ul.nav li.parent > a > span.icon", function(){		  
				$(this).find('em:first').toggleClass("glyphicon-minus");	  
			}); 
			$(".sidebar span.icon").find('em:first').addClass("glyphicon-plus");
		}(window.jQuery);

		$(window).on('resize', function () {
		  if ($(window).width() > 768) $('#sidebar-collapse').collapse('show')
		})
		$(window).on('resize', function () {
		  if ($(window).width() <= 767) $('#sidebar-collapse').collapse('hide')
		})
	</script>	
</body>

</html>

<script>
        $("#checkstatus").change(function() {
            if ($(this).val() == 2) {
                $('#nip').show();
				$('#nik').hide();
				$('#NoKK').hide();
				$('#desa').hide();
			}else if ($(this).val() == 3){
				$('#NoKK').show();
				$('#desa').show();
                $('#nip').hide();
				$('#nik').hide();
			}else if ($(this).val() == 4){
				$('#nik').show();
                $('#nip').hide();
				$('#NoKK').hide();
				$('#desa').hide();
			}else if ($(this).val() == 5){
				$('#nik').hide();
                $('#nip').hide();
				$('#NoKK').hide();
				$('#desa').hide();
			}else{
				$('#nik').hide();
				$('#nip').hide();
				$('#NoKK').hide();
				$('#desa').hide();
            }
        });
    $("#checkstatus").trigger("change");
    </script>