<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html>

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <title></title>
  <meta name="description" content="" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <!-- Font -->
  <link rel="preconnect" href="https://fonts.gstatic.com" />
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" />

  <!-- CSS -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>resource/css/reset.css" />
  <link rel="stylesheet" href="<?php echo base_url(); ?>resource/css/account-customer.css" />

  <!-- Jquery -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

  <!-- JS -->
  <script src="<?php echo base_url(); ?>resource/js/account-customer.js"></script>
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
      <div class="title">
        <h3>Hồ Sơ Của Tôi</h3>
        <p>Quản lý thông tin hồ sơ để bảo mật tài khoản</p>
      </div>
      <div class="form-customer">
        <?php foreach ($dulieukq as $key => $value) : ?>
          <form action="home.html" id="myform" method="GET">
            <div class="left-main">
              <div class="item-form">
                <label for="">Tên</label>
                <input type="text" id="name" value="<?= $value['CustomerName'] ?>" />
              </div>
              <div class="item-form">
                <label for="">Email</label>
                <label for="" class="email"><?= $value['email'] ?></label>
              </div>
              <div class="item-form">
                <label for="">SDT</label>
                <input type="text" id="phone" value="<?= $value['Phone'] ?>" />
              </div>
              <div class="item-form">
                <label for="" class="title-radio">
                  <span>Giới tính</span>
                </label>
                <div class="container-bnt">
                  <label for="a" class="contain-radio-bnt">
                    <input type="radio" name="type-acc" id="a" checked />
                    <span>Nam</span>
                  </label>
                  <label for="b" class="contain-radio-bnt">
                    <input type="radio" name="type-acc" id="b" />
                    <span>Nữ</span>
                  </label>
                </div>
              </div>
              <div class="item-form date-select">
                <label for="">Ngày Sinh</label>
                <div class="contain-select">
                  <select name="day" id="day"></select>
                  <select name="month" id="month"></select>
                  <select name="year" id="year"></select>
                </div>
                <label for="" id="error-date">Ngày không hợp lệ, vui lòng chỉnh ngày chính xác</label>
              </div>
              <div class="item-form">
                <label for="">Địa chỉ</label>
                <div class="contain-select">
                  <select name="ward" id="ward"></select>
                  <select name="district" id="district"></select>
                  <select name="province" id="province"></select>
                </div>
              </div>
              <div class="item-form btn">
                <button type="button" id="btn-submit">Submit</button>
              </div>
            </div>
            <div class="right-main">
              <div class="profile-images">
                <img src="<?= $value['image'] ?>" id="upload-img" />
              </div>
              <div class="custom-file">
                <label for="fileupload">Upload Avatar</label>
                <input type="file" id="fileupload" />
              </div>
              <div class="notifi">
                <label for="">Dụng lượng file tối đa 1 MB Định dạng:.JPEG, .PNG</label>
              </div>
            </div>
          </form>
        <?php endforeach ?>
      </div>
    </div>
  </main>

  <script></script>
  <script src="" async defer></script>
</body>

</html>