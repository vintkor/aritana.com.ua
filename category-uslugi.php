<?php get_header(); ?>

<section class="sc-3">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1><?php echo get_queried_object()->name; ?></h1>
            </div>
        </div>
        <div class="row">
            <?php $idObj = get_category_by_slug('uslugi'); $id = $idObj->term_id;
            $n=10;
            $recent = new WP_Query("cat=$id&showposts=$n&order=ASC");?>
            <?php while($recent->have_posts()) : $recent->the_post();?>
            <div class="col-md-4">
                <div class="wrapper">
                    <?php the_post_thumbnail(); ?>
                    <h3><?php the_title(); ?></h3>
                </div>
                <a href="<?php the_permalink(); ?>"></a>
            </div>
            <?php endwhile; wp_reset_query(); ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>