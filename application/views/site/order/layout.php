<!DOCTYPE html>
<html>

<head>

  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Thanh toán</title>
  <link rel="shortcut icon" type="image/png" href="<?php echo base_url(); ?>resource/imgs/logo-quangdz.png"/>
  <!-- Font, Icon -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" />
  <link rel="stylesheet" href="https://unpkg.com/flickity@2.2.2/dist/flickity.min.css" />
  <script src="https://unpkg.com/flickity@2.2.2/dist/flickity.pkgd.min.js"></script>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet" />

  <!-- Bootstrap -->
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" />

  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  <!-- Latest compiled JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <!-- CSS -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>resource/css/reset.css" />
  <link rel="stylesheet" href="<?php echo base_url(); ?>resource/css/footer.css" />
  <link rel="stylesheet" href="<?php echo base_url(); ?>resource/css/checkout/bill.css" />
  <link rel="stylesheet" href="<?php echo base_url(); ?>resource/css/cart/header-cart.css" />
  <script>
    $(document).ready(function() {
      $("input[type=radio]").click(function(e) {
        if ($(this).is(":checked")) {
          $(".btn-primary").removeClass("disabled");
          $("#payment").val($(this).val());
        }
      });
    });
  </script>

  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script src="sweetalert2.all.min.js"></script>
  <script src="//cdn.jsdelivr.net/npm/promise-polyfill@8/dist/polyfill.js"></script>

</head>

<body>
  <?php $this->load->view('site/cart/header-cart'); ?>
  <main>
    <?php $this->load->view($temp, $this->data); ?>
  </main>
  <?php $this->load->view('site/footer'); ?>

</body>


</html>