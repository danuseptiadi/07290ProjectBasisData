<?php
class anggota{
    private $p;
    function __construct()
    {
        $this->p = new database;
    }

    function getAll_anggota()
    {
        if(isset($_POST["kunci"])){
            $cari = $_POST["kunci"];
            $data = $this->p->getAll("SELECT nama_anggota,email_anggota,username FROM anggota WHERE nama_anggota LIKE '%$cari%' OR email_anggota LIKE '%$cari%' OR username LIKE '%$cari%'");
        }else{$data = $this->p->getAll('SELECT * FROM anggota');}
        
        return $data;
    }

    
    function update_anggota($id,$nama,$email,$username){
        $this->p->query("UPDATE anggota set nama_anggota = '$nama', email_anggota = '$email', username = '$username' where id_anggota = '$id'");
    }

    function insert_anggota($nama,$email,$username){
        $last_id = $this->p->get("select max(id_anggota) as last_id from anggota");
        $last_id['last_id'] = trim($last_id['last_id'],"AGT");
        $id_anggota = (int) $last_id['last_id'];
        $id_anggota = $id_anggota+1;
        if (strlen($id_anggota) == 1){
            $id_anggota = "AGT0000" .$id_anggota;
        }
        else if (strlen($id_anggota) == 2){
            $id_anggota = "AGT000" .$id_anggota;
        }
        else if(strlen($id_anggota) == 3){
            $id_anggota = "AGT00".$id_anggota;   
        }
        else if (strlen($id_anggota) == 4){
            $id_anggota = "AGT0" .$id_anggota;
        }
        else if(strlen($id_anggota) == 5){
            $id_anggota = "AGT".$id_anggota;   
        }
        $this->p->query("insert into anggota(id_anggota,nama_anggota,email_anggota,username,password) values ('$id_anggota','$nama','$email','$username','anggota')");
    }

    function hapus($id){
        $this->p->query("delete from anggota where id_anggota = '$id'");
    }
    }