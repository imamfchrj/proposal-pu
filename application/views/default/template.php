<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Twitter -->
    <meta name="twitter:site" content="@KemenPU">
    <meta name="twitter:creator" content="@KemenPU">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Slim">
    <meta name="twitter:description" content="Sigap membangun bangsa demi negeri.">
    <meta name="twitter:image" content="https://www.pu.go.id/templates/frontend/img/logo.png">

    <!-- Facebook -->
    <meta property="og:url" content="https://www.pu.go.id">
    <meta property="og:title" content="Slim">
    <meta property="og:description" content="Sigap membangun bangsa demi negeri.">

    <meta property="og:image" content="https://www.pu.go.id/templates/frontend/img/logo.png">
    <meta property="og:image:secure_url" content="https://www.pu.go.id/templates/frontend/img/logo.png">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="600">
    
    <link rel="icon" href="https://www.pu.go.id/assets/images/content/Logo_PU_(RGB).jpg">

    <!-- Meta -->
    <meta name="description" content="Sigap membangun bangsa demi negeri.">
    <meta name="author" content="redcloud-project">

    <title><?=$title?></title>

    <!-- vendor css -->
    <link href="<?=base_url("assets/")?>lib/datatables/css/jquery.dataTables.css" rel="stylesheet">
    <link href="<?=base_url("assets/")?>lib/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="<?=base_url("assets/")?>lib/Ionicons/css/ionicons.css" rel="stylesheet">
    <link rel="stylesheet" href="<?=base_url("assets/")?>lib/jquery.steps/css/jquery.steps.css">
    <link href="<?=base_url("assets/")?>lib/jquery-toggles/css/toggles-full.css" rel="stylesheet">
    <link href="<?=base_url("assets/")?>lib/jt.timepicker/css/jquery.timepicker.css" rel="stylesheet">
    <link href="<?=base_url("assets/")?>lib/spectrum/css/spectrum.css" rel="stylesheet">
    <link href="<?=base_url("assets/")?>lib/bootstrap-tagsinput/css/bootstrap-tagsinput.css" rel="stylesheet">
    <link href="<?=base_url("assets/")?>lib/select2/css/select2.min.css" rel="stylesheet">
    

    <link rel="stylesheet" href="<?=base_url("assets/")?>lib/SpinKit/css/spinkit.css">


    <!-- Slim CSS -->
    <link rel="stylesheet" href="<?=base_url("assets/")?>css/slim.css">
    <script>
      var ROOT="<?=base_url()?>";
    </script>
    <?php
				$this->load->view($js, $data);
		?>
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
      


  </body>
</html>
