<!doctype html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?= $this->renderSection('title') ?: 'CI News' ?></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <style>
        body { background: #f8f9fa; color: #343a40; }
        .site-brand { letter-spacing: .04em; }
        .page-content { min-height: calc(100vh - 170px); }
        .hero-image { max-height: 360px; object-fit: cover; }
        .card-img-top { height: 180px; object-fit: cover; }
        .widget-thumb { width: 60px; height: 60px; object-fit: cover; }
        .site-footer { background: #343a40; color: #fff; }
    </style>
</head>

<body>
    <?= $this->include('layout/navbar') ?>
    <?= $this->include('layout/header') ?>

    <main class="container page-content py-4">
        <?= $this->renderSection('content') ?>
    </main>

    <?= $this->include('layout/footer') ?>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
