<?php
/* Template Name: Guides */

get_header(); ?>
	<div id="guides">
		<?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>
			<div id="intro">
				<div><h1>Welcome to Dungeon Play!</h1></div>
				<p>Dungeon Play is designed to be a library of guides and editorials to help players of any class and skill level improve their performance and their enjoyment of <em>World of Warcraft</em>. This site is divided into two primary sections of the site to facilitate ease of locating desired information. Here on the home page, listed below, you'll find our collection of class guides which are updated regularly to reflect the most current live patch. The <a href="http://dungeonplay.net/blog/">blog</a> section of the site is home to our various editorial articles which are designed to provide useful information about the game in general.</p>
                                <p>Please enjoy your stay!</p>
			</div><!-- end intro -->
			
			<div id="catwrap">
				<div class="cat-left">
					
					<div class="cat-small-left">
						<h3 class="dk_cat">Death Knight Guides</h3>
						<?php $args=array('post_type'=>'guides', 'class' => 'death-knight');
							$my_query = new WP_Query($args);
							if ($my_query->have_posts() ) : while ($my_query->have_posts()) : $my_query->the_post();
							$do_not_duplicate = $post->ID; ?>
						<?php do_action( 'bp_before_blog_post' ) ?>
						<div id="post-<?php the_ID(); ?>">
							<div class="post-content">
								<p><span class="posttitle-small"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php _e( 'Permanent Link to', 'buddypress' ) ?> <?php the_title_attribute(); ?>"><?php the_title(); ?></a></span> <span class="post-updated">Updated: <?php the_modified_time('M j, Y') ?></span></p>
							</div>		
						</div>
						<?php do_action( 'bp_after_blog_post' ) ?>
						<?php endwhile; else : ?>
							<div>
								<div class="post-content">
									<p class="moretitles">Guides coming soon. </p>
								</div>		
							</div>
						<?php endif; wp_reset_query(); ?>
					</div><!-- end death knight -->
					
					<div class="cat-small-left">
						<h3 class="hunter_cat">Hunter Guides</h3>
						<?php $args=array('post_type'=>'guides', 'class' => 'hunter');
							$my_query = new WP_Query($args);
							if ($my_query->have_posts() ) : while ($my_query->have_posts()) : $my_query->the_post();
							$do_not_duplicate = $post->ID; ?>
						<?php do_action( 'bp_before_blog_post' ) ?>
						<div id="post-<?php the_ID(); ?>">
							<div class="post-content">
								<p class="moretitles"><span class="posttitle-small"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php _e( 'Permanent Link to', 'buddypress' ) ?> <?php the_title_attribute(); ?>"><?php the_title(); ?></a></span> <span class="post-updated">Updated: <?php the_modified_time('M j, Y') ?></span></p>
							</div>		
						</div>
						<?php do_action( 'bp_after_blog_post' ) ?>
						<?php endwhile; else : ?>
							<div>
								<div class="post-content">
									<p class="moretitles">Guides coming soon. </p>
								</div>		
							</div>
						<?php endif; wp_reset_query(); ?>
					</div><!-- end hunter -->
					
					<div class="cat-small-left">
						<h3 class="paladin_cat">Paladin Guides</h3>
						<?php $args=array('post_type'=>'guides', 'class' => 'paladin');
							$my_query = new WP_Query($args);
							if ($my_query->have_posts() ) : while ($my_query->have_posts()) : $my_query->the_post();
							$do_not_duplicate = $post->ID; ?>
						<?php do_action( 'bp_before_blog_post' ) ?>
						<div id="post-<?php the_ID(); ?>">
							<div class="post-content">
								<p class="moretitles"><span class="posttitle-small"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php _e( 'Permanent Link to', 'buddypress' ) ?> <?php the_title_attribute(); ?>"><?php the_title(); ?></a></span> <span class="post-updated">Updated: <?php the_modified_time('M j, Y') ?></span></p>
							</div>		
						</div>
						<?php do_action( 'bp_after_blog_post' ) ?>
						<?php endwhile; else : ?>
							<div>
								<div class="post-content">
									<p class="moretitles">Guides coming soon. </p>
								</div>		
							</div>
						<?php endif; wp_reset_query(); ?>
					</div><!-- end paladin -->
					
					<div class="cat-small-left">
						<h3 class="rogue_cat">Rogue Guides</h3>
						<?php $args=array('post_type'=>'guides', 'class' => 'rogue');
							$my_query = new WP_Query($args);
							if ($my_query->have_posts() ) : while ($my_query->have_posts()) : $my_query->the_post();
							$do_not_duplicate = $post->ID; ?>
						<?php do_action( 'bp_before_blog_post' ) ?>
						<div id="post-<?php the_ID(); ?>">
							<div class="post-content">
								<p class="moretitles"><span class="posttitle-small"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php _e( 'Permanent Link to', 'buddypress' ) ?> <?php the_title_attribute(); ?>"><?php the_title(); ?></a></span> <span class="post-updated">Updated: <?php the_modified_time('M j, Y') ?></span></p>
							</div>		
						</div>
						<?php do_action( 'bp_after_blog_post' ) ?>
						<?php endwhile; else : ?>
							<div>
								<div class="post-content">
									<p class="moretitles">Guides coming soon. </p>
								</div>		
							</div>
						<?php endif; wp_reset_query(); ?>
					</div><!-- end rogue -->
					
					<div class="cat-small-left">
						<h3 class="warlock_cat">Warlock Guides</h3>
						<?php $args=array('post_type'=>'guides', 'class' => 'warlock');
							$my_query = new WP_Query($args);
							if ($my_query->have_posts() ) : while ($my_query->have_posts()) : $my_query->the_post();
							$do_not_duplicate = $post->ID; ?>
						<?php do_action( 'bp_before_blog_post' ) ?>
						<div id="post-<?php the_ID(); ?>">
							<div class="post-content">
								<p class="moretitles"><span class="posttitle-small"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php _e( 'Permanent Link to', 'buddypress' ) ?> <?php the_title_attribute(); ?>"><?php the_title(); ?></a></span> <span class="post-updated">Updated: <?php the_modified_time('M j, Y') ?></span></p>
							</div>		
						</div>
						<?php do_action( 'bp_after_blog_post' ) ?>
						<?php endwhile; else : ?>
							<div>
								<div class="post-content">
									<p class="moretitles">Guides coming soon. </p>
								</div>		
							</div>
						<?php endif; wp_reset_query(); ?>
					</div><!-- end warlock -->
				</div>
				<div class="cat-right">
					<div class="cat-small-right">
						<h3 class="druid_cat">Driud Guides</h3>
						<?php $args=array('post_type'=>'guides', 'class' => 'druid');
							$my_query = new WP_Query($args);
							if ($my_query->have_posts() ) : while ($my_query->have_posts()) : $my_query->the_post();
							$do_not_duplicate = $post->ID; ?>
						<?php do_action( 'bp_before_blog_post' ) ?>
						<div id="post-<?php the_ID(); ?>">
							<div class="post-content">
								<p class="moretitles"><span class="posttitle-small"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php _e( 'Permanent Link to', 'buddypress' ) ?> <?php the_title_attribute(); ?>"><?php the_title(); ?></a></span> <span class="post-updated">Updated: <?php the_modified_time('M j, Y') ?></span></p>
							</div>		
						</div>
						<?php do_action( 'bp_after_blog_post' ) ?>
						<?php endwhile; else : ?>
							<div>
								<div class="post-content">
									<p class="moretitles">Guides coming soon. </p>
								</div>		
							</div>
						<?php endif; wp_reset_query(); ?>
					</div><!-- end druid -->
					
					<div class="cat-small-right">
						<h3 class="mage_cat">Mage Guides</h3>
						<?php $args=array('post_type'=>'guides', 'class' => 'mage');
							$my_query = new WP_Query($args);
							if ($my_query->have_posts() ) : while ($my_query->have_posts()) : $my_query->the_post();
							$do_not_duplicate = $post->ID; ?>
						<?php do_action( 'bp_before_blog_post' ) ?>
						<div id="post-<?php the_ID(); ?>">
							<div class="post-content">
								<p class="moretitles"><span class="posttitle-small"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php _e( 'Permanent Link to', 'buddypress' ) ?> <?php the_title_attribute(); ?>"><?php the_title(); ?></a></span> <span class="post-updated">Updated: <?php the_modified_time('M j, Y') ?></span></p>
							</div>		
						</div>
						<?php do_action( 'bp_after_blog_post' ) ?>
						<?php endwhile; else : ?>
							<div>
								<div class="post-content">
									<p class="moretitles">Guides coming soon. </p>
								</div>		
							</div>
						<?php endif; wp_reset_query(); ?>
					</div><!-- end mage -->
					
					<div class="cat-small-right">
						<h3 class="priest_cat">Priest Guides</h3>
						<?php $args=array('post_type'=>'guides', 'class' => 'priest');
							$my_query = new WP_Query($args);
							if ($my_query->have_posts() ) : while ($my_query->have_posts()) : $my_query->the_post();
							$do_not_duplicate = $post->ID; ?>
						<?php do_action( 'bp_before_blog_post' ) ?>
						<div id="post-<?php the_ID(); ?>">
							<div class="post-content">
								<p class="moretitles"><span class="posttitle-small"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php _e( 'Permanent Link to', 'buddypress' ) ?> <?php the_title_attribute(); ?>"><?php the_title(); ?></a></span> <span class="post-updated">Updated: <?php the_modified_time('M j, Y') ?></span></p>
							</div>		
						</div>
						<?php do_action( 'bp_after_blog_post' ) ?>
						<?php endwhile; else : ?>
							<div>
								<div class="post-content">
									<p class="moretitles">Guides coming soon. </p>
								</div>		
							</div>
						<?php endif; wp_reset_query(); ?>
					</div><!-- end priest -->
					
					<div class="cat-small-right">
						<h3 class="shaman_cat">Shaman Guides</h3>
						<?php $args=array('post_type'=>'guides', 'class' => 'shaman');
							$my_query = new WP_Query($args);
							if ($my_query->have_posts() ) : while ($my_query->have_posts()) : $my_query->the_post();
							$do_not_duplicate = $post->ID; ?>
						<?php do_action( 'bp_before_blog_post' ) ?>
						<div id="post-<?php the_ID(); ?>">
							<div class="post-content">
								<p class="moretitles"><span class="posttitle-small"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php _e( 'Permanent Link to', 'buddypress' ) ?> <?php the_title_attribute(); ?>"><?php the_title(); ?></a></span> <span class="post-updated">Updated: <?php the_modified_time('M j, Y') ?></span></p>
							</div>		
						</div>
						<?php do_action( 'bp_after_blog_post' ) ?>
						<?php endwhile; else : ?>
							<div>
								<div class="post-content">
									<p class="moretitles">Guides coming soon. </p>
								</div>		
							</div>
						<?php endif; wp_reset_query(); ?>
					</div><!-- end shaman -->
					
					<div class="cat-small-right">
						<h3 class="warrior_cat">Warrior Guides</h3>
						<?php $args=array('post_type'=>'guides', 'class' => 'warrior');
							$my_query = new WP_Query($args);
							if ($my_query->have_posts() ) : while ($my_query->have_posts()) : $my_query->the_post();
							$do_not_duplicate = $post->ID; ?>
						<?php do_action( 'bp_before_blog_post' ) ?>
						<div id="post-<?php the_ID(); ?>">
							<div class="post-content">
								<p class="moretitles"><span class="posttitle-small"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php _e( 'Permanent Link to', 'buddypress' ) ?> <?php the_title_attribute(); ?>"><?php the_title(); ?></a></span> <span class="post-updated">Updated: <?php the_modified_time('M j, Y') ?></span></p>
							</div>		
						</div>
						<?php do_action( 'bp_after_blog_post' ) ?>
						<?php endwhile; else : ?>
							<div>
								<div class="post-content">
									<p class="moretitles">Guides coming soon. </p>
								</div>		
							</div>
						<?php endif; wp_reset_query(); ?>
					</div><!-- end warrior -->
				</div>
			</div><!-- end catwrap -->
			<div class="clear"></div>
		<?php endwhile; ?>
			<div class="navigation">
				<?php posts_nav_link(); ?>
			</div>
		<?php endif; ?>
	</div><!-- end blog div -->
<?php get_footer(); ?>