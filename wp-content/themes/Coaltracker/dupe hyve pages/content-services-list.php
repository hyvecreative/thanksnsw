<div class="col-lg-3 col-md-4 col-xs-6">
	<div class="service-item">	
	<div class="ser-image">
		<img src="<?php bloginfo('template_directory'); ?>/images/services-pic-privacy.jpg" alt="AMSRO" />
		<p><a href="/member-services/privacy/">Privacy <i class="fas fa-chevron-right"></i></a></p>
	</div>
	<div class="ser-links">

		<?php
							$args = array (
								'post_type'              => 'page',
								'post_parent' 			 => 43,
								'posts_per_page'	 	 => '2',
								'offset'                 => '0',
								'order'                  => 'DESC',
								'orderby'                => 'date',
							);

							// The Query
							$query = new WP_Query( $args );

							// The Loop
							if ( $query->have_posts() ) {
								while ( $query->have_posts() ) {
									$query->the_post(); 
		?>
							<div class="section-link">
								<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><i class="fas fa-chevron-right"></i> <?php the_title(); ?></a>
							</div>

		<?php	
			}
			} else {
			}

			wp_reset_postdata();
		?>

	</div>
	</div>
	</div> <!-- end col -->


	<div class="col-lg-3 col-md-4 col-xs-6">
		<div class="service-item">	
			<div class="ser-image">
				<?php 
				$image = get_field('advocacy_image');
				$size = 'full'; // (thumbnail, medium, large, full or custom size)
				if( $image ) {
				    echo wp_get_attachment_image( $image, $size );
				}
				?>
				<p><a href="/member-services/advocacy-and-corporate/">Advocacy</a></p>
			</div>
			<div class="ser-links">
						<?php if( have_rows('advocacy_links') ): while ( have_rows('advocacy_links') ) : the_row(); ?>
							<div class="section-link">
							<a href="<?php the_sub_field('link_url'); ?>"><i class="fas fa-chevron-right"></i><?php the_sub_field('link_text'); ?></a>
							</div>
			    		<?php endwhile; else: endif; ?>
			</div>
		</div>
	</div> <!-- end col -->
	
	
	<div class="col-lg-3 col-md-4 col-xs-6">
	<div class="service-item">	
	<div class="ser-image">
		<img src="<?php bloginfo('template_directory'); ?>/images/services-pic-workplace.jpg" alt="AMSRO" />
		<p><a href="/member-services/workplace-relations/">Workplace</a></p>
	</div>
	<div class="ser-links">

		<?php
							$args = array (
								'post_type'              => 'page',
								'post_parent' 			 => 16,
								'posts_per_page'	 	 => '2',
								'offset'                 => '0',
								'order'                  => 'DESC',
								'orderby'                => 'date',
							);

							// The Query
							$query = new WP_Query( $args );

							// The Loop
							if ( $query->have_posts() ) {
								while ( $query->have_posts() ) {
									$query->the_post(); 
		?>
							<div class="section-link">
								<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><i class="fas fa-chevron-right"></i> <?php the_title(); ?></a>
							</div>

		<?php	
			}
			} else {
			}

			wp_reset_postdata();
		?>

	</div>
	</div>
	</div> <!-- end col -->
	
	<div class="col-lg-3 col-md-4 col-xs-6">
	<div class="service-item">	
	<div class="ser-image">
		<img src="<?php bloginfo('template_directory'); ?>/images/services-pic-quality.jpg" alt="AMSRO" />
		<p><a href="/member-services/quality-assurance/">Quality</a></p>
	</div>
	<div class="ser-links">

		<?php
							$args = array (
								'post_type'              => 'page',
								'post_parent' 			 => 26,
								'posts_per_page'	 	 => '2',
								'offset'                 => '0',
								'order'                  => 'DESC',
								'orderby'                => 'date',
							);

							// The Query
							$query = new WP_Query( $args );

							// The Loop
							if ( $query->have_posts() ) {
								while ( $query->have_posts() ) {
									$query->the_post(); 
		?>
							<div class="section-link">
								<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><i class="fas fa-chevron-right"></i> <?php the_title(); ?></a>
							</div>

		<?php	
			}
			} else {
			}

			wp_reset_postdata();
		?>

	</div>
	</div>
	</div> <!-- end col -->
	
	<div class="col-lg-3 col-md-4 col-xs-6">
		<div class="service-item">	
			<div class="ser-image">
				<?php 
				$image = get_field('benchmarking_image');
				$size = 'full'; // (thumbnail, medium, large, full or custom size)
				if( $image ) {
				    echo wp_get_attachment_image( $image, $size );
				}
				?>
				<p>Benchmarking</p>
			</div>
			<div class="ser-links">
						<?php if( have_rows('benchmarking_links') ): while ( have_rows('benchmarking_links') ) : the_row(); ?>
							<div class="section-link">
							<a href="<?php the_sub_field('link_url'); ?>"><i class="fas fa-chevron-right"></i><?php the_sub_field('link_text'); ?></a>
							</div>
			    		<?php endwhile; else: endif; ?>
			</div>
		</div>
	</div> <!-- end col -->
	
	<div class="col-lg-3 col-md-4 col-xs-6">
		<div class="service-item">

			<div class="ser-image">
				<?php 
				$image = get_field('partners_image');
				$size = 'full'; // (thumbnail, medium, large, full or custom size)
				if( $image ) {
				    echo wp_get_attachment_image( $image, $size );
				}
				?>
				<p>Partners</p>
			</div>

			<div class="ser-links">
					<?php if( have_rows('partner_links') ): while ( have_rows('partner_links') ) : the_row(); ?>
						<div class="section-link">
						<a href="<?php the_sub_field('link_url'); ?>"><i class="fas fa-chevron-right"></i><?php the_sub_field('link_text'); ?></a>
						</div>
		    		<?php endwhile; else: endif; ?>
			</div>

		</div>
	</div> <!-- end col -->
	
	<div class="col-lg-3 col-md-4 col-xs-6">
		<div class="service-item">	
			<div class="ser-image">
				<?php 
				$image = get_field('training_image');
				$size = 'full'; // (thumbnail, medium, large, full or custom size)
				if( $image ) {
				    echo wp_get_attachment_image( $image, $size );
				}
				?>
				<p>Training</p>
			</div>
			<div class="ser-links">
						<?php if( have_rows('training_links') ): while ( have_rows('training_links') ) : the_row(); ?>
							<div class="section-link">
							<a href="<?php the_sub_field('link_url'); ?>"><i class="fas fa-chevron-right"></i><?php the_sub_field('link_text'); ?></a>
							</div>
			    		<?php endwhile; else: endif; ?>
			</div>
		</div>
	</div> <!-- end col -->
	
	<div class="col-lg-3 col-md-4 col-xs-6">
		<div class="service-item">	
			<div class="ser-image">

				<?php 
				$image = get_field('resources_image');
				$size = 'full'; // (thumbnail, medium, large, full or custom size)
				if( $image ) {
				    echo wp_get_attachment_image( $image, $size );
				}
				?>

				<p>Resources</p>
			</div>
			<div class="ser-links">
						<?php if( have_rows('resources_links') ): while ( have_rows('resources_links') ) : the_row(); ?>
							<div class="section-link">
							<a href="<?php the_sub_field('link_url'); ?>"><i class="fas fa-chevron-right"></i><?php the_sub_field('link_text'); ?></a>
							</div>
			    		<?php endwhile; else: endif; ?>
			</div>
		</div>
	</div> <!-- end col -->

