<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Search</title>

    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet" />

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>resource/css/sign-up.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" />
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.2.1.min.js"></script>
    <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.min.js" type="text/javascript"></script>

    <script src="<?php echo base_url(); ?>resource/js/log.js"></script>
    <!-- CSS -->

    <link rel="stylesheet" href="<?php echo base_url(); ?>resource/css/log-in.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>resource/css/config.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>resource/css/header.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>resource/css/footer.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>resource/css/list-product.css" />
    <style>
        .container-cart {
            position: fixed;
            right: 15px;
            top: 78px;
            z-index: 99999;
        }

        .container-cart button i {
            color: #fff;
            font-size: 25px;
        }

        .container-cart button span.badge {
            top: -13px;
            right: 7px;
        }

        .heart {
            display: inline-block;
            font-size: 50px;
            color: rgb(248, 252, 54);
            animation: beat 0.25s infinite alternate;
            transform-origin: center;
        }

        /* Heart beat animation */
        @keyframes beat {
            to {
                transform: scale(1.5);
            }
        }

        .affix {
            top: 0;
            width: 100%;
            z-index: 99 !important;
        }

        .affix+.container-fluid {
            padding-top: 70px;
        }

        .navbar {
            margin-bottom: unset;
        }

        .flickity-viewport {
            height: 250px !important;
        }
    </style>
</head>

<body>
    <?php require('header.php') ?>
    <main>
        <div class="container-main">
            <div class="adv">
                <marquee>Kết quả tìm kiếm cho từ khóa (<?php echo  $key ?>)</marquee>
            </div>
            <div class="container-cart">
                <button type="button" class="btn btn-primary">
                    <i class="fas fa-cart-plus"></i> <span class="badge">7</span>
                </button>
            </div>
            <div class="left-main">
                <div class="container-left">
                    <div class="title-left">
                        <h2>BỘ LỌC TÌM KIẾM</h2>
                    </div>
                    <div class="menu-left-cover">
                        <ul class="menu-left">
                            <?php foreach ($list2 as $key => $value) : ?>
                                <li>
                                    <label id="" class="">
                                        <input type="checkbox" name="" id="" />
                                        <span id=""><?= $value['CategoryName'] ?></span>
                                    </label>
                                </li>
                            <?php endforeach ?>
                        </ul>
                        <div class="filler">
                            <button class="btn btn-primary">Lọc</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="right-main">
                <div class="container-right">
                    <?php foreach ($list as $data) : ?>
                        <div class="product-item">
                            <a style="text-decoration: none" href="<?php echo base_url(); ?>indexData/indexEdit/<?php echo $data->idProduct ?>">
                                <div class="img-product">
                                    <img src="<?php echo base_url(); ?>resource/imgs/products/<?php echo $data->Image ?>" alt="" />
                                </div>
                                <div class="info-product">
                                    <h5 class="name-product">
                                        <?php echo $data->ProductName ?>
                                    </h5>
                                    <p class="price-product"><?php echo $data->Price ?></p>
                                </div>
                            </a>
                        </div>

                    <?php endforeach ?>
                </div>
                <div class="error-list">
                    <label for="" id="error-label">Không tìm được sản phẩm phù hợp</label>
                </div>
            </div>


        </div>
    </main>
    <?php require('footer.php') ?>
    <script>
        $(document).ready(function() {
            let x = document.querySelectorAll(".price-product");
            for (let i = 0, len = x.length; i < len; i++) {
                let num = Number(x[i].innerHTML).toLocaleString("en");
                x[i].innerHTML = num;
                x[i].classList.add("currSign");
            }
            if ($(".product-item").length == 0) {
                $("#error-label").css("display", "unset");
            } else {
                $("#error-label").css("display", "none");
            }

        });
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>

</html>