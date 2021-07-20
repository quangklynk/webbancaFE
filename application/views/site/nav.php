<nav class="navbar navbar-inverse reset" data-spy="affix" data-offset-top="450">
    <div class="container-nav">
        <div class="menu-web">
            <ul class="menu-nav">
                <li class="item-menu-nav grow"><a href="<?php echo base_url(); ?>">Trang Chủ</a></li>
                <li class="item-menu-nav grow"><a href="<?php echo site_url('store'); ?>">Cửa Hàng</a></li>
                <li class="item-menu-nav grow"><a href="<?php echo site_url('blog'); ?>">Blog</a></li>
            </ul>
        </div>
        <div class="search">
            <form id="search-form" action="<?php echo site_url('product/search') ?>" method="get" accept-charset="utf-8">
                <input type="text" aria-haspopup="true" aria-autocomplete="list" pattern="[A-Za-z0-9]*" role="textbox" autocomplete="off" class="ui-autocomplete-input" placeholder="Tìm kiếm sản phẩm..." value="<?php echo isset($key) ? $key : '' ?>" name="key-search" id="text-search">
                <button type="button" id="btn-search"><i class="fas fa-search zoom-out"></i></button>
            </form>
        </div>
        <div class="container-cart">
            <a href="<?php echo base_url('cart') ?>">
                <i class="fas fa-cart-plus"></i> <span class="badge"><?php echo $total_items ?></span>
            </a>
        </div>
    </div>
</nav>
<script>
    $(document).ready(function() {
        $("#btn-search").click(function(e) {
            if ($("#text-search").val() != "") {
                $("#search-form").submit();
            }
        });
    });
</script>