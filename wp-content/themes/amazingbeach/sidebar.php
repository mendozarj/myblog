	<div id="sidebar">
<ul>

	<li><h2><?php _e('About Me'); ?></h2>
		<ul>
			<li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Vestibulum at arcu. Integer et risus. Morbi id tellus. Integer felis. </li>
		</ul>
	</li>

	<li><h2><?php _e('Calendar'); ?></h2>
		<ul>
			<li><?php get_calendar(); ?></li>
		</ul>
	</li>

<?php if ( function_exists('dynamic_sidebar') && dynamic_sidebar() ) : else : ?>

	<li><h2><?php _e('Search'); ?></h2>
	<ul>
		<li id="search"><?php include (TEMPLATEPATH . '/searchform.php'); ?></li>
	</ul>
	</li>

	<?php wp_list_pages('depth=3&title_li=<h2>' . __('Pages') . '</h2>' ); ?>

	<li><h2><?php _e('Categories'); ?></h2>
		<ul>
			<?php wp_list_cats('sort_column=name&optioncount=1&hierarchical=0'); ?>
		</ul>
	</li>

	<li><h2><?php _e('Archives'); ?></h2>
		<ul>
			<?php wp_get_archives('type=monthly'); ?>
		</ul>
	</li>

	<?php get_links_list(); ?>

	<li><h2><?php _e('Meta'); ?></h2>
		<ul>
			<?php wp_register(); ?>
			<li><?php wp_loginout(); ?></li>
			<li><a href="<?php bloginfo('rss2_url'); ?>" title="<?php _e('Syndicate this site using RSS'); ?>" class="feed"><?php _e('Entries <abbr title="Really Simple Syndication">RSS</abbr>'); ?></a></li>
			<li><a href="<?php bloginfo('comments_rss2_url'); ?>" title="<?php _e('Syndicate comments using RSS'); ?>"><?php _e('Comments <abbr title="Really Simple Syndication">RSS</abbr>'); ?></a></li>
			<li><a href="http://validator.w3.org/check/referer" title="This page validates as XHTML 1.0 Transitional"><?php _e('Valid'); ?> <abbr title="eXtensible HyperText Markup Language">XHTML</abbr></a></li>

			<?php wp_meta(); ?>
		</ul>
	</li>

<?php endif; ?>

</ul>
	</div>