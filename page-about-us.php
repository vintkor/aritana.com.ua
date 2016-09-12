<?php
/*
Template Name: О нас
*/
?>
<?php get_header(); ?>
<?php if (have_posts()): while (have_posts()): the_post(); ?>
    <section class="index-php">
        <div class="container">
            <div class="row">
            	<div class="col-md-4">
                    <?php $idObj = get_category_by_slug('uslugi'); $id = $idObj->term_id;
                    $n=18;
                    $recent = new WP_Query("cat=$id&showposts=$n&order=ASC");?>
            		<h2><?php echo get_cat_name($id);?></h2>
                    <hr>
                    <ul class="about-us-menu">
                    	<?php while($recent->have_posts()) : $recent->the_post();?>
                		<li>
                			<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                		</li>
                    	<?php endwhile; wp_reset_query(); ?>
                    </ul>
            	</div>
                <div class="col-md-8">
                    <h1><?php the_title(); ?></h1>
                    <hr>
                    <?php the_content(); ?>
                </div>
            </div>
        </div>
    </section>
<?php endwhile; endif;?>
<?php get_footer(); ?>