<?php
/* Smarty version 3.1.30, created on 2017-06-27 19:36:17
  from "C:\wamp64\www\db_poros\application\views\templates\public\content_login.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5952b3b1d060a1_48226882',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e41693ed36e876f36fd087171c729ee97e4e97b2' => 
    array (
      0 => 'C:\\wamp64\\www\\db_poros\\application\\views\\templates\\public\\content_login.html',
      1 => 1498592136,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5952b3b1d060a1_48226882 (Smarty_Internal_Template $_smarty_tpl) {
?>
    <!-- Contact Section
    ================================================== -->
    <div id="tf-contact" class="contact">

        <div class="container"> <!-- container -->
            <div class="section-header">
                <h2>Sign in To <span class="highlight"><strong>POROS</strong></span></h2>
                <h5><em><?php echo $_smarty_tpl->tpl_vars['website_tag']->value;?>
</em></h5>
                <div class="fancy"><span><a href="<?php echo base_url();?>
home"><img src="<?php echo assets_url();?>
front/img/favicon.ico" alt="..."></a></span></div>
            </div>
            
            <div class="row text-center"> <!-- contact form outer row with centered text-->

                <div class="col-md-6 col-md-offset-3">
                    <form action="<?php echo base_url();?>
home/check_login" method="post" class="form" novalidate> <!-- form wrapper -->
                        <div class="form-group"> <!-- Your name input -->
                            <input name="email" type="email" autocomplete="off" class="form-control" placeholder="Your Email *" required data-validation-required-message="Please enter your email address.">
                            <p class="help-block text-danger"></p>
                        </div>

                        <div class="form-group"> <!-- Your email input -->
                            <input name="password" type="password" autocomplete="off" class="form-control" placeholder="Your Password *" required data-validation-required-message="Please enter your password.">
                            <p class="help-block text-danger"></p>
                        </div>

                        <input type="submit" name="submit" class="btn btn-primary tf-btn color" value="Sign In">
                    </form>
                </div>

            </div> <!-- end contact form outer row with centered text-->

            <div class="row"> <!-- outer row -->
                <div class="col-md-10 col-md-offset-1"> <!-- col 10 with offset 1 to centered -->
                    <div class="row"> <!-- nested row -->

                        <!-- contact detail using col 4 -->
                        <div class="col-md-4">  
                            <div class="contact-detail">
                                <i class="fa fa-map-marker"></i>
                                <h4><?php echo $_smarty_tpl->tpl_vars['poros_address']->value;?>
</h4> <!-- address -->
                            </div>
                        </div>
                        <!-- contact detail using col 4 -->
                        <div class="col-md-4">
                            <div class="contact-detail">
                                <i class="fa fa-envelope-o"></i>
                                <h4><?php echo $_smarty_tpl->tpl_vars['poros_email']->value;?>
</h4><!-- email add -->
                            </div>
                        </div>

                        <!-- contact detail using col 4 -->
                        <div class="col-md-4">
                            <div class="contact-detail">
                                <i class="fa fa-phone"></i>
                                <h4><?php echo $_smarty_tpl->tpl_vars['poros_mobile']->value;?>
</h4> <!-- phone no. -->
                            </div>
                        </div>

                    </div> <!-- end nested row -->
                </div> <!-- end col 10 with offset 1 to centered -->
            </div><!-- end outer row -->

        </div><!-- end container -->

    </div><?php }
}
