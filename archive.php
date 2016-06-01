<?php get_header(); ?>
	<div id="blog">
		<?php get_sidebar(); ?>
		<?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>
			<div id="post-<?php the_ID(); ?>" class="post">
				<h3 class="entrytitle"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
				<div class="entry">
					<?php the_post_thumbnail(); ?>
					<?php the_content(); ?>
					<div class="postmetadata">
						<span class="postdate"><?php the_time('F j, Y') ?></span> <span class="postcat"><?php the_category(', ') ?></span> <span class="postauthor"><?php the_author_posts_link(); ?></span> <span class="postcomments"><?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?></span>
					</div>
				</div>
			</div>
		<?php endwhile; ?>
		<div class="navigation">
			<?php if (function_exists("pagination")) { pagination($additional_loop->max_num_pages); } ?>
		</div>
		<?php endif; ?>
		<div class="clear"></div>
	</div>
<?php get_footer(); ?>