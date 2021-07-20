<div class="container-main">
  <div class="info-customer">
    <div class="title">
      <h1>Địa Chỉ Nhận Hàng</h1>
    </div>
    <div class="customer-address">
      <p><?php echo  $user_info->CustomerName  ?></p>
      <p><?php echo  $user_info->Phone  ?></p>
      <p id="address-cus">
        <?php echo  $user_info->Address  ?>
      </p>
      <button type="button" class="btn-fix-address" data-toggle="modal" data-target="#myModal">
        Sửa
      </button>

      <!-- Modal -->
      <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog modal-sm">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close close-popup" data-dismiss="modal">
                &times;
              </button>
              <h4 class="modal-title">Thông tin địa chỉ mới</h4>
            </div>
            <div class="modal-body">
              <form>
                <div class="form-group">
                  <label for="message-text" class="col-form-label">Địa chỉ:</label>
                  <textarea class="form-control" id="message-text"></textarea>
                </div>
              </form>
            </div>

            <div class="modal-footer">
              <button type="button" class="btn btn-secondary close-popup" data-dismiss="modal">
                Đóng
              </button>
              <button type="button" class="btn btn-primary" id="btn-update-address">
                Thay đổi
              </button>
            </div>
          </div>
        </div>
      </div>

      <script>
        $(document).ready(function() {
          $("#btn-update-address").click(function(e) {
            let get_address = $("#message-text").val();
            if (get_address.length > 10 && get_address.length < 70) {
              $("#address-cus").text(get_address);
              $(".close").click();
              $("#message-text").val("");
              $("#address").val(get_address);
            }
          });

          $(".close-popup").click(function(e) {
            $("#message-text").val("");
          });
        });
      </script>
    </div>
  </div>
  <div class="cart-product">
    <div class="header-cart">
      <div class="product-name">
        <label for=""> Sản phẩm </label>
      </div>
      <div class="product-price">
        <p>Đơn Giá</p>
      </div>
      <div class="product-quantity">
        <p>Số lượng</p>
      </div>
      <div class="product-amount">
        <p>Thành tiền</p>
      </div>
    </div>
  </div>

  <div class="list-ofCart">
    <!-- <div class="item-product">
      <div class="product-name list-name-img">
        <div class="product-img">
          <img src="imgs/find_user.png" alt="" />
        </div>
        <label for="">
          Occaecati omnis dolorem placeat quaerat aut quae ea architecto.
          Deleniti harum expedita cumque eligendi dolore et molestiae
          dolorum sit. Quia autem aut provident minus minima. Nulla id qui
          provident. Facere et velit aut deserunt voluptas officia
          delectus sint animi. Doloribus omnis qui rerum reprehenderit qui
          dignissimos quidem omnis illo.
        </label>
      </div>
      <div class="product-price">
        <p>69000</p>
      </div>
      <div class="product-quantity">
        <p>3</p>
      </div>
      <div class="product-amount">
        <p class="product-amount-p"></p>
      </div>
    </div> -->
    <?php foreach ($carts as $value) : ?>
      <div class="item-product">
        <div class="product-name list-name-img">
          <div class="product-img">
            <img src="<?php echo products_url() ?><?php echo $value['image'] ?>" />
          </div>
          <label for="">
            <?= $value['name'] ?>
          </label>
        </div>
        <div class="product-price">
          <p><?php echo $value['price']; ?></p>
        </div>
        <div class="product-quantity">
          <p><?php echo $value['qty']; ?></p>
        </div>
        <div class="product-amount">
          <p class="product-amount-p"><?php echo $value['subtotal']; ?></p>
        </div>
      </div>
    <?php endforeach ?>
  </div>
  <div class="payment">
    <div class="tilte-payment">
      <h3>Phương Thức Thanh Toán</h3>
    </div>
    <div class="choose-payment">
      <div class="radio">
        <label><input value="0" type="radio" name="optradio" /><i class="fas fa-truck"></i>
          Thanh toán trực tiếp</label>
      </div>
      <div class="radio">
        <label><input value="1" type="radio" name="optradio" /><i class="fab fa-cc-paypal"></i>
          Thanh toán online</label>
      </div>
    </div>
  </div>
  <div class="bill">
    <div class="detail-bill">
      <!-- <p>Tổng tiền hàng: <span class="money-buy"></span> đ</p> -->
      <p class="total">
        Tổng thanh toán: <span class="money-all"><?php echo number_format($total_amount) ?> đ</span>
      </p>
    </div>
    <div id="buy-it">
      <form method="post" action="<?php echo site_url('order/checkout') ?>" enctype="multipart/form-data" style="text-align: right;">
        <input type="text" id="address" name="address" value="" class="hidden"/>
        <input type="text" id="payment" name="payment" value="" class="hidden"/>
        <script>
          $(function() {
            let address_cus = $("#address-cus").text().trim();
            $("#address").val(address_cus);
          });
        </script>
        <input type="submit" class="btn btn-primary disabled" value="Thanh toán" name="submit" id="btn-checkout">
        <!-- <button type="submit" class="btn btn-primary disabled">Mua hàng</button> -->
      </form>
    </div>
  </div>
</div>