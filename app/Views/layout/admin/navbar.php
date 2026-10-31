<?php $currentPath = trim(uri_string(), '/'); ?>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="<?= base_url('admin/news') ?>">Admin CI News</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-between" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link <?= $currentPath === 'admin/news' ? 'active' : '' ?>"
                        href="<?= base_url('admin/news') ?>"
                        <?= $currentPath === 'admin/news' ? 'aria-current="page"' : '' ?>>News (CRUD)</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?= strpos($currentPath, 'admin/offices') === 0 ? 'active' : '' ?>"
                        href="<?= base_url('admin/offices') ?>"
                        <?= strpos($currentPath, 'admin/offices') === 0 ? 'aria-current="page"' : '' ?>>Office (CRUD)</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?= $currentPath === 'dashboard' ? 'active' : '' ?>"
                        href="<?= base_url('dashboard') ?>"
                        <?= $currentPath === 'dashboard' ? 'aria-current="page"' : '' ?>>Dashboard</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('news') ?>" target="_blank">Lihat Website &rarr;</a>
                </li>
            </ul>
            <ul class="navbar-nav align-items-center">
                <li class="nav-item">
                    <a href="<?= base_url('admin/news/new') ?>" class="btn btn-primary btn-sm mr-3">+ New Post</a>
                </li>
                <li class="nav-item">
                    <a href="<?= base_url('admin/offices/new') ?>" class="btn btn-success btn-sm mr-3">+ Office</a>
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
