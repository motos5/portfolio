<?php
get_header();
?>
<main class="main">
    <section class="page-404">
        <div class="container">
            <div class="page-404__inner">
                <div class="page-404__content">
                    <h2 class="page-404__title">OPPS! Page Not Found!!</h2>
                    <p class="page-404__text">
                        We,re sorry but we can’t seem to find the pages you request. This might be because you have typed the web address not find incorrectly.
                    </p>
                    <a class="page-404__link" href="<?php echo esc_url(home_url("/")); ?>">Back to home</a>
                </div>
                <img class="page-404__img" src="<?php echo get_template_directory_uri() ?>/assets/img/404.svg" alt="404 Image">
            </div>
        </div>
    </section>
</main>

	

<?php
get_footer();
