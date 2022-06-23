<?php
class petugas{
    private $p;
    function __construct()
    {
        $this->p = new database;
    }
    function login($username,$password)
    {
        $user = $this->p->get("SELECT * FROM admin WHERE username = '$username' AND password = '$password'");
        if(!empty($user)){
            return $_SESSION['user'] = $user;
        }else{
            return "guest";   
        }
        
    }

    function getAll_petugas()
    {
        if(isset($_POST["kunci"])){
            $cari = $_POST["kunci"];
            $data = $this->p->getAll("SELECT nama_admin,email_admin,username FROM admin WHERE nama_admin LIKE '%$cari%' OR email_admin LIKE '%$cari%' OR username LIKE '%$cari%'");
        }else{$data = $this->p->getAll('SELECT * FROM admin');}
        
        return $data;
    }

    
    function update_petugas($id,$nama,$email,$username,$password){
        $this->p->query("UPDATE admin set nama_admin = '$nama', email_admin = '$email', username = '$username', password = '$password' where id_admin = '$id'");
    }

    function insert_petugas($nama,$email,$username){
        $last_id = $this->p->get("select max(id_admin) as last_id from admin");
        $last_id['last_id'] = trim($last_id['last_id'],"ADM");
        $id_admin = (int) $last_id['last_id'];
        $id_admin = $id_admin+1;
        if (strlen($id_admin) == 1){
            $id_admin = "ADM0000" .$id_admin;
        }
        else if (strlen($id_admin) == 2){
            $id_admin = "ADM000" .$id_admin;
        }
        else if(strlen($id_admin) == 3){
            $id_admin = "ADM00".$id_admin;   
        }
        else if (strlen($id_admin) == 4){
            $id_admin = "ADM0" .$id_admin;
        }
        else if(strlen($id_admin) == 5){
            $id_admin = "ADM".$id_admin;   
        }
        $this->p->query("insert into admin(id_admin,nama_admin,email_admin,username,password) values ('$id_admin','$nama','$email','$username','admin')");
    }

    function hapus($id){
        $this->p->query("delete from admin where id_admin = '$id'");
    }
    }