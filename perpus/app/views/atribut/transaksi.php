<h3 class="mb-4">History Transaksi</h3>
<div class="shadow p-3 mb-5 bg-body rounded">
<table class="table">
  <thead>
    <tr>
      <th class="text-center" scope="col">ID Transaksi.</th>
      <th class="text-center" scope="col">Judul Buku</i></th>
      <th class="text-center" scope="col">Nama Anggota  <i class="bi bi-person-bounding-box"></th>
      <th class="text-center" scope="col">Tanggal Kembali</th>
      <th class="text-center" scope="col">Tanggal Kembali</th>
      <th class="text-center" scope="col">Denda </th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($data['transaksi'] as $transaksi):
    ?>
        <tr>
      <td class="text-center"><?=$transaksi['id_peminjaman'];?></td>
      <td class="text-center"><?=$transaksi['judul_buku'];?></td>
      <td class="text-center"><?=$transaksi['nama_anggota'];?></td>
      <td class="text-center"><?=$transaksi['tanggal_pinjam'];?></td>
      <td class="text-center"><?=$transaksi['tanggal_kembali'];?></td>
      <td class="text-center"><?="Rp.".$transaksi['denda'];?></td>
        </tr>
        <?php endforeach;?>
    </tbody>
</table>
