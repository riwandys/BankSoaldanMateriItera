<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $prodi['nama_prodi'] ?></h1>
    <div class="row">
        <?php foreach ($list_mata_kuliah as $mata_kuliah) { ?>
            <div class="col-xl-3 col-md-4 col-sm-6 col-6 mb-4">
                <a href="<?= base_url('admin/matakuliah/'.$mata_kuliah['kode_mata_kuliah']) ?>" class="card shadow-sm">
                    <div class="card-img-top">
                        <img src="<?= base_url('assets/img/card-bg/ps_' . $mata_kuliah['kode_prodi'] . '.jpg') ?>" alt="<?= $mata_kuliah['nama_mata_kuliah'] ?>">
                    </div>
                    <div class="card-body">
                        <p class="card-text"><?= $mata_kuliah['nama_mata_kuliah'] ?></p>
                    </div>
                </a>
            </div>
        <?php } ?>
    </div>
</div>
<!-- /.container-fluid -->