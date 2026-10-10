<?= $this->extend('layout/page_layout') ?>
<?= $this->section('title') ?>FAQs - CI News<?= $this->endSection() ?>
<?= $this->section('content') ?>
<p class="page-kicker">FAQs / Common questions</p>
<h1 class="page-title">Everything you<br>need to know</h1>
<div class="faq-list">
    <?php foreach ($data_faqs as $faq): ?>
        <article class="faq-item">
            <h2><?= esc($faq['question']) ?></h2>
            <p><?= esc($faq['answer']) ?></p>
        </article>
    <?php endforeach; ?>
</div>
<?= $this->endSection() ?>