<meta charset="UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
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
<link rel="stylesheet" href="<?php echo base_url(); ?>resource/css/header.css" />
<link rel="stylesheet" href="<?php echo base_url(); ?>resource/css/nav.css" />
<link rel="stylesheet" href="<?php echo base_url(); ?>resource/css/footer.css" />
<script type='text/javascript' data-cfasync='false'>
    window.purechatApi = {
        l: [],
        t: [],
        on: function() {
            this.l.push(arguments);
        }
    };
    (function() {
        var done = false;
        var script = document.createElement('script');
        script.async = true;
        script.type = 'text/javascript';
        script.src = 'https://app.purechat.com/VisitorWidget/WidgetScript';
        document.getElementsByTagName('HEAD').item(0).appendChild(script);
        script.onreadystatechange = script.onload = function(e) {
            if (!done && (!this.readyState || this.readyState == 'loaded' || this.readyState == 'complete')) {
                var w = new PCWidget({
                    c: '42720588-8881-42e5-bcb2-16b1e778f736',
                    f: true
                });
                done = true;
            }
        };
    })();
</script>