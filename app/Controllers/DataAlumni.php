<?php

namespace App\Controllers;

use App\Models\AlumniModel;

class DataAlumni extends BaseController
{
    protected $alumniModel;
    public function __construct()
    {
        $this->alumniModel = new AlumniModel();
    }

    public function index()
    {
        // $alumni = $this->alumniModel->findAll();

        $data = [
            'title' => 'Data Alumni | Alumni SI UPNVJT',
            'alumni' => $this->alumniModel->getAlumni()
        ];

        return view('DataAlumni/data_alumni', $data);
    }



    public function detail($npm)
    {
        $data = [
            'title' => 'Detail Alumni | Alumni SI UPNVJT',
            'alumni' => $this->alumniModel->getAlumni($npm)
        ];
        return view('DataAlumni/detail', $data);
    }
}
