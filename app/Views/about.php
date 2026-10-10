<?= $this->extend('layout/page_layout') ?>
<?= $this->section('title') ?>About - CI News<?= $this->endSection() ?>
<?= $this->section('content') ?>
<div class="row">
    <div class="col-lg-8">
        <h2>Tentang CI News</h2>
        <p class="lead">Portal berita sederhana dengan CodeIgniter 4.</p>
        <p>Halaman ini menggunakan view layout untuk membagikan navbar, header, dan footer di seluruh halaman.</p>
        <p>Komponen berita di sidebar dibuat sebagai View Cell agar dapat menerima parameter dan mengambil data dari
            database.</p>
    </div>
    <div class="col-lg-4">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Informasi</h5>
                <p class="card-text mb-0">Pemrograman Web Lanjut</p>
                <small class="text-muted">Universitas Widyatama</small>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>
