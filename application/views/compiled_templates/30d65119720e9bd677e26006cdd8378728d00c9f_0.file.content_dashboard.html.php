<?php
/* Smarty version 3.1.30, created on 2017-08-16 16:10:58
  from "C:\wamp64\www\db_poros\application\views\templates\admin\content_dashboard.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59946e92d5c125_86063599',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '30d65119720e9bd677e26006cdd8378728d00c9f' => 
    array (
      0 => 'C:\\wamp64\\www\\db_poros\\application\\views\\templates\\admin\\content_dashboard.html',
      1 => 1502899857,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59946e92d5c125_86063599 (Smarty_Internal_Template $_smarty_tpl) {
?>
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Dashboard</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-users fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">
                                    <?php if (empty($_smarty_tpl->tpl_vars['count_of_user']->value)) {?>
                                        0
                                    <?php } else { ?>
                                        <?php echo count($_smarty_tpl->tpl_vars['count_of_user']->value);?>

                                    <?php }?>
                                    </div>
                                    <div>Member</div>
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-green">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-calendar fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">
                                    <?php if (empty($_smarty_tpl->tpl_vars['count_of_event']->value)) {?>
                                        0
                                    <?php } else { ?>
                                        <?php echo count($_smarty_tpl->tpl_vars['count_of_event']->value);?>

                                    <?php }?>
                                    </div>
                                    <div>Event</div>
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-yellow">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-rss-square fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">
                                    <?php if (empty($_smarty_tpl->tpl_vars['count_of_blog']->value)) {?>
                                        0
                                    <?php } else { ?>
                                        <?php echo count($_smarty_tpl->tpl_vars['count_of_blog']->value);?>

                                    <?php }?>
                                    </div>
                                    <div>Blog</div>
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-red">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-briefcase fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">
                                    <?php if (empty($_smarty_tpl->tpl_vars['count_of_product']->value)) {?>
                                        0
                                    <?php } else { ?>
                                        <?php echo count($_smarty_tpl->tpl_vars['count_of_product']->value);?>

                                    <?php }?>
                                    </div>
                                    <div>Product</div>
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <!-- /.row -->

            <div class="row">
                <div class="col-lg-12">
                    <div class="chat-panel panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-comments fa-fw"></i> Message
                            <div class="btn-group pull-right">
                                <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown">
                                    <i class="fa fa-chevron-down"></i>
                                </button>
                                <ul class="dropdown-menu slidedown">
                                    <li>
                                        <a href="<?php echo base_url();?>
admin/dashboard">
                                            <i class="fa fa-refresh fa-fw"></i> Refresh
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <ul class="chat">
                            
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['user_message']->value, 'user_msg');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['user_msg']->value) {
?>
                                <li class="left clearfix">
                                    <span class="chat-img pull-left">
                                        <?php if (empty($_smarty_tpl->tpl_vars['user_msg']->value->photo)) {?>
                                        <img src="http://placehold.it/50/55C1E7/fff" alt="User Avatar" class="img-circle" />
                                        <?php } else { ?>
                                        <img src="<?php echo assets_url();?>
uploads/images/<?php echo $_smarty_tpl->tpl_vars['user_msg']->value->photo;?>
" alt="User Avatar" class="img-circle" />
                                        <?php }?>
                                    </span>
                                    <div class="chat-body clearfix">
                                        <div class="header">
                                            <strong class="primary-font">
                                            <?php if (!empty($_smarty_tpl->tpl_vars['user_msg']->value->id_user)) {?>
                                                <?php echo $_smarty_tpl->tpl_vars['user_msg']->value->id_user->name;?>

                                            <?php } else { ?>
                                                Good people
                                            <?php }?>
                                            </strong>
                                            <small class="pull-right text-muted">
                                                <i class="fa fa-clock-o fa-fw"></i> <?php echo $_smarty_tpl->tpl_vars['user_msg']->value->created_at;?>

                                            </small>
                                        </div>
                                        <p>
                                            <?php echo $_smarty_tpl->tpl_vars['user_msg']->value->message;?>

                                        </p>
                                    </div>
                                </li>
                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                                
                            </ul>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel .message-panel -->
                </div>
                <!-- /.col-lg-4 -->
            </div>
            <!-- /.row --><?php }
}
