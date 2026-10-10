<?= $this->extend('layout/post_layout') ?>

<?= $this->section('title') ?><?= esc($news['title']) ?> - CI News<?= $this->endSection() ?>

<?= $this->section('content') ?>
<article class="article-detail" style="max-width: 800px; margin: 40px auto 80px;">
    <div style="margin-bottom: 24px;">
        <a href="<?= base_url('news') ?>" style="text-decoration: none; font-size: 13px; color: #777;">&larr; Kembali ke Berita</a>
    </div>

    <h1 class="h2" style="font-size: clamp(28px, 4vw, 44px); line-height: 1.15; margin-bottom: 16px;"><?= esc($news['title']) ?></h1>

    <div class="mb-5" style="margin-bottom: 28px; padding-bottom: 16px; border-bottom: 1px solid #ddd; color: #888; font-size: 13px; display: flex; gap: 16px;">
        <span>Penulis: <strong><?= esc($news['author'] ?? 'Admin') ?></strong></span>
        <span>&bull;</span>
        <span>Dipublikasikan: <?= esc($news['created_at']) ?></span>
    </div>

    <div class="article-body" style="font-size: 16px; line-height: 1.8; color: #222;">
        <?= nl2br(esc($news['content'])) ?>
    </div>
</article>
<?= $this->endSection() ?>
