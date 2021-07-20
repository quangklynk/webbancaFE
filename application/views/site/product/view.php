<main>
  <div class="container-main">
    <div class="show-product">
      <div class="img-pro img-magnifier-container">
        <img id="myimage" src="<?php echo products_url() ?><?php echo $product->Image ?>" alt="" />
        <script>
          /* Initiate Magnify Function
          with the id of the image, and the strength of the magnifier glass:*/
          magnify("myimage", 3);
        </script>
      </div>
      <div class="info-product">
        <h1 class="name-pro"><?php echo $product->ProductName ?></h1>
        <div class="container-rating">
          <ul id="rating-star">
            <li><span class="fa fa-star"></span></li>
            <li><span class="fa fa-star"></span></li>
            <li><span class="fa fa-star"></span></li>
            <li><span class="fa fa-star"></span></li>
            <li><span class="fa fa-star"></span></li>
          </ul>
          <script>
            $(function() {
              let start = $(".average-rating").text();
              var lis = document.getElementById("rating-star").getElementsByTagName("li");
              var lis_sub = document.getElementById("sub-rating").getElementsByTagName("span");

              for (let index = 0; index < parseInt(start); index++) {
                lis_sub[index].classList.add("check");
                lis[index].children[0].classList.add("check");

              }
            });
          </script>
          <span class="average-rating"><?php echo $average_rating ?></span>
        </div>
        <div class="wrap-info">
          <p class="price-pro"><?php echo $product->Price ?></p>
          <p class="nsx">
            <i class="fas fa-parachute-box"></i>Nhà sản xuất:
            <span><?php echo $product->Distributor ?></span>
          </p>
          <p class="viewer">
            <i class="fas fa-binoculars"></i>Lượt xem: <span><?php echo $product->view ?></span>
          </p>
          <p class="unit-pro">
            <i class="fas fa-box"></i>Chỉ còn lại <span><?php echo $product->Amount ?></span> sản phẩm
          </p>
        </div>
        <a href="<?php echo base_url('cart/add/' . $product->id) ?>">
          <button><i class="fas fa-cart-plus"></i>&ensp;Thêm Vào Giỏ Hàng</button>
        </a>
        <div class="right-note">
          <h5><i class="fas fa-shield-alt"></i>Chính Sách Mua Hàng</h5>
          <ul>
            <li>
              <p>
                VẬN CHUYỂN TỨC THỜI Giao Nhanh Nội Thành Hà Nội - Hồ Chí
                Minh
              </p>
            </li>
            <li>
              <p>
                CHẤT LƯỢNG ĐẢM BẢO Hơn 200 Thương Hiệu hàng đầu Thế Giới
              </p>
            </li>
            <li>
              <p>CAM KẾT HỖ TRỢ 24/7 Gọi Điện - SMS - Messenger</p>
            </li>
          </ul>
        </div>

        <div class="share-service">
          <h5><i class="fas fa-share-alt"></i> Chia sẻ:</h5>
          <script src="https://apps.elfsight.com/p/platform.js" defer></script>
          <div class="elfsight-app-226143b4-3896-4f1b-be14-83ae362dd3c4"></div>
        </div>
      </div>
      <div class="describe">
        <ul class="nav nav-tabs">
          <li class="active"><a data-toggle="tab" href="#home">
              <h5>mô tả</h5>
            </a></li>
          <li><a data-toggle="tab" href="#menu1">
              <h5>Bình luận</h5>
            </a></li>
          <li><a data-toggle="tab" href="#menu2">
              <h5>Đánh Giá</h5>
            </a></li>
        </ul>

        <div class="tab-content">
          <div id="home" class="tab-pane fade in active">
            <div class="container-more-info">
              <p>
                <?php echo $product->Description ?>
              </p>
            </div>
          </div>
          <div id="menu1" class="tab-pane fade">
            <div class="container-more-info">
              <div id="fb-root"></div>
              <script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v10.0&appId=258089692740302&autoLogAppEvents=1" nonce="zvyIQsP4"></script>
              <div class="fb-comments" data-href="https://www.facebook.com/quang.klynk/<?php echo $product->id ?>" data-width="700" data-numposts="5"></div>
            </div>
          </div>
          <div id="menu2" class="tab-pane fade">
            <div class="container-more-info">
              <div class="rating">
                <span class="heading">Đánh Giá Người Dùng</span>
                <div id="sub-rating">
                  <span class="fa fa-star"></span>
                  <span class="fa fa-star"></span>
                  <span class="fa fa-star"></span>
                  <span class="fa fa-star"></span>
                  <span class="fa fa-star"></span>
                </div>
                <p><span><?php echo $average_rating ?> sao</span> trung bình trên <span id="index-rating"><?php echo $index_LRating ?> đánh giá</span>.</p>
                <hr style="border:3px solid #f1f1f1">

                <div class="row">
                  <div class="side">
                    <div>5 sao</div>
                  </div>
                  <div class="middle">
                    <div class="bar-container">
                      <div class="bar-5"></div>
                    </div>
                  </div>
                  <div class="side right">
                    <div id="value-5start"><?php if (isset($five_start)) : ?>
                        <?php echo $five_start ?>
                      <?php else : ?>
                        0
                      <?php endif; ?></div>
                  </div>

                  <div class="side">
                    <div>4 sao</div>
                  </div>
                  <div class="middle">
                    <div class="bar-container">
                      <div class="bar-4"></div>
                    </div>
                  </div>
                  <div class="side right">
                    <div id="value-4start">
                      <?php if (isset($four_start)) : ?>
                        <?php echo $four_start ?>
                      <?php else : ?>
                        0
                      <?php endif; ?></div>
                  </div>
                  <div class="side">
                    <div>3 sao</div>
                  </div>
                  <div class="middle">
                    <div class="bar-container">
                      <div class="bar-3"></div>
                    </div>
                  </div>
                  <div class="side right">
                    <div id="value-3start">
                      <?php if (isset($threee_start)) : ?>
                        <?php echo $threee_start ?>
                      <?php else : ?>
                        0
                      <?php endif; ?>
                    </div>
                  </div>
                  <div class="side">
                    <div>2 sao</div>
                  </div>
                  <div class="middle">
                    <div class="bar-container">
                      <div class="bar-2"></div>
                    </div>
                  </div>
                  <div class="side right">
                    <div id="value-2start">
                      <?php if (isset($two_start)) : ?>
                        <?php echo $two_start ?>
                      <?php else : ?>
                        0
                      <?php endif; ?>
                    </div>
                  </div>
                  <div class="side">
                    <div>1 sao</div>
                  </div>
                  <div class="middle">
                    <div class="bar-container">
                      <div class="bar-1"></div>
                    </div>
                  </div>
                  <div class="side right">
                    <div id="value-1start"><?php if (isset($one_start)) : ?>
                        <?php echo $one_start ?>
                      <?php else : ?>
                        0
                      <?php endif; ?></div>
                  </div>
                </div>
                <script>
                  $(function() {
                    let index_rating = parseInt($("#index-rating").text());
                    let start_5 = parseInt($("#value-5start").text()) / index_rating * 100;
                    let start_4 = parseInt($("#value-4start").text()) / index_rating * 100;
                    let start_3 = parseInt($("#value-3start").text()) / index_rating * 100;
                    let start_2 = parseInt($("#value-2start").text()) / index_rating * 100;
                    let start_1 = parseInt($("#value-1start").text()) / index_rating * 100;

                    $(".bar-5").css("width", start_5 + "%");
                    $(".bar-4").css("width", start_4 + "%");
                    $(".bar-3").css("width", start_3 + "%");
                    $(".bar-2").css("width", start_2 + "%");
                    $(".bar-1").css("width", start_1 + "%");

                  });
                </script>
              </div>
            </div>
          </div>
        </div>
        <!-- <div class="clip">
          <iframe width="100%" height="500" src="https://www.youtube.com/embed/CS_J1WFi-Wk" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div> -->
      </div>
    </div>
  </div>
</main>

<section class="same-product">
  <div class="container-same-product">
    <div class="hot-item">
      <div class="title-section">
        <img src="<?php echo imgs_url() ?>02cf6c9f749be445cfb064087755d364.png" alt="" />
      </div>
      <div class="grid-view-item">
        <?php foreach ($product_abs as $value) : ?>
          <div class="grid-item">
            <div class="thumbnail">
              <img src="<?php echo products_url() ?><?php echo $value->Image ?>" alt="" />
            </div>
            <div class="info">
              <h5><?php echo $value->ProductName ?></h5>
              <p class="price-pro"><?php echo $value->Price ?></p>
            </div>
            <div class="more-pro">
              <p>Lượt xem: <span><?php echo $value->view ?></span></p>
            </div>
          </div>
        <?php endforeach ?>
      </div>
    </div>
  </div>
  <script>
    $(document).ready(function() {
      let x = document.querySelectorAll(".price-pro");
      for (let i = 0, len = x.length; i < len; i++) {
        let num = Number(x[i].innerHTML).toLocaleString("en");
        x[i].innerHTML = num;
        x[i].classList.add("currSign");
      }
    });
  </script>
</section>