<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
    
    <div class="container">
        <h2 class="alert alert-info" style="text-align: center">Tambah data mahasiswa </h2>
        <form action="<?= site_url('controllera/simpanTambah'); ?>" method="post">
            <label for="kolom_jurusan" class="form-label">kolom jurusan</label>
            <input type="text" id="kolom_jurusan" name="kolom_jurusan" class="form-control">
            <br>
            <label for="kolom_kelas" class="form-label">kolom kelas</label>
            <input type="text" id="kolom_kelas" name="kolom_kelas" class="form-control">
            <br>
            <label for="kolom_isi" class="form-label">kolom_isi</label>
            <input type="text" id="kolom_isi" name="kolom_isi" class="form-control">
            <br>
            <button type="submit" name="submit" class="btn btn-success">Simpan</button>
            <a href="<?= site_url('controllera/index'); ?>" class="btn btn-warning">Batal</a>
        </form>
    </div>

</body>
</html>