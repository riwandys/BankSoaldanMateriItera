    <div class="container" id="lp-1">
        <div id="lp-1-prodi" class="title">
        	<?php foreach ($matkul as $value) { ?>
        	<h4>Materi <?php echo $value['nama_matkul']?></h4>
        	<?php } ?>
        </div>
        <div id="lp-1-cari" class="search-section">
        	<input type="text" class="search-bar" name="cari" id="cari" placeholder="Search">   </input>
        </div>
        <div style="clear: both;"></div>
        <?php if ($cek_operatoradmin == true) {?>
            <div class="action-section">
                <!-- tombol tambah -->
                <div id="lp-1-tambahmateri">
                    <a class="button button-add" href="<?php echo base_url('add/materi/'.$value["kode_matkul"])?>"><h3>Tambah materi</h3></a>
                </div>

                <!-- tombol hapus -->
                <div id="lp-1-hapusmateri">
                    <input class="button button-delete" type="submit" name="hapus" id="hapus" value="Hapus Materi">
                </div>
            </div>
        <?php } ?>
        <div style="clear: both;"></div>
        <div id="lp-1-prodi-matkul" class="flexbox-container wrap">
            <?php foreach ($materi as $value) { ?>
                <a class="card small-card" href="<?php echo base_url('assets/materi/'.$value["file"])?>">
                    <div class="card-image">
                        <img src="<?php echo base_url('assets/img/card-bg/illustration_materi.jpg') ?>" alt="<?php echo $value["judul"] ?>">
                    </div>
                    <div class="card-title">
                        <h2><?php echo $value["judul"] ?></h2>
                    </div>
                </a>
            <?php } ?>
        </div>    	
    </div>

    <input id="kode_matkul" value="<?php foreach ($matkul as $value){ echo $value['kode_matkul']; }?>" hidden>

	<input id="alamat" value="<?php echo base_url('welcome/hasilcarimateri/') ?>" hidden>

    <input id="alamathapus" value="<?php echo base_url('welcome/hasiltombolhapusmateri/') ?>" hidden>
    
	<script src="<?php echo base_url('assets/ajax/ajaxcarimateri.js') ?>"></script>

</body>
</html>

