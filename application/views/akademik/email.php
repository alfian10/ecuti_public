<!DOCTYPE html>
<html>
<div class="contrainer-fluid">
<head>
	<title><?=$title ?></title>
</head>
<body>
	
	<?= form_open('akademik/formulir_masuk_mhs/sendMail')?>
		<table class="form-group">
			<tr class="form-group">
				<td>Email</td>
				<td>:</td>
				<td><input type="email" name="email" placeholder="Email Anda . . ." class="form-control"></td>
			</tr>
			<tr>
				<td>Subject</td>
				<td>:</td>
				<td><input type="text" name="subject" placeholder="Subject Email . . ." class="form-control"></td>
			</tr>
			<tr>
				<td>Pesan</td>
				<td>:</td>
				<td><textarea name="pesan" cols="30" rows="10" placeholder="Pesan Email" class="form-control"></textarea></td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td><input type="submit" name="submit" value="KIRIM EMAIL" class="form-control"></td>
			</tr>
		</table>
	<?= form_close() ?>
	</div>
</body>
</html>