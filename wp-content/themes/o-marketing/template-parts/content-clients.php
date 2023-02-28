<div class="clients">
    <div class="container">
        <ul class="clients__list">
            <?php if(get_field('client_1', 'option')) { ?>
                <li><img src="<?php the_field('client_1', 'option'); ?>" alt="Client 1"></li>
            <?php } ?>
            <?php if(get_field('client_2', 'option')) { ?>
                <li><img src="<?php the_field('client_2', 'option'); ?>" alt="Client 2"></li>
            <?php } ?>
            <?php if(get_field('client_3', 'option')) { ?>
                <li><img src="<?php the_field('client_3', 'option'); ?>" alt="Client 3"></li>
            <?php } ?>
            <?php if(get_field('client_4', 'option')) { ?>
                <li><img src="<?php the_field('client_4', 'option'); ?>" alt="Client 4"></li>
            <?php } ?>
            <?php if(get_field('client_5', 'option')) { ?>
                <li><img src="<?php the_field('client_5', 'option'); ?>" alt="Client 5"></li>
            <?php } ?>
        </ul>

    </div>
</div>