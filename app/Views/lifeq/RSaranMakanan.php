<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Riwayat Saran Makanan</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <!-- tombol kembali ke halaman riwayat -->
        <div class="row mt-5">
            <div class="col-md-12">
                <a href="<?= base_url(); ?>/Criwayat" class="btn btn-primary">Kembali</a>
            </div>
        </div>

        <div class="row mt-4">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3>Riwayat Saran Makanan</h3>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Makanan</th>
                                    <th>Kategori</th>
                                    <th>Gram</th>
                                    <th>Kalori</th>
                                    <th>Gambar</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1; ?>
                                <?php foreach($saran_makanan as $sr) : ?>
                                <tr>
                                    <td><?= $i; ?></td>
                                    <td><?= $sr->NAMA_MAKANAN; ?></td>
                                    <td><?= $sr->KATEGORI_MAKANAN; ?></td>
                                    <td><?= $sr->SATUAN_GRAM; ?> g</td>
                                    <td><?= $sr->JUMLAH_KALORI; ?> kkal</td>
                                    <td>
                                        <img src="<?= base_url(); ?>/pict/makanan/<?= $sr->GBR_MAKANAN; ?>" alt="<?= $sr->GBR_MAKANAN; ?>" width="150px">

                                    </td>
                                </tr>
                                <?php $i++; ?>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    

    <!-- js Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>