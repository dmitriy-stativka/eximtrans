<?php
/*
Template Name: Front-page
*/

 get_header(); ?>

<div class="top-site">
    <div class="flex_container">
        <h1 class="title-top wow fadeInUp" data-wow-duration="1s"><?php the_field('title');?></h1>
        <p class="description wow fadeInUp" data-wow-duration="1.5s"><?php the_field('description');?></p>
        <a class="top-link popup__toggle wow fadeInUp" data-wow-duration="1.5s"><?php pll_e('quote'); ?></a>
    </div>
</div>


<section class="section">
    <div class="flex_container">
        <div class="title-block wow fadeInUp" data-wow-duration="1.5s">
            <h2 class="title-block-h2 title-block-h2-line"><?php the_field('title_second');?></h2>
            <p class="title-block-description"><?php the_field('description_second');?></p>
        </div>
        <div class="title-block wow fadeInUp" data-wow-duration="1.5s">
            <h2 class="title-block-h2"><?php the_field('title_services');?></h2>
        </div>

        <div class="section-services wow fadeInUp" data-wow-duration="1.5s">
            <?php
                $params = array(
                    'post_type' => 'services',
                    'posts_per_page' => 4,
                );
                $query = new WP_Query( $params );
                ?>
                <?php if($query->have_posts()): ?>
                        <?php while ($query->have_posts()): $query->the_post() ?>
                            <?php $title_services = get_field('title_services')?>
                            <?php $image_sevices = get_field('image_sevices'); ?>
                            <?php $description_services = get_field('description_services'); ?>

                            <div class="section-item wow fadeInUp" data-wow-duration="1.5s">
                                <a class="section-link">
                                    <div class="section-image">
                                        <img src="<?php echo $image_sevices['url'] ?>" alt="">
                                    </div>
                                    <h3 class="section-title"><?php echo $title_services;?></h3>
                                </a>
                                <p class="section-item-description"><?php echo $description_services;?></p>
                            </div>
                        <?php endwhile; ?>
                <?php endif; ?>

                <?php wp_reset_query(); ?>
        </div>

        <div class="title-block wow fadeInUp" data-wow-duration="1.5s">
            <h2 class="title-block-h2 title-block-h2-line"><?php the_field( 'title_third' );?> </h2>
        </div>
    
    </div>

   
</section>

<?php get_footer(); ?>