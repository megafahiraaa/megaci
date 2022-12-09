<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tampil</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
    
    <div class="container">
        <h1 style="text-align: center" class="alert alert-primary" role="alert">Data Mahasiswa</h1>

        <a href="<?= site_url('latihan/tambah') ?>" class="btn btn-primary">Tambah</a><br><br>

        <table class="table table-bordered" border="1" cellpadding="7">
            <thead>
                <th>Id</th>
                <th>kolom_jurusan</th>
                <th>kolom_kelas</th>
                <th>kolom_isi</th>
            </thead>
            <tbody>
                <?php $nomor = 1; ?>
                <?php foreach($data as $dt) :?>
                    <tr>
                        <td><?php echo $nomor++; ?></td>
                        <td><?php echo $dt->kolom_jurusan; ?></td>
                        <td><?php echo $dt->kolom_kelas; ?></td>
                        <td><?php echo $dt->kolom_isi; ?></td>
                    </tr>
                <?php endforeach;?>
            </tbody>
        </table>
    </div>

</body>
</html>