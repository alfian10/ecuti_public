<body>
	<div class="container-fluid">
	<div class="row text-center">
		
		<?php foreach($formulir_masuk_mhs as $fmsk_mhs) : ?>
			<div class="card ml-3 mb-3" style="width: 16rem;" align="center">
			  <div class="card-body">
			    <h5 class="card-title"><?php echo $fmsk_mhs->nama_mhs ?></h5>
			    <h6 class="card-subtitle mb-2 text-muted"><?php echo $fmsk_mhs->nim_mhs ?></h6>
			    <br>
			    <h6 class="card-subtitle mb-2 text-muted">Tanggal Masuk : <br><?php echo $fmsk_mhs->tgl ?></h6>
			    <br>
			    <h6 class="card-subtitle mb-2 text-muted">Status : <br><?php echo $fmsk_mhs->status ?></h6>
			    <?php echo anchor('akademik/dashboard_akademik/dashboard_detail/'.$fmsk_mhs->id_mhs,'<div class="btn btn-sm btn-success">Detail</div>') ?>
			  </div>
			</div>
		<?php endforeach; ?>

	</div>
</div>
</body>