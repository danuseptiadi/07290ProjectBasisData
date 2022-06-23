<h3 class="mb-4">Daftar Anggota</h3>
<div class="shadow p-3 mb-5 bg-body rounded">
<button type="button" class="btn btn-outline-success"  data-bs-toggle="modal" data-bs-target="#tambah"><i class="bi bi-plus-circle-dotted"></i> Tambah</button>
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
    foreach($data['anggota'] as $anggota):
    $i++;
    ?>
        <tr>
      <th class="text-center" scope="row"><?=$i?></th>
      <td class="text-center"><?=$anggota['nama_anggota'];?></td>
      <td class="text-center"><?=$anggota['email_anggota'];?></td>
      <td class="text-center"><?=$anggota['username'];?></td>
      <td class="text-center"><button type="button" name="edit" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#edit<?=$i?>"><i class="bi bi-pencil-square"></button></td>
        <td class="text-center"><a class="btn btn-danger" href="<?=BASEURL?>?l=anggota&&hapusanggota=<?=$anggota['id_anggota']?>"><i class="bi bi-person-x-fill"></a></td>
        </tr>

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
                    <input type="id" name="setid_anggota" value="<?=$anggota['id_anggota']?>" class="form-control" id="id_anggota" hidden>
                    <div class="mb-3">
                    <label for="nama_anggota" class="form-label">Nama Anggota</label>
                    <input type="text" name="setnama_anggota" value="<?=$anggota['nama_anggota']?>" class="form-control" id="nama_anggota">
                  </div>
                  <div class="mb-3">
                    <label for="setemail_anggota" class="form-label">email Buku</label>
                    <input type="email" value="<?= $anggota['email_anggota']?>" name="setemail_anggota" class="form-control" id="setemail_anggota">
                  </div>
                  <div class="mb-3">
                    <label for="setusername_anggota" class="form-label">username Buku</label>
                    <input type="username" value="<?= $anggota['username']?>" name="setusername_anggota" class="form-control" id="setusername_anggota">
                  </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  <button type="submit"  class="btn btn-primary">Edit</button>
                </form>
              </div>
            </div>
          </div>
        </div>
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
            <label for="nama_anggota" class="form-label">Nama anggota</label>
            <input type="text" name="nama_anggota" class="form-control" id="nama_anggota">
          </div>
          <div class="mb-3">
            <label for="email_anggota" class="form-label">Email anggota</label>
            <input type="text" name="email_anggota" class="form-control" id="email_anggota">
          </div>
          <div class="mb-3">
            <label for="username_anggota" class="form-label">Username anggota</label>
            <input type="text" name="username_anggota" class="form-control" id="username_anggota">
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