<?php
/* Smarty version 3.1.30, created on 2017-07-06 11:32:12
  from "C:\wamp64\www\db_poros\application\views\templates\public\content_blog.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_595e1fbc1d1a46_84374047',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '84c7d42619e40df3ba0be5a590a2cb943706cfac' => 
    array (
      0 => 'C:\\wamp64\\www\\db_poros\\application\\views\\templates\\public\\content_blog.html',
      1 => 1499340731,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_595e1fbc1d1a46_84374047 (Smarty_Internal_Template $_smarty_tpl) {
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
                                    <li><a href="#" style="pointer-events: none; cursor: default;"><i class="fa fa-heart"></i></a> <?php echo $_smarty_tpl->tpl_vars['blg']->value->like;?>
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
                        
                        <!-- <?php echo var_dump($_smarty_tpl->tpl_vars['blog']->value);?>
 -->
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

                </div>
                       
            </div><!-- end container -->
        </div> <!-- end fullwidth gray background -->
    </div><?php }
}
