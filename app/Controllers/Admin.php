<?php

namespace App\Controllers;

class Admin extends BaseController
{
    protected $helpers = ['form'];

    public function index()
    {
        return view('Backend/Login/login');
    }

    public function dashboard()
    {
        $uri = service('uri');
        $halaman = $uri ->getSegment(2);
        $data['halaman'] = $halaman;
        $title['title'] = 'Dashboard';
        echo view('backend/Template/header', $title);
        echo view('backend/Template/sidebar', $data);
        echo view('backend/Login/dashboard');
        echo view('backend/Template/footer');
    }

    public function charts()
    {
        $uri = service('uri');
        $halaman = $uri ->getSegment(2);
        $data['halaman'] = $halaman;
        $title['title'] = 'Charts';
        echo view('backend/Template/Charts/header',$title);
        echo view('backend/Template/Charts/sidebar', $data);
        echo view('backend/Login/charts');
        echo view('backend/Template/Charts/footer');
    }

    public function forms()
    {
        $uri = service('uri');
        $halaman = $uri ->getSegment(2);
        $data['halaman'] = $halaman;
        $title['title'] = 'Forms';
        echo view('backend/Template/Forms/header',$title);
        echo view('backend/Template/Forms/sidebar', $data);
        echo view('backend/Login/forms');
        echo view('backend/Template/Forms/footer');
    }

    public function panels()
    {
        $uri = service('uri');
        $halaman = $uri ->getSegment(2);
        $data['halaman'] = $halaman;
        $title['title'] = 'Panels';
        echo view('backend/Template/Panels/header', $title);
        echo view('backend/Template/Panels/sidebar', $data);
        echo view('backend/Login/panels');
        echo view('backend/Template/Panels/footer');
    }

    public function tables()
    {
        $uri = service('uri');
        $halaman = $uri ->getSegment(2);
        $data['halaman'] = $halaman;
        $title['title'] = 'Tables';
        echo view('backend/Template/Tables/header',$title);
        echo view('backend/Template/Tables/sidebar', $data);
        echo view('backend/Login/tables');
        echo view('backend/Template/Tables/footer');
    }

    public function widgets()
    {
        $uri = service('uri');
        $halaman = $uri ->getSegment(2);
        $data['halaman'] = $halaman;
        $title['title'] = 'Widgets';
        echo view('backend/Template/Widgets/header',$title);
        echo view('backend/Template/Widgets/sidebar', $data);
        echo view('backend/Login/widgets');
        echo view('backend/Template/Widgets/footer');
    }

    Public function hitung(){
        $uri = service("uri");
        $halaman = $uri->getSegment(2);
        $parameter1 = $uri->getSegment(3);
        $parameter2 = $uri->getSegment(4);

        //operator aritmatika penjumlahan
        $hasilJumlah = $parameter1+$parameter2;

        //operator aritmatika pengurangan
        $hasilKurang = $parameter1-$parameter2;

        //operator aritmatika perkalian
        $hasilKali = $parameter1*$parameter2;

        //operator aritmatika pembagian
        $hasilBagi = $parameter1/$parameter2;

        $data['parameter1'] = $parameter1;
        $data['parameter2'] = $parameter2;
        $data['hasilJumlah'] = $hasilJumlah;
        $data['hasilKurang'] = $hasilKurang;
        $data['hasilKali'] = $hasilKali;
        $data['hasilBagi'] = $hasilBagi;

        $uri = service('uri');
        $halaman = $uri ->getSegment(2);
        $data['halaman'] = $halaman;
        $title['title'] = 'Form';
        echo view('backend/Template/header', $data);
        echo view('backend/Template/sidebar', $data);
        echo view('backend/Latihan/Aritmatika', $data);
        echo view('backend/Template/footer', $data);
    }

