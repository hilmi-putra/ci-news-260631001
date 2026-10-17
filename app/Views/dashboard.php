<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>
<div class="container my-5">
    <section class="jumbotron text-center shadow-sm">
        <h1>Welcome, <?= esc(session()->get('name')) ?></h1>
        <p class="lead text-muted">Anda berhasil masuk ke sistem autentikasi CodeIgniter 4.</p>
        <p>Untuk logout dari sistem silakan klik <a href="<?php echo base_url('logout'); ?>"
                class="text-danger font-weight-bold">Logout</a></p>
        <hr class="my-4">
        <div>
            <a href="<?= base_url('admin/news') ?>" class="btn btn-primary mr-2">Masuk ke Panel CRUD Berita (Admin)
                &rarr;</a>
            <a href="<?= base_url('news') ?>" class="btn btn-outline-secondary">Lihat Berita Publik</a>
        </div>
    </section>
</div>
<?= $this->endSection() ?>