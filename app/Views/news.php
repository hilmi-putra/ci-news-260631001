<?= $this->extend('layout/post_layout') ?>
<?= $this->section('title') ?>News - Widyatama<?= $this->endSection() ?>
<?= $this->section('content') ?>
<style>
    @import url('https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600&display=swap');

    :root {
        --paper: #f5f5f5;
        --ink: #090909;
        --rule: #c8c8c8;
        --accent: #e94e52;
    }

    * {
        box-sizing: border-box;
    }

    body {
        margin: 0;
        background: var(--paper);
        color: var(--ink);
        font-family: 'DM Sans', Arial, sans-serif;
        font-size: 14px;
    }

    .news-page {
        width: 100%;
        min-height: 100vh;
        padding: 0 0 80px;
    }

    .topbar {
        display: flex;
        align-items: center;
        height: 38px;
        margin-bottom: 34px;
    }

    .brand {
        display: inline-flex;
        color: #fff;
        font-size: 10px;
        line-height: 14px;
        text-decoration: none;
    }

    .brand strong {
        padding: 0 6px;
        background: #06164c;
        font-weight: 600;
    }

    .brand span {
        padding: 0 5px;
        color: #06164c;
        border: 1px solid #06164c;
    }

    .menu {
        display: flex;
        align-items: center;
        gap: 7px;
        margin-left: auto;
        margin-right: 54px;
        font-size: 11px;
    }

    .menu i,
    .menu i:after {
        display: block;
        width: 15px;
        height: 1px;
        background: #777;
        content: '';
    }

    .menu i:after {
        margin-top: 4px;
    }

    .language {
        font-size: 9px;
    }

    .profile {
        display: grid;
        width: 30px;
        height: 30px;
        margin-left: 15px;
        place-items: center;
        border-radius: 50%;
        background: var(--accent);
        color: #fff;
        font-size: 8px;
    }

    .lead {
        display: grid;
        grid-template-columns: minmax(280px, 1fr) minmax(420px, 1.42fr);
        gap: clamp(24px, 4vw, 64px);
        align-items: start;
        margin-bottom: 64px;
    }

    .lead-copy {
        padding-top: 4px;
    }

    h1 {
        margin: 0 0 22px;
        font-family: Arial, Helvetica, sans-serif;
        font-size: clamp(42px, 4.5vw, 72px);
        font-weight: 400;
        line-height: .96;
        letter-spacing: -3px;
    }

    .eyebrow {
        margin: 0 0 10px;
        color: #999;
        font-size: 9px;
    }

    .lead-title {
        margin: 0;
        font-size: 13px;
        line-height: 1.35;
    }

    .outline-button {
        display: inline-block;
        margin-top: 52px;
        padding: 14px 18px;
        border: 1px solid #7f8da5;
        border-radius: 50%;
        color: #152344;
        font-size: 9px;
        line-height: 1.3;
        text-align: center;
        text-decoration: none;
    }

    .lead-image {
        width: 100%;
        height: clamp(260px, 28vw, 430px);
        object-fit: cover;
    }

    .section-heading {
        display: flex;
        align-items: center;
        gap: 24px;
        margin-bottom: 28px;
    }

    h2 {
        margin: 0;
        font-size: clamp(24px, 2.2vw, 36px);
        font-weight: 400;
        line-height: 1.05;
    }

    .section-heading .outline-button {
        margin: 0;
        padding: 12px 15px;
    }

    .story-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 18px;
        margin-bottom: 64px;
    }

    .story {
        display: flex;
        min-width: 0;
        flex-direction: column;
        border-left: 1px solid var(--rule);
        padding-left: 16px;
    }

    .story:first-child {
        border-left: 0;
        padding-left: 0;
    }

    .story h3 {
        min-height: 48px;
        margin: 0 0 12px;
        font-size: 14px;
        font-weight: 400;
        line-height: 1.2;
    }

    .story p,
    .insight p {
        margin: 0 0 18px;
        font-size: 10px;
        line-height: 1.45;
    }

    .date {
        order: 2;
        margin-top: auto;
        margin-bottom: 10px;
        color: #999;
        font-size: 9px;
    }

    .story img {
        order: 3;
        width: 100%;
        height: clamp(150px, 15vw, 240px);
        object-fit: cover;
    }

    .insight-grid {
        display: grid;
        grid-template-columns: 1fr 2fr;
        gap: 18px;
    }

    .insight {
        border-left: 1px solid var(--rule);
        padding-left: 16px;
    }

    .insight:first-child {
        border-left: 0;
        padding-left: 0;
    }

    .insight h3 {
        margin: 0 0 12px;
        font-size: 18px;
        font-weight: 400;
        line-height: 1.15;
    }

    .insight img {
        width: 100%;
        height: clamp(180px, 18vw, 280px);
        object-fit: cover;
    }

    .news-body-layout {
        display: grid;
        grid-template-columns: minmax(0, 2.2fr) minmax(300px, 1fr);
        gap: clamp(24px, 4vw, 48px);
        align-items: start;
        margin-top: 20px;
    }

    .news-sidebar {
        position: sticky;
        top: 20px;
    }

    @media (max-width: 960px) {
        .news-body-layout {
            grid-template-columns: 1fr;
        }
        .news-sidebar {
            position: static;
        }
    }

    @media (max-width:800px) {
        .news-page {
            padding: 20px 24px 56px;
        }

        .lead {
            grid-template-columns: minmax(190px, 1fr) minmax(250px, 1.4fr);
            gap: 18px;
        }
    }

    @media (max-width:420px) {
        .news-page {
            padding-right: 12px;
            padding-left: 12px;
        }

        .menu {
            margin-right: 24px;
        }

        .lead {
            grid-template-columns: 1fr;
        }

        .lead-image {
            height: 220px;
        }

        h1 {
            font-size: 38px;
            letter-spacing: -2px;
        }
    }
