<?= $this->extend('layout/page_layout') ?>
<?= $this->section('title') ?>Contact - CI News<?= $this->endSection() ?>
<?= $this->section('content') ?>
<p class="page-kicker">Contact / Get in touch</p>
<div class="split-page">
    <div>
        <h1 class="page-title">Let’s start<br>a conversation</h1>
        <p class="page-intro">Halo, <?= esc($name) ?>. Silakan hubungi kami melalui form berikut.</p>
    </div>
    <div class="contact-form">
        <form action="" method="post">
            <div class="field"><label for="email">Email</label><input id="email" type="email" required></div>
            <div class="field"><label for="message">Message</label><textarea name="message" id="message" rows="6"
                    required></textarea></div>
            <button type="submit" class="submit-button">Kirim</button>
        </form>
    </div>
</div>
<?= $this->endSection() ?>