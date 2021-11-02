<body>
	<div class="container-fluid">
        	<h2>Form Pengajuan Cuti Mahasiswa</h2>
    	<br>

	    <div>
	    	<form action="<?php echo site_url('mahasiswa/insert') ?>" method="POST">
	    		<div class="form-group">
                    <label>Tanggal </label>
                    <input type="date" name="tgl" class="form-control">
                </div>
	    		<div class="form-group">
	    			<label>NIM Mahasiswa</label>
	    			<input type="text" name="nim_mhs" class="form-control" placeholder="Masukkan NIM Anda">
	    		</div>
	    		<div class="form-group">
	    			<label>Nama Mahasiswa</label>
	    			<input type="text" name="nama_mhs" class="form-control" placeholder="Masukkan Nama Anda">
	    		</div>
	    		<div class="form-group">
                    <label>Email </label>
                    <input type="text" name="email" class="form-control" placeholder="Masukkan Email Anda">
                </div>
	    		<div class="form-group">
	    			<label>Prodi Mahasiswa</label>
	    			<select name="prodi" class="form-control">
	    				<option value="TI" checked>Teknik Informatika</option>
	    				<option value="SI">Sistem Informasi</option>
	    				<option value="MI">Manajemen Informasi</option>
	    				<option value="TK">Teknik Komputer</option>
	    			</select>
	    		</div>
	    		<div class="form-group">
	    			<label>No Hp Mahasiswa</label>
	    			<input type="text" name="no_hp" class="form-control" placeholder="Masukkan No Hp Anda">
	    		</div>
	    		<div class="form-group">
	    			<label>Alamat Mahasiswa</label>
	    			<input type="text" name="alamat" class="form-control" placeholder="Masukkan Alamat Anda">
	    		</div>
	    		<div class="form-group">
	    			<label>Mulai Cuti</label>
	    			<select name="cuti" class="form-control">
	    				<option value="Ganjil" checked>Ganjil</option>
	    				<option value="Genap">Genap</option>
	    			</select>
	    		</div>
	    		<div class="form-group">
	    			<label>Tahun Ajaran</label>
	    			<select name="ta" class="form-control">
	    				<option value="2019/2020" checked>2019/2020</option>
	    				<option value="2020/2021">2020/2021</option>
	    			</select>
	    		</div>
	    		<div class="form-group">
	    			<label>Keterangan Cuti</label>
	    			<input type="text" name="keterangan_cuti" class="form-control" placeholder="Masukkan Keterangan Cuti Anda">
	    		</div>
	    		<div>
	    			<input type="submit" name="simpan" value="SIMPAN" class="btn btn-primary" />
	    		</div>

	    	</form>
	    </div>
        </div>

</body>
			
