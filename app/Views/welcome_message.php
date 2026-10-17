<?= $this->extend('layout/page_layout') ?>
<?= $this->section('title') ?>Beranda - CI News<?= $this->endSection() ?>
<?= $this->section('content') ?>
<div class="row">
    <div class="col-lg-8">
        <div class="jumbotron shadow-sm">
            <h1 class="display-5">Selamat Datang di CI News</h1>
            <p class="lead">Portal berita CodeIgniter 4 untuk pembelajaran Pemrograman Web Lanjut.</p>
            <hr class="my-4">
            <p>Website ini mengintegrasikan View Layout, View Cell, Database Migrations, Operasi CRUD, dan Sistem Autentikasi (Login &amp; Register).</p>
            <div class="mt-3">
                <a class="btn btn-primary mr-2" href="<?= base_url('news') ?>">Lihat Berita</a>
                <?php if (session()->get('logged_in')) : ?>
                    <a class="btn btn-warning mr-2" href="<?= base_url('admin/news') ?>">Kelola Berita (CRUD Admin)</a>
                    <a class="btn btn-outline-danger" href="<?= base_url('logout') ?>">Logout</a>
                <?php else : ?>
                    <a class="btn btn-outline-dark mr-2" href="<?= base_url('login') ?>">Login Admin</a>
                    <a class="btn btn-outline-success" href="<?= base_url('register') ?>">Register Akun</a>
                <?php endif; ?>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="card h-100 shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title text-muted" style="font-size: 13px; text-transform: uppercase;">Mahasiswa</h5>
                        <p class="card-text font-weight-bold">Hilmi Abdurrafi</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card h-100 shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title text-muted" style="font-size: 13px; text-transform: uppercase;">NPM</h5>
                        <p class="card-text font-weight-bold text-danger">260631001</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card h-100 shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title text-muted" style="font-size: 13px; text-transform: uppercase;">Mata Kuliah</h5>
                        <p class="card-text font-weight-bold">Pemrograman Web Lanjut</p>
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
