<?= $this->extend('layout/admin/admin_layout') ?>

<?= $this->section('content') ?>

<div class="d-flex justify-content-between align-items-center mb-4">
    <h2>Manajemen Berita (Admin)</h2>
    <a href="<?= base_url('admin/news/new') ?>" class="btn btn-primary">+ Tulis Berita Baru</a>
</div>

<table class="table table-bordered table-striped">
    <thead class="thead-dark">
        <tr>
            <th>#</th>
            <th>Title</th>
            <th>Status</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php if (!empty($newses) && is_array($newses)): ?>
            <?php foreach($newses as $news): ?>
            <tr>
                <td><?= $news['id'] ?></td>
                <td>
                    <strong><?= esc($news['title']) ?></strong><br>
                    <small class="text-muted">Dibuat: <?= esc($news['created_at']) ?></small>
                </td>
                <td>
                    <?php if($news['status'] === 'published'): ?>
                        <span class="badge badge-success"><?= esc($news['status']) ?></span>
                    <?php else: ?>
                        <span class="badge badge-secondary"><?= esc($news['status']) ?></span>
                    <?php endif ?>
                </td>
                <td>
                    <a href="<?= base_url('admin/news/'.$news['id'].'/preview') ?>" class="btn btn-sm btn-outline-secondary" target="_blank">Preview</a>
                    <a href="<?= base_url('admin/news/'.$news['id'].'/edit') ?>" class="btn btn-sm btn-outline-secondary">Edit</a>
                    <a href="#" data-href="<?= base_url('admin/news/'.$news['id'].'/delete') ?>" onclick="confirmToDelete(this)" class="btn btn-sm btn-outline-danger">Delete</a>
                </td>
            </tr>
            <?php endforeach ?>
        <?php else: ?>
            <tr>
                <td colspan="4" class="text-center text-muted">Belum ada data berita.</td>
            </tr>
        <?php endif ?>
    </tbody>
</table>

<div id="confirm-dialog" class="modal fade" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body text-center p-4">
        <h2 class="h3 font-weight-bold mb-3">Are you sure?</h2>
        <p class="text-muted mb-0">The data will be deleted and lost forever</p>
      </div>
      <div class="modal-footer justify-content-center">
        <a href="#" role="button" id="delete-button" class="btn btn-danger px-4">Delete</a>
        <button type="button" class="btn btn-secondary px-4" data-dismiss="modal">Cancel</button>
      </div>
    </div>
  </div>
</div>

<script>
function confirmToDelete(el){
    $("#delete-button").attr("href", el.dataset.href);
    $("#confirm-dialog").modal('show');
}
</script>

<?= $this->endSection() ?>
