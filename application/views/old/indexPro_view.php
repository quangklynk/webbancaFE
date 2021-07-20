<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>

  <link rel="preconnect" href="https://fonts.gstatic.com" />
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet" />

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>resource/css/sign-up.css" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" />
  <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.2.1.min.js"></script>
  <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.min.js" type="text/javascript"></script>

  <script src="<?php echo base_url(); ?>resource/js/log.js"></script>
  <link rel="stylesheet" href="<?php echo base_url(); ?>resource/css/log-in.css" />
  <link rel="stylesheet" href="<?php echo base_url(); ?>resource/css/config.css" />
  <link rel="stylesheet" href="<?php echo base_url(); ?>resource/css/list-product.css" />
</head>

<body>
  <header>
    <div class="container-header">
      <div class="logo-web">
        <img src="<?php echo base_url(); ?>resource/imgs/logo-bg-white.png" alt="" />
      </div>
      <div class="slogan-web">
        <h1>
          chợ cá nơi cung cấp thủy hải sản real
          <div class="heart">100%</div>
          , không "pha-ke" nha!
        </h1>
      </div>
      <div class="bnt-log">
        <button type="button" class="btn btn-primary log" data-toggle="modal" data-target="#exampleModal" data-backdrop="static">
          Đăng nhập
        </button>
        <button type="button" class="btn btn-primary log" data-toggle="modal" data-target="#exampleModal1" data-whatever="@fat" data-backdrop="static">
          Đăng ký
        </button>
      </div>
    </div>

    <!-- Đăng nhập -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <div class="title-form">
              <h4>Đăng Nhập Thành Viên</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close" id="close-popup">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
          </div>
          <div class="modal-body">
            <div class="form-acc">
              <form action="#" id="myform-s" method="GET">
                <div class="item-form">
                  <i class="fas fa-envelope"></i>
                  <input name="email" id="email-s" placeholder="Nhập email" />
                </div>
                <div class="item-form">
                  <i class="fas fa-lock"></i>
                  <input type="password" name="password" id="password-s" placeholder="Nhập mật khẩu" />
                  <i class="fas fa-eye pass-icon" id="show-pass-s"></i>
                  <i class="fas fa-eye-slash pass-icon" id="hide-pass-s" style="display: none"></i>
                </div>

                <div class="item-form">
                  <label for="check-remem" id="container-check-bnt" class="contain-check-bnt">
                    <input type="checkbox" id="check-remem" />
                    <span id="text-notify">Nhớ mật khẩu </span>
                    <a href="#" class="forgot-pass">Quên mật khẩu</a>
                  </label>
                </div>

                <div class="item-form">
                  <button id="btn-submit-log">Đăng Nhập</button>
                </div>
                <p class="go-log">
                  Để Nhận Ưu Đãi Hấp Dẫn,<a href="#"> Đăng Ký Thành Viên</a>.
                </p>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Đăng kí -->
    <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <div class="title-form">
              <h4>Tạo Tài Khoản</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close" id="close-popup-sign-up">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
          </div>
          <div class="modal-body">
            <div class="form-acc">
              <form action="#" id="myform" method="GET">
                <div class="item-form">
                  <p class="title-part">Thông tin tài khoản</p>
                </div>

                <div class="item-form">
                  <i class="fas fa-envelope"></i>
                  <input name="email" id="email" placeholder="Nhập email" />
                </div>
                <div class="item-form">
                  <i class="fas fa-lock"></i>
                  <input type="password" name="password" id="password" placeholder="Nhập mật khẩu" />
                  <i class="fas fa-eye pass-icon" id="show-pass"></i>
                  <i class="fas fa-eye-slash pass-icon" id="hide-pass" style="display: none"></i>
                </div>
                <div class="item-form">
                  <i class="fas fa-lock"></i>
                  <input type="password" name="re-password" id="re-password" placeholder="Xác nhận mật khẩu" />
                </div>

                <div class="item-form">
                  <p class="title-part" style="padding-top: 30px">
                    Thông tin người dùng
                  </p>
                </div>
                <div class="item-form">
                  <i class="fas fa-user"></i>
                  <input type="text" name="name-user" id="name-user" placeholder="Nhập tên người dùng" />
                </div>
                <div class="item-form">
                  <i class="fas fa-phone"></i>
                  <input type="text" name="phonenumber" id="phonenumber" placeholder="Nhập số điện thoại" />
                </div>
                <div class="item-form">
                  <i class="fas fa-map-marker-alt special-i"></i>
                  <textarea cols="30" rows="5" placeholder="Nhập địa chỉ" name="address" id="address"></textarea>
                </div>

                <div class="item-form">
                  <label for="check-notify" id="container-check-bnt" class="contain-check-bnt">
                    <input type="checkbox" name="check-notify" id="check-notify" />
                    <span id="text-notify-sign-up">Tôi đã đọc và đồng ý với
                      <a href="#" target="_blank">Điều khoản sử dụng</a>
                    </span>
                  </label>
                </div>
                <p class="go-log">
                  Nếu Bạn Có Tài Khoản,Vui Lòng <a href="#">Đăng Nhập</a>.
                </p>
                <div class="item-form">
                  <button id="btn-submit-sign-up" type="button">
                    Tạo Tài Khoản
                  </button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
  <nav>
    <div class="container-nav">
      <div class="menu-web">
        <ul class="menu-nav">
          <li class="item-menu-nav"><a href="">Home</a></li>
          <li class="item-menu-nav"><a href="">Store</a></li>
          <li class="item-menu-nav"><a href="">Contact</a></li>
        </ul>
      </div>
      <div class="search">
        <input type="text" placeholder="Tìm kiếm sản phẩm...." />
        <button><i class="fas fa-search"></i></button>
      </div>
    </div>
  </nav>
  <main>
    <div class="container-main">
      <div class="adv">
        <marquee>Hoc HTML tai VietJack - Vi du cach su dung the marquee.</marquee>
      </div>
      <div class="left-main">
        <div class="container-left">
          <div class="title-left">
            <h2>BỘ LỌC TÌM KIẾM</h2>
          </div>
          <div class="menu-left-cover">
            <ul class="menu-left">
              <?php foreach ($dulieu_category as $key => $value) : ?>
                <li>
                  <label id="" class="">
                    <input type="checkbox" name="" id="" />
                    <span id=""><?= $value['CategoryName'] ?></span>
                  </label>
                </li>
              <?php endforeach ?>
            </ul>
          </div>
        </div>
      </div>
      <div class="right-main">
        <div class="container-right">
          <?php foreach ($dulieu_pro as $key => $value) : ?>
            <div class="product-item">
              <a href="<?= base_url() ?>index.php/indexPro/indexEdit/<?= $value['idProduct']?>">
                  <div class="img-product">
                  <img src="<?php echo base_url(); ?>resource/imgs/products/<?= $value['Image'] ?>" alt="" />
                  </div>
                  <div class="info-product">
                    <h5 class="name-product">
                      <?= $value['ProductName'] ?>
                    </h5>
                    <p class="price-product"><?= $value['Price'] ?></p>
                  </div>
              </a>
            </div>
          <?php endforeach ?>

        </div>
      </div>
    </div>
  </main>
  <footer>
    <div class="container-footer">
      <p>
        Copyright ©2020 All rights reserved | This template is made with
        <i class="far fa-heart"></i> by <span>QUANG MƯỜI NGÓN</span>
      </p>
    </div>
  </footer>
  <script>
    // $(document).ready(function () {
    //   console.log($(".price-product").text());
    //   $(".price-product").text(
    //     new Intl.NumberFormat("de-DE", {
    //       style: "currency",
    //       currency: "VND",
    //     }).format($(".price-product").text())
    //   );
    // });
  </script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>

</html>