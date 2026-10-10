<?= $this->extend('layout/page_layout') ?>
<?= $this->section('title') ?>News - CI News<?= $this->endSection() ?>
<?= $this->section('content') ?>
<div class="row">
    <div class="col-lg-8">
        <h2 class="mb-4">Berita Terbaru</h2>
        <div class="card mb-4">
            <img class="card-img-top hero-image"
                src="https://images.unsplash.com/photo-1494522358652-f30e61a60313?auto=format&fit=crop&w=1000&q=80"
                alt="Suasana kota">
            <div class="card-body">
                <h3 class="card-title">Informasi dan cerita terbaru</h3>
                <p class="card-text">Kumpulan berita dan pengumuman dari komunitas CI News.</p>
                <a class="btn btn-outline-primary" href="#announcements">Baca pengumuman</a>
            </div>
        </div>

        <section id="announcements">
            <h3 class="mb-3">Pengumuman</h3>
            <div class="row">
                <div class="col-md-6 mb-4">
                    <article class="card h-100">
                        <img class="card-img-top"
                            src="https://images.unsplash.com/photo-1556761175-b413da4baf72?auto=format&fit=crop&w=600&q=80"
                            alt="Pertemuan tim">
                        <div class="card-body">
                            <h5 class="card-title">Pertemuan umum Widyatama</h5>
                            <p class="card-text">Inisiatif akademik dan komunitas terbaru dibahas dalam pertemuan bersama.</p>
                        </div>
                        <div class="card-footer text-muted">16 Mar 2021</div>
                    </article>
                </div>
                <div class="col-md-6 mb-4">
                    <article class="card h-100">
                        <img class="card-img-top"
                            src="https://images.unsplash.com/photo-1554224155-6726b3ff858f?auto=format&fit=crop&w=600&q=80"
                            alt="Dokumen dan grafik">
                        <div class="card-body">
                            <h5 class="card-title">Arah baru pengembangan kampus</h5>
                            <p class="card-text">Kolaborasi pendidikan dan inovasi menjadi fokus pengembangan berikutnya.</p>
                        </div>
                        <div class="card-footer text-muted">15 Mar 2021</div>
                    </article>
                </div>
            </div>
        </section>
    </div>
    <aside class="col-lg-4">
        <?= $this->include('layout/sidebar') ?>
    </aside>
</div>
<?= $this->endSection() ?>
