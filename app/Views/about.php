<?= $this->extend('layout/page_layout') ?>
<?= $this->section('title') ?>About - CI News<?= $this->endSection() ?>
<?= $this->section('content') ?>
<p class="page-kicker">About / Widyatama News</p>
<div class="split-page">
    <div>
        <h1 class="page-title">A clearer way<br>to tell stories</h1>
    </div>
    <div>
        <h2>About CI News</h2>
        <p>CI News adalah contoh aplikasi portal berita sederhana yang dibuat dengan CodeIgniter 4.</p>
        <p>Halaman ini menggunakan page layout editorial yang sama dengan Home, Contact, FAQs, dan News agar seluruh
            pengalaman terasa menyatu.</p>
    </div>
</div>
<?= $this->endSection() ?>