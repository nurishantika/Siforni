<?php

namespace App\Controllers;

use App\Models\AlumniModel;
use App\Models\beritaModel;
use App\Models\lokerModel;
use App\Models\labModel;
use CodeIgniter\CodeIgniter;
use Config\Exceptions;

class Alumni extends BaseController
{
    protected $alumniModel;
    protected $beritaModel;
    protected $lokerModel;
    protected $labModel;
    public function __construct()
    {
        $this->alumniModel = new AlumniModel();
        $this->beritaModel = new beritaModel();
        $this->lokerModel = new lokerModel();
        $this->labModel = new labModel();
    }

    public function index()
    {
        $alumni = $this->alumniModel->findAll();

        $data = [
            'title' => 'Data Alumni | Alumni SI UPNVJT',
            'alumni' => $this->alumniModel->getAlumni()
        ];

        return view('data/data_alumni', $data);
    }

    // Index Alumni
    public function homepage()
    {
        $data = [
            'title' => 'Home | Alumni SI UPNVJT',
        ];

        return view('alumni/homepage', $data);
    }

    public function data()
    {
        $alumni = $this->alumniModel->findAll();

        $data = [
            'title' => 'Data Alumni | Alumni SI UPNVJT',
            'alumni' => $this->alumniModel->getAlumni()
        ];

        return view('alumni/data_alumni', $data);
    }

