<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <![endif]-->
<html>
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Index</title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>resource/css/reset.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>resource/css/show-product.css" />

    <!-- Font -->
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"
    />
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
      href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700&display=swap"
      rel="stylesheet"
    />
  </head>
  <body>
    <!--[if lt IE 7]>
      <p class="browsehappy">
        You are using an <strong>outdated</strong> browser. Please
        <a href="#">upgrade your browser</a> to improve your experience.
      </p>
    <![endif]-->

    <main>
      <div class="container-main">
        <?php foreach ($dulieukq as $value): ?>
        <div class="show-product">
          <div class="img-pro">
            <img src="<?php echo base_url(); ?>resource/imgs/products/<?= $value['Image'] ?>" alt="" />
          </div>
          <div class="info-product">
            <h1><?= $value['ProductName'] ?></h1>
            <p><?= $value['Price'] ?></p>
            <p><?= $value['Amount'] ?></p>
            <p><?= $value['Distributor'] ?></p>
             
              <a href="<?= base_url() ?>cart/indexCart/<?= $value['idProduct']?>">
                <i class="fas fa-cart-plus"></i>&ensp;Thêm Vào Giỏ Hàng
              </a>
          </div>
          <div class="describe">
            <h5>mô tả</h5>
            <p>
              <?= $value['Description'] ?>
            </p>
          </div>
          <div class="clip">
            <iframe
              width="100%"
              height="500"
              src="https://www.youtube.com/embed/CS_J1WFi-Wk"
              title="YouTube video player"
              frameborder="0"
              allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
              allowfullscreen
            ></iframe>
          </div>
        </div>
         <?php endforeach ?>
      </div>
    </main>

    <section class="same-product">
      <div class="container-same-product">
        <div class="hot-item">
          <div class="title-section">
            <h3>sản phẩm nổi bật</h3>
          </div>
          <div class="grid-view-item">
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
    </section>

    <script src="" async defer></script>
  </body>
</html>
