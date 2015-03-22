<?php  
  $root = get_bloginfo('template_directory');
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
        <link rel="stylesheet" href="<?php echo $root; ?>/css/bootstrap.css">
        <link rel="stylesheet" href="<?php echo $root; ?>/css/bootstrap-theme.css">
        <?php wp_enqueue_script("jquery"); ?>
        <script src="<?php echo $root; ?>/js/vendor/jquery-1.11.0.min.js"></script>
        <script src="<?php echo $root; ?>/js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
        <script src="<?php echo $root; ?>/js/vendor/bootstrap.min.js"></script>
        <script src="<?php echo $root; ?>/js/vendor/main.js"></script>
        <?php wp_head(); ?>
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <div class="navbar navbar-inverse navbar-static-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="<?php echo home_url(); ?>">Michael Noel Painting</a>
        </div>
        <div class="navbar-collapse collapse">
        	          <?php  
              $args = array(
                'theme_location' => 'top-bar',
                'depth' => 0,
                'container' => false,
                'menu_class'  => 'nav navbar-nav',
                'walker'  => new BootstrapNavMenuWalker()
                );
                 
              wp_nav_menu($args);
          ?>
          
        </div><!--/.navbar-collapse -->
      </div>
    </div>