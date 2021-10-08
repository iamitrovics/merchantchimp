<div id="bottom-cta">
    <div class="top-shape">
    <svg width="100%" height="100%" viewBox="0 0 1280 140" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg"><g fill="var(--top-divider-color, #fff)"><path d="M1280 69.65l-320 49.24L320 20.4 0 69.65V0h1280v69.65z"></path></g></svg>
    </div>
    <!-- // shape  -->
    <div class="container">
        <img src="<?php the_field('featured_image_cards_bottom', 'options'); ?>" alt="" class="card-image">
        <div class="row">
            <div class="col-lg-5 col-md-7">
                <div class="cta__content">
                    <h4><?php the_field('main_title_bottom_cta', 'options'); ?></h4>
                    <p><?php the_field('content_block_bottom_cta', 'options'); ?></p>
                    <footer>
                        <?php if( get_field('button_1_label_bottom_cta', 'options') ): ?>
                            <a href="<?php the_field('button_1_link_bottom_cta', 'options'); ?>" class="btn-cta btn-quote"><?php the_field('button_1_label_bottom_cta', 'options'); ?></a>
                        <?php endif; ?>
                        <?php if( get_field('button_2_label_bottom_cta', 'options') ): ?>
                            <a href="<?php the_field('button_2_link_bottom_cta', 'options'); ?>" class="btn-cta btn-sec"><?php the_field('button_2_label_bottom_cta', 'options'); ?></a>
                        <?php endif; ?>
                    </footer>
                </div>
            </div>
            <!-- // content  -->
        </div>
        <!-- // row  -->
    </div>
</div>
<!-- // bottom cta  -->