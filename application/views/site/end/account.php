<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="refresh" content="1;url=<?php echo site_url();?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Ket Qua</title>
</head>
<body>
	<h1 class="text-xs-center display-3"><?php if(isset($message)):?>
                        <h3 style="color:red"><?php echo $message?></h3>
                        <?php endif;?></h1>
</body>
</html>