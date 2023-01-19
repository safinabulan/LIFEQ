<html lang="en">
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.rtl.min.css" integrity="sha384-dc2NSrAXbAkjrdm9IYrX10fQq9SDG6Vjz7nQVKdKcJl3pC+k37e7qJR5MVSCS+wR" crossorigin="anonymous">

    <meta charset="UTF-8">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js" charset="utf-8"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/easy-pie-chart/2.1.6/jquery.easypiechart.min.js" charset="utf-8"></script>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/styles/home.css">
    <script src="https://kit.fontawesome.com/6f31a021d7.js" crossorigin="anonymous"></script>
    <script src="main.js"></script>
    <title>FP PEMWEB</title>
    <style>
        :root{
    --color-one: #82954B;
    --color-two: #BABD42;
    --color-three:#EFD345;
    --color-four: #FFEF82;
    --color-five: #FAF9FE;
    --color-six: #ffffff;
}
    </style>
</head>
<body>
    <div style="width:6%;float:left; margin:auto;">
        <nav class="navbar card flex-column shadow  bg-body rounded" style="--bs-card-border-color:none; width: 6%; text-align: center;width:100%;--bs-card-border-radius: 0rem 0.375rem 0.375rem 0rem;height:100%;">
        <img href="<?= base_url('Cuser/home') ?>" style="height:6%; position:absolute; left:0; right:0; margin: auto; margin-top:15%;" src="<?php echo base_url('/pict/lifeQ.fit revisi 2.png');?>" alt="logo" >
            
            <div class="d-flex flex-column" style="margin:auto;">
                <a href="<?= base_url('Cuser/home') ?>" class="active"><i class="fa-duotone fa-house-user fa-2x nav-link" style="color:var(--color-one);padding-top:30%;padding-bottom:30%;" ></i></a></li>
                <a href="<?= base_url('Caktivitas/Akti') ?>"><i class="fa-duotone fa-abacus fa-2x nav-link mt-5" style="padding-top:30%;padding-bottom:30%; color:var(--color-one)" ></i></a></li>
                <a href="<?= base_url('Cmakanan/index') ?>"><i class="fa-duotone fa-pot-food fa-2x nav-link mt-5" style="color:var(--color-one);padding-top:30%;padding-bottom:30%;" ></i></a></li>
                <a href="<?= base_url('Caktivitas/Aktivitas') ?>"><i class="fa-solid fa-book-medical fa-2x nav-link mt-5" style="color:var(--color-one);padding-top:30%;padding-bottom:30%;" ></i></a></li>
            </div>
            <a href="<?= base_url('Cuser/logout') ?>" class="logout"><i class="fa-duotone fa-arrow-right-from-bracket fa-2x mb-5" style="color:var(--color-one);; position:absolute;left:0; right:0;bottom:0%" ></i></a>
        </nav>
    </div>
    <?= $this->renderSection('content'); ?>
    </body>

</html>