<div class="container-fluid">
	
	<div class="card">
	  <h5 class="card-header">Detail Pegawai</h5>
	  <div class="card-body">
	  	<?php foreach($formulir_masuk_dosen as $fmsk_dsn): ?>
	    <div class="row">

	    	<div class="col-md8">
	    		<table class="table">
	    			<tr>
	    				<td>ID</td>
	    				<td><strong><?php echo $fmsk_dsn->id ?></strong></td>
	    			</tr>
	    			<tr>
	    				<td>No. Surat</td>
	    				<td><strong><?php echo $fmsk_dsn->no_surat ?></strong></td>
	    			</tr>
	    			<br>
	    			<tr>
	    				<td>Tanggal</td>
	    				<td><strong><?php echo $fmsk_dsn->tgl ?></strong></td>
	    			</tr>
	    			<tr>
	    				<td>NIP</td>
	    				<td><strong><?php echo $fmsk_dsn->nip_dosen ?></strong></td>
	    			</tr>
	    			<tr>
	    				<td>Nama</td>
	    				<td><strong><?php echo $fmsk_dsn->nama_dosen ?></strong></td>
	    			</tr>
	    			<tr>
	    				<td>Email</td>
	    				<td><strong><?php echo $fmsk_dsn->email ?></strong></td>
	    			</tr>
	    				<td>Jabatan</td>
	    				<td><strong><?php echo $fmsk_dsn->jabatan ?></strong></td>
	    			</tr>
	    			
	    		</table>
	    	</div>
	    	<div class="col-md8 ml-4">
	    		<table class="table">
	    			<tr>
	    				<td>No. Hp</td>
	    				<td><strong><?php echo $fmsk_dsn->no_hp ?></strong></td>
	    			</tr>
	    			<br>
	    			<tr>
	    				<td>Awal Cuti</td>
	    				<td><strong><?php echo $fmsk_dsn->awal_cuti ?></strong></td>
	    			</tr>
	    			<tr>
	    				<td>Akhir Cuti</td>
	    				<td><strong><?php echo $fmsk_dsn->akhir_cuti ?></strong></td>
	    			</tr>
	    			<tr>
	    				<td>Jenis Cuti</td>
	    				<td><strong><?php echo $fmsk_dsn->jenis_cuti ?></strong></td>
	    			</tr>
	    			<tr>
	    				<td>Keterangan</td>
	    				<td><strong><?php echo $fmsk_dsn->ket_cuti ?></strong></td>
	    			</tr>
	    			<tr>
	    				<td>Status</td>
	    				<td><strong><?php echo $fmsk_dsn->status ?></strong></td>
	    			</tr>
	    			<tr>
	    				<td>Alasan</td>
	    				<td><strong><?php echo $fmsk_dsn->alasan ?></strong></td>
	    			</tr>
	    		</table>
			
	    	</div>
			
	    </div>
	<?php endforeach; ?>
			<a class="btn btn-sm btn-danger" href="<?php echo base_url('sdn/dashboard_sdn/index') ?>">Kembali</a>
	  </div>
	</div>
</div>
