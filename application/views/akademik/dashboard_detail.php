<div class="container-fluid">
	
	<div class="card">
	  <h5 class="card-header">Detail Mahasiswa</h5>
	  <div class="card-body">
	  	<?php foreach($formulir_masuk_mhs as $fmsk_mhs): ?>
	    <div class="row">

	    	<div class="col-md8">
	    		<table class="table">
	    			<tr>
	    				<td>ID</td>
	    				<td><strong><?php echo $fmsk_mhs->id_mhs ?></strong></td>
	    			</tr>
	    			<br>
	    			<tr>
	    				<td>Tanggal</td>
	    				<td><strong><?php echo $fmsk_mhs->tgl ?></strong></td>
	    			</tr>
	    			<tr>
	    				<td>NIM</td>
	    				<td><strong><?php echo $fmsk_mhs->nim_mhs ?></strong></td>
	    			</tr>
	    			<tr>
	    				<td>Nama</td>
	    				<td><strong><?php echo $fmsk_mhs->nama_mhs ?></strong></td>
	    			</tr>
	    			<tr>
	    				<td>Email</td>
	    				<td><strong><?php echo $fmsk_mhs->email ?></strong></td>
	    			</tr>
	    			<tr>
	    				<td>Prodi</td>
	    				<td><strong><?php echo $fmsk_mhs->prodi ?></strong></td>
	    			</tr>
	    		</table>
	    	</div>
	    	<div class="col-md8 ml-4">
	    		<table class="table">
	    			<tr>
	    				<td>No. Hp</td>
	    				<td><strong><?php echo $fmsk_mhs->no_hp ?></strong></td>
	    			</tr>
	    			<tr>
	    				<td>Alamat</td>
	    				<td><strong><?php echo $fmsk_mhs->alamat ?></strong></td>
	    			</tr>
	    			<br>
	    			<tr>
	    				<td>Semester</td>
	    				<td><strong><?php echo $fmsk_mhs->cuti ?></strong></td>
	    			</tr>
	    			<tr>
	    				<td>Tahun Ajaran</td>
	    				<td><strong><?php echo $fmsk_mhs->ta ?></strong></td>
	    			</tr>
	    			<tr>
	    				<td>Keterangan</td>
	    				<td><strong><?php echo $fmsk_mhs->keterangan_cuti ?></strong></td>
	    			</tr>
	    			<tr>
	    				<td>Status</td>
	    				<td><strong><?php echo $fmsk_mhs->status ?></strong></td>
	    			</tr>
	    			<tr>
	    				<td>Alasan</td>
	    				<td><strong><?php echo $fmsk_mhs->alasan ?></strong></td>
	    			</tr>
	    		</table>
	    		<div class="col col-md8 ml-4">
	    		<table class="table">
			    	<div class="countdown">
			    	<h5>Sisa Cuti Mahasiswa</h5>
	    			<tr>
	    				<td>
	    					<strong>Hari</strong>
	    					<div id="hari">Hari</div></td>
				    	<td>
				    		<strong>Jam</strong>
				    		<div id="jam">Jam</div></td>
				    	<td>
				    		<strong>Menit</strong>
				    		<div id="menit">Menit</div></td>
				    	<td>
				    		<strong>Detik</strong>
				    		<div id="detik">Detik</div></td>
	    			</tr>
				    	</div>

				    	<script type="text/javascript">
				    		var countDate = new Date('Jan 01 2022 00:00:00').getTime();

				    		function newYear(){
				    			var now = new Date().getTime();
				    			gap = countDate - now;

				    			var detik = 1000;
				    			var menit = detik * 60;
				    			var jam   = menit * 60;
				    			var hari  = jam * 24;

				    			var h = Math.floor(gap / (hari));
				    			var j = Math.floor((gap % (hari)) / (jam));
				    			var m = Math.floor((gap % (jam)) / (menit));
				    			var d = Math.floor((gap % (menit)) / (detik));

				    			document.getElementById('hari').innerText = h;
				    			document.getElementById('jam').innerText = j;
				    			document.getElementById('menit').innerText = m;
				    			document.getElementById('detik').innerText = d;
				    		}
				    		setInterval(function(){
				    			newYear();
				    		}, 1000)
				    	</script>
	    		</table>
	    		<strong>*reminder kirim melalu email</strong>
	    	</div>
	    	</div>
			
	    </div>
	<?php endforeach; ?>
			<a class="btn btn-sm btn-danger" href="<?php echo base_url('akademik/dashboard_akademik/index') ?>">Kembali</a>
	  </div>
	</div>
</div>
