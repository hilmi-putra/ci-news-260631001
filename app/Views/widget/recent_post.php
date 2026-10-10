<?php
$sampleImages = [
    'https://images.unsplash.com/photo-1517694712202-14dd9538aa97?auto=format&fit=crop&w=150&q=80',
    'https://images.unsplash.com/photo-1555066931-4365d14bab8c?auto=format&fit=crop&w=150&q=80',
    'https://images.unsplash.com/photo-1498050108023-c5249f4df085?auto=format&fit=crop&w=150&q=80',
    'https://images.unsplash.com/photo-1461749280684-dccba630e2f6?auto=format&fit=crop&w=150&q=80',
    'https://images.unsplash.com/photo-1526374965328-7f61d4dc18c5?auto=format&fit=crop&w=150&q=80',
];

$totalLimit = isset($limit) && is_numeric($limit) ? max(0, (int) $limit) : 3;
$postsToShow = [];

if (!empty($dbPosts)) {
    foreach (array_slice($dbPosts, 0, $totalLimit) as $index => $post) {
        $postsToShow[] = [
            'title' => $post['title'],
            'time' => ($post['author'] ?? 'Admin') . ' · ' .
                (isset($post['created_at']) ? date('d M Y', strtotime($post['created_at'])) : 'Terkini'),
            'image' => $sampleImages[$index % count($sampleImages)],
        ];
    }
} else {
    $postsToShow = array_slice([
        ['title' => 'Komunitas CodeIgniter Indonesia Mengadakan Meetup 2026', 'time' => '2 jam lalu · baca 2 menit', 'image' => $sampleImages[0]],
        ['title' => '9 Fitur Terbaru CodeIgniter 4 yang Wajib Dicoba Pengembang', 'time' => '1 hari lalu · baca 3 menit', 'image' => $sampleImages[1]],
        ['title' => 'Tutorial Modularisasi Antarmuka Menggunakan View Cells', 'time' => '2 hari lalu · baca 4 menit', 'image' => $sampleImages[2]],
    ], 0, $totalLimit);
}
?>

<div class="card shadow-sm mb-4">
    <div class="card-body">
        <h5 class="card-title">Recent Posts</h5>
        <hr>
        <div class="list-group list-group-flush">
            <?php foreach ($postsToShow as $post): ?>
                <div class="media mb-3">
                    <div class="media-body">
                        <h6 class="mt-0 mb-1"><?= esc($post['title']) ?></h6>
                        <small class="text-secondary"><?= esc($post['time']) ?></small>
                    </div>
                    <img class="rounded ml-3 widget-thumb" src="<?= esc($post['image']) ?>" alt="Thumbnail berita">
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
