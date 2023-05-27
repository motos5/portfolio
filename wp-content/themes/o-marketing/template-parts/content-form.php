<?php
    $contact_title = get_field('contact_title', 'option');
?>
<section class="connection" id="contact">
    <div class="container">
        <?php if($contact_title) { ?>
            <h2 class="title connection__title"><?php printf(esc_html__('%1$s', 'o-marketing'), $contact_title); ?></h2>
        <?php } ?>
        <?php
            echo do_shortcode('[contact-form-7 id="154" title="Contact"]');
        ?>
    </div>
</section>