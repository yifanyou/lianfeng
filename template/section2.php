<div class="col-md-4 col-sm-4 col-xs-12">
<div class="inews">
<h3><b><?php _e('新闻中心','xs')?></b></h3>
<ul class="inews-con">
<?php 
$args = array(
'posts_per_page' => 5,
'ignore_sticky_posts' => 1  ,
);
query_posts($args); while (have_posts()) : the_post();?>
<li><a href="<?php the_permalink(); ?>"><em></em><?php the_title(); ?></a>
</li>
<?php endwhile;wp_reset_query();  ?>
</ul>
</div>
</div>