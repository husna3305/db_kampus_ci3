<!DOCTYPE html>
<html lang="en">

<head>
  <title>Data Mahasiswa</title>
</head>

<body>
  <a href="<?= site_url('mahasiswa/tambah') ?>">Tambah Data</a>

  <table border="1" style="width: 800px;">
    <thead>
      <th>No.</th>
      <th>NIM</th>
      <th>Nama Lengkap</th>
      <th>Jenis Kelamin</th>
      <th>Program Studi</th>
      <th>Alamat</th>
      <th>Aksi</th>
    </thead>
    <tbody>
      <?php foreach ($result as $key => $val) { ?>
        <tr>
          <td><?= $key + 1 ?></td>
          <td><?= $val->nim ?></td>
          <td><?= $val->nama_mahasiswa ?></td>
          <td><?= $val->jenis_kelamin ?></td>
          <td><?= $val->program_studi ?></td>
          <td><?= $val->alamat ?></td>
          <td>
            <a href="<?= site_url('mahasiswa/ubah/' . $val->nim) ?>">Ubah</a>
            <a onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Data Ini ?')" href="<?= site_url('mahasiswa/hapus/' . $val->nim) ?>">Hapus</a>
          </td>
        </tr>
      <?php } ?>
    </tbody>
  </table>
</body>

</html>