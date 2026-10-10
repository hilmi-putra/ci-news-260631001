<?= $this->extend('layout/admin/admin_layout') ?>

<?= $this->section('content') ?>

<h2 class="mb-4">Edit Berita</h2>

<form action="" method="post" id="text-editor">
    <input type="hidden" name="id" value="<?= $news['id'] ?>" />
    <div class="form-group">
        <label for="title">Title</label>
        <input type="text" name="title" class="form-control" placeholder="News title" value="<?= esc($news['title']) ?>" required>
    </div>
    <div class="form-group">
        <label for="content">Content</label>
        <textarea name="content" class="form-control" cols="30" rows="10" placeholder="Write a great news!"><?= esc($news['content']) ?></textarea>
    </div>
    <div class="form-group">
        <button type="submit" name="status" value="published" class="btn btn-primary <?= $news['status'] === 'published' ? 'active' : '' ?>">Publish</button>
        <button type="submit" name="status" value="draft" class="btn btn-secondary <?= $news['status'] === 'draft' ? 'active' : '' ?>">Save to Draft</button>
        <a href="<?= base_url('admin/news') ?>" class="btn btn-outline-secondary ml-2">Batal</a>
    </div>
</form>

<?= $this->endSection() ?>
