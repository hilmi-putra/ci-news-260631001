<?= $this->extend('layout/admin/admin_layout') ?>

<?= $this->section('content') ?>
<h2 class="mb-4"><?= esc($formTitle) ?></h2>

<?php if (!empty($errors)): ?>
    <div class="alert alert-danger">
        <ul class="mb-0">
            <?php foreach ($errors as $error): ?><li><?= esc($error) ?></li><?php endforeach; ?>
        </ul>
    </div>
<?php endif; ?>

<?php $isEdit = $office !== null; ?>
<form method="post">
    <?= csrf_field() ?>
    <div class="form-row">
        <div class="form-group col-md-4">
            <label for="officeCode">Office Code</label>
            <input id="officeCode" name="officeCode" class="form-control" maxlength="10" value="<?= esc($office['officeCode'] ?? old('officeCode')) ?>" <?= $isEdit ? 'readonly' : 'required' ?>>
        </div>
        <div class="form-group col-md-4">
            <label for="city">City</label>
            <input id="city" name="city" class="form-control" maxlength="50" value="<?= esc($office['city'] ?? old('city')) ?>" required>
        </div>
        <div class="form-group col-md-4">
            <label for="phone">Phone</label>
            <input id="phone" name="phone" class="form-control" maxlength="50" value="<?= esc($office['phone'] ?? old('phone')) ?>" required>
        </div>
    </div>
    <div class="form-group">
        <label for="addressLine1">Address Line 1</label>
        <input id="addressLine1" name="addressLine1" class="form-control" maxlength="50" value="<?= esc($office['addressLine1'] ?? old('addressLine1')) ?>" required>
    </div>
    <div class="form-group">
        <label for="addressLine2">Address Line 2 <small class="text-muted">(opsional)</small></label>
        <input id="addressLine2" name="addressLine2" class="form-control" maxlength="50" value="<?= esc($office['addressLine2'] ?? old('addressLine2')) ?>">
    </div>
    <div class="form-row">
        <div class="form-group col-md-4">
            <label for="state">State</label>
            <input id="state" name="state" class="form-control" maxlength="50" value="<?= esc($office['state'] ?? old('state')) ?>">
        </div>
        <div class="form-group col-md-4">
            <label for="country">Country</label>
            <input id="country" name="country" class="form-control" maxlength="50" value="<?= esc($office['country'] ?? old('country')) ?>" required>
        </div>
        <div class="form-group col-md-4">
            <label for="postalCode">Postal Code</label>
            <input id="postalCode" name="postalCode" class="form-control" maxlength="15" value="<?= esc($office['postalCode'] ?? old('postalCode')) ?>">
        </div>
    </div>
    <div class="form-group">
        <label for="territory">Territory</label>
        <input id="territory" name="territory" class="form-control" maxlength="10" value="<?= esc($office['territory'] ?? old('territory')) ?>">
    </div>
    <button type="submit" class="btn btn-success">Simpan</button>
    <a href="<?= base_url('admin/offices') ?>" class="btn btn-outline-secondary ml-2">Batal</a>
</form>
<?= $this->endSection() ?>
