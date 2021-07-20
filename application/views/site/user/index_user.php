<main>
  <div class="container-main">
    <div class="left-main">
      <div class="title-left">

        <?php if ($user_info->image == NULL) : ?>
          <img src="<?php echo public_url() ?>/imgs/find_user.png" class="img-circle" alt="" />
        <?php else : ?>
          <img src="<?php echo public_url() ?>/imgs/user/<?= $user_info->image ?>" class="img-circle" alt="" />
        <?php endif; ?>

        <div class="content">
          <label for="">Tài khoản của</label>
          <p><?= $user_info->CustomerName ?></p>
        </div>
      </div>
      <ul class="nav nav-pills nav-stacked">
        <li class="active">
          <a data-toggle="pill" href="#container-info"><i class="far fa-id-card circle-icon"></i> Hồ Sơ Khách Hàng</a>
        </li>
        <li>
          <a data-toggle="pill" href="#container-password"><i class="fas fa-key circle-icon"></i> Đổi Mật Khẩu</a>
        </li>
        <li>
          <a data-toggle="pill" href="#container-order"><i class="far fa-file-alt circle-icon"></i> Đơn Mua</a>
        </li>
      </ul>
    </div>
    <div class="right-main tab-content">
      <section class="site-cus tab-pane fade in active" id="container-info">
        <div class="title">
          <h3>Hồ Sơ Của Tôi</h3>
          <p>Quản lý thông tin hồ sơ để bảo mật tài khoản</p>
        </div>
        <div class="form-customer">
          <form action="user/edit" id="info-customer" method="POST" enctype="multipart/form-data">
            <div class="left-main">
              <div class="item-form">
                <label for="">Tên</label>
                <input type="text" id="name" name="name" value="<?= $user_info->CustomerName ?>" />
              </div>
              <div class="item-form">
                <label for="">Email</label>
                <label for="" class="email"><?= $user_info->email ?></label>
                <input type="hidden" name="email" value="<?= $user_info->email ?>">
                <input type="hidden" name="id_user" value="<?= $user_info->id ?>">
              </div>
              <div class="item-form">
                <label for="">SDT</label>
                <input type="text" id="phone" name="phone" onkeypress="isInputNumber(event)" value="<?= $user_info->Phone ?>" />
              </div>
              <div class="item-form">
                <label id="address-label" for="">Địa chỉ</label>
                <textarea name="address" id="address" rows="5"><?= $user_info->Address ?></textarea>
              </div>
              <div class="item-form btn">
                <button type="button" id="btn-submit-info">
                  <i class="fas fa-wrench"></i> Chỉnh Sửa
                </button>
              </div>
            </div>
            <div class="right-main">
              <div class="profile-images">
                <?php if ($user_info->image == NULL) : ?>
                  <img src="<?php echo public_url() ?>/imgs/find_user.png" id="upload-img" />
                <?php else : ?>
                  <img src="<?php echo public_url() ?>/imgs/user/<?= $user_info->image ?>" id="upload-img" />
                <?php endif; ?>

              </div>
              <div class="custom-file">
                <label for="fileupload">Tải ảnh đại diện</label>
                <input type="file" id="fileupload" name="image" accept=".jpg, .png" />
              </div>
              <div class="notifi">
                <label for="">Định dạng:.JPG, .PNG</label>
              </div>
            </div>
          </form>
        </div>
      </section>
      <section class="site-cus tab-pane fade" id="container-password">
        <div class="title">
          <h3>Đổi Mật Khẩu</h3>
        </div>
        <div class="form-customer">
          <form action="user/change_pass" id="change-password" method="POST">
            <div class="item-form">
              <label for="">Mật Khẩu Cũ</label>
              <input type="password" id="current-password" name="current-password" />
            </div>
            <div class="item-form">
              <label for="">Mật Khẩu Mới</label>
              <input type="password" id="new-password" name="new-password" />
            </div>
            <div class="item-form">
              <label for="">Xác Nhận Mật Khẩu</label>
              <input type="password" id="re-password" name="re-password" />
            </div>
            <div class="item-form btn">
              <button type="button" id="btn-submit-pass">
                <i class="fas fa-screwdriver"></i> Đổi Mật Khẩu
              </button>
            </div>
          </form>
        </div>
      </section>
      <section class="site-cus tab-pane fade" id="container-order">
        <div class="list-order">
          <?php foreach ($user_order as $row) : ?>
            <div class="item-order">
              <div class="title-order">
                <p class="id-order">Mã đơn hàng: <span><?= $row->id ?></span></p>
                <div class="container-status">
                  <p class="date"><?= $row->OrderDate ?></p>
                  <div class="vl"></div>
                  <p class="status"><?= $row->name ?></p>
                </div>
              </div>
              <div class="detail-order">
                <?php foreach ($user_detailorder as $value) : ?>
                  <?php if ($row->id == $value->idOrder) : ?>
                    <div class="row-order">
                      <div class="content">
                        <img src="<?php echo products_url() ?><?= $value->Image ?>" alt="">
                        <div class="info-pro">
                          <p>
                            <?= $value->ProductName ?>
                          </p>
                          <span>x<?= $value->Amount ?></span>
                        </div>
                      </div>
                      <p class="price-pro"><?= $value->Price ?></p>
                    </div>
                  <?php endif ?>
                <?php endforeach ?>
              </div>
              <div class="total">
                <img src="<?php echo public_url() ?>/imgs/total-money.png" alt="" />
                <p>Tổng tiền: <span class="total-order"><?= $row->total ?></span></p>
              </div>
              <div class="action-order">
                <?php if ($row->name == "Hoàn Thành") : ?>
                  <?php if ($row->Vote == "NULL" || $row->Vote == "") : ?>
                    <button type="button" data-toggle="modal" data-target="#rating-modal" class="open-rating btn-info">Đánh giá</button>
                  <?php else : ?>
                    <button type="button" class="btn-success">Đã Đánh giá</button>
                  <?php endif; ?>
                <?php elseif ($row->name == "Đã Hủy") : ?>
                  <button class="btn-cancel">Đã Hủy</button>
                <?php elseif ($row->name == "Chờ Xác Nhận") : ?>
                  <button class="btn-cancle-order">Hủy Đơn Hàng</button>
                <?php endif; ?>
              </div>
            </div>
          <?php endforeach ?>
        </div>
        <script>
          $(document).ready(function() {
            let x = document.querySelectorAll(".price-pro, .total-order");
            for (let i = 0, len = x.length; i < len; i++) {
              let num = Number(x[i].innerHTML).toLocaleString("en");
              x[i].innerHTML = num;
              x[i].classList.add("currSign");
            }

            $(document).on('click', '.btn-cancle-order', function() {
              let check = confirm("Bán có chắc muốn hủy đơn hàng?");
              if (check) {
                let order_id = $(this).closest(".item-order").find(".title-order").find(".id-order").find("span").text().trim();
                $.ajax({
                  url: "<?php echo base_url(); ?>user/cancel_order",
                  method: "POST",
                  data: {
                    order_id: order_id,
                  },
                  dataType: "json",
                  success: function(data) {
                    alert(data);
                    document.location.reload();
                  }
                })
              }
            });
          });
        </script>
        <!-- Rating -->
        <div id="rating-modal" class="modal fade" role="dialog">
          <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-body">
                <form action="user/rating" method="post" id="rating-form">
                  <div class="form-group">
                    <label for="usr">Đánh giá của bạn:</label>
                    <p class="rating-start">
                      <input class="rating" id="value-rating" name="rating" />
                    </p>
                    <input type="hidden" name="idOrd" id="idOrd">
                  </div>
                  <div class="form-group contain-bnt-rating">
                    <button class="btn btn-info" id="sm-form-rating" type="button">
                      Xác Nhận
                    </button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">
                      Đóng
                    </button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
        <!-- end rating -->
        <script type="text/javascript">
          $(document).ready(function() {
            $(".rating").rating();
            $("#sm-form-rating").click(function(e) {
              if ($("#value-rating").val() == "") {
                alert("bạn chưa đánh giá");
              } else {
                $("#rating-form").submit();
              }
            });
            $(".open-rating").click(function(e) {
              let check = $(this).closest(".item-order").find(".id-order").find("span").text();
              $("#idOrd").val(check);
            });
          });
        </script>
      </section>
    </div>
  </div>
</main>