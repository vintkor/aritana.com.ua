<?php get_header(); ?>

<?php if (have_posts()): ?>
<section class="news">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h1><?php echo get_queried_object()->name; ?></h1>
				<hr>
			</div>
		</div>
		<?php  while (have_posts()): the_post(); ?>
		<div class="row relative one-news">
			<div class="col-md-2 thumb">
				<?php the_post_thumbnail(); ?>
			</div>
			<div class="col-md-10">
				<h2><?php the_title(); ?></h2>
			</div>
			<a class="read-more" href="<?php the_permalink(); ?>"></a>
		</div>
		<hr>
		<?php endwhile; ?>
		<div class="navigate">
			<?php wp_pagenavi(); ?>
		</div>
	</div>
</section>
<?php endif;?>

<?php get_footer(); ?>