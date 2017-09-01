<?php
/* Smarty version 3.1.30, created on 2017-07-06 11:32:52
  from "C:\wamp64\www\db_poros\application\views\templates\public\content_blog_detail.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_595e1fe46026b0_82991318',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5792d39505c73f4444fea34d4196e5395abb7e3f' => 
    array (
      0 => 'C:\\wamp64\\www\\db_poros\\application\\views\\templates\\public\\content_blog_detail.html',
      1 => 1499340768,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_595e1fe46026b0_82991318 (Smarty_Internal_Template $_smarty_tpl) {
?>
    <!--  Blog Section
    ================================================== -->
    <div id="tf-blog" class="blog-post">
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

        <!-- <?php echo var_dump($_smarty_tpl->tpl_vars['blog']->value);?>
 -->

        <div id="blog-post"> <!-- fullwidth gray background -->
            <div class="container"><!-- container -->

                <div class="row"> <!-- row -->
                    <div class="col-md-6 col-md-offset-1"> <!-- Left Blogrol col 8 -->

                        <div class="post-wrap"> <!-- Post Wrapper -->
                            <p class="small"><?php echo $_smarty_tpl->tpl_vars['blog']->value->created_at;?>
</p>
                            <a href="<?php echo base_url();?>
blog/detail/<?php echo $_smarty_tpl->tpl_vars['blog']->value->id;?>
">
                                <h5 class="media-heading"><strong><?php echo $_smarty_tpl->tpl_vars['blog']->value->title;?>
</strong></h5>
                            </a>

                            <ul class="list-inline metas pull-left"> <!-- post metas -->
                                <li><a href="">by <?php echo $_smarty_tpl->tpl_vars['blog']->value->id_user->name;?>
</a></li> <!-- meta author -->
                            </ul>

                            <?php if (empty($_smarty_tpl->tpl_vars['blog']->value->photo)) {?>
                            <img src="http://placehold.it/800px500" class="img-responsive" alt="...">
                            <?php } else { ?>
                            <img src="<?php echo assets_url();?>
uploads/images/<?php echo $_smarty_tpl->tpl_vars['blog']->value->photo;?>
" class="img-responsive" alt="...">
                            <?php }?>

                            <p><?php echo $_smarty_tpl->tpl_vars['blog']->value->description;?>
</p>

                        </div><!-- end Post Wrapper -->

                        <!-- <?php echo var_dump($_smarty_tpl->tpl_vars['comment']->value);?>
 -->
                        <?php if (!empty($_smarty_tpl->tpl_vars['comment']->value)) {?>
                        <div id="comments" class="comment">
                            <h4 class="text-uppercase">Comment <span class="comments">(<?php echo count($_smarty_tpl->tpl_vars['comment']->value);?>
)</span></h4>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['comment']->value, 'comm');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['comm']->value) {
?>
                            <div class="media comment-block"> <!-- Comment Block #1 -->
                                <div class="media-left media-top">
                                    <a href="#" style="pointer-events: none; cursor: default;">
                                    <?php if (empty($_smarty_tpl->tpl_vars['comm']->value->id_user->photo)) {?>
                                      <img class="img-circle" src="http://placehold.it/90x90" alt="...">
                                    <?php } else { ?>
                                      <img class="img-circle" style="height: 90px; width: 90px;" src="<?php echo assets_url();?>
uploads/images/<?php echo $_smarty_tpl->tpl_vars['comm']->value->id_user->photo;?>
" alt="...">
                                    <?php }?>
                                    </a>
                                </div>
                                <div class="media-body">
                                    <small class="pull-right"><?php echo $_smarty_tpl->tpl_vars['comm']->value->created_at;?>
</small>
                                    <h5 class="media-heading"><?php echo $_smarty_tpl->tpl_vars['comm']->value->id_user->name;?>
 - <a href="#" style="pointer-events: none; cursor: default;"><?php echo $_smarty_tpl->tpl_vars['comm']->value->id_user->email;?>
</a></h5> 
                                    <div class="clearfix"></div>
                                    <?php echo $_smarty_tpl->tpl_vars['comm']->value->comment;?>

                                    <div class="clearfix"></div>
                                </div>
                            </div>
                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                        </div>
                        <?php }?>

                        <!-- <?php echo var_dump($_smarty_tpl->tpl_vars['u_session']->value);?>
 -->
                        <div class="comment">
                            <h4 class="text-uppercase">Leave a Comment</h4>
                            <form action="<?php echo base_url();?>
comment/add_comment/<?php echo $_smarty_tpl->tpl_vars['blog']->value->id;?>
" method="post" id="contact-form" class="form">
                                <div class="row">
                                    <div class="col-md-6">
                                        <input name="user" autocomplete="off" type="hidden" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['u_session']->value['id'];?>
">
                                    </div>
                                    <!-- <div class="col-md-6">
                                        <input name="email" autocomplete="off" type="hidden" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['u_session']->value['email'];?>
">
                                    </div> -->
                                </div>
                                <textarea name="comment" class="form-control" rows="6" placeholder="Your Comment..."></textarea>
                                <button type="submit" class="btn btn-default en-btn">Submit Comment</button>
                            </form>
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
                                            <button class="btn btn-default" type="submit"><span class="fa fa-search"></span></button>
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
                                    <li><a href="#" style="pointer-events: none; cursor: default;" ><span class="fa fa-circle"></span> <?php echo $_smarty_tpl->tpl_vars['div']->value->name;?>
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
                                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['popular_blog']->value, 'p_blog');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['p_blog']->value) {
?>
                                                <a href="<?php echo base_url();?>
blog/detail/<?php echo $_smarty_tpl->tpl_vars['p_blog']->value->id;?>
" class="list-group-item">
                                                    <p class="small"><strong>Created on</strong> <?php echo $_smarty_tpl->tpl_vars['p_blog']->value->created_at;?>
</p>
                                                    <h5 class="media-heading"><strong><?php echo $_smarty_tpl->tpl_vars['p_blog']->value->title;?>
</strong></h5>
                                                    <p class="small"><strong><?php echo $_smarty_tpl->tpl_vars['p_blog']->value->like;?>
 Likes</strong></p>
                                                </a>
                                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                                            </div>
                                        </div>
                                        <div role="tabpanel" class="tab-pane" id="recent"><!-- Recent Posts -->
                                            <div class="list-group">
                                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['recent_blog']->value, 'r_blog');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['r_blog']->value) {
?>
                                                <a href="<?php echo base_url();?>
blog/detail/<?php echo $_smarty_tpl->tpl_vars['r_blog']->value->id;?>
" class="list-group-item">
                                                    <p class="small">You may have not seen this post</p>
                                                    <h5 class="media-heading"><strong><?php echo $_smarty_tpl->tpl_vars['r_blog']->value->title;?>
</strong></h5>
                                                    <p class="small"><strong>Created on </strong><?php echo $_smarty_tpl->tpl_vars['r_blog']->value->created_at;?>
</p>
                                                </a>
                                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                                            </div>
                                        </div>
                                        <div role="tabpanel" class="tab-pane" id="comment"><!-- Comments -->
                                            <div class="list-group">
                                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['recent_comment']->value, 'r_comm');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['r_comm']->value) {
?>
                                                <a href="<?php echo base_url();?>
blog/detail/<?php echo $_smarty_tpl->tpl_vars['r_comm']->value->id_blog->id;?>
" class="list-group-item">
                                                    <p class="small"><?php echo $_smarty_tpl->tpl_vars['r_comm']->value->id_user->name;?>
 <strong>Comments</strong> on: <strong><?php echo $_smarty_tpl->tpl_vars['r_comm']->value->id_blog->title;?>
</strong></p>
                                                    <h5 class="media-heading"><strong><?php echo $_smarty_tpl->tpl_vars['r_comm']->value->comment;?>
</strong></h5>
                                                    <p class="small"><?php echo $_smarty_tpl->tpl_vars['r_comm']->value->created_at;?>
</p>
                                                </a>
                                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div><!-- end right content col 4 -->

                </div><!-- end row -->
                      
            </div><!-- end container -->
        </div> <!-- end fullwidth gray background -->
    </div><?php }
}
