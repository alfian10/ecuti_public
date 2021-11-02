<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<table>

		<div class="card">
	  	<div class="card-body">
	  	<?php foreach($formulir_masuk_sk as $fmsk_sk): ?>

				<p><h4 align="center"><strong>SURAT KEPUTUSAN</strong><br><br>
				KETUA SEKOLAH TINGGI MANAJEMEN INFORMATIKA DAN KOMPUTER AKAKOM YOGYAKARTA<br>
				NOMOR : <?php echo $fmsk_sk->no_surat ?><br><br>
				</h4></p>
				<p>
				
		<div class="col-md8">
	    		<table class="table" >
	    			<tr>
	    				<td></td>
	    				<td>No. Surat</td>
	    				<td><strong> : <?php echo $fmsk_sk->no_surat ?></strong></td>
	    			</tr>
	    			<br>

	    			<tr>
	    				<td></td>
	    				<td>NIP</td>
	    				<td><strong> : <?php echo $fmsk_sk->nip ?></strong></td>
	    			</tr>
	    			<tr>
	    				<td></td>
	    				<td>Nama</td>
	    				<td><strong> : <?php echo $fmsk_sk->nama ?></strong></td>
	    			</tr>
	    			<tr>
	    				<td></td>
	    				<td>Email</td>
	    				<td><strong> : <?php echo $fmsk_sk->email ?></strong></td>
	    			</tr>
	    			<tr>
	    				<td></td>
	    				<td>No. Hp</td>
	    				<td><strong> : <?php echo $fmsk_sk->no_hp ?></strong></td>
	    			</tr>
	    			<br>
	    			<tr>
	    				<td></td>
	    				<td>Tanggal</td>
	    				<td><strong> : <?php echo $fmsk_sk->tgl ?></strong></td>
	    			</tr>
	    			<tr>
	    				<td></td>
	    				<td>Deskripsi</td>
	    				<td><strong> : <?php echo $fmsk_sk->deskripsi ?></strong></td>
	    			</tr>
	    			<tr>
	    				<td></td>
	    				<td>Status</td>
	    				<td><strong> : <?php echo $fmsk_sk->status ?></strong></td>
	    			</tr>
	    			<tr>

	    				<td></td>
	    				<td>Alasan</td>
	    				<td><strong> : <?php echo $fmsk_sk->alasan ?></strong></td>
	    			</tr>
	    		</table>
	    	</div>
	    	

	    </div>

	<p>Dengan ini pengajuan sk & tugas pada tanggal <?php echo $fmsk_sk->tgl ?>, dengan keterangan "<?php echo $fmsk_sk->deskripsi ?>" <?php echo $fmsk_sk->status?> dengan alasan "<?php echo $fmsk_sk->alasan ?>".</p>
	<p>Demikian pemberitahuan pengajuan cuti atas nama <?php echo $fmsk_sk->nama ?>. Saya ucapkan terimakasih.</p>
	    		
	<?php endforeach; ?>
	  </div>
	</div>
	</table>
	
	<script type="text/javascript">
		window.print();
	</script>
</body>
</html>
