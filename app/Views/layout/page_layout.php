<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $this->renderSection('title') ?: 'Widyatama News' ?></title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600&display=swap');

        :root {
            --paper: #f5f5f5;
            --ink: #090909;
            --muted: #777;
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
            font-size: 12px;
        }

        a {
            color: inherit;
        }

        .site-page {
            min-height: 100vh;
            padding: 28px clamp(24px, 8vw, 120px) 80px;
        }

        .page-content {
            max-width: 1120px;
            margin: 0 auto;
        }

        .page-kicker {
            margin: 0 0 16px;
            color: #999;
            font-size: 9px;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .page-title {
            max-width: 740px;
            margin: 0 0 28px;
            font-family: Arial, Helvetica, sans-serif;
            font-size: clamp(42px, 6vw, 78px);
            font-weight: 400;
            line-height: .94;
            letter-spacing: -4px;
        }

        .page-intro {
            max-width: 520px;
            margin: 0 0 72px;
            font-size: 15px;
            line-height: 1.5;
        }

        .section-rule {
            border-top: 1px solid var(--rule);
            padding-top: 18px;
        }

        .editorial-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 22px;
        }

        .editorial-item {
            border-top: 1px solid var(--ink);
            padding-top: 14px;
        }

        .editorial-item h2 {
            margin: 0 0 16px;
            font-size: 19px;
            font-weight: 400;
            line-height: 1.1;
        }

        .editorial-item p {
            margin: 0;
            color: #555;
            line-height: 1.5;
        }

        .editorial-item img {
            width: 100%;
            height: 180px;
            margin-top: 25px;
            object-fit: cover;
        }

        .split-page {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: clamp(40px, 10vw, 150px);
        }

        .split-page h2 {
            margin: 0 0 20px;
            font-size: 26px;
            font-weight: 400;
        }

        .split-page p {
            max-width: 430px;
            margin: 0 0 18px;
            color: #555;
            font-size: 14px;
            line-height: 1.55;
        }

        .faq-list {
            max-width: 820px;
        }

        .faq-item {
            display: grid;
            grid-template-columns: 1fr 1.5fr;
            gap: 30px;
            border-top: 1px solid var(--rule);
            padding: 22px 0;
        }

        .faq-item h2 {
            margin: 0;
            font-size: 18px;
            font-weight: 400;
        }

        .faq-item p {
            margin: 0;
            color: #555;
            line-height: 1.5;
        }

        .contact-form {
            max-width: 620px;
        }

        .field {
            margin-bottom: 25px;
        }

        .field label {
            display: block;
            margin-bottom: 8px;
            font-size: 10px;
            text-transform: uppercase;
        }

        .field input,
        .field textarea {
            width: 100%;
            border: 0;
            border-bottom: 1px solid var(--ink);
            border-radius: 0;
            padding: 10px 0;
            background: transparent;
            color: var(--ink);
            font: inherit;
            outline: 0;
        }

        .field textarea {
            resize: vertical;
        }

        .submit-button {
            border: 1px solid #7f8da5;
            border-radius: 50%;
            padding: 15px 22px;
            background: transparent;
            color: #152344;
            font: inherit;
            cursor: pointer;
        }

        @media (max-width: 700px) {
            .site-topbar {
                margin-bottom: 50px;
            }

            .editorial-grid,
            .split-page {
                grid-template-columns: 1fr;
                gap: 35px;
            }

            .faq-item {
                grid-template-columns: 1fr;
                gap: 12px;
            }
        }

        @media (max-width: 460px) {
            .page-title {
                letter-spacing: -2px;
            }
        }
    </style>
</head>

<body>
    <main class="site-page">
        <?= $this->include('layout/navbar') ?>
        <div class="page-content"><?= $this->renderSection('content') ?></div>
    </main>
</body>

</html>