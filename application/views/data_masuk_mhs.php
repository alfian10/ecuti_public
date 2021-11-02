<div class="container-fluid">
	<h3>Daftar Data Masuk Mahasiswa</h3>
	<div class="row text-center">
		
		<?php foreach($data_masuk_mhs as $dm_mhs) : ?>
			<div class="card ml-3 mb-3" style="width: 16rem;" align="center">
			  <div class="card-body">
			    <h5 class="card-title"><?php echo $dm_mhs->nama_mhs ?></h5>
			    <h6 class="card-subtitle mb-2 text-muted"><?php echo $dm_mhs->nim_mhs ?></h6>
			    <br>
			    <h6 class="card-subtitle mb-2 text-muted">Tanggal Masuk : <br><?php echo $dm_mhs->tgl ?></h6>
			    <br>
			    <h6 class="card-subtitle mb-2 text-muted">Status : <?php echo $dm_mhs->status ?></h6>
			    <?php echo anchor('data_masuk_mhs/detail_data_masuk_mhs/'.$dm_mhs->id_mhs,'<div class="btn btn-sm btn-success">Detail</div>') ?>

			  </div>
			</div>

		<?php endforeach; ?>


	</div>
</div>