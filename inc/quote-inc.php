<section id="booking-block-wrap">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <header>
                    <h3><?php the_field('main_title_free_quote', 'options'); ?></h3>
                    <?php the_field('intro_text_free_quote', 'options'); ?>
                </header>
            </div>
            <!-- /.col-md-12 -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
    <div class="container container-new">

        <div id="booking-div-wrap2">
            <div class="container">
                <div id="booking-div">
                    <div class="book-wrapper">

                        <div class="col-intro">
                            <h3>Get a Quote</h3>
                        </div>

                        <div class="col-form">

                            <?php echo do_shortcode('[gravityform id="3"  title="false" description="false" tabindex="30"  ajax="true"]'); ?>

                        </div>
                        <!-- // cok  -->

                    </div>
                    <!-- // row  -->
                </div>
                <!-- /#booking-div -->
            </div>
        </div>
        <!-- /#booking-div-wrap -->
 

    </div>
</section>
<!-- /#booking-block-wrap -->