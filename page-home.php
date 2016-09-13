<?php
/*
Template Name: Главная
*/
?>
<?php get_header(); ?>

<section class="sc-1">
    <div class="owl-carousel owl-carousel-1">
        <?php $idObj = get_category_by_slug('slider-in-home'); $id = $idObj->term_id;
        $n=10;
        $recent = new WP_Query("cat=$id&showposts=$n");?>
        <?php while($recent->have_posts()) : $recent->the_post();?>
        <div class="slide_bg " style="background: url(<?php $thumb_id = get_post_thumbnail_id();
        $thumb_url = wp_get_attachment_image_src($thumb_id,'thumbnail-size', true);
        echo $thumb_url[0];
        ?>) center; background-size: cover;">
            <div class="wrapper flex">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h2><?php the_title(); ?></h2>
                            <p><?php the_excerpt(); ?></p>
                            <br>
                            <a href="<?php the_permalink(); ?>" class="more">Узнать больше</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php endwhile; wp_reset_query(); ?>
    </div>
</section>

<section class="sc-3">
    <div class="container">
        <div class="row">
            <?php $idObj = get_category_by_slug('uslugi'); $id = $idObj->term_id;
            $n=12;
            $recent = new WP_Query("cat=$id&showposts=$n&order=ASC");?>
            <?php while($recent->have_posts()) : $recent->the_post();?>
            <div class="col-md-3 ">
                <div class="wrapper height-uslugi">
                    <?php the_post_thumbnail(); ?>
                    <h3><?php the_title(); ?></h3>
                </div>
                <a href="<?php the_permalink(); ?>"></a>
            </div>
            <?php endwhile; wp_reset_query(); ?>
        </div>
    </div>
</section>

<section class="sc-2">
    <div class="wrapper">
        <?php if (have_posts()): while (have_posts()): the_post(); ?>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2><?php the_title(); ?></h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 about-us">
                    <?php the_content(); ?>
                </div>
            </div>
        </div>
        <?php endwhile; endif;?>
    </div>
</section>

<section class="sc-4">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Наши преимущества</h2>
            </div>
        </div>
        <div class="row">
            <?php $idObj = get_category_by_slug('our-pluses'); $id = $idObj->term_id;
            $n=10;
            $recent = new WP_Query("cat=$id&showposts=$n&order=ASC");?>
            <?php while($recent->have_posts()) : $recent->the_post();?>
            <div class="col-md-3">
                <?php the_post_thumbnail(); ?>
                <h3><?php the_title(); ?></h3>
                <?php the_content(); ?>
            </div>
            <?php endwhile; wp_reset_query(); ?>
        </div>
    </div>
</section>

<section class="sc-5">
    <?php $idObj = get_category_by_slug('our-clients'); $id = $idObj->term_id;
    $n=30;
    $recent = new WP_Query("cat=$id&showposts=$n&order=ASC");?>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2><?php echo get_cat_name($id);?></h2>
            </div>
        </div>
    </div>
    <div class="owl-carousel owl-carousel-2">
    <?php while($recent->have_posts()) : $recent->the_post();?>
        <a href="<?php the_permalink(); ?>">
            <?php the_post_thumbnail(); ?>
        </a>
    <?php endwhile; wp_reset_query(); ?>
    </div>
</section>

<section class="sc-6">
    <div class="wrapper">
        <div class="container">
            <?php $idObj = get_category_by_slug('speek-about-us'); $id = $idObj->term_id;
            $n=10;
            $recent = new WP_Query("cat=$id&showposts=$n&order=ASC");?>
            <div class="row">
                <div class="col-md-12">
                    <h2><?php echo get_cat_name($id);?></h2>
                </div>
            </div>
            <div class="row">
                <?php while($recent->have_posts()) : $recent->the_post();?>
                <div class="col-md-4">
                    <?php the_post_thumbnail(); ?>
                    <div class="text">
                        <h3><?php the_title(); ?></h3>
                        <?php the_content(); ?>
                    </div>
                </div>
                <?php endwhile; wp_reset_query(); ?>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>
