<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $mata_kuliah['nama_mata_kuliah']; ?></h1>

    <!-- Deskripsi Mata Kuliah -->
    <div class="card mb-4">
        <div class="card-header">
            Deskripsi Mata Kuliah
        </div>
        <div class="card-body">
            <?php
                $deskripsi = $mata_kuliah['deskripsi_mata_kuliah'];
                if ($deskripsi) {
                    echo $deskripsi;
                } else {
                    echo 'Belum ada deskripsi mata kuliah.';
                }
            ?>
        </div>
    </div>

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Konten</h1>
    <div class="row mb-5">
        <div class="col-xl-4 col-md-4 col-sm-6 col-6 mb-4">
            <a href="<?= base_url('admin/matakuliah/'.$mata_kuliah['kode_mata_kuliah']).'/materi'; ?>" class="card card-konten shadow-sm">
                <div class="card-img-top">
                    <img src="<?= base_url('assets/img/illustration/illustration_materi.png') ?>" alt="Materi <?= $mata_kuliah['nama_mata_kuliah']; ?>">
                </div>
                <div class="card-body">
                    <p class="card-text">Materi</p>
                </div>
            </a>
        </div>
        <div class="col-xl-4 col-md-4 col-sm-6 col-6 mb-4">
            <a href="<?= base_url('admin/matakuliah/'.$mata_kuliah['kode_mata_kuliah']).'/soal'; ?>" class="card card-konten shadow-sm">
                <div class="card-img-top">
                    <img src="<?= base_url('assets/img/illustration/illustration_soal.png') ?>" alt="Soal <?= $mata_kuliah['nama_mata_kuliah']; ?>">
                </div>
                <div class="card-body">
                    <p class="card-text">Soal</p>
                </div>
            </a>
        </div>
        <div class="col-xl-4 col-md-4 col-sm-6 col-6 mb-4">
            <a href="<?= base_url('admin/matakuliah/'.$mata_kuliah['kode_mata_kuliah']).'/video'; ?>" class="card card-konten shadow-sm">
                <div class="card-img-top">
                    <img src="<?= base_url('assets/img/illustration/illustration_video.png') ?>" alt="Video <?= $mata_kuliah['nama_mata_kuliah']; ?>">
                </div>
                <div class="card-body">
                    <p class="card-text">Video</p>
                </div>
            </a>
        </div>
    </div>
</div>