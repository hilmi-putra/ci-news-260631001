<?= $this->extend('layout/admin/admin_layout') ?>

<?= $this->section('content') ?>
<div class="d-flex justify-content-between align-items-center mb-4">
    <div>
        <p class="h5 mb-2">Hilmi Abdurrafi <small class="text-muted">| NPM 260631001</small></p>
        <h2 class="mb-1">Offices</h2>
        <p class="text-muted mb-0">Kelola data kantor perusahaan.</p>
    </div>
    <a href="<?= base_url('admin/offices/new') ?>" class="btn btn-success">+ Tambah Office</a>
</div>

<?php if (session()->getFlashdata('success')): ?>
    <div class="alert alert-success"><?= esc(session()->getFlashdata('success')) ?></div>
<?php endif; ?>

<div class="table-responsive">
    <table class="table table-bordered table-hover bg-white">
        <thead class="thead-dark">
            <tr>
                <th>Code</th>
                <th>City</th>
                <th>Phone</th>
                <th>Address</th>
                <th>Country</th>
                <th>Territory</th>
                <th class="text-nowrap">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php if (!empty($offices)): ?>
                <?php foreach ($offices as $office): ?>
                    <tr>
                        <td><strong><?= esc($office['officeCode']) ?></strong></td>
                        <td><?= esc($office['city']) ?></td>
                        <td><?= esc($office['phone']) ?></td>
                        <td>
                            <?= esc($office['addressLine1']) ?>
                            <?php if (!empty($office['addressLine2'])): ?>
                                <br><small class="text-muted"><?= esc($office['addressLine2']) ?></small>
                            <?php endif; ?>
                        </td>
                        <td><?= esc($office['country']) ?></td>
                        <td><?= esc($office['territory']) ?></td>
                        <td class="text-nowrap">
                            <a href="<?= base_url('admin/offices/' . rawurlencode($office['officeCode']) . '/edit') ?>" class="btn btn-sm btn-outline-primary">Edit</a>
                            <a href="<?= base_url('admin/offices/' . rawurlencode($office['officeCode']) . '/delete') ?>" class="btn btn-sm btn-outline-danger" onclick="return confirm('Hapus data office ini?')">Delete</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr><td colspan="7" class="text-center text-muted py-4">Belum ada data office.</td></tr>
            <?php endif; ?>
        </tbody>
    </table>
</div>
<?= $this->endSection() ?>
