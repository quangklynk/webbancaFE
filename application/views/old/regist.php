   <!-- Đăng kí -->
      <div
        class="modal fade"
        id="exampleModal1"
        tabindex="-1"
        role="dialog"
        aria-labelledby="exampleModalLabel"
        aria-hidden="true"
      >
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <div class="title-form">
                <h4>Tạo Tài Khoản</h4>
                <button
                  type="button"
                  class="close"
                  data-dismiss="modal"
                  aria-label="Close"
                  id="close-popup-sign-up"
                >
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
            </div>
            <div class="modal-body">
              <div class="form-acc">
                <form action="<?= base_url() ?>indexData/account_add/" id="myform" method="POST" enctype="multipart/form-data">>
                  <div class="item-form">
                    <p class="title-part">Thông tin tài khoản</p>
                  </div>

                  <div class="item-form">
                    <i class="fas fa-envelope"></i>
                    <input name="email" id="email" placeholder="Nhập email" />
                  </div>
                  <div class="item-form">
                    <i class="fas fa-lock"></i>
                    <input
                      type="password"
                      name="password"
                      id="password"
                      placeholder="Nhập mật khẩu"
                    />
                    <i class="fas fa-eye pass-icon" id="show-pass"></i>
                    <i
                      class="fas fa-eye-slash pass-icon"
                      id="hide-pass"
                      style="display: none"
                    ></i>
                  </div>
                  <!-- <div class="item-form">
                    <i class="fas fa-lock"></i>
                    <input
                      type="password"
                      name="re-password"
                      id="re-password"
                      placeholder="Xác nhận mật khẩu"
                    />
                  </div> -->

                  <div class="item-form">
                    <p class="title-part" style="padding-top: 30px">
                      Thông tin người dùng
                    </p>
                  </div>
                  <div class="item-form">
                    <i class="fas fa-user"></i>
                    <input
                      type="text"
                      name="CustomerName"
                      id="name-user"
                      placeholder="Nhập tên người dùng"
                    />
                  </div>
                  <div class="item-form">
                    <i class="fas fa-phone"></i>
                    <input
                      type="text"
                      name="Phone"
                      id="phonenumber"
                      placeholder="Nhập số điện thoại"
                    />
                  </div>
                  <div class="item-form">
                    <i class="fas fa-map-marker-alt special-i"></i>
                    <textarea
                      cols="30"
                      rows="5"
                      placeholder="Nhập địa chỉ"
                      name="address"
                      id="address"
                    ></textarea>
                  </div>
                   <div class="item-form">
                    <div class="account_image">
                       <input name="image" id="image" type="file" class="form-control"  placeholder="upload anh"/>
                    </div>
                  </div>
                  <div class="item-form">
                    <label
                      for="check-notify"
                      id="container-check-bnt"
                      class="contain-check-bnt"
                    >
                      <input
                        type="checkbox"
                        name="check-notify"
                        id="check-notify"
                      />
                      <span id="text-notify-sign-up"
                        >Tôi đã đọc và đồng ý với
                        <a href="#" target="_blank">Điều khoản sử dụng</a>
                      </span>
                    </label>
                  </div>
                  <p class="go-log">
                    Nếu Bạn Có Tài Khoản,Vui Lòng <a href="#">Đăng Nhập</a>.
                  </p>
                  <div class="item-form">
                    <button id="btn-submit-sign-up" type="submit">
                      Tạo Tài Khoản
                    </button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>