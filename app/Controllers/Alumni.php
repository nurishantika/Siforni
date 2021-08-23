<?php

namespace App\Controllers;

use App\Models\AlumniModel;
use App\Models\beritaModel;
use App\Models\lokerModel;
use App\Models\labModel;
use App\Models\NilaiModel;
use App\Models\SemesterModel;
use App\Models\UserModel;
use App\Models\PekerjaanModel;
use App\Models\PencapaianModel;
use App\Models\InputPekerjaanModel;
use App\Models\InputPencapaianModel;
use App\Models\GrafikModel;
use CodeIgniter\CodeIgniter;
use Config\Exceptions;

class Alumni extends BaseController
{
    protected $alumniModel;
    protected $beritaModel;
    protected $lokerModel;
    protected $labModel;
    protected $NilaiModel;
    protected $SemesterModel;
    protected $UserModel;
    protected $PekerjaanModel;
    protected $PencapaianModel;
    protected $InputPekerjaanModel;
    protected $InputPencapaianModel;
    public function __construct()
    {
        $this->alumniModel = new AlumniModel();
        $this->beritaModel = new beritaModel();
        $this->lokerModel = new lokerModel();
        $this->labModel = new labModel();
        $this->NilaiModel = new NilaiModel();
        $this->SemesterModel = new SemesterModel();
        $this->UserModel = new UserModel();
        $this->PekerjaanModel = new PekerjaanModel();
        $this->PencapaianModel = new PencapaianModel();
        $this->InputPekerjaanModel = new InputPekerjaanModel();
        $this->InputPencapaianModel = new InputPencapaianModel();
        $this->GrafikModel = new GrafikModel();
    }

    public function index()
    {
        $currentPage = $this->request->getVar('page_alumni') ? $this->request->getVar('page_alumni') : 1;

        $keyword = $this->request->getVar('keyword');
        if ($keyword) {
            $alumn = $this->alumniModel->search($keyword);
        } else {
            $alumn = $this->alumniModel;
        }

        $data = [
            'title' => 'Data Alumni | Alumni SI UPNVJT',
            'alumni' => $alumn->paginate(5, 'alumni'),
            'pager' => $this->alumniModel->pager,
            'currentPage' => $currentPage

        ];

        return view('data/data_alumni', $data);
    }

    // Index Alumni
    public function homepage()
    {
        $data = [
            'title' => 'Home | Alumni SI UPNVJT',
            'grafik1' => $this->GrafikModel->grafik1(),
            'grafik2' => $this->GrafikModel->grafik2(),
            'grafik3' => $this->GrafikModel->grafik3(),
            'berita' => $this->beritaModel->findAll(),
            'lokerModel' => $this->lokerModel->findAll()
        ];

        return view('alumni/homepage', $data);
    }

    public function data()
    {
        $currentPage = $this->request->getVar('page_alumni') ? $this->request->getVar('page_alumni') : 1;

        $keyword = $this->request->getVar('keyword');
        if ($keyword) {
            $alumn = $this->alumniModel->search($keyword);
        } else {
            $alumn = $this->alumniModel;
        }

        $data = [
            'title' => 'Data Alumni | Alumni SI UPNVJT',
            'alumni' => $alumn->paginate(5, 'alumni'),
            'pager' => $this->alumniModel->pager,
            'currentPage' => $currentPage
        ];

        return view('alumni/data_alumni', $data);
    }

