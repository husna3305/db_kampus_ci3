<!DOCTYPE html>
<html lang="en">

<head>
  <title>Data Mahasiswa</title>
</head>

<body>
  <form action="<?= site_url('mahasiswa/simpanTambah') ?>" method="POST">
    <label for="">NIM</label>
    <input type="text" name="nim"> </br>
    <label for="">Nama Lengkap</label>
    <input type="text" name="nama_mahasiswa"> </br>
    <label for="">Jenis Kelamin</label>
    <input type="radio" name="jenis_kelamin" value="Laki-laki"> Laki-laki <input type="radio" name="jenis_kelamin" value="Perempuan"> Perempuan </br>
    <label for="">Program_studi</label>
    <input type="text" name="program_studi"> </br>
    <label for="">Alamat</label>
    <input type="text" name="alamat"> </br>
    <button type="submit">SUBMIT</button>
  </form>
</body>

</html>