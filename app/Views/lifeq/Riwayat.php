<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Riwayat</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<?= $this->extend('Layout/Template'); ?>

<?= $this->section('content'); ?>
<body>
    <div class="overflow-scroll">
        <div class="row mt-5">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3>Riwayat</h3>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Aktivitas</th>
                                    <th>Karbohidrat</th>
                                    <th>Lemak</th>
                                    <th>Protein</th>
                                    <th>Waktu</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1; ?>
                                <?php foreach($riwayat as $r) : ?>
                                <tr>
                                    <td><?= $i; ?></td>
                                    <td><?= $r->USERNAME; ?></td>
                                    <td><?= $r->NAMA_KEGIATAN; ?></td>
                                    <td><?= $r->KARBOHIDRAT; ?> g</td>
                                    <td><?= $r->LEMAK; ?> g</td>
                                    <td><?= $r->PROTEIN; ?> g</td>
                                    <td><?= $r->CREATED_AT; ?></td>
                                    <td>
                                        <a href="<?= base_url(); ?>/Criwayat/saran_makanan/<?= $r->ID_RIWAYAT; ?>" class="btn btn-success">Saran Makanan</a>
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
<?= $this->endSection('content'); ?>