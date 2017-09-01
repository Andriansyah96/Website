<?php
/* Smarty version 3.1.30, created on 2017-08-25 23:35:55
  from "C:\wamp64\www\db_poros\application\views\templates\public\content_home.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59a0b45bd60751_13002728',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '73a371ac0c8b69872c5653259e54c6ea03f32206' => 
    array (
      0 => 'C:\\wamp64\\www\\db_poros\\application\\views\\templates\\public\\content_home.html',
      1 => 1503704154,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59a0b45bd60751_13002728 (Smarty_Internal_Template $_smarty_tpl) {
?>
    <!-- Home Section
    ================================================== -->
    <div id="tf-home" class="slider">
        <div class="overlay"> <!-- Overlay Color -->
            <div id="carousel-example-generic" class="carousel slide carousel-fade" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['event']->value, 'eve');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['eve']->value) {
?>
                    <li data-target="#carousel-example-generic" data-slide-to="<?php echo $_smarty_tpl->tpl_vars['eve']->value->id-1;?>
" class="<?php if (($_smarty_tpl->tpl_vars['eve']->value->id-1) == 0) {?> active <?php }?>"></li>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                </ol>

                  <!-- Wrapper for slides -->
                  <div class="carousel-inner" role="listbox">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['event']->value, 'eve');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['eve']->value) {
?>
                    <div class="item <?php if ($_smarty_tpl->tpl_vars['eve']->value->id == 1) {?> active <?php }?>">
                        <?php if (!empty($_smarty_tpl->tpl_vars['eve']->value-'photo')) {?>
                        <img style="width: 1534px; height: 675px;" src="<?php echo assets_url();?>
uploads/images/<?php echo $_smarty_tpl->tpl_vars['eve']->value->photo;?>
" alt="...">
                        <?php } else { ?>
                        <img style="width: 1534px; height: 675px;" src="" alt="...">
                        <div class="carousel-caption">
                            <div class="content-heading text-center">
                                <h1><?php echo $_smarty_tpl->tpl_vars['eve']->value->title;?>
</h1>
                                <p class="lead"><?php echo $_smarty_tpl->tpl_vars['website_tag']->value;?>
</p>
                                <a href="#tf-works" class="scroll goto-btn text-uppercase">View more</a>
                            </div>
                        </div>
                        <?php }?>
                    </div>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                  </div>
            </div>
        </div><!-- End Overlay Color -->
    </div>
    <!-- Intro Section
    ================================================== -->
    <div id="tf-intro">
        <div class="container"> <!-- container -->
            <div class="row"> <!-- row -->

                <div class="col-md-8 col-md-offset-2"> 
                    <img src="<?php echo assets_url();?>
front/img/logo-w.png" class="intro-logo img-responsive" alt="free-template"> <!-- Your company logo in white -->
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    <!-- <p><?php echo var_dump($_smarty_tpl->tpl_vars['this']->value->data['m_session']);?>
</p> -->
                </div>
                
            </div><!-- end row -->
        </div><!-- end container -->
    </div>


    <!-- Department Section
    ================================================== -->
    <div id="tf-department">

        <div class="container">
            <div class="section-header">
                <h2>Department of <span class="highlight"><strong>POROS</strong></span></h2>
                <h5><em><?php echo $_smarty_tpl->tpl_vars['website_tag']->value;?>
</em></h5>
                <div class="fancy"><span><img src="<?php echo assets_url();?>
front/img/favicon.ico" alt="..."></span></div>
            </div>
        </div>

        <div id="feature" class="gray-bg"> <!-- fullwidth gray background -->
            <div class="container"> <!-- container -->
                <div class="row" role="tabpanel"> <!-- row -->
                    <div class="col-md-4 col-md-offset-1"> <!-- tab menu col 4 -->

                        <ul class="features nav nav-pills nav-stacked" role="tablist">
                            <li role="presentation" class="active"> <!-- feature tab menu #2 -->
                                <a href="#f2" aria-controls="f2" role="tab" data-toggle="tab">
                                    <span class="fa fa-share-alt-square"></span>
                                    <?php echo $_smarty_tpl->tpl_vars['department']->value[1]->name;?>
<br>
                                </a>
                            </li>
                            <li role="presentation"> <!-- feature tab menu #3 -->
                                <a href="#f3" aria-controls="f3" role="tab" data-toggle="tab">
                                    <span class="fa fa-rocket"></span>
                                    <?php echo $_smarty_tpl->tpl_vars['department']->value[2]->name;?>
<br>
                                </a>
                            </li>
                            <li role="presentation">  <!-- feature tab menu #1 -->
                                <a href="#f1" aria-controls="f1" role="tab" data-toggle="tab">
                                    <span class="fa fa-laptop"></span>
                                    <?php echo $_smarty_tpl->tpl_vars['department']->value[0]->name;?>
<br>
                                </a>
                            </li>
                        </ul>

                    </div><!-- end tab menu col 4 -->

                    <div class="col-md-6"> <!-- right content col 6 -->
                        <!-- Tab panes -->
                        <div class="tab-content features-content"> <!-- tab content wrapper -->
                            <div role="tabpanel" class="tab-pane fade in active" id="f1"> <!-- feature #1 content open -->
                                <h4><?php echo $_smarty_tpl->tpl_vars['department']->value[0]->name;?>
</h4>
                                <p><?php echo $_smarty_tpl->tpl_vars['department']->value[0]->description;?>
</p>
                                <img src="<?php echo assets_url();?>
front/img/tab01.png" class="img-responsive" alt="...">
                            </div>                            
                            <div role="tabpanel" class="tab-pane fade" id="f2"> <!-- feature #2 content -->
                                <h4><?php echo $_smarty_tpl->tpl_vars['department']->value[1]->name;?>
</h4>
                                <p><?php echo $_smarty_tpl->tpl_vars['department']->value[1]->description;?>
</p>
                                <img src="<?php echo assets_url();?>
front/img/tab02.png" class="img-responsive" alt="...">
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="f3"> <!-- feature #3 content -->
                                <h4><?php echo $_smarty_tpl->tpl_vars['department']->value[2]->name;?>
</h4>
                                <p><?php echo $_smarty_tpl->tpl_vars['department']->value[2]->description;?>
</p>
                                <img src="<?php echo assets_url();?>
front/img/tab03.png" class="img-responsive" alt="...">
                            </div>
                        </div> <!-- end tab content wrapper -->
                    </div><!-- end right content col 6 -->

                </div> <!-- end row -->
            </div> <!-- end container -->
        </div><!-- end fullwidth gray background -->
    </div>

    <!-- Division Section
    ================================================== -->
    <div id="tf-division">
        <div class="container"> <!-- container -->

            <div class="section-header">
                <h2>Division of <span class="highlight"><strong>POROS</strong></span></h2>
                <h5><em>Good organization has good department</em></h5>
                <div class="fancy"><span><img src="<?php echo assets_url();?>
front/img/favicon.ico" alt="..."></span></div>
            </div>

            <div class="row"> <!-- row -->
                
                <div class="col-md-6 text-right">  <!-- Left Content Col 6 -->
                    <div class="media service"> <!-- Service #1 -->
                        <div class="media-body">
                            <h4 class="media-heading"><?php echo $_smarty_tpl->tpl_vars['division']->value[1]->name;?>
</h4>
                            <p><?php echo $_smarty_tpl->tpl_vars['division']->value[1]->description;?>
</p>
                        </div>
                        <div class="media-right media-middle">
                            <i class="fa fa-android"></i>
                        </div>
                    </div><!-- End Service #1 -->

                    <div class="media service"> <!-- Service #2 -->
                        <div class="media-body">
                            <h4 class="media-heading"><?php echo $_smarty_tpl->tpl_vars['division']->value[0]->name;?>
</h4>
                            <p><?php echo $_smarty_tpl->tpl_vars['division']->value[0]->description;?>
</p>
                        </div>
                        <div class="media-right media-middle">
                            <i class="fa fa-magic"></i>
                        </div>
                    </div><!-- End Service #2 -->

                    <div class="media service"> <!-- Service #3 -->
                        <div class="media-body">
                            <h4 class="media-heading"><?php echo $_smarty_tpl->tpl_vars['division']->value[2]->name;?>
</h4>
                            <p><?php echo $_smarty_tpl->tpl_vars['division']->value[2]->description;?>
</p>
                        </div>
                        <div class="media-right media-middle">
                            <i class="fa fa-linux"></i>
                        </div>
                    </div> <!-- End Service #3 -->
                </div> <!-- End Left Content Col 6 -->

                <div class="col-md-6"> <!-- Right Content Col 6 -->
                    <div class="media service"> <!-- Service #4 -->
                        <div class="media-left media-middle">
                            <i class="fa fa-bug"></i>
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading"><?php echo $_smarty_tpl->tpl_vars['division']->value[3]->name;?>
</h4>
                            <p><?php echo $_smarty_tpl->tpl_vars['division']->value[3]->description;?>
</p>
                        </div>
                    </div><!-- end Service #4 -->

                    <div class="media service"> <!-- Service #5 -->
                        <div class="media-left media-middle">
                            <i class="fa fa-html5"></i>
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading"><?php echo $_smarty_tpl->tpl_vars['division']->value[4]->name;?>
</h4>
                            <p><?php echo $_smarty_tpl->tpl_vars['division']->value[4]->description;?>
</p>
                        </div>
                    </div> <!-- end Service #5 -->
                </div><!-- end Right Content Col 6 -->
                
            </div><!-- end row -->

        </div><!-- end container -->
    </div>

    

    <!-- Team/Member Section
    ================================================== -->
    <div id="tf-member">
        <div class="container"> <!-- container -->
            <div class="section-header">
                <h2>Awesome People Behind <span class="highlight"><strong>POROS '17</strong></span></h2>
                <h5><em><?php echo $_smarty_tpl->tpl_vars['website_tag']->value;?>
</em></h5>
                <div class="fancy"><span><img src="<?php echo assets_url();?>
front/img/favicon.ico" alt="..."></span></div>
            </div>

             <div id="team" class="owl-carousel owl-theme text-center"> <!-- team carousel wrapper -->

                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['official']->value, 'ofc');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['ofc']->value) {
?>
                <div class="item"><!-- Team #1 -->
                    <div class="hover-bg"> <!-- Team Wrapper -->
                        <div class="hover-text off"> <!-- Hover Description -->
                            <p><?php echo $_smarty_tpl->tpl_vars['ofc']->value->quote;?>
</p>
                        </div><!-- End Hover Description -->
                        <img src="<?php echo assets_url();?>
uploads/images/<?php echo $_smarty_tpl->tpl_vars['ofc']->value->id_user->photo;?>
" alt="official-photo" class="img-responsive"> <!-- Team Image -->
                        <div class="team-detail text-center">
                            <h3><?php echo $_smarty_tpl->tpl_vars['ofc']->value->id_user->name;?>
</h3>
                            <p class="text-uppercase"><?php echo $_smarty_tpl->tpl_vars['ofc']->value->position;?>
</p>
                            <ul class="list-inline social"> 
                                <li><a href="#" class="fa fa-facebook"></a></li> <!-- facebook link here -->
                                <li><a href="#" class="fa fa-twitter"></a></li> <!-- twitter link here -->
                                <li><a href="#" class="fa fa-github"></a></li> <!-- github plus link here -->
                            </ul>
                        </div>
                    </div><!-- End Team Wrapper -->
                </div><!-- End Team #1 -->
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>


            </div> <!-- end team carousel wrapper -->

        </div> <!-- container -->
    </div>

    

    <!-- Product Section
    ================================================== -->
    <div id="tf-product">
        <div class="container">
            <div class="section-header">
                <h2>Product of <span class="highlight"><strong>POROS</strong></span></h2>
                <h5><em><?php echo $_smarty_tpl->tpl_vars['website_tag']->value;?>
</em></h5>
                <div class="fancy"><span><img src="<?php echo assets_url();?>
front/img/favicon.ico" alt="..."></span></div>
            </div>

            <div class="text-center">
                <ul class="list-inline cat"> <!-- Portfolio Filter Categories -->
                    <li><a href="#" data-filter="*" class="active">All</a></li>
                    <li><a href="#" data-filter=".1">UI/UX</a></li>
                    <li><a href="#" data-filter=".2">Android</a></li>
                    <li><a href="#" data-filter=".3">OS</a></li>
                    <li><a href="#" data-filter=".4">Security</a></li>
                    <li><a href="#" data-filter=".5">Webiste</a></li>
                </ul><!-- End Portfolio Filter Categories -->
            </div>

        </div><!-- End Container -->

        <div class="container"> <!-- container -->
             <div id="itemsWorkThree" class="row text-center"> <!-- Portfolio Wrapper Row -->

                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value, 'pdc');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['pdc']->value) {
?>
                <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 brand <?php echo $_smarty_tpl->tpl_vars['pdc']->value->id_div->id;?>
"> <!-- Works #1 col 3 -->
                    <div class="box"> 
                        <div class="hover-bg">
                            <div class="hover-text off">
                                <a title="<?php echo $_smarty_tpl->tpl_vars['pdc']->value->name;?>
" href="<?php echo assets_url();?>
uploads/images/<?php echo $_smarty_tpl->tpl_vars['pdc']->value->photo;?>
" data-lightbox-gallery="gallery1" data-lightbox-hidpi="<?php echo assets_url();?>
uploads/images/<?php echo $_smarty_tpl->tpl_vars['pdc']->value->photo;?>
">
                                    <i class="fa fa-expand"></i>
                                </a>
                                <a onclick="window.open('<?php echo $_smarty_tpl->tpl_vars['pdc']->value->link;?>
')"><i class="fa fa-chain"></i></a> <!-- change # with your url to link it to another page -->
                            </div> 
                            <img src="<?php echo assets_url();?>
uploads/images/<?php echo $_smarty_tpl->tpl_vars['pdc']->value->photo;?>
" class="img-responsive" alt="Image"> <!-- Portfolio Image -->
                        </div>
                        <h5><?php echo $_smarty_tpl->tpl_vars['pdc']->value->name;?>
<br><small><em><?php echo $_smarty_tpl->tpl_vars['pdc']->value->id_div->name;?>
</em></small></h5>
                    </div>
                </div><!-- end Works #1 col 3 -->
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>


            </div>
        </div>
    </div>


    <!--  Blog Section
    ================================================== -->
    <div id="tf-blog">
        <div class="container"> <!-- container -->
            <div class="section-header">
                <h2>Latest from the <span class="highlight"><strong>Blog</strong></span></h2>
                <h5><em>We design and build functional and beautiful websites</em></h5>
                <div class="fancy"><span><a href="<?php echo base_url();?>
blog/page"><img src="<?php echo assets_url();?>
front/img/favicon.ico" alt="..."></a></span></div>
            </div>
        </div>

        <div id="blog-post" class="gray-bg"> <!-- fullwidth gray background -->
            <div class="container"><!-- container -->

                <div class="row"> <!-- row -->
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['blog']->value, 'blg');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['blg']->value) {
?>
                    <div class="col-md-6"> <!-- Left content col 6 -->

                        <div class="post-wrap"> <!-- Post Wrapper -->
                            <div class="media post"> <!-- post wrap -->
                                <div class="media-left"> 
                                    <a href="<?php echo base_url();?>
blog/detail/<?php echo $_smarty_tpl->tpl_vars['blg']->value->id;?>
"> <!-- link to your post single page -->
                                      <img class="media-object" src="http://placehold.it/120x150" alt="..."> <!-- Your Post Image -->
                                    </a>
                                </div>
                                <div class="media-body">
                                    <p class="small"><?php echo $_smarty_tpl->tpl_vars['blg']->value->created_at;?>
</p>
                                    <a href="<?php echo base_url();?>
blog/detail/<?php echo $_smarty_tpl->tpl_vars['blg']->value->id;?>
">
                                        <h5 class="media-heading"><strong><?php echo $_smarty_tpl->tpl_vars['blg']->value->title;?>
</strong></h5>
                                    </a>
                                    <p><?php echo $_smarty_tpl->tpl_vars['blg']->value->description;?>
 </p>
                                </div>
                            </div><!-- end post wrap -->
                            
                            <div class="post-meta"> <!-- Meta details -->
                                <ul class="list-inline metas pull-left"> <!-- post metas -->
                                    <li><a href="">by <?php echo $_smarty_tpl->tpl_vars['blg']->value->id_user->name;?>
</a></li> <!-- meta author -->
                                    <li><a href="<?php echo base_url();?>
blog/detail/<?php echo $_smarty_tpl->tpl_vars['blg']->value->id;?>
">20 Comments</a></li> <!-- meta comments -->
                                    <li><a href="<?php echo base_url();?>
blog/detail/<?php echo $_smarty_tpl->tpl_vars['blg']->value->id;?>
">Read More</a></li> <!-- read more link -->
                                </ul>
                                <ul class="list-inline meta-detail pull-right"> <!-- user meta interaction -->
                                    <li><a href="" style="pointer-events: none; cursor: default;"><i class="fa fa-heart"></i></a> <?php echo $_smarty_tpl->tpl_vars['blg']->value->like;?>
</li> <!-- like button -->
                                    <li><i class="fa fa-eye"></i> <?php echo $_smarty_tpl->tpl_vars['blg']->value->views;?>
</li> <!-- no. of views -->
                                </ul>
                            </div><!-- end Meta details --> 
                        </div><!-- end Post Wrapper -->

                    </div> <!-- end Left content col 6 -->
                    <?php continue 1;?>

                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>


                </div><!-- end row -->

                <div class="text-center">
                    <a href="<?php echo base_url();?>
blog/page" class="btn btn-primary tf-btn color">View More</a>
                </div>                
            </div><!-- end container -->
        </div> <!-- end fullwidth gray background -->
    </div>

    <!-- Contact Section
    ================================================== -->
    <div id="tf-contact">

        <div class="container"> <!-- container -->
            <div class="section-header">
                <h2>Message To <span class="highlight"><strong>POROS</strong></span></h2>
                <h5><em><?php echo $_smarty_tpl->tpl_vars['website_tag']->value;?>
</em></h5>
                <div class="fancy"><span><a href="<?php echo base_url();?>
home"><img src="<?php echo assets_url();?>
front/img/favicon.ico" alt="..."></a></span></div>
            </div>
        </div><!-- end container -->

        <div class="container"><!-- container -->
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

            <div class="row text-center"> <!-- contact form outer row with centered text-->
                <div class="col-md-10 col-md-offset-1"> <!-- col 10 with offset 1 to centered -->
                    <form action="<?php echo base_url();?>
message/add_message" method="post" class="form-group"> <!-- form wrapper -->

                        <div class="row"> <!-- nested inner row -->
                            
                            <!-- Input your id -->
                            <div class="col-md-6">
                                <div class="form-group"> <!-- Your email input -->
                                    <input name="id_user" type="hidden" autocomplete="off" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['u_session']->value['id'];?>
">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>

                            <!-- Input your email -->
                            <div class="col-md-6">
                                <div class="form-group"> <!-- Your email input -->
                                    <input name="email" type="hidden" autocomplete="off" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['u_session']->value['email'];?>
">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>

                            <!-- Input your Phone no. -->
                            <div class="col-md-6">
                                <div class="form-group"> <!-- Your email input -->
                                    <input name="mobile" type="hidden" autocomplete="off" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['u_session']->value['mobile'];?>
">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>

                        </div><!-- end nested inner row -->

                        <!-- Message Text area -->
                        <div class="form-group"> <!-- Your email input -->
                            <textarea name="message" class="form-control" rows="7" placeholder="Tell Us Something..." required data-validation-required-message="Please enter a message." <?php if ($_smarty_tpl->tpl_vars['u_logged_in']->value != 'true') {?> disabled <?php }?>></textarea>
                            <p class="help-block text-danger"></p>
                            <div id="success"></div>
                        </div>
                        <input type="submit" class="btn btn-primary tf-btn color" value="Send Message">

                    </form><!-- end form wrapper -->

                </div><!-- end col 10 with offset 1 to centered -->
            </div> <!-- end contact form outer row with centered text-->

        </div><!-- end container -->

    </div><?php }
}
