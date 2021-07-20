<header onload="">
  <div class="container-header" style="background-image: url('<?php echo base_url(); ?>resource/imgs/banner-header.png')">
    <div class="content-header">
      <div class="logo">
        <img src="<?php echo base_url(); ?>resource/imgs/logo-bg-white.png" alt="logo" />
      </div>
      <h1>
        Cá sạch, Cá ngon, Cá tươi, Cá real
        <div class="heart">100%</div>
        không fake!!
      </h1>
    </div>
  </div>
</header>

<nav class="navbar navbar-inverse" data-spy="affix" data-offset-top="450">
  <div class="container-nav">
    <div class="menu-web">
      <ul class="menu-nav">
        <li class="item-menu-nav grow"><a href="<?php echo base_url(); ?>indexData">Home</a></li>
        <li class="item-menu-nav grow"><a href="<?php echo base_url(); ?>indexData/indexStore">Store</a></li>
        <li class="item-menu-nav grow"><a href="<?php echo base_url(); ?>indexData/indexUser/quangklynhzcom">Contact</a></li>
      </ul>
    </div>
    <div class="search">
      <form id="search-form" action="<?php echo base_url(); ?>indexData/search" method="get" accept-charset="utf-8">
        <input type="text" name="key-search" placeholder="Tìm kiếm sản phẩm...." id="search-bar" value="<?php echo isset($key) ? $key : '' ?>" />
        <button type="button" id="btn-search"><i class="fas fa-search zoom-out"></i></button>
      </form>
    </div>
  </div>
</nav>
<script>
  $(document).ready(function() {
    $("#btn-search").click(function(e) {
      if ($("#search-bar").val() != "") {
        $("#search-form").submit();
      }
    });
  });
</script>