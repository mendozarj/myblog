<?php get_header(); ?>

	<div class="narrowcolumn">

		<?php if (have_posts()) : ?><?php while (have_posts()) : the_post(); ?>

		<div class="post">
			<h2 id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
			<div class="entry">

			<?php the_content(); ?>
			<?php link_pages('<p><strong>Pages:</strong> ', '</p>', 'number'); ?>
			<?php edit_post_link('Edit this entry', '<p>', '</p>'); ?>

			<!--
			<?php trackback_rdf(); ?>
			-->

			</div>
			<div class="comments-template">
				<?php comments_template(); ?>
			</div>
		</div>

		<?php endwhile; ?>

		<?php else : ?>

			<div class="post">
				<h2><?php _e('Not Found'); ?></h2>
				<div class="entry">
<p><?php _e('Sorry, but you are looking for something that isn&#39;t here.'); ?></p>
				</div>
			</div>

		<?php endif; ?>

	</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>