<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $this->renderSection('title') ?: 'CI News' ?></title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <style>
        body { background: #f8f9fa; color: #343a40; }
        .page-content { min-height: calc(100vh - 170px); }
    </style>
</head>

<body>
    <?= $this->include('layout/navbar') ?>

    <main class="container my-5 page-content">
        <div class="row">
            <div class="col-md-12">
                <?= $this->renderSection('content') ?>
            </div>
        </div>
    </main>

    <?= $this->include('layout/footer') ?>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
