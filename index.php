<?php get_header(); ?>
    <div class="container">
        <div id="bl-main" class="bl-main">
            
            <!-- portfolio --->
            
			<section id="bl-work-section">	
								
				<div class="bl-box">
					<?php
							$args = array(
								'post_type' => 'portfoliodetails'
							);
							$query = new WP_Query($args);
																	
							if($query->have_posts()){
								while($query->have_posts()) {
									$query->the_post();
					?>					
					<aside class="front-page portfolio">									
						<h2 class="bl-icon bl-icon-works"><?php the_title(); ?></h2>	
						
						<!-- mobile only -->
						<figure class="icon-mobile"> <?php the_field('mobile_icon_image'); ?></figure>							
						
						<div class="front-page-tagline"> <?php the_field('section-description'); ?></div>			
					</aside>
					<figure class="main-img"> <?php the_post_thumbnail(); ?></figure>	
				</div>									
				<div class="bl-content portfolio">		
											
					<h1><?php the_title(); ?></h1>
					<p ><?php the_field('mini_bio'); ?></p>						
					<?php 
								}
							} 
						wp_reset_postdata(); 
					?>
						 
					<ul id="bl-work-items">
						
						<?php
							$args = array(
								'post_type' => 'portfolio'
							);
							$itemquery = new WP_Query($args);
																	
							if($itemquery->have_posts()){
								while($itemquery->have_posts()) {
									$itemquery->the_post();
						?>	
					
					
						<li data-panel="<?php echo $the_query->current_post; ?>">
							<h1 class="portfolio-title"><?php the_title(); ?></h1>		
							<a href="<?php the_ID(); ?>">
	         
								<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ));?>
								<img src="<?php echo esc_url( $image[0] ); ?>" alt="<?php the_title(); ?>" />					
								<div class="btn-container">									
									<button class="button button--rayen button--border-thick button--text-thick" data-text="<?php the_title(); ?>"><img class="btn-icon" src="<?php print IMAGES; ?>/stray_heart_read-more-icon.png"><span>read more</span></button>												
								</div>								
							</a>
						</li>
						
						<?php
								}
							}
						?>
					</ul>
					<?php rewind_posts(); ?>		
				</div> <!-- bl-content portfolio -->
				<span class="bl-icon bl-icon-close"><i class="fa fa-times-circle-o"></i></span>
			</section> <!-- bl-work-section -->
            
            <!-- about -->
            
			<section>											
				<div class="bl-box">						
					<?php
						$args = array(
							'post_type' => 'about'
						);
						$query = new WP_Query($args);
																
						if($query->have_posts()){
							while($query->have_posts()) {
								$query->the_post();
					?>						
					<aside class="front-page about">
				
						<h2 class="bl-icon bl-icon-about"> <?php the_title(); ?></h2>
						
						<!-- mobile only -->
						<figure class="icon-mobile"> <?php the_field('mobile_icon_image'); ?></figure>		
										
						<div class="front-page-tagline"> <?php the_field('section-description'); ?></div>
					</aside>
					<figure class="main-img"> <?php the_post_thumbnail(); ?></figure>									
				</div>
				<article class="bl-content">														
					<div class="wrapper about">									
						<h1><?php the_title(); ?></h1>
				
						<div class="images-about"><?php the_field('images'); ?></div>								
						<?php the_content(); ?>		
					</div>														
				</article>					
				<?php
							}
						}
					wp_reset_postdata();
				?>					
				<span class="bl-icon bl-icon-close"><i class="fa fa-times-circle-o"></i></span>									
			</section>			
		
			<!-- social media -->
		
			<section>
				<div class="bl-box">
					<?php		
						$args = array(
							'post_type' => 'socialmedia',
								
						);
						$query = new WP_Query($args);
										
						if($query->have_posts()){
							while($query->have_posts()) {
								$query->the_post();
					?>	
					
					<aside class="front-page media">						
						<h2 class="bl-icon bl-icon-media"><?php echo the_title(); ?></h2>	
																		
						<!-- mobile only -->
						<figure class="icon-mobile"> <?php the_field('mobile_icon_image'); ?></figure>	
						
						<div class="front-page-tagline"> <?php the_field('section-description'); ?></div>
					</aside>
					<figure class="main-img"> <?php the_post_thumbnail(); ?></figure>				
				</div>						
				<article class="bl-content">																											<h1><?php the_title(); ?></h1>
					<?php the_content(); ?>						
				</article>				
				<?php
							}
						}
					wp_reset_postdata();
				?>													
				<span class="bl-icon bl-icon-close"><i class="fa fa-times-circle-o"></i></span>					
			</section>	
			
			<!-- contact -->			
			
			<section>
				<div class="bl-box">					
					<?php		
						$args = array(
							'post_type' => 'contact'
						);
						$query = new WP_Query($args);
										
						if($query->have_posts()){
							while($query->have_posts()) {
								$query->the_post();
					?>
					<aside class="front-page contact">
						<h2 class="bl-icon bl-icon-contact"><?php the_title(); ?></h2>						
												
						<!-- mobile only -->
						<figure class="icon-mobile"> <?php the_field('mobile_icon_image'); ?></figure>	
						
						<div class="front-page-tagline"> <?php the_field('section-description'); ?></div>
					</aside>
					<figure class="main-img"> <?php the_post_thumbnail(); ?></figure>
				</div>												
				<aside class="bl-content">
					<h1><?php the_title(); ?></h1>							
					<?php the_content(); ?>
				</aside>
				<?php
							}
						}
					wp_reset_postdata();
				?>									
				<span class="bl-icon bl-icon-close"><i class="fa fa-times-circle-o"></i></span>	
			</section>
							
			<!-- Panel items for portfolio -->
			
			<div class="bl-panel-items" id="bl-panel-work-items">
													
				<?php															
					if($itemquery->have_posts()){
						while($itemquery->have_posts()) {
							$itemquery->the_post();
				?>	
				<div class="wrapper-single-portfolio">				
					<div  data-panel="panel-<?php echo $the_query->current_post; ?>">	
						<h1><?php the_title(); ?></h1>
						
							<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ));?>
							<img src="<?php echo esc_url( $image[0] ); ?>" alt="<?php the_title(); ?>" />	
											
							<?php the_content(); ?>
							
							<a class="website-btn" href="#">see website</a>
							
							<!-- Go to www.addthis.com/dashboard to customize your tools -->
							<div class="addthis_native_toolbox"></div>
							
						<figure class="portfolio-images"><?php the_field('images'); ?></figure>

					</div>				
				</div>
			
				<?php 
						}
					}
				?>
				
				<nav>
					<span class="bl-next-work">Next Project</span>
					<span class="bl-icon bl-icon-close"> <i class="fa fa-times-circle-o"></i></span>
				</nav>
			</div> <!-- bl-panel-items -->
						
        </div> <!-- bl-main -->
    </div> <!-- container -->
<?php get_footer(); ?>