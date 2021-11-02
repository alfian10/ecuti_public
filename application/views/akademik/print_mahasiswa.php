<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<table>
		<div class="card">
	  <div class="card-body">
	  	<?php foreach($formulir_masuk_mhs as $fmsk_mhs): ?>
	    <div class="row">

	    	<div class="col-md8">
	    		<table class="table">
	    			<tr>
	    				<td>ID</td>
	    				<td><strong> : <?php echo $fmsk_mhs->id_mhs ?></strong></td>
	    			</tr>
	    			<br>
	    			<tr>
	    				<td>Tanggal</td>
	    				<td><strong> : <?php echo $fmsk_mhs->tgl ?></strong></td>
	    			</tr>
	    			<tr>
	    				<td>NIM</td>
	    				<td><strong> : <?php echo $fmsk_mhs->nim_mhs ?></strong></td>
	    			</tr>
	    			<tr>
	    				<td>Nama</td>
	    				<td><strong> : <?php echo $fmsk_mhs->nama_mhs ?></strong></td>
	    			</tr>
	    			<tr>
	    				<td>Email</td>
	    				<td><strong> : <?php echo $fmsk_mhs->email ?></strong></td>
	    			</tr>
	    			<tr>
	    				<td>Prodi</td>
	    				<td><strong> : <?php echo $fmsk_mhs->prodi ?></strong></td>
	    			</tr>
	    		</table>
	    	</div>
	    	<div class="col-md8 ml-4">
	    		<table class="table">
	    			<tr>
	    				<td>No. Hp</td>
	    				<td><strong> : <?php echo $fmsk_mhs->no_hp ?></strong></td>
	    			</tr>
	    			<tr>
	    				<td>Alamat</td>
	    				<td><strong> : <?php echo $fmsk_mhs->alamat ?></strong></td>
	    			</tr>

	    			<br>
	    			<tr>
	    				<td>Semester</td>
	    				<td><strong> : <?php echo $fmsk_mhs->cuti ?></strong></td>
	    			</tr>
	    			<tr>
	    				<td>Tahun Ajaran</td>
	    				<td><strong> : <?php echo $fmsk_mhs->ta ?></strong></td>
	    			</tr>
	    			<tr>
	    				<td>Keterangan</td>
	    				<td><strong> : <?php echo $fmsk_mhs->keterangan_cuti ?></strong></td>
	    			</tr>
	    			<tr>
	    				<td>Status</td>
	    				<td><strong> : <?php echo $fmsk_mhs->status ?></strong></td>
	    			</tr>
	    			<tr>
	    				<td>Alasan</td>
	    				<td><strong> : <?php echo $fmsk_mhs->alasan ?></strong></td>
	    			</tr>
	    		</table>
	    	</div>

	    </div>
	<?php endforeach; ?>
	  </div>
	</div>
	</table>
	<script type="text/javascript">
		window.print();
	</script>
</body>
</html>