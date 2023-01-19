<html lang="en">
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.rtl.min.css" integrity="sha384-dc2NSrAXbAkjrdm9IYrX10fQq9SDG6Vjz7nQVKdKcJl3pC+k37e7qJR5MVSCS+wR" crossorigin="anonymous">

    <meta charset="UTF-8">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js" charset="utf-8"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/easy-pie-chart/2.1.6/jquery.easypiechart.min.js" charset="utf-8"></script>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/styles/Vhome.css">
    <script src="https://kit.fontawesome.com/6f31a021d7.js" crossorigin="anonymous"></script>
    <script src="main.js"></script>
    <title>FP PEMWEB</title>
</head>
<body>
<div style="width:6%;float:left;margin:auto;">
        <nav class="navbar card flex-column shadow  bg-body rounded" style="--bs-card-border-color:none; width: 6%; text-align: center;width:100%;--bs-card-border-radius: 0rem 0.375rem 0.375rem 0rem;height:100%;">
            <img href="<?= base_url('Cuser/home') ?>" style="height:6%; position:absolute; left:0; right:0; margin: auto; margin-top:15%;" src="<?php echo base_url('/pict/lifeQ.fit revisi 2.png');?>" alt="logo" >
            
            <div class="d-flex flex-column" style="margin:auto;">
                <a href="<?= base_url('Cuser/home') ?>" class="active"><i class="fa-duotone fa-house-user fa-2x nav-link" style="color:var(--color-one);padding-top:30%;padding-bottom:30%;" ></i></a></li>
                <a href="<?= base_url('Caktivitas/Akti') ?>"><i class="fa-duotone fa-abacus fa-2x nav-link mt-5" style="padding-top:30%;padding-bottom:30%; color:var(--color-one)" ></i></a></li>
                <a href="<?= base_url('Cmakanan/index') ?>"><i class="fa-duotone fa-pot-food fa-2x nav-link mt-5" style="color:var(--color-one);padding-top:30%;padding-bottom:30%;" ></i></a></li>
                <a href="#"><i class="fa-solid fa-book-medical fa-2x nav-link mt-5" style="color:var(--color-one);padding-top:30%;padding-bottom:30%;" ></i></a></li>
            </div>
            <a href="<?= base_url('Cuser/logout'); ?>" class="logout"><i class="fa-duotone fa-arrow-right-from-bracket fa-2x mb-5" style="color:var(--color-one);; position:absolute;left:0; right:0;bottom:0%" ></i></a>
        </nav>
    </div>


    <div class="content2">
        <nav>
            <input type="text" name="search" placeholder="Search..">
            <i class="fa-solid fa-magnifying-glass fa-lg"></i>
            <div class="d-flex flex-row">
                <a href="<?= base_url('Cuser/about') ?>">about</a>
                <a href="#">contact</a> 
                <div class="nav-item dropdown d-flex flex-row" style="">
                    <a class="nav-link" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" >
                        <p class="me-4 ms-2" ><?=session()->get('username')?></p>
                    </a>
                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor" class="bi bi-chevron-down " viewBox="0 0 16 16" style="">
                    <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>
                    </svg>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown" style="margin-left: 0%;">
                        <li><a class="dropdown-item" href="<?= base_url('Cuser/profile') ?>" style="margin-left: 0%;">Edit my profile</a></li>
                        <li><a class="dropdown-item" href="#" style="margin-left: 0%;">Log Out</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <history>
            <quotes>
                <b style="color: var(--color-one)">Healty Life</b> is the key <br> to your good mood
            </quotes>
            <div>
                <hai>
                    <baru>
                       <i class="fa-regular fa-face-smile fa-lg"></i><br>
                        <h3>
                            You're Doing Great Today!
                        </h3>
                        <p>
                            Keeping your body healthy is an expression of gratitude. 
                        </p> 
                    </baru>
                </hai>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <hai>
                    <baru>
                        <i class="fa-regular fa-face-frown fa-lg"></i><br>
                        <h3>
                            C'mon Eat Something Healty!
                        </h3>
                        <p>
                        Physical fitness is the first requisite of happiness.
                        </p>
                     </baru>
                </hai>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <hai>
                    <baru>
                        <i class="fa-regular fa-face-sad-sweat fa-lg"></i><br>
                        <h3>
                            Don't Make Me Worry!
                        </h3>
                        <p>
                            A sad soul can be just as lethal as a germ.
                        </p>
                     </baru>
                </hai>
            </div>
        </history>
        
        <barchart>
            <cOrang>
                <img src="<?php echo base_url(); ?>/pict/lala.png" alt="sajian" style="position:relative;width: 80%; left:8%;">
            </cOrang>
            <Bprogress>
                <h1>
                    Saran Gizimu Hari Ini!
                </h1>
                <div class="container">
                    <div class="box">
                        <div class="chart" data-percent="20" >
                            20%
                        </div>
                        <h2>karbohidrat</h2>
                    </div>
                    <div class="box">
                        <div class="chart" data-percent="80" >
                            80%
                        </div>
                        <h2>lemak</h2>
                    </div>
                    <div class="box">
                        <div class="chart" data-percent="50" >
                            50%
                        </div>
                        <h2>protein</h2>
                    </div>
                </div>
            </Bprogress>
        </barchart>

        <tanggal>
            <isi class="grid-container">
                <div class="grid-item" style="background-color: var(--color-six); color: var(--color-one); height:90%">Mo<br><b>1</b></div>
                <div class="grid-item">Tu<br><b>2</b></div>
                <div class="grid-item">We<br><b>3</b></div>  
                <div class="grid-item">Th<br><b>4</b></div>
                <div class="grid-item">Fr<br><b>5</b></div>
                <div class="grid-item">Sa<br><b>6</b></div>  
                <div class="grid-item">Su<br><b>7</b></div> 
            </isi>
        </tanggal>
    </div>

    <div class="content3">
        <hitung>
            <img src="<?php echo base_url(); ?>/pict/berapa.png" alt="berapa?">
            <kotak>
                <div>
                    Berapa Gizimu?<br>
                    <a href="<?= base_url('Caktivitas/Akti') ?>" target="_blank">
                    <button>ayo hitung</button></a>
                </div>
            </kotak>
        </hitung>

        <orang>
            <food>
                <h5 class="mt-4">Food for Today!</h5>
                <img src="<?php echo base_url(); ?>/pict/makan.jpeg" alt="burger">
                <nama>
                    Hamburger
                </nama>
                <Kalori>
                    295 kkal
                </Kalori>
                <h5 class="mt-4"></h5>
                <img src="<?php echo base_url(); ?>/pict/katsu.jpeg" alt="burger">
                <nama>
                    Katsu
                </nama>
                <Kalori>
                    295 kkal
                </Kalori>
                <h5 class="mt-4"></h5>
                <img src="<?php echo base_url(); ?>/pict/salad.jpeg" alt="burger">
                <nama>
                    Salad
                </nama>
                <Kalori>
                    295 kkal
                </Kalori>
                <h5 class="mt-4"></h5>
                <img src="<?php echo base_url(); ?>/pict/sop.webp" alt="burger">
                <nama>
                    Sop
                </nama>
                <Kalori>
                    295 kkal
                </Kalori>
            </food>
        </orang>

        <invite>
            <form action="<?php echo base_url('Cuser/home'); ?>">
                <input type="email"><Button><i class="fa-solid fa-arrow-up-right-from-square fa-2x" style="color: white;" type="submit"></i></Button>
            </form>
        </invite>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script  src="<?php echo base_url(); ?>/js/Home.js"></script>
</body>

</html>