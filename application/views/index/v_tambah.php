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

        <h2 class="alert alert-info">Data Mahasiswa</h2>

        <form action="<?= site_url('kelascontroller/simpanTambah') ?>" method="post">
                <div class="mb-3">
                    <label for="fakultas" class="form-label">Fakultas</label>
                    <input type="text" name="fakultas" id="fakultas" class="form-control" placeholder="masukkan aset anda">    
                </div>
                <div class="mb-3">
                    <label for="prodi" class="form-label">Prodi</label>
                    <input type="text" name="prodi" id="prodi" class="form-control" placeholder="masukkan aset anda">    
                </div>
                <div class="mb-3">
                    <label for="kelas" class="form-label">Kelas</label>
                    <input type="text" name="kelas" id="kelas" class="form-control" placeholder="masukkan aset anda">    
                </div>
                <div class="mb-3">
                    <label for="isi" class="form-label">Isi</label>
                    <textarea name="isi" class="form-control" id="isi" cols="30" rows="5"></textarea>    
                </div>
                <input type="submit" name="submit" value="Simpan Data" class="btn btn-primary"></input>
                <a href="<?= site_url('kelascontroller/tampilkan') ?>" class="btn btn-warning">Kembali</a>
        </form>
    </div>

</body>
</html>