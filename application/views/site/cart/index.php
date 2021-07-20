<h2>Thông tin giỏ hàng</h2>
<form action="<?= base_url() ?>cart/update/?>" method="post" accept-charset="utf-8" enctype="multipart/form-data">
  <div class="container-main">
    <div class="left-main">
      <div class="title-cart">
        <div class="product-name">
          <label for=""> Sản phẩm </label>
        </div>
        <div class="product-price">
          <p>Giá</p>
        </div>
        <div class="product-quantity">
          <p>Số lượng</p>
        </div>
        <div class="product-amount">
          <p>Số tiền</p>
        </div>
        <div class="action">
          <p>Thao tác</p>
        </div>
      </div>
      <div class="list-product">
        <?php $total_amount = 0; ?>
        <?php foreach ($carts as $value) : ?>
          <?php $total_amount = $total_amount + $value['subtotal']; ?>
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
              <p class="price-product"><?php echo $value['price']; ?></p>
            </div>
            <div class="product-quantity">
              <button class="plus-pro"><i class="fas fa-plus"></i></button><input type="text" onkeypress="isInputNumber(event)" value="<?php echo $value['qty']; ?>" name="qty_<?php echo $value['id'] ?>" class="quantity-input" readonly="true" size="5" />
              <button class="subtract-pro">
                <i class="fas fa-minus"></i>
              </button>
            </div>
            <div class="product-amount">
              <p class="product-amount-p price-product" ><?php echo $value['subtotal']; ?></p>
            </div>
            <div class="action">
              <a href="<?= base_url() ?>cart/del/<?= $value['id'] ?>"> <button class="delete-pro">Xóa</button></a>
            </div>
          </div>
        <?php endforeach ?>

        <a href="<?= base_url() ?>cart/del/?>" id="delete-all-cart">Xóa toàn bộ</a>


      </div>
    </div>
    <div class="right-main">
      <div class="box-amount-all-pro">
        <div class="all-product">
          <h5>Tổng sản phẩm:</h5>
          <span><?php echo $total_items ?></span>
        </div>
        <div class="all-money-product">
          <h5>Tạm tính:</h5>
          <span><?php echo number_format($total_amount) ?></span>
        </div>
        <a href="<?= base_url() ?>order/checkout/?" id="btn-buy">Mua hàng</a>
      </div>
    </div>

  </div>
</form>

<script>
  let x = document.querySelectorAll(".price-product");
  for (let i = 0, len = x.length; i < len; i++) {
    let num = Number(x[i].innerHTML).toLocaleString("en");
    x[i].innerHTML = num;
    x[i].classList.add("currSign");
  }
</script>