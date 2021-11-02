<div class="container-fluid">
	<?php foreach($formulir_masuk_dosen as $fmsk_dsn) : ?>

		 	<form action="<?php echo base_url().'sdn/formulir_masuk_dosen/update' ?>" method="POST" >
		 		
		 		<div class="form-group">
		 		<label>Status Update</label>
		 		<input type="hidden" name="id" class="form-control" value="<?php echo $fmsk_dsn->id ?>">
		 		<select class="form-control" name="status" value="<?php echo $fmsk_dsn->status ?>">

		 			<option>Diterima</option>
		 			<option>Ditolak</option>
		 		</select>
		 		</div>

		 		<div class="form-group">
		 		<label>Alasan</label>
		 		<input type="hidden" name="id" class="form-control" value="<?php echo $fmsk_dsn->id ?>">
		 		<select class="form-control" name="alasan" value="<?php echo $fmsk_dsn->alasan ?>">

		 			<option>-</option>
					<option>Terlalu Sering Mengajukan Cuti</option>
		 			<option>Cuti Tahunan Sudah Habis</option>
		 			<option>Cuti Bersalin Diterima</option>
		 			<option>Cuti Sakit Ditolak(Tidak ada surat dokter)</option>
		 			<option>Cuti Sakit Diterima(Surat dokter terlampir)</option>


		 		</select>
		 		</div>
		 		
		 		<button type="submit" class="btn btn-primary btn-sm">Simpan</button>
		 	</form>

		 <?php endforeach; ?>
</div>
