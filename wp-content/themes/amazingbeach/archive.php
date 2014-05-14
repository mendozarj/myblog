<?php get_header(); ?>

	<div class="narrowcolumn">

		<?php if (have_posts()) : ?><?php while (have_posts()) : the_post(); ?>

		<div class="post">
			<h2 id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
					<div class="postinfo">
						<ul>
							<li class="author">by <?php the_author_link(); ?></li>
							<li class="date">on <?php the_time('m.d.y') ?></li>
							<li class="category-info"><?php the_category(', ') ?></li>
							<li class="comment-number"><?php comments_popup_link('No Comments', '1 Comment', '% Comments'); ?></li>
							<li class="digg" title="Add to Digg"><a href="http://www.digg.com/submit?phase=2&amp;url=<?php the_permalink() ?>">Digg</a></li>
							<li class="delicious" title="Add to Del.icio.us"><a href="http://del.icio.us/post?url=<?php the_permalink() ?>&amp;title=<?php the_title(); ?>">Del.icio.us</a></li>
							<li class="edit-info"><?php edit_post_link('Edit', ' &#124; ', ''); ?></li>
						</ul>
					</div>

			<div class="entry">

			<?php the_excerpt(); ?>
			<?php edit_post_link('Edit this entry', '<p>', '</p>'); ?>

			<!--
			<?php trackback_rdf(); ?>
			-->

			</div>
		</div>

		<?php endwhile; ?>

		<?php include (TEMPLATEPATH . '/browse.php'); ?>

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