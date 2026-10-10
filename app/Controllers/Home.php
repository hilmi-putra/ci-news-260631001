<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('welcome_message');
    }

    public function about(): string
    {
        return view('about');
    }

    public function contact(): string
    {
        return view('contact', ['name' => 'Pengunjung']);
    }

    public function faqs(): string
    {
        return view('faqs', [
            'data_faqs' => [
                ['question' => 'Apa itu CodeIgniter?', 'answer' => 'CodeIgniter adalah framework PHP yang ringan dan cepat.'],
                ['question' => 'Apa fungsi view layout?', 'answer' => 'View layout membantu menggunakan struktur halaman yang sama di banyak view.'],
            ],
        ]);
    }
}
