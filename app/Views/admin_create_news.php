<?= $this->extend('layout/admin/admin_layout') ?>

<?= $this->section('content') ?>

<h2 class="mb-4">Tulis Berita Baru</h2>

<form action="" method="post" id="text-editor">
    <div class="form-group">
        <label for="title">Title</label>
        <input type="text" name="title" class="form-control" placeholder="News title" required>
    </div>
    <div class="form-group">
        <label for="content">Content</label>
        <textarea name="content" class="form-control" cols="30" rows="10" placeholder="Write a great news!"></textarea>
    </div>
    <div class="form-group">
        <button type="submit" name="status" value="published" class="btn btn-primary">Publish</button>
        <button type="submit" name="status" value="draft" class="btn btn-secondary">Save to Draft</button>
        <a href="<?= base_url('admin/news') ?>" class="btn btn-outline-secondary ml-2">Batal</a>
    </div>
</form>

<?= $this->endSection() ?>
