<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabel Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
    
    <div class="container-md">
        <h2 class="alert alert-info">Data Siswa</h2>

        <form action="<?= site_url('Controller12/simpanTambah') ?>" method="post">
            <div class="mb-3">
                <label for="nama_aset" class="form-label">Nama Aset</label>
                <input type="text" name="txt_nama_aset" id="nama_aset" class="form-control" placeholder="masukkan aset anda">    
            </div>
            <div class="mb-3">
                <label for="jenis_aset" class="form-label">Jenis Aset</label>
                <input type="text" name="txt_jenis_aset" id="jenis_aset" class="form-control" placeholder="masukkan jenis aset anda">    
            </div>
            <div class="mb-3">
                <label for="lokasi_aset" class="form-label">Kondisi</label>
                <input type="text" name="txt_kondisi" id="lokasi_aset" class="form-control" placeholder="masukkan kondisi aset anda">    
            </di
            <div class="mb-3">
                <label for="jumlah" class="form-label">Jumlah </label>
                <input type="number" name="txt_jumlah" id="jumlah" class="form-control" placeholder="masukkan jumlah aset anda">    
            </div>
            <input type="submit" name="submit" value="Simpan" class="btn btn-primary"></input>
            <a href="<?= site_url('Controller12/index') ?>" class="btn btn-warning">Kembali</a>
        </form>
       
    </div>

</body>
</html>