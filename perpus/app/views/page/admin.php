<div class="container">
<?php if(isset($_GET['logout'])){
  session_unset();
  session_destroy();
  header("location: ".BASEURL, true, 301);
}
?>
<div class="card mt-5" style="max-width: 540px;">
  <div class="row g-0">
    <div class="col-md-4">
      <img height="215" width="185" src="public/img/user_1.png" class="rounded-start" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">Kartu Perpustakaan</h5>
        <p class="card-text">ID : <?=$_SESSION['user']['id_admin'];?>
        <br>Nama : <?=$_SESSION['user']['nama_admin'];?>
        <br>Email : <?=$_SESSION['user']['email_admin'];?>
        <br><br>
        </p>
        <a href="<?=BASEURL?>?logout=true" class="btn btn-dark stretched-link">Logout</a>
      </div>
    </div>
  </div>
</div>

<!-- Example single danger button -->
<div class="btn-group mb-3">
  <button type="button" class="btn btn-dark dropdown-toggle mt-5" data-bs-toggle="dropdown" aria-expanded="false">
    <?php if(isset($_GET['l'])){
      echo $_GET['l'];
    }else{
      echo "Pilih List";
    }?>
  </button>
  <ul class="dropdown-menu">
    <li><a class="dropdown-item" href="<?=BASEURL?>?l=buku">Buku</a></li>
    <li><a class="dropdown-item" href="<?=BASEURL?>?l=petugas">Petugas</a></li>
    <li><a class="dropdown-item" href="<?=BASEURL?>?l=anggota">Anggota</a></li>
    <li><hr class="dropdown-divider"></li>
    <li><a class="dropdown-item" href="<?=BASEURL?>?l=transaksi">Transaksi</a></li>
  </ul>
</div>
<?php 
if(isset($_GET['l'])){
  $l = $_GET['l'];
  ?>
<form action="<?=BASEURL."?l=$l";?>" method="post">
<div class="row justify-content-start">
    <div class="col-4">
    <div class="input-group mb-3">
  <input type="text" class="form-control" id = "inputcari" onkeyup ="cariBuku()" name="kunci" placeholder="Masukan kata Kunci"<?php if(isset($_POST['kunci'])){
    echo "value= '".$_POST['kunci']."'";
  }?> >
  <button class="btn btn-dark" type="submit" id="cari">Cari</button>
    </div>
    </div>
</div>
</form>
<?php
  if($_GET['l']=="buku"){
    require_once 'app/views/atribut/buku.php';
  }
  if($_GET['l']=="petugas"){
    require_once 'app/views/atribut/petugas.php';
  }
  if($_GET['l']=="anggota"){
    require_once 'app/views/atribut/anggota.php';
  }
  if($_GET['l']=="transaksi"){
    require_once 'app/views/atribut/transaksi.php';
  }
}
?>
</div>