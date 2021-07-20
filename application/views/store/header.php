<header>
    <div class="container-header">
        <div class="wrap-page">
            <div class="img-logo">
                <img src="<?php echo base_url(); ?>resource/imgs/logo-quangdz.png" alt="" />
            </div>
            <div class="login-container">
                <?php if (isset($user_info)) : ?>
                    <div class="dropdown">
                        <button class="btn btn-primary dropdown-toggle custome-btn" type="button" data-toggle="dropdown">
                            <?php echo $user_info->email ?>
                            <span class="caret" id="show-icon"></span>
                            <span class="caret caret-up hidden" id="hide-icon"></span>
                        </button>
                        <ul class="dropdown-menu">
                            <li><a href="<?php echo site_url('user') ?>">Hồ sơ</a></li>
                            <li><a href="<?php echo site_url('user/logout') ?>">Đăng Xuất</a></li>
                        </ul>
                    </div>
                <?php else : ?>
                    <button id="login-btn"><a href="<?php echo site_url('user/login') ?>">Đăng nhập</a></button>
                <?php endif; ?>
            </div>
        </div>
    </div>
</header>
<script>
    $(document).ready(function() {
        $("#login-btn").click(function(e) {
            let x = e.clientX - e.target.offserLeft;
            let y = e.clientY - e.target.offserTop;

            let ripples = document.createElement('span');
            ripples.style.left = x + "px";
            ripples.style.top = y = "px";
            this.appendChild(ripples);

            setTimeout(() => {
                ripples.remove();
            }, 1000);
        });
    });
</script>