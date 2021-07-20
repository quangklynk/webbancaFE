<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home</title>

    <!-- Font, Icon -->
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"
    />
    <link
      rel="stylesheet"
      href="https://unpkg.com/flickity@2.2.2/dist/flickity.min.css"
    />
    <script src="https://unpkg.com/flickity@2.2.2/dist/flickity.pkgd.min.js"></script>
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
      rel="stylesheet"
    />
    <!-- CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>resource/css/reset.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>resource/css/home.css" />
    <style>
      .heart {
        display: inline-block;
        font-size: 50px;
        color: rgb(248, 252, 54);
        animation: beat 0.25s infinite alternate;
        transform-origin: center;
      }

      /* Heart beat animation */
      @keyframes beat {
        to {
          transform: scale(1.5);
        }
      }
    </style>

    <!-- JS -->
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.2.1.min.js"></script>
  </head>
  <body>
    <!-- gọi file header vào -->
  <?php require('header.php')?> 
    <nav>
      <div class="container-nav">
        <div class="menu-web">
          <ul class="menu-nav">
            <li class="item-menu-nav grow"><a href="">Home</a></li>
            <li class="item-menu-nav grow"><a href="indexPro">Store</a></li>
            <li class="item-menu-nav grow"><a href="">Contact</a></li>
          </ul>
        </div>
        <div class="search">
          <input type="text" placeholder="Tìm kiếm sản phẩm...." />
          <button><i class="fas fa-search zoom-out"></i></button>
        </div>
      </div>
    </nav>

    <main style="padding: 25px 0px">
      <div class="container-main">
        <div class="slider-menu">
          <div
            class="carousel"
            data-flickity='{ "autoPlay": 1500, "pauseAutoPlayOnHover": false, "wrapAround": true }'
          >
            <div class="carousel-cell">
              <img
                src="imgs/122856193_2670201973293411_1489224707025006009_o.jpg"
                alt=""
              />
            </div>
            <div class="carousel-cell">
              <img
                src="imgs/82499380_197290774742639_928907860262256640_o.jpg"
                alt=""
              />
            </div>
            <div class="carousel-cell">
              <img src="imgs/logo-quangdz.png" alt="" />
            </div>
            <div class="carousel-cell">
              <img src="imgs/banner-header.png" alt="" />
            </div>
            <div class="carousel-cell">
              <img src="imgs/find_user.png" alt="" />
            </div>
          </div>
        </div>
        <div class="new-item">
          <div class="title-section">
            <h3>sản phẩm mới</h3>
          </div>
          <div class="grid-view-item">
            <div class="grid-item item-represent">
              <img src="imgs/1.png" alt="" />
              <h5>Tôm hùm</h5>
              <p>2000</p>
            </div>
            <div class="grid-item">
              <img src="imgs/1.png" alt="" />
            </div>
            <div class="grid-item">
              <img src="imgs/1.png" alt="" />
            </div>
            <div class="grid-item">
              <img src="imgs/1.png" alt="" />
            </div>
            <div class="grid-item">
              <img src="imgs/1.png" alt="" />
            </div>
            <div class="grid-item">
              <img src="imgs/1.png" alt="" />
            </div>
            <div class="grid-item">
              <img src="imgs/1.png" alt="" />
            </div>
            <div class="grid-item">
              <img src="imgs/1.png" alt="" />
            </div>
            <div class="grid-item">
              <img src="imgs/1.png" alt="" />
            </div>
          </div>
        </div>
        <div class="hot-item">
          <div class="title-section">
            <h3>sản phẩm nổi bật</h3>
          </div>
          <div class="grid-view-item">
            <div class="grid-item">
              <img src="imgs/1.png" alt="" />
              <h5>Tôm hùm</h5>
              <p>2000</p>
            </div>
            <div class="grid-item">
              <img src="imgs/1.png" alt="" />
            </div>
            <div class="grid-item">
              <img src="imgs/1.png" alt="" />
            </div>
            <div class="grid-item">
              <img src="imgs/1.png" alt="" />
            </div>
            <div class="grid-item">
              <img src="imgs/1.png" alt="" />
            </div>
            <div class="grid-item">
              <img src="imgs/1.png" alt="" />
            </div>
            <div class="grid-item">
              <img src="imgs/1.png" alt="" />
            </div>
            <div class="grid-item">
              <img src="imgs/1.png" alt="" />
            </div>
            <div class="grid-item">
              <img src="imgs/1.png" alt="" />
            </div>
          </div>
        </div>
      </div>
    </main>

    <section class="service">
      <div class="service-section">
        <div class="service-item">
          <div class="icon-service" style="width: 22%">
            <img src="imgs/deliveryu.png" alt="" />
          </div>
          <p>
            <span>CAM KẾT CHẤT LƯỢNG </span>Cam kết hải sản tươi sống, sạch
            100%, đánh bắt tự nhiên, không hóa chất bảo quản...
          </p>
        </div>
        <div class="service-item">
          <div class="icon-service">
            <img src="imgs/icon-service.png" alt="" />
          </div>
          <p>
            <span>DỊCH VỤ CHU ĐÁO </span>Chúng tôi quan tâm đến bạn mọi lúc mọi
            nơi hãy gọi cho chúng tôi khi bạn cần tư vấn hoặc có bất kỳ thắc mắc
            nào đó
          </p>
        </div>
        <div class="service-item">
          <div class="icon-service"><img src="imgs/SEDFSDFS.jpg" alt="" /></div>
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
            <li><img src="imgs/logo-contact/nikko.jpg" alt="" /></li>
            <li><img src="imgs/logo-contact/novotel.jpg" alt="" /></li>
            <li><img src="imgs/logo-contact/shangri.jpg" alt="" /></li>
            <li><img src="imgs/logo-contact/sheraton.jpg" alt="" /></li>
            <li><img src="imgs/logo-contact/sofitel.jpg" alt="" /></li>
            <li><img src="imgs/logo-contact/vietseafoods.jpg" alt="" /></li>
            <li><img src="imgs/logo-contact/vinpearl.jpg" alt="" /></li>
            <li><img src="imgs/logo-contact/winso.jpg" alt="" /></li>
          </ul>
        </div>
      </div>
    </section>

    <?php require('footer.php')?> 
  </body>
</html>
