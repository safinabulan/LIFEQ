<?= $this->extend('Layout/Template'); ?>

<?= $this->section('content'); ?>
<style>
html,
*{
        padding: 0;
        margin: 0;
        box-sizing: border-box;
    }
.isi{
    width: 100%;
    
}

* {
        padding: 0;
        margin: 0;
        box-sizing: border-box;
    } 
.judul{
    margin: auto;
    margin-top: 20px;
    padding: 20px;
    background-color:#f5f4f4 ;
    width: 60%;
    box-shadow: 0 10px 20px rgba(0, 0, 0, .6);
    border-radius: 10px;
    text-align: center;
}
.isi2{
    display: flex;
    
    overflow: fixed;
}
.hitung{
    margin: 50px;
    background: #f5f4f4;
    border-radius: 20px;
    width: 30%;
    padding: 20px ;
}
.makanan{
    width: 70%;
}
.bigbox {
        display: flex;
        justify-content: center;
        flex-wrap: wrap;
        width: 90%;
        margin: 50px auto;
        background: #f5f4f4;
        padding: 20px;
        border-radius: 20px;
        
        overflow: auto;
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
        box-sizing: border-box;
        
    }

    .box {
        background: #82954B;
        width: 180px;
        height: 250px;
        box-shadow: 0 10px 20px rgba(0, 0, 0, .6);
        border-radius: 8px;
        transition: all .5s;
        display: flex;
        justify-content: flex-start;
        flex-direction: column;
    }
    .img {
        width: 150px;
        height: 150px;
        border-radius: 8px;
        background-color: #FAF9FE;
        margin: 15px;
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
        position: relative;
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
<div class="isi">
    <div class="judul">
        <h1><center> DATA REKOMENDASI MAKANAN </center> </h1>
    </div>
    
    <div class="isi2 "  >
        <div class="hitung">
            <h2 > <center>Hasil Perhitungan Saran Makanan </center> </h2>
                <form method="post" action="<?= base_url('Criwayat') ?> " >
                <div class="list-group mt-5">
                    <a href="#" class="list-group-item list-group-item-action" >
                        <div class="d-flex w-100 justify-content-between">
                        <h5 class="mb-1 mt-3">Karbohidrat</h5>
                        <p class="mb-1 mt-3"><?= $karbohidrat; ?></p>
                        </div>

                    </a>
                    <a href="#" class="list-group-item list-group-item-action">
                        <div class="d-flex w-100 justify-content-between">
                        <h5 class="mb-1 mt-3">Lemak</h5>
                        <p class="mb-1 mt-3"><?= $lemak; ?></p>
                        </div>
                        
                    </a>
                    <a href="#" class="list-group-item list-group-item-action">
                        <div class="d-flex w-100 justify-content-between">
                        <h5 class="mb-1 mt-3">Protein Hewani</h5>
                        <p class="mb-1 mt-3"><?= $proteinh; ?></p>
                        </div>
                        
                    </a>
                    <a href="#" class="list-group-item list-group-item-action">
                        <div class="d-flex w-100 justify-content-between">
                        <h5 class="mb-1 mt-3">Protein Nabati</h5>
                        <p class="mb-1 mt-3"><?= $proteinn; ?></p>
                        </div>
                        
                    </a>
                    <a href="#" class="list-group-item list-group-item-action" >
                        <div class="d-flex w-100 justify-content-between" style="height: 90px;">
                        <h5 class="mb-1 mt-3">TOTAL KURANG KALORI</h5>
                        <p class="mb-1 mt-3"><?= $kalori_kurang; ?></p>
                        <p class="mb-1 mt-3"><input type="submit" class="btn btn-success mt-4 mb-3" onclick="submit( )"  ></p>

                        </div>
                        
                    </a>
                    
                    </div>
                    <!-- <div class="d-flex flex-row y mt-4 justify-content-between align-items-start" style="width:90%">
                        <h6>Karbohidrat</h6>
            
                        <h6 id="karbo" name="KARBOHIDRAT" value=""><?= $karbohidrat; ?> g</h6>
                    </div>
                    <div class="d-flex flex-row y mt-3 justify-content-between" style="width:90%">
                        <h6>Lemak</h6>
                        <h6 id="lemak" name="LEMAK" value=""> <?= $lemak; ?> g</h6>
                    </div>
                    <div class="d-flex flex-row y mt-3 justify-content-between" style="width:90%">
                        <h6>Protein Hewani</h6>
                        <h6 id="prote" name="PROTEIN" value=""> <?= $proteinh; ?> g</h6>
                    </div>
                    <div class="d-flex flex-row y mt-3 justify-content-between" style="width:90%">
                        <h6>Protein Nabati</h6>
                        <h6 id="prote" name="PROTEIN" value="" > <?= $proteinn; ?> g</h6>
                    </div>
                    <div class="d-flex flex-row y mt-3 justify-content-between" style="width:90%">
                        <h6>Total Kalori yg Kurang </h6>
                        <h6 id="prote" name="PROTEIN" ><?= $kalori_kurang; ?> g</h6>
                    </div>
                    <td colspan="3"><input type="submit" class="btn btn-success mt-4 mb-3" onclick="submit( )"  ></td> -->
                </form>
        </div>
        
        <div style="width: 70%" class="overflow-auto"   >
            <div class="bigbox">
                <?PHP
                foreach ($saran_makanan as $sm) : ?>
                <div class="box">
                    <div class="img">
                    <img src="<?= base_url() . '/pict/makanan/' . $sm->GBR_MAKANAN; ?>" style="max-width: 150px;">

                            <div class="text">
                            
                                <h1>KATEGORI <br> <?= strtoupper($sm->KATEGORI_MAKANAN); ?></h1>
                                <table class="table" width="100%">
                                
                                    <tr>
                                        <td style="text-align: center ;" colspan="3"><?= $sm->NAMA_MAKANAN; ?></td>
                                    </tr>
                                    <tr>
                                        <td width="53%">Berat </td>
                                        <td width="2%">:</td>
                                        <td width="45%"><?= $sm->SATUAN_GRAM; ?> gr</td>
                                    </tr>
                                    <tr>
                                        <td>Total Kalori </td>
                                        <td>:</td>
                                        <td><?= $sm->JUMLAH_KALORI; ?> kkal</td>
                                    </tr>
                                </table>
                            </div>
                    </div>
                </div>
                    
                        <!-- <div class="card" style="width: 18rem; ">
                            <center><img src="<?=  base_url() . '/pict/' . $sm->GBR_MAKANAN; ?>" style="max-width: 150px;"></center>
                            <div class="card-body">
                            <h5 class="card-title" style="text-align: center;"><?= $sm->NAMA_MAKANAN; ?></h5>
                            <p class="card-text"> Berat : <?= $sm->SATUAN_GRAM; ?> gr <br> Total Kalori : <?= $sm->JUMLAH_KALORI; ?> kkal </p>
                            
                        </div> -->
                    
                <?PHP
                endforeach
                ?>
            </div>
        </div>
        </div>
        
    </div>

    
    
    </div>
</div>
<?= $this->endsection('content'); ?>