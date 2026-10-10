<?php

namespace App\Controllers;

use App\Models\NewsModel;
use CodeIgniter\Exceptions\PageNotFoundException;

class NewsAdmin extends BaseController
{
    public function index()
    {
        $news = new NewsModel();
        $data['newses'] = $news->findAll();
        return view('admin_list_news', $data);
    }

    //--------------------------------------------------------------------------

    public function preview($id)
    {
        $news = new NewsModel();
        $data['news'] = $news->where('id', $id)->first();

        if (!$data['news']) {
            throw PageNotFoundException::forPageNotFound();
        }
        return view('news_detail', $data);
    }

    //--------------------------------------------------------------------------

    public function create()
    {
        helper(['url', 'text']);

        // lakukan validasi
        $validation = \Config\Services::validation();
        $validation->setRules(['title' => 'required']);
        $isDataValid = $validation->withRequest($this->request)->run();

        // jika data valid, simpan ke database
        if ($isDataValid) {
            $news = new NewsModel();
            $news->insert([
                "title"   => $this->request->getPost('title'),
                "content" => $this->request->getPost('content'),
                "status"  => $this->request->getPost('status'),
                "author"  => 'Hilmi Abdurrafi',
                "slug"    => url_title($this->request->getPost('title'), '-', true)
            ]);
            return redirect()->to('admin/news');
        }

        // tampilkan form create
        return view('admin_create_news');
    }

    //--------------------------------------------------------------------------

    public function edit($id)
    {
        // ambil artikel yang akan diedit
        $news = new NewsModel();
        $data['news'] = $news->where('id', $id)->first();

        if (!$data['news']) {
            throw PageNotFoundException::forPageNotFound();
        }

        // lakukan validasi data artikel
        $validation = \Config\Services::validation();
        $validation->setRules([
            'id'    => 'required',
            'title' => 'required'
        ]);
        $isDataValid = $validation->withRequest($this->request)->run();

        // jika data valid, maka simpan ke database
        if ($isDataValid) {
            $news->update($id, [
                "title"   => $this->request->getPost('title'),
                "content" => $this->request->getPost('content'),
                "status"  => $this->request->getPost('status')
            ]);
            return redirect()->to('admin/news');
        }

        // tampilkan form edit
        return view('admin_edit_news', $data);
    }

    //--------------------------------------------------------------------------

    public function delete($id)
    {
        $news = new NewsModel();
        $news->delete($id);
        return redirect()->to('admin/news');
    }
}
