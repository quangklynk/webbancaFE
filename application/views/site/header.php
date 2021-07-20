<header onload="">
  <div class="flip-box">
    <div class="flip-box-inner">
      <div class="flip-box-front">
        <div class="container-header" style="background-image: url('<?php echo base_url(); ?>resource/imgs/banner.jpg')"></div>
      </div>
      <div class="flip-box-back">
        <div class="container-header" style="
                background-image: url('<?php echo base_url(); ?>resource/imgs/cartoon-clear-ocean-sea-background-with-empty-blue-sky_88272-1496.jpg');
              ">
          <div class="content-header">
            <div class="logo">
              <img src="<?php echo base_url(); ?>resource/imgs/logo-bg-white.png" alt="logo" />
            </div>
            <h1 id="logan">
              <div class="heart">100%</div>
              không fake!!
            </h1>
          </div>
        </div>
      </div>
    </div>
  </div>
</header>
<script>
  $(document).ready(function() {
    var i = 0;
    var txt = "Cá sạch, Cá ngon, Cá tươi, Cá real";
    var speed = 40;

    function typeWriter() {
      if (i < txt.length) {
        document.getElementById("logan").innerHTML += txt.charAt(i);
        i++;
        setTimeout(typeWriter, speed);
      }
    }
    $(".flip-box-back").mouseover(function() {
      typeWriter();
    });

    let rotate = true;
    $(".flip-box").click(function(e) {
      if (rotate == true) {
        $(".flip-box-inner").css("transform", "rotateX(180deg)");
        rotate = false;
      } else {
        $(".flip-box-inner").css("transform", "rotateX(-180deg)");
        rotate = true;
      }
    });
  });
</script>
