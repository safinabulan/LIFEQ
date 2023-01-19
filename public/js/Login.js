var colors = new Array(
  [236, 243, 158],
  [144, 169, 85],
  [79, 119, 45],
  [49, 87, 44],
  [137, 140, 53],
  [118, 120, 46]);

var step = 0;
var colorIndices = [0,1,2,3];
var gradientSpeed = 0.004;

function updateGradient()
{
  
  if ( $===undefined ) return;
  
var c0_0 = colors[colorIndices[0]];
var c0_1 = colors[colorIndices[1]];
var c1_0 = colors[colorIndices[2]];
var c1_1 = colors[colorIndices[3]];

var istep = 1 - step;
var r1 = Math.round(istep * c0_0[0] + step * c0_1[0]);
var g1 = Math.round(istep * c0_0[1] + step * c0_1[1]);
var b1 = Math.round(istep * c0_0[2] + step * c0_1[2]);
var color1 = "rgb("+r1+","+g1+","+b1+")";

var r2 = Math.round(istep * c1_0[0] + step * c1_1[0]);
var g2 = Math.round(istep * c1_0[1] + step * c1_1[1]);
var b2 = Math.round(istep * c1_0[2] + step * c1_1[2]);
var color2 = "rgb("+r2+","+g2+","+b2+")";

 $('#gradient').css({
   background: "-webkit-gradient(linear, left top, right top, from("+color1+"), to("+color2+"))"}).css({
    background: "-moz-linear-gradient(left, "+color1+" 0%, "+color2+" 100%)"});
  
  step += gradientSpeed;
  if ( step >= 1 )
  {
    step %= 1;
    colorIndices[0] = colorIndices[1];
    colorIndices[2] = colorIndices[3];
    
    //pick two new target color indices
    //do not pick the same as the current one
    colorIndices[1] = ( colorIndices[1] + Math.floor( 1 + Math.random() * (colors.length - 1))) % colors.length;
    colorIndices[3] = ( colorIndices[3] + Math.floor( 1 + Math.random() * (colors.length - 1))) % colors.length;
    
  }
}
setInterval(updateGradient,10);

$('.email').on("change keyup paste",
  function(){
    if($(this).val()){
      $('.icon-paper-plane').addClass("next");
    } else {
      $('.icon-paper-plane').removeClass("next");
    }
  }
);

$('.next-button').hover(
  function(){
    $(this).css('cursor', 'pointer');
  }
);

$('.next-button.email').click(
  function(){
    console.log("Something");
    $('.email-section').addClass("fold-up");
    $('.password-section').removeClass("folded");
  }
);

$('.password').on("change keyup paste",
  function(){
    if($(this).val()){
      $('.icon-lock').addClass("next");
    } else {
      $('.icon-lock').removeClass("next");
    }
  }
);

$('.next-button').hover(
  function(){
    $(this).css('cursor', 'pointer');
  }
);

$('.next-button.password').click(
  function(){
    console.log("Something");
    $('.password-section').addClass("fold-up");
    $('.repeat-password-section').removeClass("folded");
  }
);

$('.repeat-password').on("change keyup paste",
  function(){
    if($(this).val()){
      $('.icon-repeat-lock').addClass("next");
    } else {
      $('.icon-repeat-lock').removeClass("next");
    }
  }
);

$('.next-button.repeat-password').click(
  function(){
    console.log("Something");
    $('.repeat-password-section').addClass("fold-up");
    $('.success').css("marginTop", 0);
  }
);


var main = document.getElementById("main");
var sign = document.getElementById("signup2");
var TulisSignup = document.getElementById("tulisanSignup");
var TulisSignup2 = document.getElementById("tulisanSignup2");
var TulisSignin = document.getElementById("tulisanSignin");
var TulisSignin2 = document.getElementById("tulisanSignin2");
var tombolSignup = document.getElementById("tombolSignup");
var tombolSignin = document.getElementById("login");

TulisSignup.style.display = "none";
TulisSignup2.style.display = "none";

openSignUp = () =>{
  setTimeout(function(){
    main.style.display="none";
    TulisSignup.style.display = "block";
    TulisSignup2.style.display = "block";
    sign.style.display = "block";
    TulisSignin.style.display = "none";
    TulisSignin2.style.display = "none";
    // main.style.display = "none";
    
  }, 0);
}
tombolSignup.addEventListener("click", openSignUp, false);

openSignUp = () =>{
  setTimeout(function(){
    sign.style.display="none";
    TulisSignin.style.display = "block";
    TulisSignin2.style.display = "block";
    TulisSignup.style.display = "none";
    TulisSignup2.style.display = "none";
    main.style.display = "block";
    // main.style.display = "none";
    
  }, 0);
}
tombolSignin.addEventListener("click", openSignUp, false);