    public function detailed($id)
    {
        $data = [
            'title' => 'Detail Alumni | Alumni SI UPNVJT',
            'alumni' => $this->alumniModel->getAlumni($id)
        ];


        // jika data tidak ada di tabel
        if (empty($data['alumni'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Data Alumni ' . $id . ' tidak ditemukan.');
        }

        return view('alumni/detail', $data);
    }

    // Berita Alumni
    public function berita()
    {
        $berita = $this->beritaModel->findAll();

        $data = [
            'title' => 'Berita | Alumni SI UPNVJT',
            'berita' => $berita
        ];

        return view('alumni/berita', $data);
    }

    public function berita_detail($kode_berita)
    {
        $data = [
            'title' => 'Berita | Alumni SI UPNVJT',
            'berita' => $this->beritaModel->getBerita($kode_berita)
        ];

        return view('alumni/berita_detail', $data);
    }

    // Lowongan Pekerjaan Alumni
    public function lowongan()
    {
        $lokerModel = $this->lokerModel->findAll();

        $data = [
            'title' => 'Lowongan Pekerjaan | Alumni SI UPNVJT',
            'lokerModel' => $lokerModel
        ];

        return view('alumni/lowongan', $data);
    }

    public function lowongan_detail($kode_loker)
    {
        $data = [
            'title' => 'Lowongan Pekerjaan | Alumni SI UPNVJT',
            'lokerModel' => $this->lokerModel->getLoker($kode_loker)
        ];

        return view('alumni/lowongan_detail', $data);
    }

    // Profil
    public function profil($id)
    {
        $data = [
            'title' => 'Profil | Alumni SI UPNVJT',
            'alumni' => $this->alumniModel->getAlumni($id)
        ];

        return view('alumni/profil', $data);
    }


    // Index Alumni Admin
    public function alumni()
    {
        $alumni = $this->alumniModel->findAll();

        $data = [
            'title' => 'Data Alumni | Alumni SI UPNVJT',
            'alumni' => $this->alumniModel->getAlumni()
        ];

        return view('admin/data/data_alumni', $data);
    }

    public function detail($id)
    {
        $data = [
            'title' => 'Detail Alumni | Alumni SI UPNVJT',
            'alumni' => $this->alumniModel->getAlumni($id)
        ];


        // jika data tidak ada di tabel
        if (empty($data['alumni'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Data Alumni ' . $id . ' tidak ditemukan.');
        }

        return view('data/detail', $data);
    }

    // Detail Alumni Admin
    // public function detailalm($id)
    // {
    //     $data = [
    //         'title' => 'Detail Alumni | Alumni SI UPNVJT',
    //         'alumni' => $this->alumniModel->getAlumni($id)
    //     ];


    //     // jika data tidak ada di tabel
    //     if (empty($data['alumni'])) {
    //         throw new \CodeIgniter\Exceptions\PageNotFoundException('Data Alumni ' . $id . ' tidak ditemukan.');
    //     }

    //     return view('admin/data/detail', $data);
    // }

    public function create()
    {
        // session();
        $data = [
            'title' => 'Input Data | Alumni SI UPNVJT',
            'validation' => \Config\Services::validation(),
            'lab' => $this->labModel->getlab()
        ];

        return view('data/create', $data);
    }

    // Input Data Alumni Dari Admin

    public function nilai()
    {
        $data = [
            'title' => 'Input Nilai | Alumni SI UPNVJT'
        ];

        return view('admin/data/create', $data);
    }

    public function save()
    {
        //Validasi Input

        if (!$this->validate([
            'npm' => [
                'rules' => 'required|is_unique[alumni.npm]|numeric',
                'errors' => [
                    'required' => 'NPM wajib diisi!',
                    'is_unique' => 'NPM sudah terdaftar!',
                    'numeric' => 'NPM hanya berisi angka!'
                ]
            ],
            'nama' => [
                'rules' => 'required|alpha_numeric_punct',
                'errors' => [
                    'required' => 'Nama wajib diisi!',
                    'alpha_numeric_punct' => 'Nama yang anda isikan mengandung karakter yang tidak diperbolehkan!'

                ]
            ],
            'thmasuk' => [
                'rules' => 'required|numeric|min_length[thmasuk,4]',
                'errors' => [
                    'required' => 'Tahun masuk wajib diisi!',
                    'numeric' => 'Tahun masuk hanya mengandung angka!',
                    'min_length' => 'Minimal 4 Karakter!'

                ]
            ],
            'thlulus' => [
                'rules' => 'required|numeric|min_length[thlulus,4]',
                'errors' => [
                    'required' => 'Tahun lulus wajib diisi!',
                    'numeric' => 'Tahun lulus hanya mengandung angka!',
                    'min_length' => 'Minimal 4 Karakter!'

                ]
            ],
            'alamat' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Alamat wajib diisi!'
                ]
            ],
            'facebook' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Facebook wajib diisi!'
                ]
            ],
            'instagram' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Instagram wajib diisi!'
                ]
            ],
            'notelp' => [
                'rules' => 'required|numeric|min_length[notelp,10]',
                'errors' => [
                    'required' => 'No.Telepon wajib diisi!',
                    'numeric' => 'No.Telepon hanya mengandung angka!',
                    'min_length' => 'No.Telepon 10 Karakter!'
                ]
            ],
            'notelp_ortu' => [
                'rules' => 'required|numeric|min_length[notelp_ortu,10]',
                'errors' => [
                    'required' => 'No.Telepon wajib diisi!',
                    'numeric' => 'No.Telepon hanya mengandung angka!',
                    'min_length' => 'No.Telepon minimal 10 Karakter!'
                ]
            ],
            'noijazah' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'No. Ijazah wajib diisi!',
                ]
            ],
            'email' => [
                'rules' => 'required|valid_email',
                'errors' => [
                    'required' => 'Email wajib diisi!',
                    'valid_email' => 'Email tidak valid!'
                ]
            ],
            'email_cadangan' => [
                'rules' => 'required|valid_email',
                'errors' => [
                    'required' => 'Email wajib diisi!',
                    'valid_email' => 'Email tidak valid!'
                ]
            ],
            'thbekerja' => [
                'rules' => 'min_length[thbekerja,4]',
                'errors' => [
                    'min_length' => 'Minimal 4 Karakter!'

                ]
            ],
            'thkeluar' => [
                'rules' => 'min_length[thkeluar,4]',
                'errors' => [
                    'min_length' => 'Minimal 4 Karakter!'

                ]
            ],
            'ipk' => [
                'rules' => 'required|numeric|min_length[ipk,4]|decimal',
                'errors' => [
                    'required' => 'IPK wajib diisi!',
                    'numeric' => 'IPK hanya mengandung angka dan koma!',
                    'min_length' => 'Minimal 4 Karakter!',
                    'decimal' => 'Contoh "3.85"'

                ]
            ],
            'judulskripsi' => [
                'rules' => 'required|alpha_numeric_punct',
                'errors' => [
                    'required' => 'Judul skripsi wajib diisi!',
                    'alpha_numeric_punct' => 'Judul skripsi hanya boleh berisi huruf dan angka serta tanda baca tertentu!',
                ]
            ],
            'abstrak' => [
                'rules' => 'required|alpha_numeric_punct',
                'errors' => [
                    'required' => 'Abstrak skripsi wajib diisi!',
                    'alpha_numeric_punct' => 'Abstrak skripsi hanya boleh berisi huruf dan angka serta tanda baca tertentu!',
                ]
            ],
            'fotoalumni' => [
                'rules' => 'uploaded[fotoalumni]|max_size[fotoalumni,5000]|is_image[fotoalumni]|mime_in[fotoalumni,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'uploaded' => 'Foto wajib diisi!',
                    'max_size' => 'Ukuran foto maksimal 5MB!',
                    'is_image' => 'Yang anda pilih bukan gambar!',
                    'mime_in' => 'Yang anda pilih bukan gambar!'
                ]
            ],
            'transkrip' => [
                'rules' => 'uploaded[transkrip]|max_size[transkrip,5000]',
                'errors' => [
                    'uploaded' => 'Foto wajib diisi!',
                    'max_size' => 'Ukuran foto maksimal 5MB!'
                ]
            ]
        ])) {
            // $validation = \Config\Services::validation();
            // return redirect()->to('/alumni/create')->withInput()->with('validation', $validation);
            return redirect()->to('/alumni/create')->withInput();
        }

        // ambil gambar
        $fotoAlumni = $this->request->getFile('fotoalumni');

        //pindahkan file ke folder img
        $fotoAlumni->move('img');

        // ambil nama file
        $namaFoto = $fotoAlumni->getName();

        $this->alumniModel->save([
            'npm' => $this->request->getVar('npm'),
            'nama' => $this->request->getVar('nama'),
            'thmasuk' => $this->request->getVar('thmasuk'),
            'thlulus' => $this->request->getVar('thlulus'),
            'alamat' => $this->request->getVar('alamat'),
            'notelp' => $this->request->getVar('notelp'),
            'notelp_ortu' => $this->request->getVar('notelp_ortu'),
            'noijazah' => $this->request->getVar('noijazah'),
            'email' => $this->request->getVar('email'),
            'email_cadangan' => $this->request->getVar('email_cadangan'),
            'thbekerja' => $this->request->getVar('thbekerja'),
            'thkeluar' => $this->request->getVar('thkeluar'),
            'perusahaan' => $this->request->getVar('perusahaan'),
            'fotoalumni' => $namaFoto,
            'facebook' => $this->request->getVar('facebook'),
            'instagram' => $this->request->getVar('instagram'),
            'linkedin' => $this->request->getVar('linkedin'),
            'twitter' => $this->request->getVar('twitter'),
            'ipk' => $this->request->getVar('ipk'),
            'judulskripsi' => $this->request->getVar('judulskripsi'),
            'bidangminat' => $this->request->getVar('bidangminat'),
            'abstrak' => $this->request->getVar('abstrak'),
            'pencapaian' => $this->request->getVar('pencapaian'),
            'thpencapaian' => $this->request->getVar('thpencapaian'),
            'despencapaian' => $this->request->getVar('despencapaian'),
            'transkrip' => $this->request->getVar('transkrip')
        ]);

        // echo $this->alumniModel->errors();

        return redirect()->to('/alumni');
    }

    // public function delete($id)
    // {
    //     $this->alumniModel->delete($id);
    //     return redirect()->to('/admin/data/data_alumni');
    // }
}
