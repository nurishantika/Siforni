<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Home | Alumni SI UPNVJT'
        ];
        echo view('pages/homepage', $data);
    }

    public function login()
    {
        $data = [
            'title' => 'Login | Alumni SI UPNVJT'
        ];
        echo view('pages/login', $data);
    }

    public function daftar()
    {
        $data = [
            'title' => 'Daftar | Alumni SI UPNVJT'
        ];
        echo view('pages/daftar', $data);
    }

    public function input_data()
    {
        $data = [
            'title' => 'Input Data | Alumni SI UPNVJT'
        ];
        echo view('pages/input_data', $data);
    }

    //--------------------------------------------------------------------

}
