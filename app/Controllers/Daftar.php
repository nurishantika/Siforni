<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\AdminModel;

class Daftar extends Controller
{

    protected $AdminModel;

    public function __construct()
    {
        $this->AdminModel = new AdminModel();
    }

    public function index()
    {
        //include helper form
        helper(['form']);
        $data = [
            'title'    => 'Registrasi | Alumni SI UPNVJT'
        ];
        echo view('pages/daftaradmin', $data);
    }

    public function save()
    {
        //include helper form
        helper(['form']);
        //set rules validation form
        $rules = [
            'username'         => 'required|min_length[6]|max_length[50]|is_unique[admin.username]',
            'password'      => 'required|min_length[6]|max_length[200]',
            'confpassword'  => 'matches[password]'
        ];

        if ($this->validate($rules)) {
            $model = new AdminModel();
            $data = [
                'title'    => 'Registrasi | Alumni SI UPNVJT',
                'username'    => $this->request->getVar('username'),
                'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT)
            ];
            $model->save($data);
            return redirect()->to('/masuk');
        } else {
            $data['validation'] = $this->validator;
            $data['title'] = 'Registrasi | Alumni SI UPNVJT';
            echo view('pages/daftaradmin', $data);
        }
    }
}
