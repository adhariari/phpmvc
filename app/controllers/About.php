<?php

class About extends Controller  {
    public function index($nama = 'Adhari', $kerjaan ='Sukses', $umur = '23')
    {
        $data['nama'] = $nama;
        $data['pekerjaan'] = $kerjaan;
        $data['umur'] = $umur;
        $data['judul'] = 'About';

        $this->view('templates/header', $data);
        $this->view('about/index', $data);
        $this->view('templates/footer');

    }
    public function page(){
        $data['judul'] = 'Pages';
        $this->view('templates/header', $data);
        $this->view('about/page',$data);
        $this->view('templates/footer');


    }
}