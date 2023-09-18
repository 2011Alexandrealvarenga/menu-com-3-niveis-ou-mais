<?php get_header();?>
<section class="single">
    <div class="container">
        
        <div class="row mt-4">
            <div class="col-12">
                <h2 class="title"><?php the_title(); ?></h2>
                <hr class="line-title">
            </div>
            <div class="col-12 mt-4">               
                <?php if ( has_post_thumbnail() ) {
                    the_post_thumbnail('home-carousel', array('class' => 'thumb-carousel-single')) ;
                } else { ?>
                    <img src="<?php echo get_template_directory_uri();?>/assets/img/banner-default.jpg" class="thumb-carousel-single" alt="ir para<?php the_title(); ?>" title="<?php the_title(); ?>">                
                <?php } ?>

                <?php the_content(); ?>

            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>