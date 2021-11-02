<!DOCTYPE html>
<html>
<head>
</head>

<body>

	<table>
		<div class="card">
	  <div class="card-body">
	  	<?php foreach($formulir_masuk_dosen as $fmsk_dsn): ?>
	    <div class="row">
	    	<p align="right">Yogyakarta, <?php echo $fmsk_dsn->tgl ?></p>

	    	<div class="col-md8">
	    		<table class="table" >
	    			<tr>
	    				<td></td>
	    				<td>No. Surat</td>
	    				<td><strong> : <?php echo $fmsk_dsn->no_surat ?></strong></td>
	    			</tr>
	    			<br>

	    			<tr>
	    				<td></td>
	    				<td>NIP</td>
	    				<td><strong> : <?php echo $fmsk_dsn->nip_dosen ?></strong></td>
	    			</tr>
	    			<tr>
	    				<td></td>
	    				<td>Nama</td>
	    				<td><strong> : <?php echo $fmsk_dsn->nama_dosen ?></strong></td>
	    			</tr>
	    			<tr>
	    				<td></td>
	    				<td>Email</td>
	    				<td><strong> : <?php echo $fmsk_dsn->email ?></strong></td>
	    			</tr>
                        <td></td>
	    				<td>Jabatan</td>
	    				<td><strong> : <?php echo $fmsk_dsn->jabatan ?></strong></td>
	    			</tr>
	    			<tr>
	    				<td></td>
	    				<td>No. Hp</td>
	    				<td><strong> : <?php echo $fmsk_dsn->no_hp ?></strong></td>
	    			</tr>
	    			<br>
	    			<tr>
	    				<td></td>
	    				<td>Awal Cuti</td>
	    				<td><strong> : <?php echo $fmsk_dsn->awal_cuti ?></strong></td>
	    			</tr>
	    			<tr>
	    				<td></td>
	    				<td>Akhir Cuti</td>
	    				<td><strong> : <?php echo $fmsk_dsn->akhir_cuti ?></strong></td>
	    			</tr>
	    			<tr>
	    				<td></td>
	    				<td>Jenis Cuti</td>
	    				<td><strong> : <?php echo $fmsk_dsn->jenis_cuti ?></strong></td>
	    			</tr>
	    			<tr>
	    				<td></td>
	    				<td>Keterangan</td>
	    				<td><strong> : <?php echo $fmsk_dsn->ket_cuti ?></strong></td>
	    			</tr>
	    			<tr>
	    				<td></td>
	    				<td>Status</td>
	    				<td><strong> : <?php echo $fmsk_dsn->status ?></strong></td>
	    			</tr>
	    			<tr>

	    				<td></td>
	    				<td>Alasan</td>
	    				<td><strong> : <?php echo $fmsk_dsn->alasan ?></strong></td>
	    			</tr>
	    		</table>
	    	</div>
	    	

	    </div>
	<?php endforeach; ?>
	  </div>
	</div>
	</table>

	<p>Dengan ini pengajuan cuti kerja selama <?php echo $fmsk_dsn->awal_cuti ?> sampai <?php echo $fmsk_dsn->akhir_cuti ?> hari kerja, dengan keterangan "<?php echo $fmsk_dsn->ket_cuti ?>" <?php echo $fmsk_dsn->status?> dengan alasan "<?php echo $fmsk_dsn->alasan ?>".</p>
	<p>Demikian pemberitahuan pengajuan cuti atas nama <?php echo $fmsk_dsn->nama_dosen ?>. Saya ucapkan terimakasih.</p>


	<script type="text/javascript">

		window.print("print_dosen");

	</script>
</body>

</html>
