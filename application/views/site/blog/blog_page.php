<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
    <link rel="shortcut icon" type="image/png" href="<?php echo base_url(); ?>resource/imgs/logo-quangdz.png"/>
    <!-- Font, Icon -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" />
    <link rel="stylesheet" href="https://unpkg.com/flickity@2.2.2/dist/flickity.min.css" />
    <script src="https://unpkg.com/flickity@2.2.2/dist/flickity.pkgd.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Original+Surfer&family=Sriracha&display=swap" rel="stylesheet">

    <!-- Bootstrap -->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" />

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <!-- CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>resource/css/reset.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>resource/css/blog/blog.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>resource/css/nav.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>resource/css/footer.css" />
</head>

<body>
    <header>
        <div class="test" style="background-image: url(<?php echo imgs_url() ?>con\ ca.jpg)">
            <div class="banner-main">
                <h1 class="web-name" style="background-image: url(<?php echo imgs_url() ?>Removal-78.png);">ChoCa.Com</h1>
            </div>
        </div>
    </header>
    <?php $this->load->view('site/nav'); ?>
    <main>
        <section class="container-main">
            <div style="text-align: center;">
                <h3 id="title-page">BLOG</h3>
            </div>
            <div class="step10">
                <div class="menu-step">
                    <?php foreach ($blog_list as $row) : ?>
                        <div class="row-item">
                            <div class="item-menu-step">
                                <div class="content-item">
                                    <h3><?php echo $row->titleBlog ?></h3>
                                    <p>
                                        <?php echo $row->contentBlog ?>
                                    </p>
                                </div>
                            </div>
                            <div class="item-menu-step">
                                <img src="<?php echo blog_url() ?><?php echo $row->image ?>" alt="" />
                            </div>
                        </div>
                    <?php endforeach ?>
                    <div class="line">
                        <hr />
                    </div>
                </div>
            </div>
        </section>
    </main>
    <?php $this->load->view('site/footer'); ?>
</body>

</html>