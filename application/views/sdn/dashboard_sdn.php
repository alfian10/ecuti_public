<div class="container-fluid">
	<div class="row text-center">
		
		<?php foreach($formulir_masuk_dosen as $fmsk_dsn) : ?>
			<div class="card ml-3 mb-3" style="width: 16rem;" align="center">
			  <div class="card-body">
			    <h5 class="card-title"><?php echo $fmsk_dsn->nama_dosen ?></h5>
			    <h6 class="card-subtitle mb-2 text-muted"><?php echo $fmsk_dsn->nip_dosen ?></h6>
			    <br>
			    <h6 class="card-subtitle mb-2 text-muted">Tanggal Masuk : <br><?php echo $fmsk_dsn->tgl ?></h6>
			    <br>
			    <h6 class="card-subtitle mb-2 text-muted">Status : <br><?php echo $fmsk_dsn->status ?></h6>
			    <?php echo anchor('sdn/dashboard_sdn/dashboard_detail/'.$fmsk_dsn->id,'<div class="btn btn-sm btn-success">Detail</div>') ?>
			  </div>
			</div>
		<?php endforeach; ?>

	</div>
</div>