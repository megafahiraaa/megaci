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

        <a href="<?php echo site_url('aset/tambah'); ?>" class="mb-2 float-end btn btn-primary">Tambah Data</a>

        <table class="table table-bordered">
            <thead>
                <th>Id</th>
                <th>Nama Aset</th>
                <th>Jenis</th>
                <th>Lokasi</th>
                <th>Jumlah</th>
            </thead>
            <tbody>
                <?php $nomor = 1;?>
                <?php foreach($aset as $item) :?>
                <tr>
                    <td><?php echo $nomor++; ?></td>
                    <td><?php echo $item->nama_aset; ?></td>
                    <td><?php echo $item->jenis; ?></td>
                    <td><?php echo $item->lokasi; ?></td>
                    <td><?php echo $item->jumlah; ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

</body>
</html>