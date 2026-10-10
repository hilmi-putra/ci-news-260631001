<?= $this->extend('layout/page_layout') ?>
<?= $this->section('title') ?>FAQs - CI News<?= $this->endSection() ?>
<?= $this->section('content') ?>
<h2 class="mb-4">Pertanyaan Umum</h2>
<div class="accordion" id="faqList">
    <?php foreach ($data_faqs as $index => $faq): ?>
        <div class="card">
            <div class="card-header" id="faqHeading<?= $index ?>">
                <h5 class="mb-0">
                    <button class="btn btn-link text-left" type="button" data-toggle="collapse"
                        data-target="#faqAnswer<?= $index ?>" aria-expanded="<?= $index === 0 ? 'true' : 'false' ?>"
                        aria-controls="faqAnswer<?= $index ?>">
                        <?= esc($faq['question']) ?>
                    </button>
                </h5>
            </div>
            <div id="faqAnswer<?= $index ?>" class="collapse <?= $index === 0 ? 'show' : '' ?>"
                aria-labelledby="faqHeading<?= $index ?>" data-parent="#faqList">
                <div class="card-body"><?= esc($faq['answer']) ?></div>
            </div>
        </div>
    <?php endforeach; ?>
</div>
<?= $this->endSection() ?>
