<?php
class penulis{
    private $p;
    function __construct()
    {
        $this->p = new database;
    }

    function getAll_penulis()
    {
        if(isset($_POST["kunci"])){
            $cari = $_POST["kunci"];
            $data = $this->p->getAll("SELECT * FROM penulis WHERE nama_penulis LIKE '%$cari%' OR email_penulis LIKE '%$cari%'");
        }else{$data = $this->p->getAll('SELECT * FROM penulis');}
        
        return $data;
    }

    function insert_buku($judul,$penulis,$penerbit){
        $last_id = $this->p->get("select max(id_buku) as last_id from buku");
        $last_id['last_id'] = trim($last_id['last_id'],"BK");
        $id_buku = (int) $last_id['last_id'];
        $id_buku = $id_buku+1;
        if (strlen($id_buku) == 1){
            $id_buku = "BK0000" .$id_buku;
         }
         else if (strlen($id_buku) == 2){
            $id_buku = "BK000" .$id_buku;
         }
         else if(strlen($id_buku) == 3){
            $id_buku = "BK00".$id_buku;   
         }
         else if (strlen($id_buku) == 4){
            $id_buku = "BK0" .$id_buku;
         }
         else if(strlen($id_buku) == 5){
            $id_buku = "BK".$id_buku;   
         }
        $this->p->query("insert into buku(id_buku,judul_buku,penulis_id,penerbit,status_buku) values ('$id_buku','$judul','$penulis','$penerbit','Tersedia')");
        $_POST = "";
    }
}