<?= $this->extend('layout/page_layout') ?>

<?= $this->section('title') ?>Beranda - CI News<?= $this->endSection() ?>

<?= $this->section('content') ?>
<style>
    .home-hero {
        margin-bottom: 56px;
    }
    .hero-meta-kicker {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        padding: 6px 14px;
        border-radius: 999px;
        background: #ffffff;
        border: 1px solid #dcdcdc;
        font-size: 10px;
        font-weight: 600;
        letter-spacing: 0.6px;
        text-transform: uppercase;
        color: #444;
        margin-bottom: 22px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.03);
    }
    .hero-dot {
        width: 7px;
        height: 7px;
        border-radius: 50%;
        background: #e94e52;
        box-shadow: 0 0 0 3px rgba(233, 78, 82, 0.22);
    }
    .hero-title-block {
        margin-bottom: 20px;
    }
    .hero-h1 {
        margin: 0;
        font-family: 'DM Sans', Arial, sans-serif;
        font-size: clamp(38px, 5.8vw, 74px);
        font-weight: 700;
        line-height: 1.05;
        letter-spacing: -2px;
        color: #090909;
        display: flex;
        flex-direction: column;
        align-items: flex-start;
        gap: 14px;
    }
    .hero-name-row {
        display: flex;
        flex-wrap: wrap;
        align-items: center;
        gap: 16px 20px;
    }
    .hero-name-text {
        color: #090909;
        position: relative;
    }
    .hero-npm-badge {
        display: inline-flex;
        align-items: center;
        font-size: clamp(14px, 1.8vw, 20px);
        letter-spacing: 0;
        font-weight: 600;
        border: 2px solid #090909;
        background: #ffffff;
        box-shadow: 4px 4px 0 #090909;
        border-radius: 8px;
        overflow: hidden;
        transition: transform 0.2s ease, box-shadow 0.2s ease;
    }
    .hero-npm-badge:hover {
        transform: translate(-2px, -2px);
        box-shadow: 6px 6px 0 #e94e52;
    }
    .hero-npm-label {
        background: #090909;
        color: #ffffff;
        padding: 6px 12px;
        font-size: 11px;
        font-weight: 700;
        letter-spacing: 1.2px;
        text-transform: uppercase;
    }
    .hero-npm-value {
        padding: 6px 14px;
        color: #e94e52;
        font-family: monospace, sans-serif;
        letter-spacing: 0.5px;
    }
    .hero-tagline {
        display: block;
        font-size: clamp(16px, 2vw, 24px);
        font-weight: 400;
        color: #666;
        letter-spacing: -0.5px;
    }
    .hero-intro-text {
        max-width: 620px;
        font-size: 15px;
        line-height: 1.6;
        color: #444;
        margin: 18px 0 28px;
    }
    .hero-info-cards {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(180px, 1fr));
        gap: 14px;
        max-width: 680px;
        margin-bottom: 28px;
    }
    .hero-info-card {
        padding: 12px 16px;
        border-radius: 6px;
        background: #ffffff;
        border: 1px solid #dcdcdc;
        border-left: 3px solid #e94e52;
        box-shadow: 0 2px 6px rgba(0, 0, 0, 0.02);
    }
    .hero-info-card .card-label {
        font-size: 9px;
        text-transform: uppercase;
        letter-spacing: 0.8px;
        color: #888;
        margin-bottom: 4px;
        display: block;
    }
    .hero-info-card .card-value {
        font-size: 13px;
        font-weight: 600;
        color: #111;
        display: block;
    }
    .home-content-layout {
        display: grid;
        grid-template-columns: minmax(0, 1.8fr) minmax(300px, 1fr);
        gap: 36px;
        align-items: start;
    }
    @media (max-width: 860px) {
        .home-content-layout {
            grid-template-columns: 1fr;
            gap: 28px;
        }
    }
</style>

<div class="home-hero">
    <div class="hero-meta-kicker">
        <span class="hero-dot"></span>
        <span>Praktikum Pemrograman Web Lanjut</span>
        <span>&bull;</span>
        <span>Universitas Widyatama</span>
    </div>

    <div class="hero-title-block">
        <h1 class="hero-h1">
            <div class="hero-name-row">
                <span class="hero-name-text">Hilmi Abdurrafi</span>
                <span class="hero-npm-badge" title="Nomor Pokok Mahasiswa">
                    <span class="hero-npm-label">NPM</span>
                    <span class="hero-npm-value">260631001</span>
                </span>
            </div>
            <span class="hero-tagline">Stories that move the world forward</span>
        </h1>
    </div>

    <p class="hero-intro-text">
        Selamat datang di portal informasi dan berita resmi <strong>CI News</strong>. Mengintegrasikan arsitektur CodeIgniter 4 dengan modularisasi antarmuka modern menggunakan <strong>View Cells</strong>.
    </p>

    <div class="hero-info-cards">
        <div class="hero-info-card">
            <span class="card-label">Nama Mahasiswa</span>
            <span class="card-value">Hilmi Abdurrafi</span>
        </div>
        <div class="hero-info-card">
            <span class="card-label">Nomor Pokok Mahasiswa</span>
            <span class="card-value">260631001</span>
        </div>
        <div class="hero-info-card">
            <span class="card-label">Mata Kuliah</span>
            <span class="card-value">Pemrograman Web Lanjut</span>
        </div>
    </div>
</div>

<section class="section-rule">
    <div class="home-content-layout">
        <!-- Kolom Utama: Editorial Grid -->
        <div>
            <div class="editorial-grid" style="grid-template-columns: repeat(auto-fit, minmax(220px, 1fr)); margin-bottom: 24px;">
                <article class="editorial-item">
                    <h2>CodeIgniter 4<br>has arrived</h2>
                    <p>A modern foundation for building PHP applications that are fast, focused and easy to maintain.</p>
                    <img src="https://images.unsplash.com/photo-1555066931-4365d14bab8c?auto=format&amp;fit=crop&amp;w=600&amp;q=80" alt="Code on a screen">
                </article>
                <article class="editorial-item">
                    <h2>Meet the<br>layout system</h2>
                    <p>Reusable layouts and partials create a clear structure without repeating the same code.</p>
                    <img src="https://images.unsplash.com/photo-1553877522-43269d4ea984?auto=format&amp;fit=crop&amp;w=600&amp;q=80" alt="Team collaborating">
                </article>
            </div>
            <article class="editorial-item">
                <h2>Inside our community</h2>
                <p>Find the latest updates, conversations and practical stories from the CodeIgniter community with modular reusable View Cells.</p>
            </article>
        </div>

        <!-- Kolom Samping: Implementasi View Cell di Beranda (Limit: 3) -->
        <aside class="home-sidebar">
            <?= view_cell('\App\Libraries\Widget::recentPost', ['limit' => 3]) ?>
        </aside>
    </div>
</section>
<?= $this->endSection() ?>