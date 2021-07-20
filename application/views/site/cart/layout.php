<!DOCTYPE html>
<html>

<head>

  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Giỏ hàng</title>
  <link rel="shortcut icon" type="image/png" href="<?php echo base_url(); ?>resource/imgs/logo-quangdz.png" />
  <!-- Font, Icon -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" />
  <link rel="stylesheet" href="https://unpkg.com/flickity@2.2.2/dist/flickity.min.css" />
  <script src="https://unpkg.com/flickity@2.2.2/dist/flickity.pkgd.min.js"></script>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
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
  <link rel="stylesheet" href="<?php echo base_url(); ?>resource/css/cart/cart.css" />
  <link rel="stylesheet" href="<?php echo base_url(); ?>resource/css/cart/header-cart.css" />
  <script>
    function isInputNumber(evt) {
      var char = String.fromCharCode(evt.which);
      if (!/[0-9]/.test(char)) {
        evt.preventDefault();
      }
    }
    $(document).ready(function() {
      let curren;
      let inside;

      $(".plus-pro").click(function(e) {
        curren = $(this);
        inside = curren.closest(".product-quantity").find(".quantity-input");
        let amount = curren
          .closest(".item-product")
          .find(".product-amount")
          .children();
        let get_price = curren
          .closest(".item-product")
          .find(".product-price")
          .children()
          .text();
        let get_value = $(inside).val();

        get_value++;
        $(amount).text(get_price * get_value);
        $(inside).val(get_value);
        Total();
      });
      $(".subtract-pro").click(function(e) {
        curren = $(this);
        inside = curren.closest(".product-quantity").find(".quantity-input");
        let amount = curren
          .closest(".item-product")
          .find(".product-amount")
          .children();
        let get_price = curren
          .closest(".item-product")
          .find(".product-price")
          .children()
          .text();
        let get_value = $(inside).val();

        if (get_value > 0) {
          get_value--;
          $(amount).text(get_price * get_value);
          $(inside).val(get_value);
          Total();
        }
      });
      $(".delete-pro").click(function(e) {
        curren = $(this);
        inside = curren.closest(".item-product");
        var r = confirm("Bạn có muốn xóa chứ!");
        if (r == true) {
          inside.remove();
        }
      });


      function Total() {
        let total_pro = 0;
        let money = 0;

        total_pro = +total_pro +
          +$(this)
          .closest(".item-product")
          .find(".product-quantity")
          .find(".quantity-input")
          .val();
        money = +money +
          +$(this)
          .closest(".item-product")
          .find(".product-amount")
          .find(".product-amount-p")
          .text();

        $(".all-product span").text(total_pro);
        $(".all-money-product span").text(money);
      }
    });
  </script>
</head>

<body>
  <?php $this->load->view('site/cart/header-cart'); ?>
  <main>
    <?php $this->load->view($temp, $this->data); ?>
  </main>
  <?php $this->load->view('site/footer'); ?>
</body>

</html>