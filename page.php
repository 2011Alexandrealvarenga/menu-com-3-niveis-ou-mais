<?php get_header();?>
<section class="page">
    <div class="container">
        <div class="row mt-4">
            <div class="col-12">
                <?php while(have_posts()) : the_post();?>
                    <div class="content-sub-title-page">
                        <h2><?php the_title(); ?></h2>
                        <hr class="line-title">
                    </div>
                    <?php the_content(); ?>
                <?php endwhile; ?>
            </div>

        </div>
    </div>
</section>
<?php get_footer(); ?>