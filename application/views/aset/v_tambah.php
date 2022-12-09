<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Tabel Database</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
    
    <div class="container-md">
        <h2 class="alert alert-info">Data Aset</h2>

        <form action="<?= site_url('aset/simpanTambah') ?>" method="post">
            <div class="mb-3">
                <label for="nama_aset" class="form-label">Nama Aset</label>
                <input type="text" name="nama_aset" id="nama_aset" class="form-control" placeholder="masukkan aset anda">    
            </div>
            <div class="mb-3">
                <label for="jenis_aset" class="form-label">Jenis Aset</label>
                <input type="text" name="jenis_aset" id="jenis_aset" class="form-control" placeholder="masukkan jenis aset anda">    
            </div>
            <div class="mb-3">
                <label for="lokasi_aset" class="form-label">Lokasi Aset</label>
                <input type="text" name="lokasi_aset" id="lokasi_aset" class="form-control" placeholder="masukkan lokasi aset anda">    
            </div>
            <div class="mb-3">
                <label for="jumlah_aset" class="form-label">Jumlah Aset</label>
                <input type="number" name="jumlah_aset" id="jumlah_aset" class="form-control" placeholder="masukkan jumlah aset anda">    
            </div>
            <input type="submit" name="submit" value="Simpan Data" class="btn btn-primary"></input>
            <a href="<?= site_url('aset/tampilkan') ?>" class="btn btn-warning">Kembali</a>
        </form>
       
    </div>

</body>
</html>