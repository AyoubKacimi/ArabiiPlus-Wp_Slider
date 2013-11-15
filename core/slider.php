<?php 
	function arabi_sliderLoop(){ ?>
		<div class="abi_Slider_warpe">
			
			<div class="cercle_left"></div>
			<div class="cercle_right"></div>
			
			<div id="run_slider">
				<?php 
					$args = array(
						'post_type' => 'abi_sliderPost'
					);
					// The Query
					$the_query = new WP_Query( $args );
						// The Loop
						if ( $the_query->have_posts() ) {
							while ( $the_query->have_posts() ) {
								$the_query->the_post();?>
							
									<div class="item">
										<div class="backgroun">
											<?php the_post_thumbnail(); ?>
										</div>
										<h2><?php the_title() ?></h2>
										<h3>105$</h3>
										<p><?php the_excerpt(); ?></p>
									</div>

							<?php }
						}else{ echo "No Posts Found"; }
					wp_reset_postdata(); 
				?>
			</div> <!-- End Slider -->

			<span class="left_side">></span>
			
			<span class="right_side"><</span>

			<div class="pagination"></div>

		</div> <!-- End Warper -->
		
<?php } ?>