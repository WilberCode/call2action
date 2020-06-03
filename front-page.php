<?php  /*
 * Template Name: Home
 * Template Post Type: post, page, whatever
 */?>
<!-- Header -->
<?php get_header();?>
<!-- Banner -->
<div class="banner bg-primary-500 ">
    <?php echo do_shortcode('[metaslider id="15"]'); ?>
</div> 

<main class="main">
<!-- Definicion -->
 <?php get_template_part( 'templates/views/front-difinition');?>    
<!-- Asesorias -->
<?php get_template_part( 'templates/views/front-advisory');?> 
<!-- Servicios - Packs -->
<?php get_template_part( 'templates/post/services-grid'); ?> 
<!-- Linia-->
<div class="container">
    <div class="line w-full border-t border-secondary-200 my-12  max-w-5xl m-auto"></div>
</div>
<!-- Fundadores-->
 <?php get_template_part( 'templates/views/front-foundress');?>
 </main>  
<!-- Footer -->
 <?php get_footer(); ?>


 