    public function detailed($id)
    {
        $data = [
            'title' => 'Detail Alumni | Alumni SI UPNVJT',
            'alumni' => $this->alumniModel->getAlumni($id),
            'pekerjaan' => $this->PekerjaanModel->getPekerjaan($id),
            'pencapaian' => $this->PencapaianModel->getPencapaian($id),
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
    public function profil()
    {
        $idAlumni = session()->get('id_alumni');

        $data = [
            'title' => 'Profil | Alumni SI UPNVJT',
            'alumni' => $this->alumniModel->getAlumni($idAlumni),
            'pekerjaan' => $this->PekerjaanModel->getPekerjaan($idAlumni),
            'pencapaian' => $this->PencapaianModel->getPencapaian($idAlumni),
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
            'alumni' => $this->alumniModel->getAlumni($id),
            'pekerjaan' => $this->PekerjaanModel->getPekerjaan($id),
            'pencapaian' => $this->PencapaianModel->getPencapaian($id),
        ];

        // jika data tidak ada di tabel
        if (empty($data['alumni'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Data Alumni ' . $id . ' tidak ditemukan.');
        }

        return view('data/detail', $data);
    }

    // Detail Alumni

    public function create()
    {
        // session();
        helper(['form']);
        $data = [
            'title' => 'Input Data | Alumni SI UPNVJT',
            'alumni' => $this->alumniModel->getAlumni(),
            'validation' => \Config\Services::validation(),
            'lab' => $this->labModel->getlab(),
            'semester' => $this->SemesterModel->getSemester(),
        ];

        return view('/alumni/create', $data);
    }

    public function edit($id)
    {
        // session();
        helper(['form']);
        $data = [
            'title' => 'Input Data | Alumni SI UPNVJT',
            'alumni' => $this->alumniModel->getAlumni($id),
            'pekerjaan_alumni' => $this->InputPekerjaanModel->getPekerjaanAlumni($id),
            'pencapaian_alumni' => $this->InputPencapaianModel->getPencapaianAlumni($id),
            'validation' => \Config\Services::validation(),
            'lab' => $this->labModel->findAll(),
            'semester' => $this->SemesterModel->findAll(),
        ];
        // dd($data);
        return view("alumni/edit", $data);
    }

    public function update()
    {
        $deleted_pekerjaan = json_decode($this->request->getVar('deleted_pekerjaan'));
        $deleted_pencapaian = json_decode($this->request->getVar('deleted_pencapaian'));
        $id_alumni = $this->request->getVar('id_alumni');

        if (!empty($deleted_pekerjaan)) {
            foreach ($deleted_pekerjaan as $deleted_id) {
                $this->InputPekerjaanModel->delete($deleted_id);
            }
        }

        if (!empty($deleted_pencapaian)) {
            foreach ($deleted_pencapaian as $deleted_id) {
                $this->InputPencapaianModel->delete($deleted_id);
            }
        }
        //Save Data
        //Validasi Input

        //include helper form
        helper(['form']);

        // dd($this->request->getPost('nama'));

        if (!$this->validate([
            'npm' => [
                'rules' => 'required|numeric',
                'errors' => [
                    'required' => 'NPM wajib diisi!',
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
                'rules' => 'required|numeric',
                'errors' => [
                    'required' => 'Tahun masuk wajib diisi!',
                    'numeric' => 'Tahun masuk hanya mengandung angka!'
                ]
            ],
            'thlulus' => [
                'rules' => 'required|numeric',
                'errors' => [
                    'required' => 'Tahun lulus wajib diisi!',
                    'numeric' => 'Tahun lulus hanya mengandung angka!'
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
                'rules' => 'required|numeric',
                'errors' => [
                    'required' => 'No.Telepon wajib diisi!',
                    'numeric' => 'No.Telepon hanya mengandung angka!'
                ]
            ],
            'notelp_ortu' => [
                'rules' => 'required|numeric',
                'errors' => [
                    'required' => 'No.Telepon wajib diisi!',
                    'numeric' => 'No.Telepon hanya mengandung angka!'
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
            // 'thbekerja' => [
            //     'rules' => 'min_length[thbekerja,4]',
            //     'errors' => [
            //         'min_length' => 'Minimal 4 Karakter!'
            //     ]
            // ],
            // 'perusahaan' => [
            //     'rules' => 'min_length[perusahaan,2]',
            //     'errors' => [
            //         'min_length' => 'Minimal 2 Karakter!'
            //     ]
            // ],
            'ipk' => [
                'rules' => 'required|numeric|decimal',
                'errors' => [
                    'required' => 'IPK wajib diisi!',
                    'numeric' => 'IPK hanya mengandung angka dan titik!',
                    'decimal' => 'Contoh "3.85"'
                ]
            ],
            'semester' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Semester wajib diisi!'
                ]
            ],
            'judulskripsi' => [
                'rules' => 'required|alpha_numeric_punct',
                'errors' => [
                    'required' => 'Judul skripsi wajib diisi!',
                    'alpha_numeric_punct' => 'Judul skripsi hanya boleh berisi huruf dan angka serta tanda baca tertentu!'
                ]
            ],
            'abstrak' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Abstrak skripsi wajib diisi!'
                ]
            ],
            'fotoalumni' => [
                'rules' => 'max_size[fotoalumni,5000]|is_image[fotoalumni]|mime_in[fotoalumni,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'max_size' => 'Ukuran foto maksimal 5MB!',
                    'is_image' => 'Yang anda pilih bukan gambar!',
                    'mime_in' => 'Yang anda pilih bukan gambar!'
                ]
            ]
        ])) {
            // $validation = \Config\Services::validation();
            // return redirect()->to('/alumni/create')->withInput()->with('validation', $validation);
            // $data['validation'] = $this->validator;
            return redirect()->to("/alumni/edit/$id_alumni")->withInput();
        }


        // ambil gambar
        $fotoAlumni = $this->request->getFile('fotoalumni');

        // apakah tidak ada gambar yang diupload
        if ($fotoAlumni->getError() == 4) {
            $namaFoto = 'default.jpg';
        } else {
            // generate nama foto random
            $namaFoto = $fotoAlumni->getRandomName();

            //pindahkan file ke folder img
            $fotoAlumni->move('img', $namaFoto);
        }

        // ambil file transkrip
        // $transkripAlumni = $this->request->getFile('transkrip');

        // // generate nama transkrip random
        // $namaTranskrip = $transkripAlumni->getRandomName();

        // //pindahkan file ke folder transkrip
        // $transkripAlumni->move('pdf', $namaTranskrip);

        $this->alumniModel->save([
            'id' => $this->request->getVar('id_alumni'),
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
            'fotoalumni' => $namaFoto,
            'facebook' => $this->request->getVar('facebook'),
            'instagram' => $this->request->getVar('instagram'),
            'linkedin' => $this->request->getVar('linkedin'),
            'twitter' => $this->request->getVar('twitter'),
            'ipk' => $this->request->getVar('ipk'),
            'semester' => $this->request->getVar('semester'),
            'judulskripsi' => $this->request->getVar('judulskripsi'),
            'bidangminat' => $this->request->getVar('bidangminat'),
            'abstrak' => $this->request->getVar('abstrak'),
            // 'transkrip' => $namaTranskrip
        ]);

        // $dataPekerjaan = [
        //     'id_alumni' => $idAlumni,
        //     'periode_bekerja' => $this->request->getPost('periode_bekerja'),
        //     'perusahaan' => $this->request->getPost('perusahaan')
        // ];

        // dd($dataPekerjaan);
        // dd($this->request);
        // $this->InputPekerjaanModel->save($dataPekerjaan);
        // $this->InputPekerjaanModel->insert($dataPekerjaan);

        $pekerjaan = (int)$this->request->getVar('jumlah_pekerjaan');
        for ($i = 1; $i <= $pekerjaan; $i++) {
            $dataPekerjaan = "";
            $id_pekerjaan = $this->request->getVar("id_pekerjaan$i");
            if ($id_pekerjaan != "") {
                $dataPekerjaan = [
                    'id_pekerjaan' => $id_pekerjaan,
                    'periode_bekerja' => $this->request->getPost("periode_bekerja$i"),
                    'perusahaan' => $this->request->getPost("perusahaan$i")
                ];
            } else {
                $dataPekerjaan = [
                    'id_alumni' => $id_alumni,
                    'periode_bekerja' => $this->request->getPost("periode_bekerja$i"),
                    'perusahaan' => $this->request->getPost("perusahaan$i")
                ];
            }
            // dd($dataPekerjaan);
            $this->InputPekerjaanModel->save($dataPekerjaan);
        }

        //dd($pekerjaan);//
        // dd($this->request);

        // $dataPencapaian = [
        //     'id_alumni' => $idAlumni,
        //     'pencapaian' => $this->request->getVar('pencapaian1'),
        //     'thpencapaian' => $this->request->getVar('thpencapaian1'),
        //     'despencapaian' => $this->request->getVar('despencapaian1')
        // ];
        $pencapaian = (int)$this->request->getVar('jumlah_pencapaian');
        for ($i = 1; $i <= $pencapaian; $i++) {
            $id_pencapaian = $this->request->getVar("id_pencapaian$i");
            if ($id_pencapaian != "") {
                $dataPencapaian = [
                    'id_pencapaian' => $id_pencapaian,
                    'pencapaian' => $this->request->getVar("pencapaian$i"),
                    'thpencapaian' => $this->request->getVar("thpencapaian$i"),
                    'despencapaian' => $this->request->getVar("despencapaian$i"),
                ];
            } else {
                $dataPencapaian = [
                    'id_alumni' => $id_alumni,
                    'pencapaian' => $this->request->getVar("pencapaian$i"),
                    'thpencapaian' => $this->request->getVar("thpencapaian$i"),
                    'despencapaian' => $this->request->getVar("despencapaian$i"),
                ];
            }

            $this->InputPencapaianModel->save($dataPencapaian);
        }

        // echo $this->alumniModel->errors();

        return redirect()->to('/alumni/profil');
    }

    public function delete_pekerjaan($id_pekerjaan)
    {
        $this->PekerjaanModel->delete($id_pekerjaan);
    }

    // Input Data Alumni Dari Admin

    public function save()
    {
        //Validasi Input

        //include helper form
        helper(['form']);

        if (!$this->validate([
            'email_user' => [
                'rules' => 'required|min_length[6]|max_length[50]|valid_email|is_unique[user.email]',
                'errors' => [
                    'required' => 'Email pengguna wajib diisi!',
                    'is_unique' => 'Email sudah terdaftar!',
                    'valid_email' => 'Email tidak valid!'
                ]
            ],
            'password' => [
                'rules' => 'required|min_length[6]|max_length[200]',
                'errors' => [
                    'required' => 'Password wajib diisi!',
                    'min_length' => 'Minimal 6 Karakter!',
                    'max_length' => 'Maksimal 200 Karakter!'
                ]
            ],
            'confpassword' => [
                'rules' => 'required|matches[password]',
                'errors' => [
                    'required' => 'Password konfirmasi wajib diisi!',
                    'matches[password]' => 'Password konfirmasi tidak sama!'
                ]
            ],
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
                'rules' => 'required|numeric',
                'errors' => [
                    'required' => 'Tahun masuk wajib diisi!',
                    'numeric' => 'Tahun masuk hanya mengandung angka!'

                ]
            ],
            'thlulus' => [
                'rules' => 'required|numeric',
                'errors' => [
                    'required' => 'Tahun lulus wajib diisi!',
                    'numeric' => 'Tahun lulus hanya mengandung angka!',
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
                'rules' => 'required|numeric',
                'errors' => [
                    'required' => 'No.Telepon wajib diisi!',
                    'numeric' => 'No.Telepon hanya mengandung angka!'
                ]
            ],
            'notelp_ortu' => [
                'rules' => 'required|numeric',
                'errors' => [
                    'required' => 'No.Telepon wajib diisi!',
                    'numeric' => 'No.Telepon hanya mengandung angka!'
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
            // 'thbekerja' => [
            //     'rules' => 'min_length[thbekerja,4]',
            //     'errors' => [
            //         'min_length' => 'Minimal 4 Karakter!'
            //     ]
            // ],
            // 'perusahaan' => [
            //     'rules' => 'min_length[perusahaan,2]',
            //     'errors' => [
            //         'min_length' => 'Minimal 2 Karakter!'
            //     ]
            // ],
            'ipk' => [
                'rules' => 'required|numeric|decimal',
                'errors' => [
                    'required' => 'IPK wajib diisi!',
                    'numeric' => 'IPK hanya mengandung angka dan titik!',
                    'decimal' => 'Contoh "3.85"'
                ]
            ],
            'semester' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Semester wajib diisi!'
                ]
            ],
            'judulskripsi' => [
                'rules' => 'required|alpha_numeric_punct',
                'errors' => [
                    'required' => 'Judul skripsi wajib diisi!',
                    'alpha_numeric_punct' => 'Judul skripsi hanya boleh berisi huruf dan angka serta tanda baca tertentu!'
                ]
            ],
            'abstrak' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Abstrak skripsi wajib diisi!'
                ]
            ],
            'fotoalumni' => [
                'rules' => 'uploaded[fotoalumni]|max_size[fotoalumni,5000]|is_image[fotoalumni]|mime_in[fotoalumni,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'uploaded' => 'Foto wajib diupload!',
                    'max_size' => 'Ukuran foto maksimal 5MB!',
                    'is_image' => 'Yang anda pilih bukan gambar!',
                    'mime_in' => 'Yang anda pilih bukan gambar!'
                ]
            ],
            'transkrip' => [
                'rules' => 'uploaded[transkrip]|max_size[transkrip,5000]|ext_in[transkrip,pdf]',
                'errors' => [
                    'uploaded' => 'Transkrip wajib diupload!',
                    'max_size' => 'Ukuran file maksimal 5MB!',
                    'ext_in' => 'Yang anda pilih bukan PDF!'
                ]
            ]
        ])) {
            // $validation = \Config\Services::validation();
            // return redirect()->to('/alumni/create')->withInput()->with('validation', $validation);
            $data['validation'] = $this->validator;
            return redirect()->to('/alumni/create')->withInput();
        }


        // ambil gambar
        $fotoAlumni = $this->request->getFile('fotoalumni');

        // apakah tidak ada gambar yang diupload
        if ($fotoAlumni->getError() == 4) {
            $namaFoto = 'default.jpg';
        } else {
            // generate nama foto random
            $namaFoto = $fotoAlumni->getRandomName();

            //pindahkan file ke folder img
            $fotoAlumni->move('img', $namaFoto);
        }

        // ambil file transkrip
        $transkripAlumni = $this->request->getFile('transkrip');

        // generate nama transkrip random
        $namaTranskrip = $transkripAlumni->getRandomName();

        //pindahkan file ke folder transkrip
        $transkripAlumni->move('pdf', $namaTranskrip);

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
            'fotoalumni' => $namaFoto,
            'facebook' => $this->request->getVar('facebook'),
            'instagram' => $this->request->getVar('instagram'),
            'linkedin' => $this->request->getVar('linkedin'),
            'twitter' => $this->request->getVar('twitter'),
            'ipk' => $this->request->getVar('ipk'),
            'semester' => $this->request->getVar('semester'),
            'judulskripsi' => $this->request->getVar('judulskripsi'),
            'bidangminat' => $this->request->getVar('bidangminat'),
            'abstrak' => $this->request->getVar('abstrak'),
            'transkrip' => $namaTranskrip
        ]);

        $allAlumni = $this->alumniModel->findAll();
        $dataAkhir = end($allAlumni);
        $idAlumni = $dataAkhir['id'];

        // $dataPekerjaan = [
        //     'id_alumni' => $idAlumni,
        //     'periode_bekerja' => $this->request->getPost('periode_bekerja'),
        //     'perusahaan' => $this->request->getPost('perusahaan')
        // ];

        // dd($dataPekerjaan);
        // dd($this->request);
        // $this->InputPekerjaanModel->save($dataPekerjaan);
        // $this->InputPekerjaanModel->insert($dataPekerjaan);

        $pekerjaan = (int)$this->request->getVar('jumlah_pekerjaan');
        for ($i = 1; $i <= $pekerjaan; $i++) {
            $dataPekerjaan = [
                'id_alumni' => $idAlumni,
                'periode_bekerja' => $this->request->getPost("periode_bekerja$i"),
                'perusahaan' => $this->request->getPost("perusahaan$i")
            ];
            $this->InputPekerjaanModel->save($dataPekerjaan);
        }

        //dd($pekerjaan);//
        // dd($this->request);

        // $dataPencapaian = [
        //     'id_alumni' => $idAlumni,
        //     'pencapaian' => $this->request->getVar('pencapaian1'),
        //     'thpencapaian' => $this->request->getVar('thpencapaian1'),
        //     'despencapaian' => $this->request->getVar('despencapaian1')
        // ];
        $pencapaian = (int)$this->request->getVar('jumlah_pencapaian');
        for ($i = 1; $i <= $pencapaian; $i++) {
            $dataPencapaian = [
                'id_alumni' => $idAlumni,
                'pencapaian' => $this->request->getVar("pencapaian$i"),
                'thpencapaian' => $this->request->getVar("thpencapaian$i"),
                'despencapaian' => $this->request->getVar("despencapaian$i"),
            ];
            $this->InputPencapaianModel->save($dataPencapaian);
        }

        $this->NilaiModel->save([
            'npm' => $this->request->getVar('npm'),
            'id_alumni' => $idAlumni
        ]);

        $allNilai = $this->NilaiModel->findAll();
        $nilaiAkhir = end($allNilai);
        $idNilai = $nilaiAkhir['id_nilai'];

        // simpan data akun user
        $model = new UserModel();
        $data = [
            'id_alumni' => $idAlumni,
            'id_nilai'  => $idNilai,
            'email'     => $this->request->getVar('email_user'),
            'password'  => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT)
        ];

        $model->save($data);


        // echo $this->alumniModel->errors();

        return redirect()->to('/alumni');
    }

    // public function delete($id)
    // {
    //     $this->alumniModel->delete($id);
    //     return redirect()->to('/admin/data/data_alumni');
    // }
}
