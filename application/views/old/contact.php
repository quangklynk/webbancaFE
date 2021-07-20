<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html>
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Contact</title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="" />

    <!-- Font -->
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"
    />

    <!-- bootstrap -->
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"
    />
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.2.1.min.js"></script>

    <!-- Google Fonts -->
    <link
      href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
      rel="stylesheet"
    />
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="imgs/icons/favicon.ico" />
    <!--===============================================================================================-->
    <link
      rel="stylesheet"
      type="text/css"
      href="vendor/bootstrap/css/bootstrap.min.css"
    />
    <!--===============================================================================================-->
    <link
      rel="stylesheet"
      type="text/css"
      href="fonts/font-awesome-4.7.0/css/font-awesome.min.css"
    />
    <!--===============================================================================================-->
    <link
      rel="stylesheet"
      type="text/css"
      href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css"
    />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css" />
    <!--===============================================================================================-->
    <link
      rel="stylesheet"
      type="text/css"
      href="vendor/css-hamburgers/hamburgers.min.css"
    />
    <!--===============================================================================================-->
    <link
      rel="stylesheet"
      type="text/css"
      href="vendor/animsition/css/animsition.min.css"
    />
    <!--===============================================================================================-->
    <link
      rel="stylesheet"
      type="text/css"
      href="vendor/select2/select2.min.css"
    />
    <!--===============================================================================================-->
    <link
      rel="stylesheet"
      type="text/css"
      href="vendor/daterangepicker/daterangepicker.css"
    />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="css/util.css" />
    <link rel="stylesheet" type="text/css" href="css/main.css" />
    <!--===============================================================================================-->

    <!-- CSS -->
    <link rel="stylesheet" href="css/reset.css" />
    <link rel="stylesheet" href="css/contact.css" />

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
  </head>
  <body>
    <!--[if lt IE 7]>
      <p class="browsehappy">
        You are using an <strong>outdated</strong> browser. Please
        <a href="#">upgrade your browser</a> to improve your experience.
      </p>
    <![endif]-->

    <header onload="">
      <div
        class="container-header"
        style="background-image: url('imgs/banner-header.png')"
      >
        <div class="content-header">
          <div class="logo">
            <img src="imgs/logo-bg-white.png" alt="logo" />
          </div>
          <h1>
            Cá sạch, Cá ngon, Cá tươi, Cá real
            <div class="heart">100%</div>
            không fake!!
          </h1>
        </div>
      </div>
    </header>

    <nav>
      <div class="container-nav">
        <div class="menu-web">
          <ul class="menu-nav">
            <li class="item-menu-nav grow"><a href="home.html">Home</a></li>
            <li class="item-menu-nav grow"><a href="">Store</a></li>
            <li class="item-menu-nav grow"><a href="">Contact</a></li>
          </ul>
        </div>
        <div class="search">
          <input type="text" placeholder="Tìm kiếm sản phẩm...." />
          <button><i class="fas fa-search zoom-out"></i></button>
        </div>
      </div>
    </nav>

    <main>
      <div class="container-main">
        <div class="title-contact">
          <h2>Liên hệ</h2>
        </div>
        <div id="map">
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3917.0330109816987!2d106.78861441433236!3d10.960878992196518!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3174dbdf20151cb9%3A0xaa30f651ebd39e29!2zS2h1IGR1IGzhu4tjaCBC4butdSBMb25n!5e0!3m2!1svi!2s!4v1617075139467!5m2!1svi!2s"
            frameborder="0"
            style="border: 0"
            width="100%"
            height="500px"
            allowfullscreen
          ></iframe>
        </div>
        <div class="container-contact100">
          <div class="wrap-contact100">
            <form class="contact100-form validate-form">
              <span class="contact100-form-title"> Send Us A Message </span>

              <label class="label-input100" for="first-name"
                >Tell us your name *</label
              >
              <div
                class="wrap-input100 rs1-wrap-input100 validate-input"
                data-validate="Type first name"
              >
                <input
                  id="first-name"
                  class="input100"
                  type="text"
                  name="first-name"
                  placeholder="First name"
                />
                <span class="focus-input100"></span>
              </div>
              <div
                class="wrap-input100 rs2-wrap-input100 validate-input"
                data-validate="Type last name"
              >
                <input
                  class="input100"
                  type="text"
                  name="last-name"
                  placeholder="Last name"
                />
                <span class="focus-input100"></span>
              </div>

              <label class="label-input100" for="email"
                >Enter your email *</label
              >
              <div
                class="wrap-input100 validate-input"
                data-validate="Valid email is required: ex@abc.xyz"
              >
                <input
                  id="email"
                  class="input100"
                  type="text"
                  name="email"
                  placeholder="Eg. example@email.com"
                />
                <span class="focus-input100"></span>
              </div>

              <label class="label-input100" for="phone"
                >Enter phone number</label
              >
              <div class="wrap-input100">
                <input
                  id="phone"
                  class="input100"
                  type="text"
                  name="phone"
                  placeholder="Eg. +1 800 000000"
                />
                <span class="focus-input100"></span>
              </div>

              <label class="label-input100" for="message">Message *</label>
              <div
                class="wrap-input100 validate-input"
                data-validate="Message is required"
              >
                <textarea
                  id="message"
                  class="input100"
                  name="message"
                  placeholder="Write us a message"
                ></textarea>
                <span class="focus-input100"></span>
              </div>

              <div class="container-contact100-form-btn">
                <button class="contact100-form-btn">Send Message</button>
              </div>
            </form>

            <div
              class="contact100-more flex-col-c-m"
              style="background-image: url('imgs/bg-01.jpg')"
            >
              <div class="flex-w size1 p-b-47">
                <div class="txt1 p-r-25">
                  <span class="lnr lnr-map-marker"></span>
                </div>

                <div class="flex-col size2">
                  <span class="txt1 p-b-20"> Address </span>

                  <span class="txt2">
                    Mada Center 8th floor, 379 Hudson St, New York, NY 10018 US
                  </span>
                </div>
              </div>

              <div class="dis-flex size1 p-b-47">
                <div class="txt1 p-r-25">
                  <span class="lnr lnr-phone-handset"></span>
                </div>

                <div class="flex-col size2">
                  <span class="txt1 p-b-20"> Lets Talk </span>

                  <span class="txt3"> +1 800 1236879 </span>
                </div>
              </div>

              <div class="dis-flex size1 p-b-47">
                <div class="txt1 p-r-25">
                  <span class="lnr lnr-envelope"></span>
                </div>

                <div class="flex-col size2">
                  <span class="txt1 p-b-20"> General Support </span>

                  <span class="txt3"> contact@example.com </span>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div id="dropDownSelect1"></div>
      </div>
    </main>

    <section class="info-service-web">
      <div class="container-info-service">
        <div class="about-web">
          <div class="title-service">
            <h4>về chúng tôi</h4>
          </div>
          <div class="content">
            <h5>CÔNG TY CP XNK HẢI SẢN QUANG 10 NGÓN</h5>
            <p>Văn phòng : 43 Lê Thị Hồng, P 17, Quận Gò Vấp, TPHCM</p>
            <p>ĐT : (028) 62 717 888</p>
            <p>Websites : <a href="">choca.com</a></p>
          </div>
        </div>
        <div class="info-web">
          <div class="title-service">
            <h4>thông tin</h4>
          </div>
          <div class="content">
            <a href="">CHÍNH SÁCH BẢO MẬT THÔNG TIN </a>
            <a href="">CHÍNH SÁCH CHUNG</a>
            <a href="">THÀNH VIÊN THÀNH LẬP</a>
          </div>
        </div>
        <div class="contact-web">
          <div class="title-service">
            <h4>liên hệ</h4>
          </div>
          <div class="content"></div>
        </div>
      </div>
    </section>

    <footer>
      <div class="container-footer">
        <p>
          Copyright ©2021 All rights reserved | This template is made with
          <i class="far fa-heart"></i> by <span>QUANG MƯỜI NGÓN</span>
        </p>
      </div>
    </footer>
    <script src="" async defer></script>
  </body>
  <!--===============================================================================================-->
  <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
  <!--===============================================================================================-->
  <script src="vendor/animsition/js/animsition.min.js"></script>
  <!--===============================================================================================-->
  <script src="vendor/bootstrap/js/popper.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
  <!--===============================================================================================-->
  <script src="vendor/select2/select2.min.js"></script>
  <script>
    $(".selection-2").select2({
      minimumResultsForSearch: 20,
      dropdownParent: $("#dropDownSelect1"),
    });
  </script>
  <!--===============================================================================================-->
  <script src="vendor/daterangepicker/moment.min.js"></script>
  <script src="vendor/daterangepicker/daterangepicker.js"></script>
  <!--===============================================================================================-->
  <script src="vendor/countdowntime/countdowntime.js"></script>
  <!--===============================================================================================-->
  <script src="js/main.js"></script>
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script
    async
    src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"
  ></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag() {
      dataLayer.push(arguments);
    }
    gtag("js", new Date());

    gtag("config", "UA-23581568-13");
  </script>
</html>
