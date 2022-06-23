<h3 class="mb-4">Daftar Buku</h3>
<div class="shadow p-3 mb-5 bg-body rounded">
<?php if(isset($_SESSION['user'])){?>
<button type="button" class="btn btn-outline-success" data-bs-toggle="modal" data-bs-target="#tambah"><i class="bi bi-plus-circle-dotted"></i> Tambah</button><?php }?>



<div data-bs-spy="scroll" data-bs-target="#navbar-example2" data-bs-root-margin="0px 0px -40%" data-bs-smooth-scroll="true" class="scrollspy-example" tabindex="0">
<table class="table">
  <thead>
    <tr>
      <th class="text-center" scope="col">No.</th>
      <th class="text-center" scope="col">Judul <i class="bi bi-book"></i></th>
      <th class="text-center" scope="col">Pengarang <i class="bi bi-book"></th>
      <th class="text-center" scope="col">Penerbit <i class="bi bi-book"></th>
      <th class="text-center" scope="col">Status</th>
      <?php if(isset($_SESSION['user'])){?>
      <th class="text-center" scope="col">Edit <i class="bi bi-pencil-square"></i></th>
      <th class="text-center" scope="col">Hapus <i class="bi bi-person-x-fill"></i></th>
      <?php }?>
    </tr>
  </thead>
  <tbody>
    <?php 
    $i = 0;
    foreach($data['buku'] as $books):
    $i++;
    ?>
        <tr>
      <th class="text-center" scope="row"><?=$i?></th>
      <td class="text-center"><?=$books['judul_buku'];?></td>
      <td class="text-center"><?=$books['nama_penulis'];?></td>
      <td class="text-center"><?=$books['penerbit'];?></td>
      <td class="text-center"><?php 
      if($books['status_buku'] == "Tidak Tersedia"){
        echo "<div class='badge bg-danger text-wrap' style='width: 6rem;'>".$books['status_buku']."</div></td>";
      }else{
          echo "<div class='badge bg-success text-wrap' style='width: 6rem;'>".$books['status_buku']."</div></td>";
        }
        if(isset($_SESSION['user'])){
        ?>
        <td class="text-center"><button type="button" name="edit" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#edit<?=$i?>"><i class="bi bi-pencil-square"></button></td>
        <td class="text-center"><a class="btn btn-danger" href="<?=BASEURL?>?l=buku&&hapusbuku=<?=$books['id_buku']?>"><i class="bi bi-person-x-fill"></a></td>

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
                    <input type="id" name="setid" value="<?=$books['id_buku']?>" class="form-control" id="id_buku" hidden>
                    <div class="mb-3">
                    <label for="judul_buku" class="form-label">Judul Buku</label>
                    <input type="judul" name="setjudul" value="<?=$books['judul_buku']?>" class="form-control" id="judul_buku">
                  </div>
                      <div class="mb-3">
                  <label for="penulis" class="form-label">Penulis</label>
                  <select id="penulis" name="setpenulis" class="form-select">
                  <option value="<?=$books['penulis_id']?>"><?= $books['nama_penulis'] ?></option>
                  <?php 
                  $j = 0;
                  foreach($data['penulis'] as $penulis):
                  $j++;
                  if($penulis['id_penulis'] == $books['penulis_id']){
                  }else{
                  ?>
                    <option value="<?=$penulis['id_penulis']?>"><?= $penulis['nama_penulis'] ?></option>
                    <?php } endforeach; ?>
                  </select>
                </div>
                  <div class="mb-3">
                    <label for="penerbit_buku" class="form-label">Penerbit Buku</label>
                    <input type="penerbit" value="<?= $books['penerbit']?>" name="setpenerbit" class="form-control" id="penerbit_buku">
                  </div>
                  <div class="mb-3">
                  <label for="status" class="form-label">status</label>
                  <select id="status" name="setstatus" class="form-select">
                    <option value="Tidak Tersedia">Tidak Tersedia</option>
                    <option value="Tersedia">Tersedia</option>
                  </select>
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

<!-- MODAL -->

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
            <label for="judul_buku" class="form-label">Judul Buku</label>
            <input type="judul" name="judul" class="form-control" id="judul_buku">
          </div>
              <div class="mb-3">
          <label for="penulis" class="form-label">Penulis</label>
          <select id="penulis" name="penulis" class="form-select">
          <?php 
    $i = 0;
    foreach($data['penulis'] as $penulis):
    $i++;
    ?>
            <option value="<?=$penulis['id_penulis']?>"><?= $penulis['nama_penulis'] ?></option>
            <?php endforeach; ?>
          </select>
        </div>
          <div class="mb-3">
            <label for="penerbit_buku" class="form-label">Penerbit Buku</label>
            <input type="penerbit" name="penerbit" class="form-control" id="penerbit_buku">
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

