<?php

namespace App\Controllers;

use App\Models\OfficeModel;
use CodeIgniter\Exceptions\PageNotFoundException;

class Office extends BaseController
{
    private function checkAuth()
    {
        if (!session()->get('logged_in')) {
            session()->setFlashdata('error', 'Silakan login terlebih dahulu untuk mengakses Offices.');
            return redirect()->to(base_url('login'));
        }

        return null;
    }

    public function index()
    {
        $model = new OfficeModel();

        return view('office/public', [
            'offices' => $model->orderBy('officeCode', 'ASC')->findAll(),
        ]);
    }

    public function adminIndex()
    {
        if ($redirect = $this->checkAuth()) {
            return $redirect;
        }

        $model = new OfficeModel();

        return view('office/index', [
            'offices' => $model->orderBy('officeCode', 'ASC')->findAll(),
        ]);
    }
    public function create()
    {
        if ($redirect = $this->checkAuth()) {
            return $redirect;
        }

        if ($this->request->getMethod() === 'POST') {
            $data = $this->officeData();
            $validation = $this->validateOffice($data, true);

            if ($validation === true) {
                (new OfficeModel())->insert($data);
                return redirect()->to(base_url('admin/offices'))->with('success', 'Data office berhasil ditambahkan.');
            }
        }

        return view('office/form', [
            'office' => null,
            'errors' => $this->validator?->getErrors() ?? [],
            'formTitle' => 'Tambah Office',
        ]);
    }

    public function edit(string $officeCode)
    {
        if ($redirect = $this->checkAuth()) {
            return $redirect;
        }

        $model = new OfficeModel();
        $office = $model->find($officeCode);

        if (!$office) {
            throw PageNotFoundException::forPageNotFound('Office tidak ditemukan.');
        }

        if ($this->request->getMethod() === 'POST') {
            $data = $this->officeData();
            $validation = $this->validateOffice($data, false);

            if ($validation === true) {
                unset($data['officeCode']);
                $model->update($officeCode, $data);
                return redirect()->to(base_url('admin/offices'))->with('success', 'Data office berhasil diperbarui.');
            }

            $office = array_merge($office, $data);
        }

        return view('office/form', [
            'office' => $office,
            'errors' => $this->validator?->getErrors() ?? [],
            'formTitle' => 'Edit Office',
        ]);
    }

    public function delete(string $officeCode)
    {
        if ($redirect = $this->checkAuth()) {
            return $redirect;
        }

        $model = new OfficeModel();

        if (!$model->find($officeCode)) {
            throw PageNotFoundException::forPageNotFound('Office tidak ditemukan.');
        }

        $model->delete($officeCode);
        return redirect()->to(base_url('admin/offices'))->with('success', 'Data office berhasil dihapus.');
    }

    private function officeData(): array
    {
        return [
            'officeCode' => trim((string) $this->request->getPost('officeCode')),
            'city' => trim((string) $this->request->getPost('city')),
            'phone' => trim((string) $this->request->getPost('phone')),
            'addressLine1' => trim((string) $this->request->getPost('addressLine1')),
            'addressLine2' => trim((string) $this->request->getPost('addressLine2')),
            'state' => trim((string) $this->request->getPost('state')),
            'country' => trim((string) $this->request->getPost('country')),
            'postalCode' => trim((string) $this->request->getPost('postalCode')),
            'territory' => trim((string) $this->request->getPost('territory')),
        ];
    }

    private function validateOffice(array $data, bool $isCreate): bool
    {
        $rules = [
            'officeCode' => $isCreate ? 'required|max_length[10]|is_unique[offices.officeCode]' : 'required|max_length[10]',
            'city' => 'required|max_length[50]',
            'phone' => 'required|max_length[50]',
            'addressLine1' => 'required|max_length[50]',
            'addressLine2' => 'permit_empty|max_length[50]',
            'state' => 'permit_empty|max_length[50]',
            'country' => 'required|max_length[50]',
            'postalCode' => 'permit_empty|max_length[15]',
            'territory' => 'permit_empty|max_length[10]',
        ];

        return $this->validateData($data, $rules);
    }
}