    Public function pembanding(){
        $uri = service("uri");
        $halaman = $uri->getSegment(2);
        $parameter1 = $uri->getSegment(3);
        $parameter2 = $uri->getSegment(4);

        //operator sama dengan
        $samadengan = $parameter1==$parameter2;

        //operator tidak sama dengan
        $tidaksamadengan = $parameter1!=$parameter2;

        //operator lebih besar sama dengan
        $lebihbesarsama = $parameter1>=$parameter2;

        //operator lebih kecil sama dengan
        $lebihkecilsama = $parameter1<=$parameter2;

        //operator lebih besar
        $lebihbesar = $parameter1>$parameter2;

        //operator lebih kecil
        $lebihkecil = $parameter1<$parameter2;

        $data['parameter1'] = $parameter1;
        $data['parameter2'] = $parameter2;
        $data['samadengan'] = $samadengan;
        $data['tidaksamadengan'] = $tidaksamadengan;
        $data['lebihbesarsama'] = $lebihbesarsama;
        $data['lebihkecilsama'] = $lebihkecilsama;
        $data['lebihbesar'] = $lebihbesar;
        $data['lebihkecil'] = $lebihkecil;


        echo view('backend/Template/header', $data);
        echo view('backend/Template/sidebar', $data);
        echo view('backend/Latihan/Aritmatika', $data);
        echo view('backend/Template/footer', $data);
    }

    public function implementasi_form()
    {
        $uri = service('uri');
        $halaman = $uri ->getSegment(2);
        $data['halaman'] = $halaman;
        $title['title'] = 'Form';
        echo view('backend/Template/header', $title);
        echo view('backend/Template/sidebar', $data);
        echo view('backend/Latihan/forms');
        echo view('backend/Template/footer');
    }

    public function post_form()
    {
        $uri = service('uri');
        $halaman = $uri ->getSegment(2);
        $data['halaman'] = $halaman;
        $title['title'] = 'Form';
        $rules = [
            'nim' => ['label'=>'NIM','rules'=>'required|max_length[8]|min_length[8]|numeric'],
            'nama' => ['label'=>'Nama Lengkap','rules'=>'required|max_length[100]'],
            'email' => ['label'=>'Email','rules'=>'required|max_length[100]|valid_email'],
            'jekel' => ['label'=>'jenis Kelamin','rules'=>'required'],
            'kode_cabang' => ['label'=>'Kode Cabang','rules'=>'required'],
            'kelas' => ['label'=>'Kelas','rules'=>'required|max_length[8]|min_length[8]'],
            'alamat' => ['label'=>'Alamat Lengkap','rules'=>'required'],
        ];

        if (!$this->request->is('post')) {
            session()->set(['error_list' => validation_list_errors()]);
            ?>
            <script>
                history.go(-1);
            </script>
        <?php
        }
        elseif (!$this->validate($rules)) {
            session()->set(['error_list' => validation_list_errors()]);
            ?>
            <script>
                history.go(-1);
            </script>
        <?php
        }
        else{
            session()->remove('error_list');
            $session = session();
            // If you want to get the validated data.
            $validData = $this->validator->getValidated();

            if ($validData['kode_cabang'] == '01') {
                $kampus = 'Kampus Margonda';
            } else if ($validData['kode_cabang'] == '02') {
                $kampus = 'Kampus Fatmawati';
            } else if ($validData['kode_cabang'] == '03') {
                $kampus = 'Kampus Tangerang';
            } else if ($validData['kode_cabang'] == '04') {
                $kampus = 'Kampus Bekasi';
            } else {
                $kampus = 'Kampus Tidak Ada';
            }

            $biodata = [
                'nim' => $validData['nim'],
                'nama' => $validData['nama'],
                'email' => $validData['email'],
                'jekel' => $validData['jekel'],
                'kode_cabang' => $validData['kode_cabang'],
                'kampus' => $kampus,
                'kelas' => $validData['kelas'],
                'alamat' => $validData['alamat'],
            ];

            $session->set($biodata);
            ?>
                <script>
                    document.location = "<?= base_url('admin/forms-sukses') ?>";
                </script>
            <?php
        }
    }

    public function forms_sukses()
    {
        $uri = service('uri');
        $halaman = $uri ->getSegment(2);
        $data['halaman'] = $halaman;
        $title['title'] = 'Form';
        echo view('backend/Template/header', $title);
        echo view('backend/Template/sidebar', $data);
        echo view('backend/Latihan/forms_sukses');
        echo view('backend/Template/footer');
    }
}