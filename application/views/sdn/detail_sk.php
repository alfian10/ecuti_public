<div class="container-fluid">
	
	<div class="card">
	  <h5 class="card-header">Detail SK</h5>
	  <div class="card-body">
	  	<?php foreach($formulir_masuk_sk as $fmsk_sk): ?>
	    <div class="row">

	    	<div class="col-md8">
	    		<table class="table">
	    			<tr>
	    				<td>ID</td>
	    				<td><strong><?php echo $fmsk_sk->id ?></strong></td>
	    			</tr>
	    			<tr>
	    				<td>No. Surat</td>
	    				<td><strong><?php echo $fmsk_sk->no_surat ?></strong></td>
	    			</tr>

	    			<tr>
	    				<td>Tanggal</td>
	    				<td><strong><?php echo $fmsk_sk->tgl ?></strong></td>
	    			</tr>
	    			<tr>
	    				<td>NIP</td>
	    				<td><strong><?php echo $fmsk_sk->nip ?></strong></td>
	    			</tr>
	    			<tr>
	    				<td>Nama</td>
	    				<td><strong><?php echo $fmsk_sk->nama ?></strong></td>
	    			</tr>
	    			<tr>
	    				<td>Email</td>
	    				<td><strong><?php echo $fmsk_sk->email ?></strong></td>
	    			</tr>
	    			<tr>
	    				<td>No. Hp</td>
	    				<td><strong><?php echo $fmsk_sk->no_hp ?></strong></td>
	    			</tr>
	    			<tr>
	    				<td>Deskripsi</td>
	    				<td><strong><?php echo $fmsk_sk->deskripsi ?></strong></td>
	    			</tr>
	    			<tr>
	    				<td>Status</td>
	    				<td><strong><?php echo $fmsk_sk->status ?></strong></td>
	    			</tr>
	    			<tr>
	    				<td>Alasan</td>
	    				<td><strong><?php echo $fmsk_sk->alasan ?></strong></td>
	    			</tr>

	    		</table>
	    		<?php endforeach; ?>
			<td>
	    	<?php echo anchor('sdn/formulir_masuk_sk/edit_sk/'.$fmsk_sk->id,'<div class="btn btn-primary btn-sm"> Edit
	    		</div>') ?>
	    	<a class="btn btn-sm btn-danger" href="<?php echo base_url('sdn/formulir_masuk_sk/index') ?>">Kembali</a>
	    </td>
	    </div>
	
	  </div>
	</div>
</div>