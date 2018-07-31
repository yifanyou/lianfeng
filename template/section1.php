<div class="col-md-8 col-sm-8 col-xs-12">
<div class="iabout">
<h3><b><?php _e('公司简介','xs')?></b></h3>
<div class="about-con clearfix">
<div class="row">
<div class="col-md-4 col-sm-6 col-xs-12">
<div class="about-img">
<?php if( get_field('about-img',$page_id) ): ?>
<img src="<?php echo get_template_directory_uri(); ?>/timthumb.php?src=<?php the_field('about-img',$page_id)?>&h=450&w=600&zc=1" alt="<?php bloginfo('name');?>" >
<?php else:?>
<img src="<?php bloginfo('template_url');?>/images/gs.jpg">
<?php endif; ?>
</div>
</div>
<div class="col-md-8 col-sm-6 col-xs-12">
<div class="about-des">
<h4><?php bloginfo('name');?></h4>
<?php if( get_field('about-des',$page_id) ): ?>
<?php the_field('about-des',$page_id)?>
<?php else:?>
<?php endif; ?>
</div>
</div>
</div>
</div>
</div>
</div>