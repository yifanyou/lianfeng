<?php get_header(); ?>
<section id="slider" class="text-center">
<?php 
$category = get_the_category();
$cat_ID = $category[0]->cat_ID;
if( get_field('top-images',category_.$cat_ID) ): ?>
<img src="<?php the_field('top-images',category_.$cat_ID)?>">
<?php else:?>
<img src="<?php bloginfo('template_url')?>/images/s1.jpg" >
<?php endif; ?>
</section>
<?php the_crumbs(); ?>
<Section id="content">
<div class="container">
<div class="row">

<div class="col-md-9 col-sm-9 col-xs-12 wow fadeInLeft delay300">
<div class="content">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<div class="single-header">
<h1><?php the_title(); ?></h1>
<div class="single-meta">
<span class="time"><?php _e('时间','xs')?>：<?php the_time('Y-n-j'); ?></span>
<span class="author hidden-xs"><?php _e('作者','xs')?>：<?php the_author(); ?></span>
<span class="bdsharebuttonbox"><span class="pull-left"><?php _e('分享到','xs')?>：</span><a href="#" class="bds_weixin" data-cmd="weixin" ></a><a href="#" class="bds_tsina" data-cmd="tsina"></a><a href="#" class="bds_qzone" data-cmd="qzone" ></a><a href="#" class="bds_sqq" data-cmd="sqq" ></a><a href="#" class="bds_more" data-cmd="more"></a></span>
<script>window._bd_share_config={"common":{"bdSnsKey":{},"bdText":"","bdMini":"2","bdMiniList":false,"bdPic":"","bdStyle":"1","bdSize":"24"},"share":{}};with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion='+~(-new Date()/36e5)];</script>
</div>
</div>
<div class="entry-content">
<?php the_content();?> 
</div>
</article>
<div class="single-info">
<div class="post-tags pull-left"><?php the_tags()?></div>
<div class="pull-right"><?php _e('版权所有','xs')?>：<?php bloginfo('url')?> <?php _e('转载请注明出处','xs')?></div>
</div>
<?php endwhile;  endif;?>
</div>
</div>
<div class="col-md-3 col-sm-3 hidden-xs wow fadeInRight delay300">
<div class="sidebar">
<?php get_sidebar();?>
</div>
</div>
</div>
</div>
</section>
<?php get_footer(); ?>