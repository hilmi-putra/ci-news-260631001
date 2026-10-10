<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $this->renderSection('title') ?: 'Widyatama News' ?></title>
    <style>
        .site-page {
            min-height: 100vh;
            padding: 28px clamp(24px, 8vw, 120px) 80px;
        }
    </style>
</head>

<body>
    <main class="site-page">
        <?= $this->include('layout/navbar') ?>
        <?= $this->renderSection('content') ?>
    </main>
</body>

</html>