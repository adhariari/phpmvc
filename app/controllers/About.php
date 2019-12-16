<?php

class About  {
    public function index($nama = 'Adhari', $kerjaan ='Sukses')
    {
        echo "Halo nama saya $nama, saya adalah calon orang $kerjaan";
    }
    public function page(){
        echo 'About/page';
    }
}