<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>FP PEMWEB</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
  <link href='https://fonts.googleapis.com/css?family=Roboto:400,700,900' rel='stylesheet' type='text/css'><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>/styles/login.css">
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
        
        <div class="registration-form">
          <header>
            <h1 id="tulisanSignin">Sign In</h1>
            <p id="tulisanSignin2">Hai! Welcome back dear</p>
            <h1 id="tulisanSignup">Sign Up</h1>
            <p id="tulisanSignup2">Join us and be healthy</p>
          </header>

          <div id="main" class="main">
            <div class="social-media-buttons">
              <div class="icon">
                  <a href="#"><i class="fa-brands fa-facebook-f"></i>
                </div>
                <div class="icon">
                  <a href="#"><i class="fa-brands fa-google"></i>
                </div>
                <div class="icon" id="tombolSignup">
                  <i class="fa-solid fa-user"></i></a>
                </div>
            </div>

            <p class="small">or use your email account:</p>
            
            <form id="sign-in-form" method="post" action="<?= base_url('Cuser/prosesLogin'); ?>">      
              <input type="text" name="username" id="email" placeholder="Username"/>
              <input type="password" name="password" id="password" placeholder="Password"/>
              <p class="forgot-password">Forgot your password?</p>
              <button class="control-button in" type="submit">Sign In</button>
            </form>
          </div>
        
          <form id='signup2' action="<?= base_url('Cuser/store') ?>" method="post" >
            <div class="input-section email-section">
              <input class="email" type="email" name="email" id="email" placeholder="ENTER YOUR E-MAIL HERE" autocomplete="off"/>
              <div class="animated-button">
                <span class="icon-paper-plane"><i class="fa fa-envelope-o"></i></span>
                <span class="next-button email">
                  <i class="fa fa-arrow-up"></i>
                </span>
              </div>
            </div>
            
            <div class="input-section password-section folded">
              <input class="password" name="username" id="username" type="username" placeholder="ENTER YOUR USERNAME HERE"/>
              <div class="animated-button">
                <span class="icon-lock"><i class="fa-regular fa-user"></i></span>
                <span class="next-button password">
                  <i class="fa fa-arrow-up"></i>
                </span>
              </div>
            </div>

            <div class="input-section repeat-password-section folded">
              <input class="repeat-password" name="password" id="password" type="password" placeholder="ENTER YOUR PASSWORD HERE"/>
              <div class="animated-button">
                <span class="icon-repeat-lock">
                  <i class="fa fa-lock"></i>
                </span>
                <span class="next-button repeat-password">
                  <i class="fa fa-paper-plane"></i> 
                </span>
              </div>
            </div>

            <div class="success"> 
              <button type="submit">ACCOUNT CREATED</button>
            </div>
          </form>


        </div>
      </div>
  </body>
  </html>
  
  <script  src="<?php echo base_url(); ?>/js/Login.js"></script>
  <script src='//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js'></script>

</body>
</html>