</style>
<main class="news-page">
    <section class="lead">
        <div class="lead-copy">
            <h1>Receive the<br>latest news</h1>
            <p class="eyebrow">Continuing on &nbsp; 28 April 2021</p>
            <p class="lead-title">Release &amp; conference call<br>Q1 2021 — Copenhagen</p><a class="outline-button"
                href="#announcements">see our financial<br>calendar</a>
        </div><img class="lead-image"
            src="https://images.unsplash.com/photo-1494522358652-f30e61a60313?auto=format&amp;fit=crop&amp;w=1000&amp;q=80"
            alt="People crossing a city street">
    </section>
    <!-- Layout Dua Kolom: Berita Utama + Sidebar View Cell (Petani Kode) -->
    <div class="news-body-layout">
        <div class="news-main-content">
            <section id="announcements">
                <div class="section-heading">
                    <h2>Company<br>announcements</h2><a class="outline-button" href="#announcements">view all</a>
                </div>
                <div class="story-grid">
                    <article class="story">
                        <h3>Annual general meeting of<br>Widyatama 2021</h3>
                        <p>At the board meeting immediately after the annual general meeting, Widyatama introduced its latest
                            academic and community initiatives.</p><span class="date">16 Mar 2021</span><img
                            src="https://images.unsplash.com/photo-1556761175-b413da4baf72?auto=format&amp;fit=crop&amp;w=600&amp;q=80"
                            alt="Team meeting">
                    </article>
                    <article class="story">
                        <h3>New leadership<br>candidacy for Widyatama</h3>
                        <p>Widyatama has announced a new leadership direction to strengthen education, innovation, and
                            collaboration.</p><span class="date">15 Mar 2021</span><img
                            src="https://images.unsplash.com/photo-1560250097-0b93528c311a?auto=format&amp;fit=crop&amp;w=600&amp;q=80"
                            alt="Business leader">
                    </article>
                    <article class="story">
                        <h3>Annual community meeting<br>of Widyatama</h3>
                        <p>The annual community meeting will be held as an open forum for students, lecturers, and partners.</p>
                        <span class="date">19 Feb 2021</span><img
                            src="https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?auto=format&amp;fit=crop&amp;w=600&amp;q=80"
                            alt="Modern building">
                    </article>
                </div>
            </section>
            <section>
                <div class="section-heading">
                    <h2>Insights</h2><a class="outline-button" href="#insights">view all</a>
                </div>
                <div class="insight-grid" id="insights">
                    <article class="insight">
                        <h3>Nordic Outlook: On the cusp of recovery</h3>
                        <p>The COVID-19 crisis appears to be easing across the Nordic countries.</p><span class="date">7 Apr
                            2021</span><img
                            src="https://images.unsplash.com/photo-1584634731339-252c581abfc5?auto=format&amp;fit=crop&amp;w=600&amp;q=80"
                            alt="COVID-19 vaccine bottle">
                    </article>
                    <article class="insight">
                        <h3>Quarterly House View: Equities still have more to give</h3>
                        <p>Spring is now knocking at the door and stocks optimism is quickly waking.</p><span class="date">1 Mar
                            2021</span><img
                            src="https://images.unsplash.com/photo-1554224155-6726b3ff858f?auto=format&amp;fit=crop&amp;w=1000&amp;q=80"
                            alt="Financial documents and chart">
                    </article>
                </div>
            </section>
        </div>

        <!-- Sidebar Kolom: Menggunakan layout/sidebar yang memanggil View Cell (Limit 5) -->
        <aside class="news-sidebar">
            <?= $this->include('layout/sidebar') ?>
        </aside>
    </div>
</main>
<?= $this->endSection() ?>