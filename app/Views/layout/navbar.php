<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand site-brand" href="<?= base_url() ?>">CI News</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mainNavigation"
            aria-controls="mainNavigation" aria-expanded="false" aria-label="Buka navigasi">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="mainNavigation">
            <div class="navbar-nav ml-auto">
                <a class="nav-item nav-link" href="<?= base_url() ?>">Home</a>
                <a class="nav-item nav-link" href="<?= base_url('about') ?>">About</a>
                <a class="nav-item nav-link" href="<?= base_url('contact') ?>">Contact</a>
                <a class="nav-item nav-link" href="<?= base_url('faqs') ?>">FAQs</a>
                <a class="nav-item nav-link" href="<?= base_url('news') ?>">News</a>
            </div>
        </div>
    </div>
</nav>
