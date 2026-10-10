<style>
    .site-topbar {
        display: flex;
        align-items: center;
        height: 38px;
        margin-bottom: 34px;
    }

    .site-brand {
        display: inline-flex;
        color: #fff;
        font-size: 10px;
        line-height: 14px;
        text-decoration: none;
    }

    .site-brand strong {
        padding: 0 6px;
        background: #06164c;
        font-weight: 600;
    }

    .site-nav {
        display: flex;
        gap: 25px;
        margin-left: auto;
        margin-right: 54px;
        font-size: 11px;
    }

    .site-nav a {
        color: inherit;
        text-decoration: none;
    }

    .site-nav a:hover {
        color: #e94e52;
    }

    .site-user {
        position: relative;
    }

    .site-user summary {
        cursor: pointer;
        list-style: none;
    }

    .site-user summary::-webkit-details-marker {
        display: none;
    }

    .site-user summary::after {
        display: inline-block;
        margin-left: 5px;
        color: #e94e52;
        content: '⌄';
        font-size: 12px;
    }

    .site-user[open] summary {
        color: #e94e52;
    }

    .site-user-card {
        position: absolute;
        z-index: 10;
        top: 25px;
        right: 0;
        min-width: 180px;
        padding: 14px 16px;
        border: 1px solid #e94e52;
        background: #fff4f2;
        box-shadow: 5px 5px 0 #e94e52;
        color: #090909;
        opacity: 0;
        visibility: hidden;
        transform: translateY(-8px);
        transition: opacity .22s ease, transform .22s ease, visibility .22s ease;
    }

    .site-user[open] .site-user-card {
        opacity: 1;
        visibility: visible;
        transform: translateY(0);
    }

    .site-user-name {
        display: block;
        margin-bottom: 7px;
        font-size: 12px;
        font-weight: 600;
    }

    .site-user-npm {
        display: block;
        color: #e94e52;
        font-size: 11px;
    }

    .site-language {
        font-size: 9px;
    }

    .site-profile {
        display: grid;
        width: 30px;
        height: 30px;
        margin-left: 15px;
        place-items: center;
        border-radius: 50%;
        background: #e94e52;
        color: #fff;
        font-size: 8px;
    }

    @media (max-width: 700px) {
        .site-nav {
            gap: 12px;
            margin-right: 18px;
        }
    }

    @media (max-width: 460px) {
        .site-nav a:nth-child(-n+2) {
            display: none;
        }
    }
</style>
<nav class="site-topbar" aria-label="Main navigation">
    <a class="site-brand" href="<?= base_url() ?>"><strong>Widyatama</strong></a>
    <div class="site-nav">
        <a href="<?= base_url() ?>">Home</a>
        <a href="<?= base_url('about') ?>">About</a>
        <a href="<?= base_url('contact') ?>">Contact</a>
        <a href="<?= base_url('faqs') ?>">FAQs</a>
        <a href="<?= base_url('news') ?>">News</a>
        <details class="site-user">
            <summary>Hilmi Abdurrafi</summary>
            <div class="site-user-card"><span class="site-user-name">Hilmi Abdurrafi</span><span
                    class="site-user-npm">NPM 260631001</span></div>
        </details>
    </div>
    <span class="site-language">EN</span>
    <span class="site-profile" aria-label="Profile">log</span>
</nav>