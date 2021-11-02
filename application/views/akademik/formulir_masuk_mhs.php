<body>
	<div class="container-fluid" >

			<table class="table table-bordered" >
		<tr align="center">
			<th>NO</th>
			<th>TANGGAL MASUK</th>
			<th>NIM</th>
      		<th>NAMA</th>
			<th colspan="1">AKSI</th>
			<th>STATUS</th>
			

		</tr>

		<?php 
		$no=1;

			foreach($formulir_masuk_mhs as $fmsk_mhs) : ?>

				<tr align="center">
					<td><?php echo $no++ ?></td>
					<td><?php echo $fmsk_mhs->tgl ?></td>
					<td><?php echo $fmsk_mhs->nim_mhs ?></td>
					<td><?php echo $fmsk_mhs->nama_mhs ?></td>
					<td>
					<?php echo anchor('akademik/formulir_masuk_mhs/detail/'.$fmsk_mhs->id_mhs,'<div class="btn btn-sm btn-success">Detail</div>') ?>
					<?php echo anchor('akademik/formulir_masuk_mhs/print/'.$fmsk_mhs->id_mhs,'<div class="btn btn-sm btn-danger"><i class="fa fa-print"></i> Print</div>') ?>
					<?php echo anchor('akademik/formulir_masuk_mhs/email/'.$fmsk_mhs->id_mhs,'<div class="btn btn-sm btn-warning"><i class="fa fa-envelope"></i> Email</div>') ?>
					</td>
					<td><?php echo $fmsk_mhs->status ?></td>
					
				</tr>

		<?php endforeach; ?>

	</table>
		</div>
</body>