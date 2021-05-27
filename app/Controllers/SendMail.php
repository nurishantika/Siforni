<?php

namespace App\Controllers;

use App\Models\FormModel;
use CodeIgniter\Controller;
use App\Models\AlumniModel;
use App\Models\EmailModel;

class SendMail extends Controller
{
    protected $AlumniModel;
    protected $EmailModel;
    protected $email;
    public function __construct()
    {
        $this->AlumniModel = new AlumniModel();
        $this->EmailModel = new EmailModel();
        $this->email = \Config\Services::email();
        helper(['form']);
    }

    public function index()
    {
        $data = [
            'title' => 'Kirim Email | Alumni SI UPNVJT',
            'alumni' => $this->AlumniModel->getAlumni()
        ];
        return view('admin/email', $data);
    }

    function sendEmail()
    {
        $data = [
            'title' => 'Kirim Email | Alumni SI UPNVJT',
        ];

        $subject            = $this->request->getPost('subject');
        $message            = $this->request->getPost('message');

        $getallalumni = $this->AlumniModel->findAll();
        $array_email = [];
        foreach ($getallalumni as $dataalumni) {
            array_push($array_email, $dataalumni['email']);
        }
        // dd($array_email);
        // for ($i = 0; $i < count($array_email); $i++) {
        foreach ($array_email as $mail) {
            // $email = $this->email->setTo($array_email[$i]);
            $this->email->clear();
            $email = $this->email->setFrom('dessertinbox.sub@gmail.com', 'Ikatan Alumni Sistem Informasi UPN "Veteran" Jawa Timur');
            $email = $this->email->setTo($mail);
            $email = $this->email->setSubject($subject);
            $email = $this->email->setMessage($message);

            if (!$this->email->send()) {
                session()->setFlashdata('error', "Gagal mengirimkan email." . $email->printDebugger());
                // return redirect()->to('/SendMail');
            } else {
                session()->setFlashdata('success', "Berhasil mengirimkan email.");
            }
        }
        return redirect()->to('/SendMail');
    }
}
