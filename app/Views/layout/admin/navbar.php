<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="<?= base_url('admin/news') ?>">Admin CI News</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-between" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('admin/news') ?>">News (CRUD)</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('dashboard') ?>">Dashboard</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('news') ?>" target="_blank">Lihat Website &rarr;</a>
                </li>
            </ul>
            <ul class="navbar-nav align-items-center">
                <li class="nav-item">
                    <a href="<?= base_url('admin/news/new') ?>" class="btn btn-primary btn-sm mr-3">+ New Post</a>
                </li>
                <li class="nav-item mr-3">
                    <span class="navbar-text text-light" style="font-size: 13px;">
                        User: <strong><?= esc(session()->get('name') ?? 'Admin') ?></strong>
                    </span>
                </li>
                <li class="nav-item">
                    <a class="btn btn-outline-danger btn-sm" href="<?= base_url('logout') ?>">Logout</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
