<?php
// Global $wp_query
global $wp_query;

get_header();
?>

<!-- Service -->
<section class="inner events">
    <div class="wrapper">
        <div class="news">
            
        
            <h2 class="news__title secondary-title"><span><?php echo esc_html__( 'Search Results for:', 'wayup' ); ?></span><br><?php echo get_search_query(); ?></h2>
            
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <!-- One new -->
                <article class="news__item">
                    <div class="news__wrap">
                        <div class="news__img blue-noise">
                            <?php
                            // The Thumbnail Image
                            if( has_post_thumbnail() ) {
                                the_post_thumbnail( 'archive-news');
                                }
                            else {
                                echo '<img src="'.get_template_directory_uri().'/assets/img/photo.jpg" alt="No Photo" />';
                                }
                            ?>
							<?php
                            // Categories for Posts
							$categories = get_the_category();
							if ( ! empty( $categories ) ) { ?>
								<ul class="tags-list">
								<?php foreach( $categories as $category ) { ?>
									<li><a href="<?php echo get_term_link($category); ?>"><?php echo esc_html( $category->name ) ?></a></li>
								<?php } ?>
								</ul>
							<?php } ?>
                        </div>
                        <div class="news__side">
                            <div class="add-time">
                                <svg width="13" height="13">
                                    <use xlink:href="#time"/>
                                </svg>
                                <p class="add-time__date"><?php echo get_the_date(); ?></p>
                            </div>
                            <div class="rate"></div>
                            <div class="share">
                                <p class="share__title">
                                    <svg width="15" height="15">
                                        <use xlink:href="#link"/>
                                    </svg>
                                    Поделиться:
                                </p>
                                <ul class="social">
                                    <?php
                                        // Share Data
                                        $share_url = get_the_permalink();
                                        $title = get_the_title();
                                        $description = wayup_excerpt(30);
                                    ?>
                                    
                                    <li class="social__item">
                                        <span>Fb</span>
                                        <a data-social="facebook" class="social__icon social__icon_fb" href="<?php echo 'https://www.facebook.com/sharer.php?u=' . $share_url; ?>" onclick="window.open(this.href, 'Share on Facebook', 'width=600, height=400'); return false;">
                                            <svg  width="14" height="17">
                                                <use xlink:href="#facebook"/>
                                            </svg>
                                        </a>
                                    </li>
                                    <li class="social__item">
                                        <span>Tw</span>
                                        <a data-social="twitter" class="social__icon social__icon_tw" href="<?php echo 'https://twitter.com/intent/tweet?url=' . $share_url . '&text=' . $description; ?>" onclick="window.open(this.href, 'Share on Twitter', 'width=600, height=400'); return false;">
                                            <svg  width="18" height="15">
                                                <use xlink:href="#twitter"/>
                                            </svg>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <a href="<?php the_permalink(); ?>" class="news__link link-more">
                                <?php echo esc_html__('Read more', 'wayup'); ?>
                                <svg width="18" height="20">
                                    <use xlink:href="#nav-right"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                    <h5 class="news__heading"><?php the_title(); ?></h5>
                    <div class="news__text"><?php the_excerpt(); ?></div>
                </article><!-- End one new -->
            <?php endwhile; wp_reset_postdata(); else: ?>
                <p><?php echo esc_html__('Content not found.', 'wayup'); ?></p>
            <?php endif; ?>

			<!-- Pagination -->
		
			<?php   if($wp_query->max_num_pages > 1) { ?>
				<nav class="pagination">
					<div class="nav-links">
								
					<?php 
							// Left Arrow for first page
							if(get_query_var('paged') == 0) { ?>
								<span class="prev page-numbers first"></span>
							<?php } ?>

							<?php
							
							// Standart Pagination
								$big = 999999999; // уникальное число для замены
								echo paginate_links(array(
									'base'    => str_replace( $big, '%#%', get_pagenum_link( $big ) ),
									'format'  => '',
									'current' => max( 1, get_query_var('paged') ),
									'prev_text'    => '',
									'next_text'    => '',
									'total'	=> $wp_query->max_num_pages
								)); ?>

						<?php
							// Right Arrow for last page
							if(get_query_var('paged') == $wp_query->max_num_pages) { ?>
								<span class="next page-numbers last"></span>
						<?php } ?>
					</div>
				</nav>
			<?php }   ?>

        </div>

        <?php get_sidebar(); ?>
    </div>
</section>

<?php get_footer();