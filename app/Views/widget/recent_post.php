<style>
    .widget-recent-posts {
        background: #ffffff;
        border: 1px solid #dcdcdc;
        border-radius: 8px;
        padding: 20px;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.04);
        margin-bottom: 24px;
    }
    .widget-recent-posts .widget-header {
        display: flex;
        align-items: center;
        justify-content: space-between;
        margin-bottom: 14px;
        padding-bottom: 10px;
        border-bottom: 2px solid #090909;
    }
    .widget-recent-posts .widget-title {
        margin: 0;
        font-family: 'DM Sans', Arial, sans-serif;
        font-size: 16px;
        font-weight: 700;
        letter-spacing: -0.5px;
        color: #090909;
        display: flex;
        align-items: center;
        gap: 8px;
    }
    .widget-recent-posts .widget-badge {
        font-size: 10px;
        background: #e94e52;
        color: #ffffff;
        padding: 2px 7px;
        border-radius: 999px;
        font-weight: 600;
        letter-spacing: 0.5px;
        text-transform: uppercase;
    }
    .widget-recent-posts .widget-list {
        display: flex;
        flex-direction: column;
        gap: 14px;
        margin: 0;
        padding: 0;
        list-style: none;
    }
    .widget-recent-posts .widget-item {
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 14px;
        padding-bottom: 12px;
        border-bottom: 1px solid #f0f0f0;
        text-decoration: none;
        color: inherit;
        transition: transform 0.15s ease;
    }
    .widget-recent-posts .widget-item:last-child {
        border-bottom: none;
        padding-bottom: 0;
    }
    .widget-recent-posts .widget-item:hover {
        transform: translateX(3px);
    }
    .widget-recent-posts .widget-item-body {
        flex: 1;
        min-width: 0;
    }
    .widget-recent-posts .widget-item-title {
        margin: 0 0 4px;
        font-size: 13px;
        font-weight: 600;
        line-height: 1.35;
        color: #111;
    }
    .widget-recent-posts .widget-item:hover .widget-item-title {
        color: #e94e52;
    }
    .widget-recent-posts .widget-item-meta {
        font-size: 11px;
        color: #777;
    }
    .widget-recent-posts .widget-item-thumb {
        width: 58px;
        height: 58px;
        border-radius: 6px;
        object-fit: cover;
        background: #eee;
        flex-shrink: 0;
        border: 1px solid #e5e5e5;
    }
</style>

<?php
$sampleImages = [
    'https://images.unsplash.com/photo-1517694712202-14dd9538aa97?auto=format&fit=crop&w=150&q=80',
    'https://images.unsplash.com/photo-1555066931-4365d14bab8c?auto=format&fit=crop&w=150&q=80',
    'https://images.unsplash.com/photo-1498050108023-c5249f4df085?auto=format&fit=crop&w=150&q=80',
    'https://images.unsplash.com/photo-1461749280684-dccba630e2f6?auto=format&fit=crop&w=150&q=80',
    'https://images.unsplash.com/photo-1526374965328-7f61d4dc18c5?auto=format&fit=crop&w=150&q=80',
];

$totalLimit = isset($limit) && is_numeric($limit) ? (int)$limit : 3;

$postsToShow = [];
if (!empty($dbPosts)) {
    foreach ($dbPosts as $idx => $p) {
        $postsToShow[] = [
            'title' => $p['title'],
            'time'  => ($p['author'] ?? 'Admin') . ' · ' . (isset($p['created_at']) ? date('d M Y', strtotime($p['created_at'])) : 'Terkini'),
            'image' => $sampleImages[$idx % count($sampleImages)],
        ];
    }
} else {
    // Koleksi cadangan jika database belum terhubung
    $defaultPosts = [
        [
            'title' => 'Komunitas CodeIgniter Indonesia Mengadakan Meetup 2026',
            'time'  => '2 jam lalu · baca 2 menit',
            'image' => 'https://images.unsplash.com/photo-1517694712202-14dd9538aa97?auto=format&fit=crop&w=150&q=80'
        ],
        [
            'title' => '9 Fitur Terbaru CodeIgniter 4 yang Wajib Dicoba Pengembang',
            'time'  => '1 hari lalu · baca 3 menit',
            'image' => 'https://images.unsplash.com/photo-1555066931-4365d14bab8c?auto=format&fit=crop&w=150&q=80'
        ],
        [
            'title' => 'Tutorial Modularisasi Antarmuka Menggunakan View Cells',
            'time'  => '2 hari lalu · baca 4 menit',
            'image' => 'https://images.unsplash.com/photo-1498050108023-c5249f4df085?auto=format&fit=crop&w=150&q=80'
        ],
    ];
    $postsToShow = array_slice($defaultPosts, 0, $totalLimit);
}
?>

<!-- Komponen View Cell: Recent Posts Widget (Petani Kode) -->
<div class="card widget-recent-posts">
    <div class="card-body" style="padding: 0;">
        <div class="widget-header">
            <h5 class="widget-title">
                <span>Recent Posts</span>
                <span class="widget-badge">View Cell (DB)</span>
            </h5>
            <small style="color: #888; font-size: 11px;">Limit: <?= esc($totalLimit) ?></small>
        </div>
        <div class="list-group list-group-flush widget-list">
            <?php foreach ($postsToShow as $item): ?>
                <div class="media widget-item">
                    <div class="media-body widget-item-body">
                        <h6 class="widget-item-title"><?= esc($item['title']) ?></h6>
                        <small class="text-secondary widget-item-meta"><?= esc($item['time']) ?></small>
                    </div>
                    <img class="rounded ml-3 widget-item-thumb" src="<?= esc($item['image']) ?>" alt="Thumbnail">
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
