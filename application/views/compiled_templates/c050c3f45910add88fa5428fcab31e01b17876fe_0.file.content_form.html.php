<?php
/* Smarty version 3.1.30, created on 2017-07-06 15:21:56
  from "C:\wamp64\www\db_poros\application\views\templates\public\content_form.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_595e5594d79ac5_34817837',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c050c3f45910add88fa5428fcab31e01b17876fe' => 
    array (
      0 => 'C:\\wamp64\\www\\db_poros\\application\\views\\templates\\public\\content_form.html',
      1 => 1499354515,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_595e5594d79ac5_34817837 (Smarty_Internal_Template $_smarty_tpl) {
?>
    <!-- Contact Section
    ================================================== -->
    <div id="tf-contact" class="contact">

        <div class="container"> <!-- container -->
            <div class="section-header">
                <h2>Form for <span class="highlight"><strong>title of content</strong></span></h2>
                <h5><em><?php echo $_smarty_tpl->tpl_vars['website_tag']->value;?>
</em></h5>
                <div class="fancy"><span><img src="<?php echo assets_url();?>
front/img/favicon.ico" alt="..."></span></div>
            </div>
            
            <div class="row text-center"> <!-- contact form outer row with centered text-->

                <form action="" method="" class="form" novalidate>
                    <div class="col-md-5 col-md-offset-1">
                        <div class="form-group col-md-6" style="padding-left: 0px;"> <!-- Your name input -->
                            <input type="text" autocomplete="off" class="form-control" placeholder="Your Name *" id="name" required data-validation-required-message="Please enter your name.">
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="form-group"> <!-- Your email input -->
                            <input type="email" autocomplete="off" class="form-control" placeholder="Your Email *" id="email" required data-validation-required-message="Please enter your email address.">
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="form-group"> <!-- Your email input -->
                            <input type="text" autocomplete="off" class="form-control" placeholder="Your Phone No. *" id="phone" required data-validation-required-message="Please enter your phone no.">
                            <p class="help-block text-danger"></p>
                        </div>

                         <!-- Message Text area -->
                        <div class="form-group"> <!-- Your email input -->
                            <textarea class="form-control" rows="7" placeholder="Tell Us Something..." id="message" required data-validation-required-message="Please enter a message."></textarea>
                            <p class="help-block text-danger"></p>
                            <div id="success"></div>
                        </div>
                        <button type="submit" class="btn btn-primary tf-btn color">Send Message</button> <!-- Send button -->
                    </div>

                    <div class="col-md-5">
                        <div class="form-group"> <!-- Your email input -->
                            <input type="file" autocomplete="off" class="form-control" placeholder="Your Phone No. *" id="phone" required data-validation-required-message="Please enter your phone no.">
                            <p class="small">*upload your photo</p>
                        </div>
                    </div>
                </form>

            </div> <!-- end contact form outer row with centered text-->

        </div><!-- end container -->

    </div><?php }
}
