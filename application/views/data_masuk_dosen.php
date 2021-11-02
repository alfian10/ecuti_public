<div class="container-fluid">
	<h3>Daftar Data Masuk Pegawai</h3>
	<div class="row text-center">
		
		<?php foreach($data_masuk_dosen as $dm_dsn) : ?>
			<div class="card ml-3 mb-3" style="width: 16rem;" align="center">
			  <div class="card-body">
			    <h5 class="card-title"><?php echo $dm_dsn->nama_dosen ?></h5>
			    <h6 class="card-subtitle mb-2 text-muted"><?php echo $dm_dsn->nip_dosen ?></h6>
			    <br>
			    <h6 class="card-subtitle mb-2 text-muted">Tanggal Masuk : <br><?php echo $dm_dsn->tgl ?></h6>
			    <br>
			    <h6 class="card-subtitle mb-2 text-muted">Status : <br><?php echo $dm_dsn->status ?></h6>
			    <?php echo anchor('data_masuk_dosen/detail_data_masuk_dosen/'.$dm_dsn->id,'<div class="btn btn-sm btn-success">Detail</div>') ?>
			  </div>
			</div>
		<?php endforeach; ?>

	</div>
</div>
