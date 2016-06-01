<?php get_header(); ?>
	<div id="blog">
		<?php get_sidebar(); ?>
		<?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>
		<div class="post">
			<h3 class="entrytitle"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
			<div class="entry">
				<?php the_content(); ?>
				<p class="postmetadata">
					<?php _e('Filed under&#58;'); ?> <?php the_category(', ') ?> <?php _e('by'); ?> <?php the_author_posts_link(); ?><br />
					<?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?> <?php edit_post_link('Edit', ' &#124; ', ''); ?>
				</p>
			</div>
			<div class="comments-template">
				<?php comments_template(); ?>
			</div>
		</div>
		<?php endwhile; endif; ?>
		<div class="clear"></div>
	</div>
<?php get_footer(); ?>