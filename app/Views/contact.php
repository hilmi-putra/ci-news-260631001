<?= $this->extend('layout/page_layout') ?>
<?= $this->section('title') ?>Contact - CI News<?= $this->endSection() ?>
<?= $this->section('content') ?>
<div class="row">
    <div class="col-lg-8">
        <h2>Hubungi Kami</h2>
        <p class="lead">Halo, <?= esc($name) ?>. Kirimkan pesan melalui formulir berikut.</p>
        <form action="" method="post">
            <div class="form-group">
                <label for="email">Email</label>
                <input id="email" name="email" type="email" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="message">Pesan</label>
                <textarea id="message" name="message" class="form-control" rows="6" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Kirim Pesan</button>
        </form>
    </div>
</div>
<?= $this->endSection() ?>
