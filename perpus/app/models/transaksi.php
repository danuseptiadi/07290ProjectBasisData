<?php

class transaksi{
    private $p;
    function __construct()
    {
        $this->p = new database;
    }

    function getAll_transaksi()
    {
        $data = $this->p->getAll("SELECT peminjaman.*,buku.judul_buku,anggota.nama_anggota,denda.denda from peminjaman inner join anggota on peminjaman.anggota_id = anggota.id_anggota inner join denda on peminjaman.denda_id = denda.id_denda inner join buku on peminjaman.buku_id = buku.id_buku");
        return $data;
    }
    function insert_transaksi($buku,$anggota){
        $last_id = $this->p->get("select max(id_peminjaman) as last_id from peminjaman");
        $last_id['last_id'] = trim($last_id['last_id'],"PJM");
        $id = (int) $last_id['last_id'];
        $id = $id+1;
        if (strlen($id) == 1){
            $id = "PJM0000" .$id;
        }
        else if (strlen($id) == 2){
            $id = "PJM000" .$id;
        }
        else if(strlen($id) == 3){
            $id = "PJM00".$id;   
        }
        else if (strlen($id) == 4){
            $id = "PJM0" .$id;
        }
        else if(strlen($id) == 5){
            $id = "PJM".$id;   
        }
        $tanggal = date("Y-m-d");
        $this->p->query("insert into peminjaman(id_peminjaman,buku_id,anggota_id,tanggal_pinjam) values ('$id','$buku','$anggota','$tanggal')");
    }
    function update_transaksi($buku,$anggota){
        $tanggal = date("Y-m-d");
        echo $tanggal;
        $this->p->query("update peminjaman set tanggal_kembali = '$tanggal', denda_id = 'DN0' where buku_id = '$buku' and anggota_id = '$anggota'");
    }

    function telat_transaksi($buku,$anggota,$denda){
        $tanggal = date("Y-m-d");
        $this->p->query("update peminjaman set tanggal_kembali = '$tanggal', denda_id = '$denda' where buku_id = '$buku' and anggota_id = '$anggota'");
    }
    
}
?>