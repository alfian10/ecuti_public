
<body >
    
    <div class="container-fluid">

            <h2>Form Pengajuan SK & Tugas</h2>
        <br>

        <div>
           <?php 
            $conn = mysqli_connect('localhost','id17830754_data_cuti1','h?M\68i@Dx*UBSUW','id17830754_data_cuti');
            $auto = mysqli_query($conn,"SELECT max(no_surat) as max_code FROM tb_form_sk");
            $data = mysqli_fetch_array($auto);
            $code = $data['max_code'];
            $urutan = (int)substr($code,1,3);
            $urutan++;
            $thn = date("y");
            $bln = date("m");
            $huruf = "K";
            $no_srt = $huruf.sprintf("%03s",$urutan);
            ?>
            <form action="<?php echo site_url('sk/insert') ?>" method="POST">
                
                <div class="form-group">
                    <label>No. Surat </label>
                    <input type="text" name="no_surat" value="<?php echo $no_srt ?>" class="form-control" readonly>
                </div>
                <div class="form-group">
                    <label>Tanggal Kegiatan</label>
                    <input type="date" name="tgl" class="form-control">
                </div>
                
                <div class=" form-group">
                    <label>NIP </label>
                    <input type="text" name="nip" class="form-control" placeholder="Masukkan NIP Anda">
                </div>
                <div class="form-group">
                    <label>Nama </label>
                    <input type="text" name="nama" class="form-control" placeholder="Masukkan Nama Anda">
                </div>
                <div class="form-group">
                    <label>Email </label>
                    <input type="text" name="email" class="form-control" placeholder="Masukkan Email Anda">
                </div>
                <div class="form-group">
                    <label>No Hp</label>
                    <input type="text" name="no_hp" class="form-control" placeholder="Masukkan No Hp Anda">
                </div>
                <div class="form-group">
                    <label>Deskripsi</label>
                    <textarea rows="7" cols="70" name="deskripsi" class="form-control" placeholder="Masukkan Deskripsi SK & Tugas"></textarea>
                </div>
                <div>
                    <input type="submit" name="submit" value="SIMPAN" class="btn btn-primary" />
                </div>

            </form>
    </div>
        </div>
</body>
			
