<?php get_header(); ?>


<?php if ( have_posts() ){ while ( have_posts() ){ the_post(); ?>
    <?php the_content(); ?>
<?php } } else { ?>
	<p><?php echo esc_html__('Content not found.', 'wawe'); ?></p>
<?php } ?>

<?php get_footer();
