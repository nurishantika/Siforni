<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\AdminModel;

class Masuk extends Controller
{
    public function index()
    {
        helper(['form']);
        $data = [
            'title' => 'Login Admin | Alumni SI UPNVJT'
        ];
        echo view('/pages/masuk', $data);
    }

    public function auth()
    {
        $session = session();
        $model = new AdminModel();
        $username = $this->request->getVar('username');
        $password = $this->request->getVar('password');
        $data = $model->where('username', $username)->first();
        if ($data) {
            $pass = $data['password'];
            $verify_pass = password_verify($password, $pass);
            if ($verify_pass) {
                $ses_data = [
                    'username'    => $data['username'],
                    'logged_in'     => TRUE
                ];
                $session->set($ses_data);
                return redirect()->to('/admin');
            } else {
                $session->setFlashdata('msg', 'Wrong Password');
                return redirect()->to('/masuk');
            }
        } else {
            $session->setFlashdata('msg', 'Username not Found');
            return redirect()->to('/masuk');
        }
    }

    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to('/masuk');
    }
}
