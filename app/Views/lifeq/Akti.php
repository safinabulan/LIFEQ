<!-- <head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.rtl.min.css" integrity="sha384-dc2NSrAXbAkjrdm9IYrX10fQq9SDG6Vjz7nQVKdKcJl3pC+k37e7qJR5MVSCS+wR" crossorigin="anonymous">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!--<link rel="stylesheet" href="<?php echo base_url(); ?>/styles/login.css">-->
    <!-- <script src="https://kit.fontawesome.com/6f31a021d7.js" crossorigin="anonymous"></script>
</head> --> -->
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
       /* background-color: #FAF9FE;
        background-color: #1F4690;*/
    }
    .btntmbh{
        width:100px;
    }
    .card{
        background-color: var(--color-six);
    }
    h1{
        /*text-align: center;*/
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
</style>
<!-- <body>    
    <div style="width:6%;float:left;margin:auto;" >
        <nav class="navbar card flex-column shadow  bg-body rounded" style="--bs-card-border-color:none; width: 6%; text-align: center;width:100%;--bs-card-border-radius: 0rem 0.375rem 0.375rem 0rem;height:100%;">
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

    <div class="d-flex flex-row justify-content-center align-items-center" style="height:90%; padding-bottom:2%;">
        <div class="mt-5">
        <!--<img src="<?php echo base_url('assets/images/HB.png');?>" alt="" style="position: absolute; height: 87.5%;top:5%;left: 0; right: 0; margin-left: -8%; margin-right: auto; ">-->
            <img src="<?php echo base_url('pict/aktivitashuman.png');?>" alt="" style="width:90%">
        </div>
        <div class="p-3 mb-5 rounded" style="margin-right:0%;margin-left:2%;">
            <div class="card-body d-flex align-items-center" style="">
                <form method="post" action="<?= base_url('Cpharris/AKE'); ?>">
                <h1 class="mb-2">Halo, <?=session()->get('username')?></h1>
                <h4>Aktivitas apa yang sudah kamu lakukan hari ini?</h4>
                    <div class="mt-4">
                        <h5>Aktifitas Fisik</h5>
                        <select name="pilkeg" style="width:90%" placeholder="Pilih Aktivitas" class="form-select form-select-sm" aria-label=".form-select-sm example">
                            <option value="">Pilih Aktivitas</option>
                            <?php foreach ($akti as $pil){?>
                                <option value="<?php echo $pil->NAMA_KEGIATAN; ?>"><?php echo $pil->NAMA_KEGIATAN; ?></option>
                            <?php }?>
                        </select>
                    <tr>
                        <td colspan="3"><input type="submit" class="btn mt-4 mb-3" style="background-color:var(--color-one); color:var(--color-five)"></td>
                    </tr>
                </form>
            </div>
        </div>
    </div>
    
<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/chart.js"></script>


</div>
</div>
<!-- </body> -->
</table>
<?= $this->endSection('content'); ?>

            