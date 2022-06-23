<?php

class Home extends Controller{
    function __construct()
    {
        $this->buku();
        $this->petugas();
        $this->Anggota();
        $this->get_transaksi();
    }
    public function index(){
        session_start();
        if(isset($_POST['opsilogin'])){
            if($_POST['opsilogin'] == "admin"){
                if($this->model('petugas')->login($_POST['username'],$_POST['pass']) === "guest"){
                    echo '<script type ="text/JavaScript">';  
                    echo 'alert("User/Password Salah")'; 
                    echo '</script>';
                    $this->home();
                }if(isset($_SESSION['user'])){
                    if(isset($_GET['transaksi'])){
                        $this->transaksi();
                    }else{
                        $this->Pengelolah();}

                } 
            }else{
                $this->home();
                $_POST = ""; $_GET= "";
        }
            }if(isset($_SESSION['user'])){
                if(isset($_GET['transaksi'])){
                    $this->transaksi();
                }else{
                    $this->Pengelolah();}

            }else{
                $this->home();
                $_POST = ""; $_GET= "";
            }

            
        }

    public function buku(){
        if(isset($_GET['hapusbuku'])){
            $this->model('buku')->hapus($_GET['hapusbuku']);
        }
        if(isset($_POST['judul'])&&isset($_POST['penulis'])&&isset($_POST['penerbit'])){
            $this->model('buku')->insert_buku($_POST['judul'],$_POST['penulis'],$_POST['penerbit']);
        }
        if(isset($_POST['setjudul'])&&isset($_POST['setid'])&&isset($_POST['setpenerbit'])){
            $this->model('buku')->update_buku($_POST['setid'],$_POST['setjudul'],$_POST['setpenulis'],$_POST['setpenerbit'],$_POST['setstatus']);
        }
    }

    public function petugas(){
        if(isset($_GET['hapuspetugas'])){
            $this->model('petugas')->hapus($_GET['hapuspetugas']);
        }
        if(isset($_POST['nama_petugas'])&&isset($_POST['email_petugas'])&&isset($_POST['username_petugas'])){
            $this->model('petugas')->insert_petugas($_POST['nama_petugas'],$_POST['email_petugas'],$_POST['username_petugas']);
        }
        if(isset($_POST['setnama_petugas'])&&isset($_POST['setid_petugas'])&&isset($_POST['setusername_petugas'])){
            $this->model('petugas')->update_petugas($_POST['setid_petugas'],$_POST['setnama_petugas'],$_POST['setemail_petugas'],$_POST['setusername_petugas'],$_POST['setpassword_petugas']);
        }
    }

    public function Anggota(){
        if(isset($_GET['hapusanggota'])){
            $this->model('anggota')->hapus($_GET['hapusanggota']);
        }
        if(isset($_POST['nama_anggota'])&&isset($_POST['email_anggota'])&&isset($_POST['username_anggota'])){
            $this->model('anggota')->insert_anggota($_POST['nama_anggota'],$_POST['email_anggota'],$_POST['username_anggota']);
        }
        if(isset($_POST['setnama_anggota'])&&isset($_POST['setid_anggota'])&&isset($_POST['setusername_anggota'])){
            $this->model('anggota')->update_anggota($_POST['setid_anggota'],$_POST['setnama_anggota'],$_POST['setemail_anggota'],$_POST['setusername_anggota']);
        }
    }

    public function get_transaksi(){
        if(isset($_POST['btn-transaksi'])){
            if($_POST['jenis_transaksi'] == "pinjam"){
                $this->model('transaksi')->insert_transaksi($_POST['buku'],$_POST['anggota']);
            }
            if($_POST['jenis_transaksi'] == "kembali"){
                if(isset($_POST['denda'])){
                    $this->model('transaksi')->telat_transaksi($_POST['buku'],$_POST['anggota'],$_POST['dende']);
                }else{
                $this->model('transaksi')->update_transaksi($_POST['buku'],$_POST['anggota']);}
            }
            header("Location: ".BASEURL."?l=transaksi");
        }
    }

    public function home(){
        $data['title'] = 'Home';
        $data['buku'] = $this->model('buku')->get_buku();
        $this->view('template/header',$data);
        $this->view('page/index',$data);
        $this->view('template/footer');
    }
    public function transaksi(){
        $data['title'] = 'Home';
        $data['denda'] = $this->model('denda')->getAll_denda();
        $data['anggota'] = $this->model('anggota')->getAll_anggota();
        $data['buku'] = $this->model('buku')->get_buku();
        $this->view('template/header',$data);
        $this->view('page/transaksi',$data);
        $this->view('template/footer');
    }

    public function Pengelolah(){
        $data['title'] = 'Pengelolahan';
        $data['buku'] = $this->model('buku')->get_buku();
        $data['petugas'] = $this->model('petugas')->getAll_petugas();
        $data['anggota'] = $this->model('anggota')->getAll_anggota();
        $data['penulis'] = $this->model('penulis')->getAll_penulis();
        $data['transaksi'] = $this->model('transaksi')->getAll_transaksi();
        $this->view('template/header',$data);
        $this->view('page/admin',$data);
        $this->view('template/footer');
    }

}