<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800 text-center">Jurusan</h1>
    <div class="row mb-5">
        <div class="col-12">
        <div class="card-deck">
                
            <a href="#jtik" class="card shadow-sm">
                <div class="card-img-top">
                    <img src="<?= base_url('assets/img/card-bg/jur_jtik.jpg') ?>" alt="Jurusan Teknologi Infrastruktur dan Kewilayahan">
                </div>
                <div class="card-body">
                    <p class="card-text">Jurusan Teknologi Infrastruktur dan Kewilayahan</p>
                </div>
            </a>
            
            <a href="#sains" class="card shadow-sm">
                <div class="card-img-top">
                    <img src="<?= base_url('assets/img/card-bg/jur_sains.jpg') ?>" alt="Jurusan Sains">
                </div>
                <div class="card-body">
                    <p class="card-text">Jurusan Sains</p>
                </div>
            </a>
            
            <a href="#jtpi" class="card shadow-sm">
                <div class="card-img-top">
                    <img src="<?= base_url('assets/img/card-bg/jur_jtpi.jpg') ?>" alt="Jurusan Teknologi Produksi dan Industri">
                </div>
                <div class="card-body">
                    <p class="card-text">Jurusan Teknologi Produksi dan Industri</p>
                </div>
            </a>
        </div>
    </div>
        
    </div>

    
    <!-- Page Heading -->
    <h1 id="jtik" class="h3 mb-4 text-gray-800 text-center">Jurusan Teknologi Infrastruktur dan Kewilayahan</h1>
    <div class="row mb-5">
        <?php foreach ($list_prodi_jtik as $prodi) { ?>
            <div class="col-xl-3 col-md-4 col-sm-6 col-6 mb-4">
                <a href="<?= base_url('admin/prodi/' . $prodi['kode_prodi']) ?>" class="card shadow-sm">
                    <div class="card-img-top">
                        <img src="<?= base_url('assets/img/card-bg/ps_' . $prodi['kode_prodi'] . '.jpg') ?>" alt="<?= $prodi['nama_prodi'] ?>">
                    </div>
                    <div class="card-body">
                        <p class="card-text"><?= $prodi['nama_prodi'] ?></p>
                    </div>
                </a>
            </div>
        <?php } ?>
    </div>
    <!-- Page Heading -->
    <h1 id="sains" class="h3 mb-4 text-gray-800 text-center">Jurusan Sains</h1>
    <div class="row mb-5">
        <?php foreach ($list_prodi_sains as $prodi) { ?>
            <div class="col-xl-3 col-md-4 col-sm-6 col-6 mb-4">
                <a href="<?= base_url('admin/prodi/' . $prodi['kode_prodi']) ?>" class="card shadow-sm">
                    <div class="card-img-top">
                        <img src="<?= base_url('assets/img/card-bg/ps_' . $prodi['kode_prodi'] . '.jpg') ?>" alt="<?= $prodi['nama_prodi'] ?>">
                    </div>
                    <div class="card-body">
                        <p class="card-text"><?= $prodi['nama_prodi'] ?></p>
                    </div>
                </a>
            </div>
        <?php } ?>
    </div>
    <!-- Page Heading -->
    <h1 id="jtpi" class="h3 mb-4 text-gray-800 text-center">Jurusan Teknologi Produksi dan Industri</h1>
    <div class="row mb-2">
        <?php foreach ($list_prodi_jtpi as $prodi) { ?>
            <div class="col-xl-3 col-md-4 col-sm-6 col-6 mb-4">
                <a href="<?= base_url('admin/prodi/' . $prodi['kode_prodi']) ?>" class="card shadow-sm">
                    <div class="card-img-top">
                        <img src="<?= base_url('assets/img/card-bg/ps_' . $prodi['kode_prodi'] . '.jpg') ?>" alt="<?= $prodi['nama_prodi'] ?>">
                    </div>
                    <div class="card-body">
                        <p class="card-text"><?= $prodi['nama_prodi'] ?></p>
                    </div>
                </a>
            </div>
        <?php } ?>
    </div>

</div>
<!-- /.container-fluid -->