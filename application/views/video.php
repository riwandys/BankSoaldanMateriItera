<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Video <?= $mata_kuliah['nama_mata_kuliah']; ?></h1>

    <div class="row">
        <div class="col-12">
            <a href="<?= base_url('admin/matakuliah/'.$mata_kuliah['kode_mata_kuliah'].'/video/add'); ?>" class="btn btn-primary btn-icon-split btn-sm mr-2 mb-4">
                <span class="icon text-white-50">
                    <i class="fas fa-plus"></i>
                </span>
                <span class="text">Tambah</span>
            </a>
            <a href="#" class="btn btn-danger btn-icon-split btn-sm mb-4">
                <span class="icon text-white-50">
                    <i class="fas fa-trash"></i>
                </span>
                <span class="text">Hapus</span>
            </a>
        </div>
    </div>

    <div class="row">
        <?php foreach ($list_video as $video) { ?>
            <div class="col-xl-3 col-md-4 col-sm-6 col-6 mb-4">
                <a href="https://youtube.com/watch?v=<?= $video['youtube_video_id']?>" target="_blank" class="card shadow-sm">
                    <div class="card-img-top">
                        <img src="https://img.youtube.com/vi/<?= $video['youtube_video_id']?>/sddefault.jpg" alt="<?= $video['judul_video']; ?>">
                    </div>
                    <div class="card-body">
                        <p class="card-text"><?= $video['judul_video']; ?></p>
                    </div>
                </a>
            </div>
        <?php } ?>
    </div>
</div>
<!-- /.container-fluid -->