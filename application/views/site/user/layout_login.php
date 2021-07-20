<!DOCTYPE html>
<html>

<head>
  <?php $this->load->view('site/user/head'); ?>
  <link rel="shortcut icon" type="image/png" href="<?php echo base_url(); ?>resource/imgs/logo-quangdz.png"/>
  <title>Đăng nhập</title>
</head>

<body>
  <?php $this->load->view('site/user/header-login'); ?>

  <?php $this->load->view($temp, $this->data); ?>

  <?php $this->load->view('site/footer'); ?>
</body>

</html>