<?php

namespace App\Controllers;

use App\Models\NewsModel;
use CodeIgniter\Exceptions\PageNotFoundException;

class NewsAdmin extends BaseController
{
    /**
     * Memastikan user sudah login sebelum mengakses method CRUD
     */
    private function checkAuth()
    {
        if (!session()->get('logged_in')) {
            session()->setFlashdata('error', 'Silakan login terlebih dahulu untuk mengakses fitur CRUD.');
            return redirect()->to(base_url('login'));
        }
        return null;
    }

    public function index()
    {
        if ($redirect = $this->checkAuth()) {
            return $redirect;
        }

        $news = new NewsModel();
        $data['newses'] = $news->findAll();
        return view('admin_list_news', $data);
    }

    //--------------------------------------------------------------------------

    public function preview($id)
    {
        if ($redirect = $this->checkAuth()) {
            return $redirect;
        }

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
        if ($redirect = $this->checkAuth()) {
            return $redirect;
        }

        helper(['url', 'text']);

        // lakukan validasi
        $validation = \Config\Services::validation();
        $validation->setRules(['title' => 'required']);
        $isDataValid = $validation->withRequest($this->request)->run();

        // jika data valid, simpan ke database
        if ($isDataValid) {
            $news = new NewsModel();
            $author = session()->get('name') ?: 'Hilmi Abdurrafi';

            $news->insert([
                "title"   => $this->request->getPost('title'),
                "content" => $this->request->getPost('content'),
                "status"  => $this->request->getPost('status'),
                "author"  => $author,
                "slug"    => url_title($this->request->getPost('title'), '-', true)
            ]);
            return redirect()->to(base_url('admin/news'));
        }

        // tampilkan form create
        return view('admin_create_news');
    }

    //--------------------------------------------------------------------------

    public function edit($id)
    {
        if ($redirect = $this->checkAuth()) {
            return $redirect;
        }

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
            return redirect()->to(base_url('admin/news'));
        }

        // tampilkan form edit
        return view('admin_edit_news', $data);
    }

    //--------------------------------------------------------------------------

    public function delete($id)
    {
        if ($redirect = $this->checkAuth()) {
            return $redirect;
        }

        $news = new NewsModel();
        $news->delete($id);
        return redirect()->to(base_url('admin/news'));
    }
}
