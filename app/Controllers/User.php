<?php

namespace App\Controllers;

use Irsyadulibad\DataTables\DataTables;
use App\Models\MUser;

class User extends BaseController
{
    public function json()
    {
        return DataTables::use('users')
            ->addColumn('action', function ($data) {
                return '<a href="/edit/' . $data->id . '">edit</a>';
            })
            ->make(true);
    }

    public function index()
    {
        $data = [
            'title' => 'User',
            'isi'   => 'user/index'
        ];
        return view('layout/wrapper', $data);
    }
    public function add()
    {
        return view('user-list');
    }
    public function edit($id)
    {
        //model initialize
        $MUser = new MUser();

        $data = array(
            'isi'       => 'user/edit',
            'dataId'    => $MUser->find($id)
        );

        return view('layout/wrapper', $data);
    }
    public function update_password($id)
    {
        helper(['form', 'url']);
        $session = session();
        $userId = $session->get('id'); // Misalnya, user ID disimpan di session

        // Validasi input
        $rules = [
            'old_password' => 'required',
            'new_password' => 'required|min_length[8]',
            'confirm_password' => 'matches[new_password]'
        ];

        if (!$this->validate($rules)) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        $userModel = new MUser();
        $user = $userModel->find($userId);

        // Verifikasi password lama
        if (!password_verify($this->request->getPost('old_password'), $user['password'])) {
            return redirect()->back()->withInput()->with('error', 'Old password is incorrect');
        }

        // Update password baru
        $userModel->update($userId, [
            'password' => password_hash($this->request->getPost('new_password'), PASSWORD_DEFAULT)
        ]);

        return redirect()->back()->with('success', 'Password updated successfully');
    }
}
