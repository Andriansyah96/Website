<?php
/* Smarty version 3.1.30, created on 2017-06-30 17:36:46
  from "C:\wamp64\www\db_poros\application\views\templates\public\content_category.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59568c2ece1d86_51264647',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f84cdcc73de997507e5d4ee554e3a89ba3e38167' => 
    array (
      0 => 'C:\\wamp64\\www\\db_poros\\application\\views\\templates\\public\\content_category.html',
      1 => 1498844205,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59568c2ece1d86_51264647 (Smarty_Internal_Template $_smarty_tpl) {
?>
    <!--  Blog Section
    ================================================== -->
    <div id="tf-blog" class="blog">
        <div class="container"> <!-- container -->
            <div class="section-header">
                <h2>Latest from the <span class="highlight"><strong>Blog</strong></span></h2>
                <h5><em><?php echo $_smarty_tpl->tpl_vars['website_tag']->value;?>
</em></h5>
                <div class="fancy"><span><a href="<?php echo base_url();?>
home"><img src="<?php echo assets_url();?>
front/img/favicon.ico" alt="..."></a></span></div>
            </div>
        </div>

        <div id="blog-post"> <!-- fullwidth gray background -->
            <div class="container"><!-- container -->
            <!-- <?php echo var_dump($_smarty_tpl->tpl_vars['blog']->value);?>
 -->

                <div class="row"> <!-- row -->
                    <div class="col-md-6 col-md-offset-1"> <!-- Left Blogrol col 8 -->
                    <?php if (!empty($_smarty_tpl->tpl_vars['blog']->value)) {?>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['blog']->value, 'blg');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['blg']->value) {
?>
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
                                    <p class="small"><?php echo $_smarty_tpl->tpl_vars['blg']->value->updated_at;?>
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
                                    <li><a href="#"><i class="fa fa-heart"></i></a> <?php echo $_smarty_tpl->tpl_vars['blg']->value->like;?>
</li> <!-- like button -->
                                    <li><i class="fa fa-eye"></i> <?php echo $_smarty_tpl->tpl_vars['blg']->value->views;?>
</li> <!-- no. of views -->
                                </ul>
                            </div><!-- end Meta details --> 
                        </div><!-- end Post Wrapper -->
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                    <?php }?>

                        <div class="text-left">
                            <nav>
                                <ul class="pagination">
                                    <li>
                                    <?php echo $_smarty_tpl->tpl_vars['pagination']->value;?>

                                    </li>
                                </ul>
                            </nav>
                        </div>   

                    </div> <!-- end Left content col 8 -->

                    <div class="col-md-4"> <!-- Blog Sidebar -->
                        <div class="sidebar">

                            <form action="<?php echo base_url();?>
blog/search" method="get">
                                <div class="widget search"> <!-- Search Widget -->
                                    <div class="input-group">
                                        <input name="keyword" type="text" autocomplete="off" class="form-control" placeholder="Search for...">
                                        <span class="input-group-btn">
                                            <button class="btn btn-default" type="submit" name="btn_search"><span class="fa fa-search"></span></button>
                                        </span>   
                                    </div><!-- /input-group -->
                                </div> <!-- end Search Widget -->
                            </form>

                            <div class="widget categories"> <!-- Category Widget -->
                                <h4 class="text-uppercase">Category</h4>
                                <ul class="list-unstyled bullet-lists">
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['division']->value, 'div');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['div']->value) {
?>
                                    <form action="<?php echo base_url();?>
blog/category" method="get">
                                        <li><input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['div']->value->id;?>
"><span class="fa fa-circle">
                                    </form>
                                    </span> <?php echo $_smarty_tpl->tpl_vars['div']->value->name;?>
</a></li>
                                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                                </ul>
                            </div>

                            <!-- <div class="widget archive">
                                <h4 class="text-uppercase">Archives</h4>
                                <ul class="list-unstyled bullet-lists">
                                    <li><a href="#"><span class="fa fa-circle"></span> March 2015</a></li>
                                    <li><a href="#"><span class="fa fa-circle"></span> February 2015</a></li>
                                    <li><a href="#"><span class="fa fa-circle"></span> January 2015</a></li>
                                    <li><a href="#"><span class="fa fa-circle"></span> December 2015</a></li>
                                    <li><a href="#"><span class="fa fa-circle"></span> November 2015</a></li>
                                    <li><a href="#"><span class="fa fa-circle"></span> October 2015</a></li>
                                    <li><a href="#"><span class="fa fa-circle"></span> September 2015</a></li>
                                </ul>
                            </div> -->

                            <div class="widget post-tab"> <!-- Posts Tab Widget -->
                                <div role="tabpanel">

                                    <!-- Nav tabs -->
                                    <ul class="nav nav-tabs" role="tablist">
                                        <li role="presentation" class="active"><a href="#popular" aria-controls="popular" role="tab" data-toggle="tab">Popular</a></li><!-- Popular Posts -->
                                        <li role="presentation"><a href="#recent" aria-controls="recent" role="tab" data-toggle="tab">Recent</a></li><!-- Recent Posts -->
                                        <li role="presentation"><a href="#comment" aria-controls="comment" role="tab" data-toggle="tab">Comment</a></li><!-- Comments -->
                                    </ul>

                                    <!-- Tab panes -->
                                    <div class="tab-content"> 
                                        <div role="tabpanel" class="tab-pane active" id="popular"><!-- Popular Posts -->
                                            <div class="list-group">
                                                <a href="#" class="list-group-item">
                                                    <p class="small">January 27, 2015</p>
                                                    <h5 class="media-heading"><strong>Condimentum aliquam, mollit magna velit nec et scelerisque</strong></h5>
                                                </a>
                                                <a href="#" class="list-group-item">
                                                    <p class="small">January 14, 2015</p>
                                                    <h5 class="media-heading"><strong>Pellentesque vehicula. Eget sed, dapibus. Vel et scelerisque donec et</strong></h5>
                                                </a>
                                                <a href="#" class="list-group-item">
                                                    <p class="small">Feb 12, 2015</p>
                                                    <h5 class="media-heading"><strong>Et scelerisque vestibulum. Condimentum aliquam, mollit magna velit nec</strong></h5>
                                                </a>
                                                <a href="#" class="list-group-item">
                                                    <p class="small">January 14, 2015</p>
                                                    <h5 class="media-heading"><strong>Scelerisque vestibulum Condimentum aliquam, mollit magna velit nec</strong></h5>
                                                </a>
                                                <a href="#" class="list-group-item">
                                                    <p class="small">December 19, 2015</p>
                                                    <h5 class="media-heading"><strong>Vel donec et scelerisque vestibulum. Condimentum aliquam, mollit magna velit nec</strong></h5>
                                                </a>
                                            </div>
                                        </div>
                                        <div role="tabpanel" class="tab-pane" id="recent"><!-- Recent Posts -->
                                            <div class="list-group">
                                                <a href="#" class="list-group-item">
                                                    <p class="small">January 14, 2015</p>
                                                    <h5 class="media-heading"><strong>Vel donec et scelerisque vestibulum. Condimentum aliquam, mollit magna velit nec</strong></h5>
                                                </a>
                                                <a href="#" class="list-group-item">
                                                    <p class="small">January 14, 2015</p>
                                                    <h5 class="media-heading"><strong>Vel donec et scelerisque vestibulum. Condimentum aliquam, mollit magna velit nec</strong></h5>
                                                </a>
                                                <a href="#" class="list-group-item">
                                                    <p class="small">January 14, 2015</p>
                                                    <h5 class="media-heading"><strong>Vel donec et scelerisque vestibulum. Condimentum aliquam, mollit magna velit nec</strong></h5>
                                                </a>
                                                <a href="#" class="list-group-item">
                                                    <p class="small">January 14, 2015</p>
                                                    <h5 class="media-heading"><strong>Vel donec et scelerisque vestibulum. Condimentum aliquam, mollit magna velit nec</strong></h5>
                                                </a>
                                                <a href="#" class="list-group-item">
                                                    <p class="small">January 14, 2015</p>
                                                    <h5 class="media-heading"><strong>Vel donec et scelerisque vestibulum. Condimentum aliquam, mollit magna velit nec</strong></h5>
                                                </a>
                                            </div>
                                        </div>
                                        <div role="tabpanel" class="tab-pane" id="comment"><!-- Comments -->
                                            <div class="list-group">
                                                <a href="#" class="list-group-item">
                                                    <p class="small">Ms. Lijoy <strong>Comments</strong> on:</p>
                                                    <h5 class="media-heading"><strong>Vel donec et scelerisque vestibulum. Condimentum aliquam, mollit magna velit nec</strong></h5>
                                                </a>
                                                <a href="#" class="list-group-item">
                                                    <p class="small">Coder Expert <strong>Comments</strong> on:</p>
                                                    <h5 class="media-heading"><strong>Pellentesque vehicula. Eget sed, dapibus. Vel et scelerisque donec et</strong></h5>
                                                </a>
                                                <a href="#" class="list-group-item">
                                                    <p class="small">Cool Design <strong>Comments</strong> on:</p>
                                                    <h5 class="media-heading"><strong>Et scelerisque vestibulum. Condimentum aliquam, mollit magna velit nec</strong></h5>
                                                </a>
                                                <a href="#" class="list-group-item">
                                                    <p class="small">Mark Szuckerburg <strong>Comments</strong> on:</p>
                                                    <h5 class="media-heading"><strong>Scelerisque vestibulum Condimentum aliquam, mollit magna velit nec</strong></h5>
                                                </a>
                                                <a href="#" class="list-group-item">
                                                    <p class="small">Ruji <strong>Comments</strong> on:</p>
                                                    <h5 class="media-heading"><strong>Vel donec et scelerisque vestibulum. Condimentum aliquam, mollit magna velit nec</strong></h5>
                                                </a>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div><!-- end right content col 4 -->

                </div>
                       
            </div><!-- end container -->
        </div> <!-- end fullwidth gray background -->
    </div><?php }
}
