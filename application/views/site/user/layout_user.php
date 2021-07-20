<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <title>Kênh người dùng</title>
  <link rel="shortcut icon" type="image/png" href="<?php echo base_url(); ?>resource/imgs/logo-quangdz.png"/>
  <meta name="description" content="" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <!-- FONT -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" />
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet" />

  <!-- Jquery -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <!-- jQuery first, then Tether, then Bootstrap JS. -->
  <!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script> -->
  <!-- Bootstrap -->
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />

  <!-- Latest compiled JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

  <!-- CSS -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>resource/css/reset.css" />
  <!-- <link rel="stylesheet" href="<?php echo base_url(); ?>resource/css/header-cart.css" /> -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>resource/css/customer/new.css" />
  <link rel="stylesheet" href="<?php echo base_url(); ?>resource/css/customer/account-customer.css" />

  <!-- JS -->
  <script src="<?php echo base_url(); ?>resource/js/account-customer.js"></script>
  <script src="<?php echo base_url(); ?>resource/js/simple-rating.js"></script>
</head>

<body>
  <!--[if lt IE 7]>
      <p class="browsehappy">
        You are using an <strong>outdated</strong> browser. Please
        <a href="#">upgrade your browser</a> to improve your experience.
      </p>
    <![endif]-->
  <script>
    function isInputNumber(evt) {
      var char = String.fromCharCode(evt.which);
      if (!/[0-9]/.test(char)) {
        evt.preventDefault();
      }
    }
  </script>
  <header>
    <div class="container-header">
      <div class="wrap-page">
        <div class="cart-logo">
          <a data-toggle="tooltip" data-placement="bottom" title="Quay lại Cửa Hàng" href="<?php echo site_url('store'); ?>"><img src="<?php echo public_url() ?>/imgs/logo-bg-white.png" alt="" /></a>
          <div class="vl"></div>
          <h5 id="title-name">Kênh Người Dùng</h5>
        </div>
      </div>
    </div>
  </header>

  <?php $this->load->view($temp, $this->data); ?>

</body>

</html>