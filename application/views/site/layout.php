<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html>

<head>
  <?php $this->load->view('site/head'); ?>
  <link rel="stylesheet" href="<?php echo base_url(); ?>resource/css/home/home.css" />
  <title>Trang chủ</title>
</head>

<body>
  <?php if (isset($message)) : ?>
    <h3 style="color:red"><?php echo $message ?></h3>
  <?php endif; ?>

  <?php $this->load->view('site/header'); ?>
  <?php $this->load->view('site/nav'); ?>

  <main style="padding: 25px 0px">
    <div class="container-main">
      <div class="slider-menu">
        <div class="carousel" data-flickity='{ "autoPlay": 1500, "pauseAutoPlayOnHover": false, "wrapAround": true }'>
          <?php foreach ($slide_list as $key => $value) : ?>
            <div class="carousel-cell">
              <img src="<?php echo slider_url() ?><?php echo $value->image ?>" alt="" />
            </div>
          <?php endforeach ?>
        </div>
      </div>
      <div class="new-item">
        <div class="title-section">
          <h3>sản phẩm mới</h3>
        </div>
        <div class="grid-view-item">
          <?php foreach ($product_new as $value) : ?>
            <div class="grid-item">
              <div class="img-pro"><img src="<?php echo products_url() ?><?php echo $value->Image ?>" alt="" /></div>
              <div class="info-pro">
                <h5><?php echo $value->ProductName ?></h5>
                <p class="price-product"><?php echo $value->Price ?></p>
              </div>
            </div>
          <?php endforeach ?>
        </div>
      </div>
      <div class="hot-item">
        <div class="title-section">
          <h3>sản phẩm nổi bật</h3>
        </div>
        <div class="grid-view-item">
          <?php foreach ($product_abs as $value) : ?>
            <a style="text-decoration: none; color: unset" href="<?php echo base_url('product/view/' . $value->id) ?>">
              <div class="grid-item">
                <div class="img-pro"> <img src="<?php echo products_url() ?><?php echo $value->Image ?>" alt="" /></div>
                <div class="info-pro">
                  <h5><?php echo $value->ProductName ?></h5>
                  <p class="price-product"><?php echo $value->Price ?></p>
                </div>
              </div>
            </a>
          <?php endforeach ?>
        </div>
      </div>
    </div>
  </main>
  <script>
    let x = document.querySelectorAll(".price-product");
    for (let i = 0, len = x.length; i < len; i++) {
      let num = Number(x[i].innerHTML).toLocaleString("en");
      x[i].innerHTML = num;
      x[i].classList.add("currSign");
    }
  </script>
  <section class="service">
    <div class="service-section">
      <div class="service-item">
        <div class="icon-service" style="width: 22%">
          <img src="<?php echo base_url(); ?>resource/imgs/deliveryu.png" alt="" />
        </div>
        <p>
          <span>CAM KẾT CHẤT LƯỢNG </span>Cam kết hải sản tươi sống, sạch
          100%, đánh bắt tự nhiên, không hóa chất bảo quản...
        </p>
      </div>
      <div class="service-item">
        <div class="icon-service">
          <img src="<?php echo base_url(); ?>resource/imgs/icon-service.png" alt="" />
        </div>
        <p>
          <span>DỊCH VỤ CHU ĐÁO </span>Chúng tôi quan tâm đến bạn mọi lúc mọi
          nơi hãy gọi cho chúng tôi khi bạn cần tư vấn hoặc có bất kỳ thắc mắc
          nào đó
        </p>
      </div>
      <div class="service-item">
        <div class="icon-service"><img src="<?php echo base_url(); ?>resource/imgs/SEDFSDFS.jpg" alt="" /></div>
        <p>
          <span>GIAO HÀNG TẬN NHÀ </span>Đừng lo về ship hàng, hãy cứ liên hệ
          đặt hàng, Vietseafoods giao hạng tận nơi cho bạn
        </p>
      </div>
    </div>
  </section>

  <section class="business-partner">
    <div class="container-bp">
      <div class="title-bp">
        <h3>Đối Tác Của Chợ Cá</h3>
      </div>
      <div class="menu-logo-partner">
        <ul>
          <li><img src="<?php echo base_url(); ?>resource/imgs/logo-contact/nikko.jpg" alt="" /></li>
          <li><img src="<?php echo base_url(); ?>resource/imgs/logo-contact/novotel.jpg" alt="" /></li>
          <li><img src="<?php echo base_url(); ?>resource/imgs/logo-contact/shangri.jpg" alt="" /></li>
          <li><img src="<?php echo base_url(); ?>resource/imgs/logo-contact/sheraton.jpg" alt="" /></li>
          <li><img src="<?php echo base_url(); ?>resource/imgs/logo-contact/sofitel.jpg" alt="" /></li>
          <li><img src="<?php echo base_url(); ?>resource/imgs/logo-contact/vietseafoods.jpg" alt="" /></li>
          <li><img src="<?php echo base_url(); ?>resource/imgs/logo-contact/vinpearl.jpg" alt="" /></li>
          <li><img src="<?php echo base_url(); ?>resource/imgs/logo-contact/winso.jpg" alt="" /></li>
        </ul>
      </div>
    </div>
  </section>

  <?php $this->load->view('site/footer'); ?>
</body>

</html>