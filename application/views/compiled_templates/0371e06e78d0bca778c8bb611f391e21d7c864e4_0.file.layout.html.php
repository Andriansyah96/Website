<?php
/* Smarty version 3.1.30, created on 2017-08-16 16:08:11
  from "C:\wamp64\www\db_poros\application\views\templates\admin\layout.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59946deb7d26b8_02672173',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0371e06e78d0bca778c8bb611f391e21d7c864e4' => 
    array (
      0 => 'C:\\wamp64\\www\\db_poros\\application\\views\\templates\\admin\\layout.html',
      1 => 1502899687,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59946deb7d26b8_02672173 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

    <title>POROS | Admin</title>
    <link rel="shortcut icon" href="<?php echo assets_url();?>
front/img/favicon.ico" type="image/x-icon">
    <!-- Bootstrap Core CSS -->
    <link href="<?php echo assets_url();?>
admin/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- MetisMenu CSS -->
    <link href="<?php echo assets_url();?>
admin/vendor/metisMenu/metisMenu.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="<?php echo assets_url();?>
admin/dist/css/sb-admin-2.css" rel="stylesheet">
    <!-- Morris Charts CSS -->
    <link href="<?php echo assets_url();?>
admin/vendor/morrisjs/morris.css" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href="<?php echo assets_url();?>
admin/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- Grocery Crud -->
    <!-- <?php if (isset($_smarty_tpl->tpl_vars['gc_data']->value->css_files)) {?>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['gc_data']->value->css_files, 'file');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['file']->value) {
?>
    <link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['file']->value;?>
" />
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

    <?php }?> -->

    <!-- List -->
    <link type="text/css" rel="stylesheet" href="<?php echo assets_url();?>
grocery_crud/themes/flexigrid/css/flexigrid.css" />
    <link type="text/css" rel="stylesheet" href="<?php echo assets_url();?>
grocery_crud/css/jquery_plugins/fancybox/jquery.fancybox.css" />
    <link type="text/css" rel="stylesheet" href="<?php echo assets_url();?>
grocery_crud/css/ui/simple/jquery-ui-1.10.1.custom.min.css" />

    <!-- Add -->
    <link type="text/css" rel="stylesheet" href="<?php echo assets_url();?>
grocery_crud/css/ui/simple/jquery-ui-1.10.1.custom.min.css" />
    <link type="text/css" rel="stylesheet" href="<?php echo assets_url();?>
grocery_crud/css/jquery_plugins/file_upload/file-uploader.css" />
    <link type="text/css" rel="stylesheet" href="<?php echo assets_url();?>
grocery_crud/css/jquery_plugins/file_upload/jquery.fileupload-ui.css" />
    <link type="text/css" rel="stylesheet" href="<?php echo assets_url();?>
grocery_crud/css/jquery_plugins/fancybox/jquery.fancybox.css" />
    <link type="text/css" rel="stylesheet" href="<?php echo assets_url();?>
grocery_crud/css/jquery_plugins/file_upload/fileuploader.css" />
    <link type="text/css" rel="stylesheet" href="<?php echo assets_url();?>
grocery_crud/css/jquery_plugins/chosen/chosen.css" />
    <link type="text/css" rel="stylesheet" href="<?php echo assets_url();?>
grocery_crud/css/jquery_plugins/jquery.ui.datetime.css" />
    <link type="text/css" rel="stylesheet" href="<?php echo assets_url();?>
grocery_crud/css/jquery_plugins/jquery-ui-timepicker-addon.css" />
    <link type="text/css" rel="stylesheet" href="<?php echo assets_url();?>
grocery_crud/themes/flexigrid/css/flexigrid.css" />
    

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <?php echo '<script'; ?>
 src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"><?php echo '</script'; ?>
>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Administrator</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <!-- <?php echo var_dump($_smarty_tpl->tpl_vars['a_session']->value);?>
 -->
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> <?php echo $_smarty_tpl->tpl_vars['a_session']->value['name'];?>
</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="<?php echo base_url();?>
admin/logout"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">

                        <li class="sidebar-search">
                            <!-- <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                    <button class="btn btn-default" type="button">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>
                            </div> -->
                            <!-- /input-group -->
                        </li>

                        <li>
                            <a href="<?php echo base_url();?>
admin/dashboard"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-users fa-fw"></i> Member<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?php echo base_url();?>
admin/user/index/add"><i class="fa fa-pencil fa-fw"></i> Add Member</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url();?>
admin/user"><i class="fa fa-list fa-fw"></i> List Member</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-calendar fa-fw"></i> Event<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?php echo base_url();?>
admin/event/index/add"><i class="fa fa-pencil fa-fw"></i> Add Event</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url();?>
admin/event"><i class="fa fa-list fa-fw"></i> List Event</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-rss-square fa-fw"></i> Blog<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?php echo base_url();?>
admin/blog/index/add"><i class="fa fa-pencil fa-fw"></i> Add Blog</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url();?>
admin/blog/index/2"><i class="fa fa-android fa-fw"></i> Android Mobile Apps</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url();?>
admin/blog/index/1"><i class="fa fa-magic fa-fw"></i> Design UI/UX</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url();?>
admin/blog/index/3"><i class="fa fa-linux fa-fw"></i> Operating System</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url();?>
admin/blog/index/4"><i class="fa fa-bug fa-fw"></i> Security Network</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url();?>
admin/blog/index/5"><i class="fa fa-html5 fa-fw"></i> Website Development</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-briefcase fa-fw"></i> Product<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?php echo base_url();?>
admin/product/index/add"><i class="fa fa-pencil fa-fw"></i> Add Product</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url();?>
admin/product/index/2"><i class="fa fa-android fa-fw"></i> Android Mobile Apps</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url();?>
admin/product/index/1"><i class="fa fa-magic fa-fw"></i> Design UI/UX</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url();?>
admin/product/index/3"><i class="fa fa-linux fa-fw"></i> Operating System</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url();?>
admin/product/index/4"><i class="fa fa-bug fa-fw"></i> Security Network</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url();?>
admin/product/index/5"><i class="fa fa-html5 fa-fw"></i> Website Development</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="<?php echo base_url();?>
admin/logout"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">
            <?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
                <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

            <?php }?>
            <br>
            <section class="content">
                <div class="row">
                <?php if (isset($_smarty_tpl->tpl_vars['main_content']->value)) {?>
                  <?php echo $_smarty_tpl->tpl_vars['main_content']->value;?>

                <?php }?>
                <?php if (isset($_smarty_tpl->tpl_vars['gc_data']->value->output)) {?>
                  <section class="col-lg-12">
                     <?php echo $_smarty_tpl->tpl_vars['gc_data']->value->output;?>

                  </section>
                <?php }?>
                </div>
                <!-- /.row -->
            </section>
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <?php echo '<script'; ?>
 src="<?php echo assets_url();?>
admin/vendor/jquery/jquery.min.js"><?php echo '</script'; ?>
>

    <!-- Bootstrap Core JavaScript -->
    <?php echo '<script'; ?>
 src="<?php echo assets_url();?>
admin/vendor/bootstrap/js/bootstrap.min.js"><?php echo '</script'; ?>
>

    <!-- Metis Menu Plugin JavaScript -->
    <?php echo '<script'; ?>
 src="<?php echo assets_url();?>
admin/vendor/metisMenu/metisMenu.min.js"><?php echo '</script'; ?>
>

    <!-- Morris Charts JavaScript -->
    <?php echo '<script'; ?>
 src="<?php echo assets_url();?>
admin/vendor/raphael/raphael.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo assets_url();?>
admin/vendor/morrisjs/morris.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo assets_url();?>
admin/data/morris-data.js"><?php echo '</script'; ?>
>

    <!-- Custom Theme JavaScript -->
    <?php echo '<script'; ?>
 src="<?php echo assets_url();?>
admin/dist/js/sb-admin-2.js"><?php echo '</script'; ?>
>

    <!-- Bootstrap WYSIHTML5 -->
    <?php echo '<script'; ?>
 src="<?php echo assets_url();?>
admin/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"><?php echo '</script'; ?>
>
    <!-- Slimscroll -->
    <?php echo '<script'; ?>
 src="<?php echo assets_url();?>
admin/plugins/slimScroll/jquery.slimscroll.min.js"><?php echo '</script'; ?>
>

    <!-- Sparkline -->
    <?php echo '<script'; ?>
 src="<?php echo assets_url();?>
admin/plugins/sparkline/jquery.sparkline.min.js"><?php echo '</script'; ?>
>
    <!-- Slimscroll -->
    <?php echo '<script'; ?>
 src="<?php echo assets_url();?>
admin/plugins/slimScroll/jquery.slimscroll.min.js"><?php echo '</script'; ?>
>
    <!-- FastClick -->
    <?php echo '<script'; ?>
 src="<?php echo assets_url();?>
admin/plugins/fastclick/fastclick.js"><?php echo '</script'; ?>
>
    
    <!-- Grocery Crud -->
    <!-- <?php if (isset($_smarty_tpl->tpl_vars['gc_data']->value->js_files)) {?>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['gc_data']->value->js_files, 'file');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['file']->value) {
?>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['file']->value;?>
"><?php echo '</script'; ?>
>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

    <?php }?> -->

    <!-- List -->
    <!-- <?php echo '<script'; ?>
 src="<?php echo assets_url();?>
grocery_crud/js/jquery-1.11.1.min.js"><?php echo '</script'; ?>
> -->
    <?php echo '<script'; ?>
 src="<?php echo assets_url();?>
grocery_crud/js/jquery_plugins/jquery.noty.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo assets_url();?>
grocery_crud/js/jquery_plugins/config/jquery.noty.config.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo assets_url();?>
grocery_crud/js/common/lazyload-min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo assets_url();?>
grocery_crud/js/common/list.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo assets_url();?>
grocery_crud/themes/flexigrid/js/cookies.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo assets_url();?>
grocery_crud/themes/flexigrid/js/flexigrid.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo assets_url();?>
grocery_crud/js/jquery_plugins/jquery.form.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo assets_url();?>
grocery_crud/js/jquery_plugins/jquery.numeric.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo assets_url();?>
grocery_crud/themes/flexigrid/js/jquery.printElement.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo assets_url();?>
grocery_crud/js/jquery_plugins/jquery.fancybox-1.3.4.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo assets_url();?>
grocery_crud/js/jquery_plugins/jquery.easing-1.3.pack.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo assets_url();?>
grocery_crud/js/jquery_plugins/ui/jquery-ui-1.10.3.custom.min.js"><?php echo '</script'; ?>
>

    <!-- Add -->
    <!-- <?php echo '<script'; ?>
 src="<?php echo assets_url();?>
grocery_crud/js/jquery-1.11.1.min.js"><?php echo '</script'; ?>
> -->
    <?php echo '<script'; ?>
 src="<?php echo assets_url();?>
grocery_crud/js/jquery_plugins/ui/jquery-ui-1.10.3.custom.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo assets_url();?>
grocery_crud/js/jquery_plugins/config/jquery.datepicker.config.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo assets_url();?>
grocery_crud/js/jquery_plugins/tmpl.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo assets_url();?>
grocery_crud/js/jquery_plugins/load-image.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo assets_url();?>
grocery_crud/js/jquery_plugins/jquery.iframe-transport.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo assets_url();?>
grocery_crud/js/jquery_plugins/jquery.fileupload.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo assets_url();?>
grocery_crud/js/jquery_plugins/config/jquery.fileupload.config.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo assets_url();?>
grocery_crud/js/jquery_plugins/jquery.fancybox-1.3.4.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo assets_url();?>
grocery_crud/js/jquery_plugins/jquery.easing-1.3.pack.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo assets_url();?>
grocery_crud/js/jquery_plugins/config/jquery.fancybox.config.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo assets_url();?>
grocery_crud/js/jquery_plugins/jquery.chosen.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo assets_url();?>
grocery_crud/js/jquery_plugins/config/jquery.chosen.config.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo assets_url();?>
grocery_crud/js/jquery_plugins/jquery-ui-timepicker-addon.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo assets_url();?>
grocery_crud/js/jquery_plugins/config/jquery-ui-timepicker-addon.config.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo assets_url();?>
grocery_crud/themes/flexigrid/js/jquery.form.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo assets_url();?>
grocery_crud/js/jquery_plugins/jquery.form.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo assets_url();?>
grocery_crud/themes/flexigrid/js/flexigrid-add.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo assets_url();?>
grocery_crud/js/jquery_plugins/jquery.noty.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo assets_url();?>
grocery_crud/js/jquery_plugins/config/jquery.noty.config.js"><?php echo '</script'; ?>
>

</body>

</html>
<?php }
}
