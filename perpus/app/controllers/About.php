<?php

class About extends Controller{
    public function index($nama = '1',$npm = '2'){
        $this->view('template/header',$data =['title' => 'About']);
        $this->view('about/index');
        $this->view('template/footer');
    }
    public function page(){
        $this->view('template/header',$data =['title' => 'About']);
        $this->view('about/index');
        $this->view('template/footer');
    }
}