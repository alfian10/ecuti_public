<div class="container-fluid">
	<h3>Daftar Pengajuan SK</h3>
		
	<div class="row text-center">

		<?php foreach($data_masuk_sk as $dm_sk) : ?>
			<div class="card ml-3 mb-3" style="width: 16rem;" align="center">
			  <div class="card-body">
			    <h5 class="card-title"><?php echo $dm_sk->nama ?></h5>
			    <h6 class="card-subtitle mb-2 text-muted"><?php echo $dm_sk->nip ?></h6>
			    <br>
			    <h6 class="card-subtitle mb-2 text-muted">Tanggal Masuk : <br><?php echo $dm_sk->tgl ?></h6>
			    <br>
			    <h6 class="card-subtitle mb-2 text-muted">Status : <br><?php echo $dm_sk->status ?></h6>
			    <?php echo anchor('data_masuk_sk/detail_dashboard_sk/'.$dm_sk->id,'<div class="btn btn-sm btn-success">Detail</div>') ?>
			  </div>
			</div>
		<?php endforeach; ?>
	</div>
</div>
