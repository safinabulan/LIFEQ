<!-- <head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.rtl.min.css" integrity="sha384-dc2NSrAXbAkjrdm9IYrX10fQq9SDG6Vjz7nQVKdKcJl3pC+k37e7qJR5MVSCS+wR" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://kit.fontawesome.com/6f31a021d7.js" crossorigin="anonymous"></script>
</head> -->
    <?= $this->extend('Layout/Template'); ?>
    <?= $this->section('content'); ?>
<style>
    :root{
    --color-one: #82954B;
    --color-two: #BABD42;
    --color-three:#EFD345;
    --color-four: #FFEF82;
    --color-five: #FAF9FE;
    --color-six: #ffffff;
    }
    body{
        font-family: 'Poppins', sans-serif;
        height:100%;
        background-color: var(--color-five);
    }
    .btntmbh{
        width:100px;
    }
    .card{
        background-color: var(--color-six);
    }
    .tinggi{
        height:100%;
    }
    .logo{
        height:50px;
    }
     
    * {
        padding: 0;
        margin: 0;
        box-sizing: border-box;
    } 
    
    .chart{
      width: 300px;
      height: 100%;
      display: block;
      position: relative;
    }
    .chartBox {
        margin: auto;
        width: 32%;
        height:60%;
        padding: 20px;
        border-radius: 20px;
        background: white;
        position: absolute;
        top:0;
        bottom:0;
        right:20%;
      }
