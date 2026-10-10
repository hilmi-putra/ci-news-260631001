<?= $this->extend('layout/page_layout') ?>
<?= $this->section('title') ?>Beranda - CI News<?= $this->endSection() ?>
<?= $this->section('content') ?>
<div class="row">
    <div class="col-lg-8">
        <div class="jumbotron">
            <h1 class="display-5">Selamat Datang di CI News</h1>
            <p class="lead">Portal berita CodeIgniter 4 untuk pembelajaran Pemrograman Web Lanjut.</p>
            <hr class="my-4">
            <p>Website ini menggunakan View Layout, View Partial, dan View Cell.</p>
            <a class="btn btn-primary" href="<?= base_url('news') ?>">Lihat Berita</a>
        </div>
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-title">Mahasiswa</h5>
                        <p class="card-text">Hilmi Abdurrafi</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-title">NPM</h5>
                        <p class="card-text">260631001</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-title">Mata Kuliah</h5>
                        <p class="card-text">Pemrograman Web Lanjut</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <aside class="col-lg-4">
        <?= view_cell('\App\Libraries\Widget::recentPost', ['limit' => 3]) ?>
    </aside>
</div>
<?= $this->endSection() ?>
