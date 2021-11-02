
<body >
    
    <div class="container-fluid">

            <h2>Form Pengajuan Cuti Pegawai</h2>
        <br>

        <div>
           <?php 
            $conn = mysqli_connect('localhost','root','','db_cuti');
            $auto = mysqli_query($conn,"SELECT max(no_surat) as max_code FROM tb_form_dosen");
            $data = mysqli_fetch_array($auto);
            $code = $data['max_code'];
            $urutan = (int)substr($code,1,3);
            $urutan++;
            $thn = date("y");
            $bln = date("m");
            $huruf = "K";
            $no_srt = $huruf.sprintf("%03s",$urutan);
            ?>
            <form action="<?php echo site_url('dosen/insert') ?>" method="POST">
                <div class="form-group">
                    <label>No. Surat </label>
                    <input type="text" name="no_surat" value="<?php echo $no_srt ?>" class="form-control" readonly>
                </div>
                
                <div class="form-group">
                    <label>Tanggal </label>
                    <input type="date" name="tgl" class="form-control" required>
                </div>
                
                <div class=" form-group">
                    <label>NIP </label>
                    <input type="text" name="nip_dosen" class="form-control" placeholder="Masukkan NIP Anda">
                </div>
                <div class="form-group">
                    <label>Nama </label>
                    <input type="text" name="nama_dosen" class="form-control" placeholder="Masukkan Nama Anda">
                </div>
                <div class="form-group">
                    <label>Email </label>
                    <input type="text" name="email" class="form-control" placeholder="Masukkan Email Anda">
                </div>
                <div class="form-group">
                    <label>Jabatan </label>
             <input type="text" name="jabatan" class="form-control" placeholder="Masukkan Jabatan Anda">
                </div>
                <div class="form-group">
                    <label>No Hp</label>
                    <input type="text" name="no_hp" class="form-control" placeholder="Masukkan No Hp Anda">
                </div>
                <div class="form-group">
                    <label>Awal Cuti</label>
                    <input type="date" name="awal_cuti">
                    <label>Akhir Cuti</label>
                    <input type="date" name="akhir_cuti">
                </div>
		<div class="form-group">
                    <label>Jenis Cuti </label>
                    <select name="jenis_cuti" class="form-control">
                        <option value="" checked>--Pilih Jenis Cuti--</option>
                        <option value="besar">Cuti Besar</option>
                        <option value="tahunan">Cuti Tahunan</option>
                        <option value="sakit">Cuti Sakit</option>
			<option value="bersalin">Cuti Bersalin</option>
			<option value="penting">Cuti Alasan Penting</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Keterangan Cuti</label>
                    <input type="text" name="ket_cuti" class="form-control" placeholder="Masukkan Keterangan Cuti Anda">
                </div>
                <div>
                    <input type="submit" name="submit" value="SIMPAN" class="btn btn-primary" />
                </div>

            </form>
    </div>
        </div>
</body>
			
