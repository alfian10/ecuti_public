<div class="container-fluid">
	
	<div class="card">
	  <h5 class="card-header">Detail Mahasiswa</h5>
	<center><b>Permohonan Berhenti Kuliah Sementara(Cuti Akademik)</b></center>

	  <div class="card-body">
	  	<?php foreach($formulir_masuk_mhs as $fmsk_mhs): ?>
			<tr>
	    			<td><strong><p align="right"><?php echo $fmsk_mhs->tgl ?></p></strong></td>
	    		</tr>
	    <div class="row">
	    	<div class="col-md4">
			<strong>Yang bertandatangan dibawah ini,</strong><br>
	    		<table class="table" >
				<tr>
	    				<td>Nama&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&nbsp;
	    				<strong>: &ensp;&ensp;<?php echo $fmsk_mhs->nama_mhs ?></strong></td>
	    			</tr>
				<tr>
	    				<td>NIM&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&nbsp;&nbsp;
	    				<strong>: &ensp;&ensp;<?php echo $fmsk_mhs->nim_mhs ?></strong></td>
	    			</tr>
				<tr>
	    				<td>Prodi &ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&nbsp;
	    				<strong>: &ensp;&ensp;<?php echo $fmsk_mhs->prodi ?></strong></td>
	    			</tr>
				<tr>
	    				<td>No Hp&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;
	    				<strong>: &ensp;&ensp;<?php echo $fmsk_mhs->no_hp ?></strong></td>
	    			</tr>
	    			<tr>
	    				<td>Alamat Rumah&ensp;&ensp;&ensp;&ensp;&ensp;&nbsp;
	    				<strong>: &ensp;&ensp;<?php echo $fmsk_mhs->alamat ?></strong></td>
	    			</tr> 			
	    		</table>
			<b>Dengan ini mengajukan permohonan berhenti kuliah sementara(Cuti Akademik)</b><br>
	    		<table class="table">
				<tr>
	    				<td> Pada Semester&ensp;&ensp;&ensp;&ensp;&ensp;&nbsp;
	    				<strong>: &ensp;&ensp;<?php echo $fmsk_mhs->cuti ?></strong></td>
	    			</tr>
				<tr>
	    				<td>Thn Ajaran&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;
	    				<strong>: &ensp;&ensp;<?php echo $fmsk_mhs->ta ?></strong></td>			
	    		</table>
			<b>Permohonan ini saya ajukan dengan alasan</b><br>
			<table class="table">
				<tr>
	    				<td>Keterangan Cuti&ensp;&ensp;&ensp;&ensp;
	    				<strong>: &ensp;&ensp;<?php echo $fmsk_mhs->keterangan_cuti ?></strong></td>
	    			</tr>			
	    		</table>
			<strong><p align="right">Mengetahui,</br>
			Pemohon,</p>
			</strong>

			<br><br>
			<strong><p align="right"><?php echo $fmsk_mhs->nama_mhs ?></p></strong><br>
	    	</div>
	    	
	    </div>
		
	<?php endforeach; ?>
			<?php echo anchor('akademik/formulir_masuk_mhs/edit/'.$fmsk_mhs->id_mhs,'<div class="btn btn-primary btn-sm">Edit</div>') ?>
	    	<a class="btn btn-sm btn-danger" href="<?php echo base_url('akademik/formulir_masuk_mhs/index') ?>">Kembali</a>
	  </div>
	</div>
</div>
