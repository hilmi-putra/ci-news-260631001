<?= $this->extend('layout/admin/admin_layout') ?>

<?= $this->section('content') ?>
<div class="jumbotron bg-primary text-white shadow-sm">
    <div class="row align-items-center">
        <div class="col-md-8">
            <p class="text-uppercase small font-weight-bold mb-2">Admin Dashboard</p>
            <h1 class="h2 font-weight-bold mb-2">
                Selamat datang, <?= esc(session()->get('name') ?? 'Admin') ?>
            </h1>
            <p class="lead mb-0">Kelola konten dan data aplikasi dari satu tempat.</p>
        </div>
        <div class="col-md-4 text-md-right mt-4 mt-md-0">
            <a href="<?= base_url('logout') ?>" class="btn btn-light text-primary font-weight-bold">
                Logout
            </a>
        </div>
    </div>
</div>

<div class="mb-4">
    <h2 class="h4 font-weight-bold mb-1">Menu utama</h2>
    <p class="text-muted mb-0">Pilih modul yang ingin kamu kelola.</p>
</div>

<div class="row">
    <div class="col-md-6 mb-4">
        <div class="card shadow-sm h-100">
            <div class="card-body p-4">
                <div class="d-inline-flex align-items-center justify-content-center bg-primary text-white rounded p-2 mb-3">
                    <span class="h4 mb-0">N</span>
                </div>
                <h3 class="h5 font-weight-bold">Manajemen Berita</h3>
                <p class="text-muted mb-4">
                    Tambah, ubah, pratinjau, dan hapus berita pada panel admin.
                </p>
                <a href="<?= base_url('admin/news') ?>" class="btn btn-primary">
                    Buka News CRUD <span aria-hidden="true">&rarr;</span>
                </a>
            </div>
        </div>
    </div>

    <div class="col-md-6 mb-4">
        <div class="card shadow-sm h-100">
            <div class="card-body p-4">
                <div class="d-inline-flex align-items-center justify-content-center bg-success text-white rounded p-2 mb-3">
                    <span class="h4 mb-0">O</span>
                </div>
                <h3 class="h5 font-weight-bold">Offices</h3>
                <p class="text-muted mb-4">
                    Kelola data kantor melalui fitur CRUD Offices.
                </p>
                <a href="<?= base_url('admin/offices') ?>" class="btn btn-success">
                    Buka Offices CRUD <span aria-hidden="true">&rarr;</span>
                </a>
            </div>
        </div>
    </div>
</div>

<div class="text-center text-muted small mt-2">
    <a href="<?= base_url('news') ?>" class="text-muted">Lihat website publik</a>
</div>
<?= $this->endSection() ?>