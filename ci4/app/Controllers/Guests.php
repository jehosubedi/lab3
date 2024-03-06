<?php

namespace App\Controllers;

use App\Models\GuestModel;
use CodeIgniter\Exceptions\PageNotFoundException;

class Guests extends BaseController
{
    public function index()
    {
        $model = model(GuestModel::class);

        $data['guest'] = $model->getGuest();
        $data = [
            'guest'  => $model->getGuest(),
            'title' => 'Guest List',
        ];

        return view('templates/guestheader', $data)
            . view('guest/index')
            . view('templates/guestfooter');
    }

    public function show($email = null)
    {
        $model = model(GuestModel::class);

        $data['guest'] = $model->getguest($email);
		
		if (empty($data['guest'])) {
            throw new PageNotFoundException('Cannot find the guest item: ' . $email);
        }

        $data['title'] = $data['guest']['name'];

        return view('templates/guestheader', $data)
            . view('guest/view')
            . view('templates/guestfooter');
    }

    public function new()
    {
        helper('form');

        return view('templates/header', ['title' => 'Create a guest item'])
            . view('guest/create')
            . view('templates/footer');
    }

    public function create()
    {
        helper('form');

        $data = [
            'name' => $this->request->getPost('name'),
            'email' => $this->request->getPost('email'),
            'website' => $this->request->getPost('website'),
            'comment' => $this->request->getPost('comment'),
            'gender' => $this->request->getPost('gender')
        ];

        // Validation rules
        $rules = [
            'name' => 'required|max_length[255]|min_length[3]',
            'email' => 'required|max_length[255]|valid_email',
            'website' => 'required|max_length[255]|valid_url',
            'comment' => 'required|max_length[5000]|min_length[10]',
            'gender' => 'required|max_length[255]|min_length[3]'
        ];

        // Validation
        if (!$this->validate($rules)) {
            // Validation failed, return to the form with errors
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        // Data is validated, proceed to save it
        $model = model(GuestModel::class);

        $model->save($data);

        return redirect()->to('/guests')->with('success', 'Guest created successfully');
    }
} 