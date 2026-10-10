<?= $this->extend('layout/post_layout') ?>

<?= $this->section('title') ?>Berita Terbaru - CI News<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="row">
    <div class="col-lg-8">
        <h2 class="h2 mb-4">Berita Terbaru</h2>
        <?php if (!empty($newses) && is_array($newses)): ?>
            <?php foreach ($newses as $news) : ?>
                <div class="row">
                    <div class="col-md-12 mb-3 card shadow-sm">
                        <div class="card-body">
                            <h5 class="h5">
                                <a href="<?= base_url('news/' . $news['slug']) ?>" class="text-dark font-weight-bold" style="text-decoration: none;">
                                    <?= esc($news['title']) ?>
                                </a>
                            </h5>
                            <small class="text-muted d-block mb-2">
                                Penulis: <?= esc($news['author'] ?? 'Admin') ?> &bull; <?= esc($news['created_at']) ?>
                            </small>
                            <p class="card-text text-secondary">
                                <?= substr(strip_tags($news['content']), 0, 120) ?>...
                            </p>
                            <a href="<?= base_url('news/' . $news['slug']) ?>" class="btn btn-sm btn-outline-primary">Baca Selengkapnya &rarr;</a>
                        </div>
                    </div>
                </div>
            <?php endforeach ?>
        <?php else: ?>
            <div class="alert alert-info">Belum ada berita yang diterbitkan.</div>
        <?php endif; ?>
    </div>
    <aside class="col-lg-4">
        <?= $this->include('layout/sidebar') ?>
    </aside>
</div>
<?= $this->endSection() ?>
