<main onload="">
    <div class="container-main" style="background-image: url('<?php echo base_url(); ?>resource/imgs/con\ ca.jpg')">
        <div class="content-login">
            <div class="form-acc">
                <?php if (isset($message)) : ?>
                    <h3 style="color:red"><?php echo $message ?></h3>
                <?php endif; ?>
                <form action="<?php echo site_url('user/login') ?>" id="form-login" method="POST" enctype="multipart/form-data">
                    <div class="item-form">
                        <h1>Đăng Nhập</h1>
                    </div>
                    <div class="item-form">
                        <i class="fas fa-envelope"></i>
                        <input name="email" id="email-login" type="email" placeholder="Nhập email" />
                        <?php echo form_error('Email đăng nhập') ?>
                    </div>
                    <div class="item-form">
                        <i class="fas fa-lock"></i>
                        <input type="password" name="password" id="password-login" placeholder="Nhập mật khẩu" />
                        <?php echo form_error('Mật khẩu') ?>
                        <i class="fas fa-eye pass-icon" id="show-pass-login"></i>
                        <i class="fas fa-eye-slash pass-icon" id="hide-pass-login" style="display: none"></i>
                    </div>
                    <div class="item-form">
                        <button class="btn" type="button" id="btn-login">Đăng Nhập</button>
                        <div class="error" style="color: red; font-weight: 600"><?php echo form_error('login') ?></div>
                    </div>
                    <div class="item-form">
                        <a href="#" class="forgot-pass">Quên mật khẩu</a>
                    </div>
                    <div class="or">
                        <div></div>
                        <span>Hoặc</span>
                        <div></div>
                    </div>
                    <div class="sign-up-link">
                        <p>
                            Bạn mới biết đến ChoCa? <button id="btn-open-register" type="button"><span>Đăng Ký</span></button></a>
                        </p>
                    </div>
                </form>
            </div>
        </div>
        <div class="content-sign-up" style="display: none">
            <div class="form-acc">
                <form action="<?php echo site_url('user/register') ?>" id="form-register" method="POST" enctype="multipart/form-data">
                    <div class="item-form title">
                        <h1>Đăng Ký</h1>
                    </div>
                    <div class="left-form">
                        <div class="item-form">
                            <i class="fas fa-envelope"></i>
                            <input name="email" id="email-register" type="email" placeholder="Nhập email" />
                        </div>
                        <div class="item-form">
                            <i class="fas fa-lock"></i>
                            <input type="password" name="password" id="password-register" placeholder="Nhập mật khẩu" />
                            <i class="fas fa-eye pass-icon" id="show-pass-register"></i>
                            <i class="fas fa-eye-slash pass-icon" id="hide-pass-register" style="display: none"></i>
                        </div>
                        <div class="item-form">
                            <i class="fas fa-lock"></i>
                            <input type="password" name="repassword" id="repassword-register" placeholder="Nhập lại mật khẩu" />
                        </div>
                    </div>
                    <div class="right-form">
                        <div class="item-form">
                            <i class="fas fa-user"></i>
                            <input name="name" id="name" type="text" placeholder="Nhập Tên" />
                        </div>
                        <div class="item-form">
                            <i class="fas fa-phone"></i>
                            <input name="phone" id="phone" type="text" autocomplete="off" onkeypress="isInputNumber(event)" placeholder="Nhập SDT" />
                        </div>
                        <div class="item-form">
                            <i class="fas fa-map-marker-alt"></i>
                            <input name="address" id="address" placeholder="Nhập Địa Chỉ" />
                        </div>
                    </div>
                    <div class="item-form">
                        <button class="btn" type="button" id="btn-register">Đăng Ký</button>
                    </div>
                    <div class="or">
                        <div></div>
                        <span>Hoặc</span>
                        <div></div>
                    </div>
                    <div class="sign-up-link">
                        <p>
                            Nếu Bạn Có Tài Khoản,Vui Lòng
                            <button id="btn-open-login" type="button"><span>Đăng Nhập</span></button>
                        </p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</main>