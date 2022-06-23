<?php
class buku{
    private $p;
    function __construct()
    {
        $this->p =new database;
    }
    function get_buku()
    {
        if(isset($_POST["kunci"])){
            $cari = $_POST["kunci"];
            $data = $this->p->getAll("SELECT buku.*,penulis.* from buku inner join penulis on buku.penulis_id = penulis.id_penulis where buku.judul_buku LIKE '%$cari%' OR penulis.nama_penulis LIKE '%$cari%' OR buku.penerbit LIKE '%$cari%'");
        }else{$data = $this->p->getAll('select buku.*,penulis.* from buku inner join penulis on buku.penulis_id = penulis.id_penulis');}
        
        return $data;
    }

    function update_buku($id,$judul,$penulis,$penerbit,$status){
            $this->p->query("update buku set judul_buku = '$judul', penulis_id = '$penulis', penerbit = '$penerbit', status_buku = '$status' where id_buku = '$id'");
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
    }

    function hapus($id){
        $this->p->query("delete from buku where id_buku = '$id'");
    }

}