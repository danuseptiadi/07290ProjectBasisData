
<div class="container" style="margin-top:10vh;">
    <a href="<?=BASEURL?>" class="btn btn-dark ms-5 mt-5"><i class="bi bi-arrow-bar-left"></i> Back</a>
  <div class="row justify-content-md-center">
    <div class="col-md-auto">
    <form class="mt-5" action="" method="POST">
    <div class="shadow-lg p-3 mb-5 ps-5 pe-5 bg-body rounded">
        <h1>Transaksi</h1>
        <div class="mt-5 ps-5 pe-5 mb-3">
      <label for="jenistransaksi" class="form-label">Pilih Jenis Transaksi</label>
      <select id="jenistransaksi" name="jenis_transaksi" class="form-select">
            <option value="pinjam">Peminjaman</option>
            <option value="kembali">Pengembalian</option>
      </select>
    </div>
    <div class="ps-5 pe-5 mb-3">
      <label for="Buku" class="form-label">Pilih Buku</label>
      <select id="Buku" name="buku" class="form-select">
        <?php foreach($data['buku'] as $book) :?>
            <option value="<?=$book['id_buku']?>"><?=$book['judul_buku']." | ".$book['nama_penulis']."  "?></option>
            <?php endforeach ?>
      </select>
    </div>
    <div class="ps-5 pe-5 mb-3">
      <label for="Anggota" class="form-label">Pilih Anggota</label>
      <select id="Anggota" name="anggota" class="form-select">
        <?php foreach($data['anggota'] as $anggota) :?>
            <option value="<?=$anggota['id_anggota']?>"><?=$anggota['nama_anggota']." | ".$anggota['username']."  "?></option>
            <?php endforeach ?>
      </select>
    </div>
    <div class="ps-5 pe-5 mb-3">
        <input type="checkbox" name="denda" class="form-check-input" id="exampleCheck1">
      <label for="Denda" class="form-label">Aktifkan Denda</label>
      <select id="Denda" name="dende" class="form-select">
        <?php foreach($data['denda'] as $denda) :?>
            <option value="<?=$denda['id_denda']?>"><?="Telat ".$denda['jumlah_hari']." hari Denda : Rp.".$denda['denda']?></option>
            <?php endforeach ?>
      </select>
      <button type="submit" name="btn-transaksi" class="btn btn-dark mt-3">Submit</button>
    </div>
</form>
    </div>
  </div>
</div>