</style>
<!-- <body> -->
    <!-- <div style="width:6%;float:left;margin:auto;" id="gradient">
        <nav class="navbar card flex-column shadow  bg-body rounded" style="--bs-card-border-color:none;width: 6%; text-align: center;width:100%;--bs-card-border-radius: 0rem 0.375rem 0.375rem 0rem;height:100%;">
        <img href="<?= base_url('Cuser/home') ?>" style="height:6%; position:absolute; left:0; right:0; margin: auto; margin-top:15%;" src="<?php echo base_url('/pict/lifeQ.fit revisi 2.png');?>" alt="logo" >
            <div class="d-flex flex-column" style="margin:auto;">
                <a href="<?= base_url('Cuser/home') ?>" class="active"><i class="fa-duotone fa-house-user fa-2x nav-link" style="color:var(--color-one);padding-top:30%;padding-bottom:30%;" ></i></a></li>
                <a href="<?= base_url('Caktivitas/Akti') ?>"><i class="fa-duotone fa-abacus fa-2x nav-link mt-5" style="background-color:var(--color-two);padding:30%; border-radius: 50%; color:var(--color-five)" ></i></a></li>
                <a href="<?= base_url('Cmakanan/index') ?>"><i class="fa-duotone fa-pot-food fa-2x nav-link mt-5" style="color:var(--color-one);padding-top:30%;padding-bottom:30%;" ></i></a></li>
                <a href="#"><i class="fa-solid fa-book-medical fa-2x nav-link mt-5" style="color:var(--color-one);padding-top:30%;padding-bottom:30%;" ></i></a></li>
            </div>
            <a href="#" class="logout"><i class="fa-duotone fa-arrow-right-from-bracket fa-2x mb-5" style="color:var(--color-one);; position:absolute;left:0; right:0;bottom:0%" ></i></a>
        </nav>
    </div> -->

    <div class="d-flex flex-row navbar" style="background-color: var(--color-one);">
        <div class="mt-3 me-5 d-flex flex-row">
            <img src="<?php echo base_url('pict/lifeQ.fitfullputih.png');?>" alt="" style="width:8%">
       
        <div class="me-2 mt-2">
            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16" style="color: var(--color-six)">
            <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
            </svg>
        </div>
        <h4 class="mt-2 me-2" style="color: var(--color-six)">Perhitungan Gizi Ideal</h4>
        </div>
        <div class="nav-item dropdown d-flex flex-row" style="position:absolute; right:10%;">
            <a class="nav-link ms-3" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" >
                <p class="mt-3" style="color: var(--color-six)"><?=session()->get('username')?></p>
            </a>
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-chevron-down mt-3" viewBox="0 0 16 16" style="color: var(--color-six)">
            <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>
            </svg>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown" style="margin-left: 0%;">
                <li><a class="dropdown-item" href="<?= base_url('Cuser/profile') ?>" style="margin-left: 0%;">Edit my profile</a></li>
                <li><a class="dropdown-item" href="#" style="margin-left: 0%;">Log Out</a></li>
            </ul>
        </div>
    </div>

    <div class="p-3 bg-body rounded d-flex flex-row justify-content-center align-items-center" style="height:80%;">
        <div class="card-body  mt-5 me-5">
            <form method="post" action="<?=base_url('Csaran/SaranM');?>" >
            <div class="container d-flex flex-row justify-content-between">
              <input type="hidden" name="id_status" value="<?= $id_status; ?>">
              <input type="hidden" name="persen_kalori" value="<?= round($PersenKalori); ?>">
              <input type="hidden" name="kalori" value="<?= $Kalori; ?>">
              <!-- id riwayat terbaru -->
              <input type="hidden" name="id_riwayat" value="<?= $id_riwayat[0]->ID_RIWAYAT; ?>">
              <div style="padding-left: 8%">
                <h1>Hasil Perhitungan</h1>
                <td colspan="3"><button class="btn mt-2 mb-4" style="background-color:var(--color-one); color:var(--color-five)">Pilih Menu Makanan</button></td>
                
                <h4>Gizi Ideal Tubuh <?=session()->get('username')?></h4>
                  <div class="mt-4">
                      <h4 id="hasil" ></h4></div>
                  <div>
                  <div class="d-flex flex-row y mt-4 justify-content-between" style="width:70%">
                      <h6>Karbohidrat</h6>
                      <h6 id="karbo" name="KARBOHIDRAT" value=""><?php echo round($hasilGIKarbo) ?> g</h6>
                  </div>
                  <div class="d-flex flex-row y mt-3 justify-content-between" style="width:70%">
                      <h6>Lemak</h6>
                      <h6 id="lemak" name="LEMAK"><?php echo round($hasilGILemak) ?> g</h6>
                  </div>
                  <div class="d-flex flex-row y mt-3 justify-content-between" style="width:70%">
                      <h6>Protein</h6>
                      <h6 id="prote" name="PROTEIN"><?php echo round($hasilGIProte) ?> g</h6>
                  </div>
              </div>
              <div class="chartBox">
                
                  <h4 id="persen" style="position: absolute;left: 0; right: 0;text-align: center;top:40%"><?php echo round($Persen); ?>%</h4>
                  <img src="<?php echo base_url('assets/images/HB.png');?>" alt="" style="position: absolute; height: 87.5%;top:5%;left: 0; right: 0; margin-left: -8%; margin-right: auto; ">
                  <canvas id="myChart"></canvas>
                
                <h4 class="" style="text-align:center; margin-left:5%"><strong>Total Gizi Tubuh</strong> (<?php echo round($PersenKalori); ?>/<?php echo $Kalori; ?> Kal)</h4>
                <!--</div>-->
              </div>
            </div>
            </form>
        </div>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
      var barctx = document.getElementById('myChart')
      // eslint-disable-next-line no-unused-vars
      var barChart = new Chart(barctx, {
        type: 'bar',
        data: {
          labels: [' '],
          datasets: [{
            label: 'Gizi Ideal',
            data: [<?= round($Persen); ?>],
            backgroundColor: "rgba(232,232,166)"
            //borderColor: "hsl(252, 82.9%, 67.8%)"
          }]
        },
        options: 
        {
          maintainAspectRatio: false,
          scales: {
            yAxes: {
              display: true,
              beginAtZero: true,
              steps: 10,
              stepValue: 5,
              max: 100,
              grid:{
                display: false
              }
            }
          }
        }
      })
    </script>
</div>
</div>
<!-- </body> -->
</table>
<?= $this->endSection('content'); ?>

            