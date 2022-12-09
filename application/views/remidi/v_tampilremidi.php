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
        <h2 class="alert alert-info">Data Mahasiswa</h2>

        <a href="<?= site_url('Controller12/tambah'); ?>" class="btn btn-success">Tambah</a><br><br>

        <table class="table table-bordered">
            <thead>
                <th>Id</th>
                <th>Nama aset</th>
                <th>Jenis aset</th>
                <th>Kondisi</th>
                <th>Jumlah</th>
            </thead>
            <tbody>
                <?php $id_12 = 1; ?>
                <?php foreach($data as $item) :?>
                <tr>
                    <td><?php echo $id_12++; ?></td>
                    <td><?php echo $item->nama_aset; ?></td>
                    <td><?php echo $item->jenis_aset; ?></td>
                    <td><?php echo $item->kondisi; ?></td>
                    <td><?php echo $item->jumlah; ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>