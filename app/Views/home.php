<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

<section class="jumbotron text-center" style="min-height: 400px; padding-top: 80px;">
    <h1 class="mt-3 font-weight-bold">BELAJAR KODING MULAI DARI NOL</h1>
    <p class="lead text-muted">
        Mau buat website bingung mulai dari mana? Yuk kita sama-sama belajar di sini.
    </p>
    <div class="mt-4">
        <a href="<?php echo base_url('login'); ?>" class="btn btn-outline-primary px-4 py-2 mr-2">Login</a>
        <a href="<?php echo base_url('register'); ?>" class="btn btn-success px-4 py-2">Register</a>
    </div>
    <div class="mt-4">
        <a href="<?php echo base_url('news'); ?>" class="text-secondary small">&rarr; Kunjungi Portal Berita CI News</a>
    </div>
</section>

<?= $this->endSection() ?>
