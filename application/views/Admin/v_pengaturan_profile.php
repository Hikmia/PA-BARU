<!DOCTYPE html>
<html>
<head>
	<title>Pengaturan Akun</title>
</head>
<body>
	<a href="<?= site_url('admin') ?>">Home</a><br>
	<table style="margin: 10px auto" border="1">
		<tr>
			<td rowspan="9" valign="top">
				<img src="<?= base_url('/assets/images/'.$foto); ?>" style="width: 50px;">
				<form action="<?= site_url('admin/add_foto') ?>" method="POST">
					<input type="file" name="foto">
					<input type="submit" value="upload">
				</form>
			</td>
			<td>Nama Lengkap</td>
			<td><?= $namalengkap ?></td>
		</tr>
		<tr>
			<td>Email</td>
			<td><?= $email ?></td>
		</tr>
        <tr>
			<td>Jabatan</td>
			<td><?= $jabatan ?></td>
		</tr>
	</table>
	<?= $foto ?><br>
	<a href="<?= site_url('admin/edit_profil') ?>">Edit</a>
</body>
</html>