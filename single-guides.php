<?php get_header(); ?>
	<div id="guides">
		<?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>
		<div class="post">
			<h3 class="entrytitle"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
			<div class="entry">
				<?php the_content(); ?>
				<p class="postmetadata">
					This guide was originally published on <strong><?php the_time('F d, Y') ?></strong> by <?php the_author(); ?> and was last updated on <strong><?php the_modified_time('F d, Y') ?></strong> by <?php the_modified_author(); ?>. <?php edit_post_link('Edit this entry', '', ''); ?>
				</p>
			</div>
		</div>
		<?php endwhile; endif; ?>
	</div> 
<?php get_footer(); ?>