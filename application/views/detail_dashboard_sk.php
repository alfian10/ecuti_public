<div class="container-fluid">
	
	<div class="card">
	  <h5 class="card-header">Detail SK</h5>
	  <div class="card-body">
	  	<?php foreach($data_masuk_sk as $dsb): ?>
	    <div class="row">

	    	<div class="col-md8">
	    		<table class="table">
	    			<tr>
	    				<td>ID</td>
	    				<td><strong><?php echo $dsb->id ?></strong></td>
	    			</tr>
	    			<tr>
	    				<td>No. Surat</td>
	    				<td><strong><?php echo $dsb->no_surat ?></strong></td>
	    			</tr>

	    			<tr>
	    				<td>Tanggal</td>
	    				<td><strong><?php echo $dsb->tgl ?></strong></td>
	    			</tr>
	    			<tr>
	    				<td>NIP</td>
	    				<td><strong><?php echo $dsb->nip ?></strong></td>
	    			</tr>
	    			<tr>
	    				<td>Nama</td>
	    				<td><strong><?php echo $dsb->nama ?></strong></td>
	    			</tr>
	    			<tr>
	    				<td>Email</td>
	    				<td><strong><?php echo $dsb->email ?></strong></td>
	    			</tr>
	    			<tr>
	    				<td>No. Hp</td>
	    				<td><strong><?php echo $dsb->no_hp ?></strong></td>
	    			</tr>
	    			<tr>
	    				<td>Deskripsi</td>
	    				<td><strong><?php echo $dsb->deskripsi ?></strong></td>
	    			</tr>
	    			<tr>
	    				<td>Status</td>
	    				<td><strong><?php echo $dsb->status ?></strong></td>
	    			</tr>
	    			<tr>
	    				<td>Alasan</td>
	    				<td><strong><?php echo $dsb->alasan ?></strong></td>
	    			</tr>

	    		</table>
	    		<?php endforeach; ?>
			<a class="btn btn-sm btn-danger" href="<?php echo base_url('data_masuk_sk/index') ?>">Kembali</a>
	    </div>
	
	  </div>
	</div>
</div>