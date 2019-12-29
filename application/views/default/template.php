<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Twitter -->
    <meta name="twitter:site" content="@themepixels">
    <meta name="twitter:creator" content="@themepixels">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Slim">
    <meta name="twitter:description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta name="twitter:image" content="http://themepixels.me/slim/img/slim-social.png">

    <!-- Facebook -->
    <meta property="og:url" content="http://themepixels.me/slim">
    <meta property="og:title" content="Slim">
    <meta property="og:description" content="Premium Quality and Responsive UI for Dashboard.">

    <meta property="og:image" content="http://themepixels.me/slim/img/slim-social.png">
    <meta property="og:image:secure_url" content="http://themepixels.me/slim/img/slim-social.png">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="600">

    <!-- Meta -->
    <meta name="description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta name="author" content="ThemePixels">

    <title><?=$title?></title>

    <!-- vendor css -->
    <link href="<?=base_url("assets/")?>lib/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="<?=base_url("assets/")?>lib/Ionicons/css/ionicons.css" rel="stylesheet">
    <link href="<?=base_url("assets/")?>lib/jquery-toggles/css/toggles-full.css" rel="stylesheet">
    <link href="<?=base_url("assets/")?>lib/jt.timepicker/css/jquery.timepicker.css" rel="stylesheet">
    <link href="<?=base_url("assets/")?>lib/spectrum/css/spectrum.css" rel="stylesheet">
    <link href="<?=base_url("assets/")?>lib/bootstrap-tagsinput/css/bootstrap-tagsinput.css" rel="stylesheet">

    <!-- Slim CSS -->
    <link rel="stylesheet" href="<?=base_url("assets/")?>css/slim.css">

  </head>
  <body>
      <?php
				$this->load->view($header, $data);
			?>

      <?php
				$this->load->view($navbar, $data);
			?>

    
			<?php
				$this->load->view($ui, $data);
			?>


      <?php
				$this->load->view($footer, $data);
      ?>
      

      <?php
				$this->load->view($js, $data);
			?>

  </body>
</html>
