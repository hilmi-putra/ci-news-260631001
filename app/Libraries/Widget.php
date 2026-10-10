<?php

namespace App\Libraries;

class Widget
{
    /**
     * View Cell untuk menampilkan Recent Posts (widget berita terkini)
     * Mengintegrasikan data dinamis dari tabel database 'news'
     *
     * @param array $params Parameter opsional, misal: ['limit' => 5]
     * @return string
     */
    public function recentPost(array $params = []): string
    {
        $limit = isset($params['limit']) && is_numeric($params['limit']) ? (int)$params['limit'] : 3;

        // Mengambil data berita terbaru dari database 'ci_news_260631001'
        try {
            $db = \Config\Database::connect();
            $query = $db->table('news')
                ->where('status', 'published')
                ->orderBy('id', 'DESC')
                ->limit($limit)
                ->get();
            $dbPosts = $query->getResultArray();
        } catch (\Throwable $e) {
            $dbPosts = [];
        }

        $params['limit'] = $limit;
        $params['dbPosts'] = $dbPosts;

        return view('widget/recent_post', $params);
    }
}
