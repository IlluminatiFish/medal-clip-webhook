<!DOCTYPE html>
<html lang="en">
<head>
  <title>Medal.tv Plaintext Clip Webhook Test</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->  
<link rel="icon" type="image/png" href="https://awexxx.github.io/medal-clip-webhook//assets/images/icons/favicon.ico"/>
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="https://awexxx.github.io/medal-clip-webhook//assets/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="https://awexxx.github.io/medal-clip-webhook//assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="https://awexxx.github.io/medal-clip-webhook//assets/fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="https://awexxx.github.io/medal-clip-webhook//assets/vendor/animate/animate.css">
<!--===============================================================================================-->  
  <link rel="stylesheet" type="text/css" href="https://awexxx.github.io/medal-clip-webhook//assets/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="https://awexxx.github.io/medal-clip-webhook//assets/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="https://awexxx.github.io/medal-clip-webhook//assets/vendor/select2/select2.min.css">
<!--===============================================================================================-->  
  <link rel="stylesheet" type="text/css" href="https://awexxx.github.io/medal-clip-webhook//assets/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="https://awexxx.github.io/medal-clip-webhook//assets/css/util.css">
  <link rel="stylesheet" type="text/css" href="https://awexxx.github.io/medal-clip-webhook//assets/css/css/main.css">
<!--===============================================================================================-->
</head>
<body>
  
  <div class="limiter">
    <div class="container-login100" style="background-image: url('images/bg-01.jpg');">
      <div class="wrap-login100">
        <form class="login100-form validate-form" method="POST" action="../scripts/webhook-plaintext.php">
          <span class="login100-form-logo">
            <i class="zmdi zmdi-fullscreen"></i>
          </span>

          <span class="login100-form-title p-b-34 p-t-27">
            Medal.tv Clip Webhook
          </span>

          <div class="wrap-input100 validate-input">
            <input class="input100" type="url" name="webhookURL" placeholder="Discord/Guilded API URL">
            <span class="focus-input100" data-placeholder="&#xf191;"></span>
          </div>

          <div class="wrap-input100 validate-input">
            <input class="input100" type="url" name="clipLink" placeholder="Clip Link">
            <span class="focus-input100" data-placeholder="&#xf18e;"></span>
          </div>
          <div class="wrap-input100 validate-input">
            <input class="input100" type="text" name="medalUsername" placeholder="Medal Username">
            <span class="focus-input100" data-placeholder="&#xf207;"></span>
          </div>
          <div class="wrap-input100 validate-input">
            <input class="input100" type="text" name="caption" placeholder="Caption">
            <span class="focus-input100" data-placeholder="&#xf150;"></span>
          </div>

          <div class="container-login100-form-btn">
            <button class="login100-form-btn">
              <i class="zmdi zmdi-mail-send"></i>Submit
            </button>
          </div>

          </div>
        </form>
      </div>
    </div>
  </div>
  

  <div id="dropDownSelect1"></div>
  
<!--===============================================================================================-->
  <script src="../assets/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
  <script src="../assets/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
  <script src="../assets/vendor/bootstrap/js/popper.js"></script>
  <script src="../assets/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
  <script src="../assets/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
  <script src="../assets/vendor/daterangepicker/moment.min.js"></script>
  <script src="../assets/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
  <script src="../assets/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
  <script src="../assets/js/main.js"></script>
  <script src="../assets/js/slideshow.js"></script>

</body>
</html>