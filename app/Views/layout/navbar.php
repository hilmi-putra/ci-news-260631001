<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand site-brand font-weight-bold" href="<?= base_url() ?>">CI News</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mainNavigation"
            aria-controls="mainNavigation" aria-expanded="false" aria-label="Buka navigasi">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="mainNavigation">
            <div class="navbar-nav mr-auto">
                <a class="nav-item nav-link" href="<?= base_url() ?>">Home</a>
                <a class="nav-item nav-link" href="<?= base_url('about') ?>">About</a>
                <a class="nav-item nav-link" href="<?= base_url('contact') ?>">Contact</a>
                <a class="nav-item nav-link" href="<?= base_url('faqs') ?>">FAQs</a>
                <a class="nav-item nav-link" href="<?= base_url('news') ?>">News</a>
            </div>
            <div class="navbar-nav ml-auto align-items-center">
                <?php if (session()->get('logged_in')) : ?>
                    <a class="nav-item nav-link text-warning" href="<?= base_url('admin/news') ?>">Panel CRUD</a>
                    <a class="nav-item nav-link text-info" href="<?= base_url('dashboard') ?>">Dashboard</a>
                    <span class="navbar-text mx-2 text-light small">
                        Hi, <strong><?= esc(session()->get('name')) ?></strong>
                    </span>
                    <a class="btn btn-outline-danger btn-sm my-1 my-sm-0" href="<?= base_url('logout') ?>">Logout</a>
                <?php else : ?>
                    <a class="nav-item nav-link" href="<?= base_url('login') ?>">Login</a>
                    <a class="btn btn-primary btn-sm ml-2 my-1 my-sm-0" href="<?= base_url('register') ?>">Register</a>
                <?php endif; ?>
            </div>
        </div>
    </div>
</nav>
