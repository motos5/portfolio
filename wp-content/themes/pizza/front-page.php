<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <!-- section-top -->
    <section class="section-top">
        <div class="container section-top__container">
            <div class="section-top__inner">
                <p class="section-top__info">from an Italian chef</p>
                <h1 class="section-top__title">The best pizza in the city of Dnipro</h1>
                <div class="section-top__btn">
                    <button class="btn" type="button">Choose</button>
                </div>
            </div>
        </div>
    </section>
	<!-- End section-top -->



<?php endwhile; else: ?>
	<p><?php echo esc_html__('Content not found.', 'wawe_setup'); ?></p>
<?php endif; ?>

<?php get_footer();