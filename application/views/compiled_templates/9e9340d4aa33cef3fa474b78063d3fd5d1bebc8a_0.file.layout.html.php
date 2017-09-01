<?php
/* Smarty version 3.1.30, created on 2017-08-25 23:27:47
  from "C:\wamp64\www\db_poros\application\views\templates\public\layout.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59a0b27358c2d3_73797706',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9e9340d4aa33cef3fa474b78063d3fd5d1bebc8a' => 
    array (
      0 => 'C:\\wamp64\\www\\db_poros\\application\\views\\templates\\public\\layout.html',
      1 => 1503703664,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59a0b27358c2d3_73797706 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv="x-ua-compatible" content="IE=9" /><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php if (isset($_smarty_tpl->tpl_vars['website_name']->value)) {
echo $_smarty_tpl->tpl_vars['website_name']->value;
}?></title>
    <meta name="description" content="Ethanol is an Agency and Personal Portfolio Template built with bootstrap 3.3.2. This is created for a cause to support my uncle's campaign. Go and Donate at - https://life.indiegogo.com/fundraisers/medical-support-for-a-filipino-overseas-worker--3/x/10058181">
    <meta name="keywords" content="portfolio, agency, bootstrap theme, mobile responsive, template, personal">
    <meta name="author" content="ThemeForces.Com">
    
    <!-- Favicons
    ================================================== -->
    <link rel="shortcut icon" href="<?php echo assets_url();?>
front/img/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="<?php echo assets_url();?>
front/img/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="<?php echo assets_url();?>
front/img/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="<?php echo assets_url();?>
front/img/apple-touch-icon-114x114.png">

    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css"  href="<?php echo assets_url();?>
front/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="<?php echo assets_url();?>
front/fonts/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">

    <!-- Nivo Lightbox
    ================================================== -->
    <link rel="stylesheet" href="<?php echo assets_url();?>
front/css/nivo-lightbox.css" >
    <link rel="stylesheet" href="<?php echo assets_url();?>
front/css/nivo_lightbox_themes/default/default.css">

    <!-- Slider
    ================================================== -->
    <link href="<?php echo assets_url();?>
front/css/owl.carousel.css" rel="stylesheet" media="screen">
    <link href="<?php echo assets_url();?>
front/css/owl.theme.css" rel="stylesheet" media="screen">

    <!-- Stylesheet
    ================================================== -->
    <link rel="stylesheet" type="text/css"  href="<?php echo assets_url();?>
front/css/style.css">
    <link rel="stylesheet" type="text/css" href="<?php echo assets_url();?>
front/css/responsive.css">

    <!-- Google Fonts
    ================================================== -->
    <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>

    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo assets_url();?>
front/js/modernizr.custom.js"><?php echo '</script'; ?>
>

  </head>
  <body>

    <!-- Main Navigation 
    ================================================== -->
    <nav id="tf-menu" class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <a class="navbar-brand" href="<?php echo base_url();?>
home"><img src="<?php echo assets_url();?>
front/img/logo.png" alt="Logo POROS"></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav navbar-right">
                <li><a href="<?php echo base_url();?>
home#tf-home" class="scroll">Home</a></li>
                <li><a href="<?php echo base_url();?>
home#tf-department" class="scroll">Department</a></li>
                <li><a href="<?php echo base_url();?>
home#tf-division" class="scroll">Division</a></li>
                <li><a href="<?php echo base_url();?>
home#tf-member" class="scroll">Member</a></li>
                <li><a href="<?php echo base_url();?>
home#tf-product" class="scroll">Product</a></li>
                <li><a href="<?php echo base_url();?>
home#tf-blog" class="scroll">Blog</a></li>
                <li><a href="<?php echo base_url();?>
home#tf-contact" class="scroll">Contact</a></li>
                <?php if ($_smarty_tpl->tpl_vars['u_session']->value['u_logged_in'] != 'true') {?>
                <li><a href="<?php echo base_url();?>
home/login" class="glyphicon glyphicon-log-in"></a></li>
                <?php } else { ?>
                <li><a href="<?php echo base_url();?>
home/logout" class="glyphicon glyphicon-log-out" style="color: #14e648;"></a></li>
                <?php }?>
              </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>

    <?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
        <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

    <?php }?>

    <!-- Footer 
    ================================================== -->
    <div id="tf-footer">
        <div class="container"><!-- container -->
            <p class="pull-left">© 2017 POROS UB. Theme by Rudhi Sasmito Modified by POROS UB.</p> <!-- copyright text here-->
            <ul class="list-inline social pull-right">
                <li><a onclick="window.open('https://github.com/porosub');"><i class="fa fa-github"></i></a></li> <!-- Change # With your Github Link -->
                <li><a href="<?php echo base_url();?>
home"><i class="fa fa-facebook"></i></a></li> <!-- Change # With your FB Link -->
                <li><a onclick="window.open('https://twitter.com/poros_ub');"><i class="fa fa-twitter"></i></a></li> <!-- Change # With your Twitter Link -->
                <li><a onclick="window.open('https://www.instagram.com/porosfilkom/');"><i class="fa fa-instagram"></i></a></li> <!-- Change # With your Instagram Link -->
                <li><a onclick="window.open('https://www.youtube.com/channel/UC3Mh33VM0dwLlXiH_00qOJw');"><i class="fa fa-youtube"></i></a></li> <!-- Change # With your Youtube Link -->
                
            </ul>
        </div><!-- end container -->
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo assets_url();?>
front/js/jquery.1.11.1.js"><?php echo '</script'; ?>
>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo assets_url();?>
front/js/bootstrap.js"><?php echo '</script'; ?>
>

    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo assets_url();?>
front/js/owl.carousel.js"><?php echo '</script'; ?>
><!-- Owl Carousel Plugin -->

    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo assets_url();?>
front/js/SmoothScroll.js"><?php echo '</script'; ?>
>

    <!-- Google Map -->
    <?php echo '<script'; ?>
 type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyASm3CwaK9qtcZEWYa-iQwHaGi3gcosAJc&amp;sensor=false"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo assets_url();?>
front/js/map.js"><?php echo '</script'; ?>
>

    <!-- Parallax Effects -->
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo assets_url();?>
front/js/skrollr.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo assets_url();?>
front/js/imagesloaded.js"><?php echo '</script'; ?>
>

    <!-- Portfolio Filter -->
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo assets_url();?>
front/js/jquery.isotope.js"><?php echo '</script'; ?>
>

    <!-- LightBox Nivo -->
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo assets_url();?>
front/js/nivo-lightbox.min.js"><?php echo '</script'; ?>
>

    <!-- Contact page-->
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo assets_url();?>
front/js/jqBootstrapValidation.js"><?php echo '</script'; ?>
>

    <!-- Javascripts
    ================================================== -->
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo assets_url();?>
front/js/main.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo assets_url();?>
front/js/uuid.js"><?php echo '</script'; ?>
>

  </body>
</html><?php }
}
