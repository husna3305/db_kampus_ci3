<!DOCTYPE html>
<html lang="en">

<head>
  <title>Data Mahasiswa</title>
</head>

<body>
  <form action="<?= site_url('mahasiswa/simpanUbah') ?>" method="POST">
    <label for="">NIM</label>
    <input type="text" name="nim" value="<?= $row->nim ?>" readonly> </br>
    
    <label for="">Nama Lengkap</label>
    <input type="text" name="nama_mahasiswa" value="<?= $row->nama_mahasiswa ?>"> </br>
    
    <label for="">Jenis Kelamin</label>
    <input type="radio" name="jenis_kelamin" value="Laki-laki" <?= $row->jenis_kelamin == 'Laki-laki' ? 'checked' : '' ?>> Laki-laki
    <input type="radio" name="jenis_kelamin" value="Perempuan" <?= $row->jenis_kelamin == 'Perempuan' ? 'checked' : '' ?>> Perempuan </br>
    
    <label for="">Program_studi</label>
    <input type="text" name="program_studi" value="<?= $row->program_studi ?>"> </br>
    
    <label for="">Alamat</label>
    <input type="text" name="alamat" value="<?= $row->alamat ?>"> </br>
    
    <button type="submit">SUBMIT</button>
  </form>
</body>

</html>