<div class="iproduct">
<h3><b><?php _e('产品中心','xs')?></b></h3>
<div class="row">
<ul class="pro-con">
<?php 
$args = array(
'post_type'=> 'product',
'posts_per_page'	=> 8,
'ignore_sticky_posts' => 1,
'orderby'   => date,
);query_posts($args);?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<li class="col-md-3 col-sm-3 col-xs-12">
<a href="<?php the_permalink(); ?>"  title="<?php the_title(); ?>">
<img   src="<?php echo get_template_directory_uri(); ?>/timthumb.php?src=<?php echo post_thumbnail_src(); ?>&h=300&w=400&zc=1" alt="<?php the_title(); ?>" />
<p><?php the_title(); ?></p>
</a>
</li>
<?php endwhile; ?>
<?php else : ?>
<?php endif; wp_reset_query(); ?>
</ul>
</div>
</div>