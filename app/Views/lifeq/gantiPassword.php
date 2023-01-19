<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>FP PEMWEB</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
  <link href='https://fonts.googleapis.com/css?family=Roboto:400,700,900' rel='stylesheet' type='text/css'><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>/styles/profile.css">
  <script src="https://kit.fontawesome.com/6f31a021d7.js" crossorigin="anonymous"></script>
</head>

<body> 
    <html>
        <head>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
        </head>
        <body>
            <div id="gradient">
                <div id="nc-main" class="nc-main bg-cover bg-cc">
                    <div class="full-wh">
                        <div class="bg-animation">
                            <div id='stars'></div>
                            <div id='stars2'></div>
                            <div id='stars3'></div>
                            <div id='stars4'></div>
                        </div>
                    </div>
                    
                    <div class="container">
                        <div class="leftbox">
                          <nav>
                            <a id="profile" href="<?= base_url('Cuser/profile') ?>" class="active" ><i class="fa fa-user"></i></a>
                            <a id="payment" href="<?= base_url('Cuser/edit/' . session()->get('ID_USER')) ?>"><i class="fa-solid fa-user-pen"></i></a>
                            <a id="subscription" href="<?= base_url('Cuser/gpass') ?>"><i class="fa-solid fa-key"></i></i></a>
                            <a id="privacy" href="<?= base_url('Cuser/delete/' . session()->get('ID_USER')) ?>"><i class="fa-solid fa-trash"></i></a>
                            <a href="<?= base_url('Cuser/home') ?>"><i class="fa-solid fa-house"></i></a>
                          </nav>
                        </div>
                        <form action="<?= base_url('Cuser/pass/'. session()->get('ID_USER')) ?>" enctype="multipart/form-data" method="post">
                          <div class="rightbox">
                          <div class="profile">
                            <h1 style="margin-bottom:19%;">Ganti Password</h1>
                            <h2>Password Lama</h2>
                            <input type="password" name="passLama" class="coba2">
                            <h2>Password Baru</h2>
                            <input type="password" name="passB" class="coba2">
                            <h2>Konfirmasi Password Baru</h2>
                            <input type="password" name="passB2" class="coba2">
                          <input type="submit" class="btn">	
                        </form>
                        
                        </div>
                      </div>
                </div>
            </div>
        </body>
    </html>
    <script  src="<?php echo base_url(); ?>/js/profile.js"></script>
    <script src='//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js'></script>
</body>
</html>
