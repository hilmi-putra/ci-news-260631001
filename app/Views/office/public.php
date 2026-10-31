<?= $this->extend('layout/post_layout') ?>

<?= $this->section('title') ?>Office - CI News<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="row">
    <div class="col-lg-10 mx-auto">
        <div class="mb-4">
            <h2 class="h2 mb-1">Office</h2>
            <p class="text-muted mb-0">Daftar kantor dan informasi kontak kami.</p>
        </div>

        <?php if (!empty($offices)): ?>
            <div class="row">
                <?php foreach ($offices as $office): ?>
                    <div class="col-md-6 mb-4">
                        <div class="card shadow-sm h-100">
                            <div class="card-body">
                                <h5 class="card-title font-weight-bold">
                                    <?= esc($office['city']) ?>
                                </h5>
                                <p class="text-muted small mb-3">
                                    Office <?= esc($office['officeCode']) ?>
                                </p>
                                <p class="mb-2">
                                    <strong>Alamat</strong><br>
                                    <?= esc($office['addressLine1']) ?>
                                    <?php if (!empty($office['addressLine2'])): ?>
                                        <br><?= esc($office['addressLine2']) ?>
                                    <?php endif; ?>
                                    <?php if (!empty($office['state'])): ?>
                                        <br><?= esc($office['state']) ?>
                                    <?php endif; ?>
                                    <?php if (!empty($office['postalCode'])): ?>
                                        <?= esc($office['postalCode']) ?>
                                    <?php endif; ?>
                                </p>
                                <p class="mb-0 text-secondary">
                                    <strong>Telepon:</strong> <?= esc($office['phone']) ?><br>
                                    <strong>Negara:</strong> <?= esc($office['country']) ?>
                                </p>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php else: ?>
            <div class="alert alert-info">Belum ada data office.</div>
        <?php endif; ?>
    </div>
</div>
<?= $this->endSection() ?>
