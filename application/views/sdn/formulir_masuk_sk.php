<body>
	<div class="container-fluid" >

			<table class="table table-bordered" >
		<tr align="center">
			<th>NO</th>
			<th>TANGGAL MASUK</th>
			<th>NO SURAT</th>
      		<th>NAMA</th>
      		<th>STATUS</th>
			<th colspan="1">AKSI</th>
			<th>ALASAN</th>
			

		</tr>

		<?php 
		$no=1;

			foreach($formulir_masuk_sk as $fmsk_sk) : ?>

				<tr align="center">
					<td><?php echo $no++ ?></td>
					<td><?php echo $fmsk_sk->tgl ?></td>
					<td><?php echo $fmsk_sk->no_surat ?></td>
					<td><?php echo $fmsk_sk->nama ?></td>
					<td><?php echo $fmsk_sk->status ?></td>
					<td>
					<?php echo anchor('sdn/formulir_masuk_sk/detail/'.$fmsk_sk->id,'<div class="btn btn-sm btn-success"> Detail</div>') ?>
					<?php echo anchor('sdn/formulir_masuk_sk/print/'.$fmsk_sk->id,'<div class="btn btn-sm btn-danger"><i class="fa fa-print"></i> Print</div>') ?>
					<?php echo anchor('sdn/formulir_masuk_sk/email/'.$fmsk_sk->id,'<div class="btn btn-sm btn-warning"><i class="fa fa-envelope"></i> Email</div>') ?>
					</td>
					<td><?php echo $fmsk_sk->alasan ?></td>
					
				</tr>

		<?php endforeach; ?>
	</table>
		</div>
</body>