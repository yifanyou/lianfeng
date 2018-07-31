<?php 
/**
 * Template Name: 首页
 * 作者：小兽
 */
get_header(); ?>
<?php get_template_part( 'template/slider' ); ?>
<div class="section1 mt30"> 
<div class="container">
<div class="row">
<?php get_template_part( 'template/section1' ); ?>
<?php get_template_part( 'template/section2' ); ?>
</div>
</div>
</div>
<div class="section2 mt30"> 
<div class="container">
<?php get_template_part( 'template/section3' ); ?>
</div>
</div>
<?php get_footer();?>