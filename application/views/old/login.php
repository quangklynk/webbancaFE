   <!-- Đăng nhập -->
      <div
        class="modal fade"
        id="exampleModal"
        tabindex="-1"
        role="dialog"
        aria-labelledby="exampleModalLabel"
        aria-hidden="true"
      >
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <div class="title-form">
                <h4>Đăng Nhập Thành Viên</h4>
                <button
                  type="button"
                  class="close"
                  data-dismiss="modal"
                  aria-label="Close"
                  id="close-popup"
                >
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
            </div>
            <div class="modal-body">
              <div class="form-acc">
                <form action="<?= base_url() ?>indexData/getLogin" id="myform-s" method="POST" enctype="multidata/form-data">
                  <div class="item-form">
                    <i class="fas fa-envelope"></i>
                    <input name="email" id="email-s" placeholder="Nhập email" />
                  </div>
                  <div class="item-form">
                    <i class="fas fa-lock"></i>
                    <input
                      type="password"
                      name="password"
                      id="password-s"
                      placeholder="Nhập mật khẩu"
                    />
                    <i class="fas fa-eye pass-icon" id="show-pass-s"></i>
                    <i
                      class="fas fa-eye-slash pass-icon"
                      id="hide-pass-s"
                      style="display: none"
                    ></i>
                  </div>

                  <div class="item-form">
                    <label
                      for="check-remem"
                      id="container-check-bnt"
                      class="contain-check-bnt"
                    >
                      <input type="checkbox" id="check-remem" />
                      <span id="text-notify">Nhớ mật khẩu </span>
                      <a href="#" class="forgot-pass">Quên mật khẩu</a>
                    </label>
                  </div>

                  <div class="item-form">
                    <button id="btn-submit-log" type="submit">Đăng Nhập</button>
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