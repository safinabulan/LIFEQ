<?= $this->extend('Layout/Template'); ?>

<?= $this->section('content'); ?>
<style>

    html,
    body {
        font-family: 'Poppins', sans-serif;
        height: 100%;
        background-color: var(--color-five);
    }
    

    * {
        padding: 0;
        margin: 0;
        box-sizing: border-box;
    }

    .page {
        display: flex;
        flex-direction: column;
        justify-content: flex-start;
        box-sizing: border-box;
        overflow: fixed;
    }

    .bigbox {
        display: flex;
        justify-content: center;
        flex-wrap: wrap;
        width: 95%;
        margin: 50px auto;
        background: white;
        padding: 20px;
        border-radius: 20px;
        overflow: auto;
        background: #f5f4f4;
    }

    .bigbox .box {
        width: 180px;
        height: 250px;
        line-height: 1.5;
        display: flex;
        border-radius: 8px;
        margin-right: 40px;
        transform: all .5s;
        margin-bottom: 40px;
    }

    .box {
        background:#82954B;
        width: 180px;
        height: 250px;
        box-shadow: 0 10px 20px rgba(0, 0, 0, .6);
        border-radius: 8px;
        transition: all .5s;
        display: flex;
        justify-content: flex-start;
        flex-direction: column;
        margin: 20px;
    }

    .img {
        width: 150px;
        height: 150px;
        border-radius: 8px;
        background-color: #FAF9FE;
        margin: 15px;
    }

    .img img {
        position: relative;
    }

    .name {
        text-decoration: underline;
        text-align: center;
    }

    .text {
        margin: -15px;
        background-color: rgba(0, 0, 0, .6);
        opacity: 0;
        width: 180px;
        height: 250px;
        display: flex;
        justify-content: center;
        flex-direction: column;
        align-items: center;
        text-align: center;
        border-radius: 8px;
        transition: all .5s;
        color: white;
        position: absolute;
        margin-top: -165px;
    }

    .text h1 {
        font-size: 18px;
    }

    .table {
        border-collapse: collapse;
    }

    .text .table tr td {
        margin: 10px;
        text-align: left;
        font-size: 12px;
        margin-bottom: 20px;
        color: white;
    }

    .text:hover {
        opacity: 1;
    }

    .box:hover {
        transform: translateY(20px);
    }
</style>

<div class="page">
    <div class="header">
        <center>
            <h1 style="margin-top: 50px;">DAFTAR MAKANAN BESERTA KALORI</h1>
        </center>
    </div>
    <div class="bigbox">
        <?PHP
        foreach ($makanan as $mkn) : ?>

            <div class="box">
                <div class="img">
                    <img src="<?= base_url() . '/pict/makanan/' . $mkn->GBR_MAKANAN; ?>" style="max-width: 150px;">
                    <div class="text">
                        <h1>KATEGORI <br> <?= strtoupper($mkn->KATEGORI_MAKANAN); ?></h1>
                        <table class="table" width="100%">
                            <tr>
                                <td style="text-align: center ;" colspan="3"><?= $mkn->NAMA_MAKANAN; ?></td>
                            </tr>
                            <tr>
                                <td width="53%">Berat </td>
                                <td width="2%">:</td>
                                <td width="45%"><?= $mkn->SATUAN_GRAM; ?> gr</td>
                            </tr>
                            <tr>
                                <td>Total Kalori </td>
                                <td>:</td>
                                <td><?= $mkn->JUMLAH_KALORI; ?> kkal</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="name">
                    <b><?= strtoupper($mkn->KATEGORI_MAKANAN); ?></b>
                </div>

            </div>
        <?PHP
        endforeach
        ?>
    </div>
</div>
<?= $this->endsection('content'); ?>