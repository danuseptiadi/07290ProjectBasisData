<?php 
if(isset($_SESSION['user'])){
  if(isset($_GET['logout'])){
    if($_GET['logout'] == "true"){
      session_unset();
    }
  }
}

?>
<div class="container mt-5">
  <h1 class="shadow-sm p-3 mb-5 bg-light rounded text-center mb-5">Perpustakaan ITATS</h1>
  <form action="<?=BASEURL;?>" method="post">
<div class="row justify-content-start">
    <div class="col-4">
    <div class="input-group mb-3">
  <input type="text" class="form-control" id = "inputcari" onkeyup ="cariBuku()" name="kunci" placeholder="Masukan kata Kunci"<?php if(isset($_POST['kunci'])){
    echo "value= '".$_POST['kunci']."'";
  }?> >
  <button class="btn btn-dark" type="submit" id="cari">Cari</button>
</form>
</div>
</div>
</div>
<!-- Button trigger Filter -->
<button type="button" class="btn btn-dark mb-3" data-bs-toggle="modal" data-bs-target="#filter">
<i class="bi bi-funnel-fill"></i> Filter
</button>

<button type="button" class="btn btn-dark mb-3 ms-2" data-bs-toggle="modal" data-bs-target="#login">
  Login
</button>
<?php require_once 'app/views/atribut/buku.php';?>
<!-- modal -->
<!-- Filter modal -->
<div class="modal fade" id="filter" tabindex="-1" aria-labelledby="filterLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="filterLabel">Filter</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Terapkan</button>
      </div>
    </div>
  </div>
</div>


<!-- Login Modal -->
<div class="modal fade" id="login" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="loginLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="loginLabel">Login</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form action="<?=BASEURL;?>" method="post">
      <div class="mb-3">
      <label for="optionsLogin" class="form-label">Opsi Login</label>
      <select id="optionsLogin" name="opsilogin" class="form-select">
        <option value="admin">Petugas</option>
        <option value="anggota">Anggota</option>
      </select>
    </div>
  <div class="mb-3">
    <label for="inputusername" class="form-label">Username</label>
    <input type="text" name="username" class="form-control" id="inUser" onkeyup="delSpace()">
  </div>
  <div class="mb-3">
    <label for="pass" class="form-label">Password</label>
    <div class="input-group mb-3">
    <input type="password" name = "pass" aria-describedby="passHelp" class="form-control" id="pass">
  <button class="btn btn-outline-secondary" type="button" id="btnpass" onclick="hidePass()"><i class="bi bi-eye"></i></button>
</div>
<div id="passHelp" class="form-text">Minimal Menggunakan 1 simbol dan 1 huruf kapital dan total 8 karakter</div>
  </div>
  <?php ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Login</button>
      </form>
      </div>
    </div>
  </div>
</div>

<?php
if(empty($data['buku'])){
      echo "<p class='text-center'>Buku tidak tersedia</p>";
    }
    ?>
</div>
</div>
