<h3 class="mb-4">Daftar Admin</h3>
<div class="shadow p-3 mb-5 bg-body rounded">
<button type="button" class="btn btn-outline-success" data-bs-toggle="modal" data-bs-target="#tambah"><i class="bi bi-plus-circle-dotted"></i> Tambah</button>
<div data-bs-spy="scroll" data-bs-target="#navbar-example2" data-bs-root-margin="0px 0px -40%" data-bs-smooth-scroll="true" class="scrollspy-example" tabindex="0">
<table class="table">
  <thead>
    <tr>
      <th class="text-center" scope="col">No.</th>
      <th class="text-center" scope="col">Nama <i class="bi bi-person-bounding-box"></i></th>
      <th class="text-center" scope="col">Email <i class="bi bi-envelope"></i></th>
      <th class="text-center" scope="col">Username</th>
      <th class="text-center" scope="col">Edit <i class="bi bi-pencil-square"></i></th>
      <th class="text-center" scope="col">Hapus <i class="bi bi-person-x-fill"></i></th>
    </tr>
  </thead>
  <tbody>
    <?php 
    $i = 0;
    foreach($data['petugas'] as $petugas):
    $i++;
    ?>
        <tr>
      <th class="text-center" scope="row"><?=$i?></th>
      <td class="text-center"><?=$petugas['nama_admin'];?></td>
      <td class="text-center"><?=$petugas['email_admin'];?></td>
      <td class="text-center"><?=$petugas['username'];?></td>
      <?php if(isset($_SESSION['user'])){
        ?>
        <td class="text-center"><button type="button" name="edit" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#edit<?=$i?>"><i class="bi bi-pencil-square"></button></td>
        <td class="text-center"><a class="btn btn-danger" href="<?=BASEURL?>?l=petugas&&hapuspetugas=<?=$petugas['id_admin']?>"><i class="bi bi-person-x-fill"></a></td>

                <!-- edit -->
        <div class="modal fade" id="edit<?=$i?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
              <form action="" method="post">
                    <input type="id" name="setid_petugas" value="<?=$petugas['id_admin']?>" class="form-control" id="id_admin" hidden>
                    <div class="mb-3">
                    <label for="nama_admin" class="form-label">Nama Petugas</label>
                    <input type="text" name="setnama_petugas" value="<?=$petugas['nama_admin']?>" class="form-control" id="nama_admin">
                  </div>
                  <div class="mb-3">
                    <label for="email_admin" class="form-label">Email Petugas</label>
                    <input type="text" name="setemail_petugas" value="<?=$petugas['email_admin']?>" class="form-control" id="email_admin">
                  </div>
                  <div class="mb-3">
                    <label for="username" class="form-label">Username Petugas</label>
                    <input type="text" name="setusername_petugas" value="<?=$petugas['username']?>" class="form-control" id="username">
                  </div>
                  <div class="mb-3">
                    <label for="password" class="form-label">password Petugas</label>
                    <input type="text" name="setpassword_petugas" value="<?=$petugas['password']?>" class="form-control" id="password">
                  </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  <button type="submit"  class="btn btn-primary">Edit</button>
                </form>
              </div>
            </div>
          </div>
        </div>

        <?php } ?>
        </tr>
    <?php endforeach;?>
    </tbody>
</table>

<!-- Tambah -->
<div class="modal fade" id="tambah" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="" method="post">
                <div class="mb-3">
            <label for="nama_petugas" class="form-label">Nama Petugas</label>
            <input type="text" name="nama_petugas" class="form-control" id="nama_petugas">
          </div>
          <div class="mb-3">
            <label for="email_petugas" class="form-label">Email Petugas</label>
            <input type="text" name="email_petugas" class="form-control" id="email_petugas">
          </div>
          <div class="mb-3">
            <label for="username_petugas" class="form-label">Username Petugas</label>
            <input type="text" name="username_petugas" class="form-control" id="username_petugas">
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit"  class="btn btn-primary">Tambah</button>
        </form>
      </div>
    </div>
  </div>
</div>
