<?php get_header(); ?>
<section id="slider" class="text-center">
<?php 
$terms = wp_get_post_terms($post->ID, 'products', array("fields" => "all"));$termsid = $terms[0]->term_taxonomy_id;
if( get_field('top-images',products_.$termsid) ): ?>
<img src="<?php the_field('top-images',products_.$termsid)?>">
<?php else:?>
<img src="<?php bloginfo('template_url')?>/images/s1.jpg" >
<?php endif; ?>
</section>
<?php the_crumbs(); ?>
<Section id="mian" class="mb20">
<div class="container">
<div class="row">
<div class="col-md-9 col-sm-9 col-xs-12 wow fadeInLeft delay300">
<div class="content">
<div class="entry-meta">
<h1 class="mb10"><?php the_title();?> </h1>
</div>
<div class="entry-content">
<?php if ( have_posts() ) :  while ( have_posts() ) : the_post(); ?>
<?php the_content(); ?>
<?php endwhile;endif; ?>
</div>
<div class="single-info">
<div class="post-tags pull-left"><?php the_tags()?></div>
<div class="pull-right"><?php _e('版权所有','xs')?>：<?php bloginfo('url')?> <?php _e('转载请注明出处','xs')?></div>
</div>
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
<?php get_footer();?>