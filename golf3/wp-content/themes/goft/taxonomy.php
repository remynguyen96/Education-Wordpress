<?php
	get_header();
	$term = get_term_by('slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) );
 ?>
<section id="taxonomy">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 breadcrumbs">
				<img src="http://localhost/golf/wp-content/themes/goft/img/icon_home.png" alt="Home">
				<?php if ( function_exists('yoast_breadcrumb') ) {yoast_breadcrumb('<span id="breadcrumbs">','</span>');} ?>
			</div>
		</div>
		<div class="row">
			<div class="wrapper">
				<div id="main-category">
					<div class="col-md-9">
						<div class="title">
							<h1><?php echo $term->name ?></h1>
						</div>
						<div class="description">
								<?php echo $term->description ?>
						</div>
						<div class="travel-list">
							<div class="hot-travel row">
								<?php
								$travelList =  array(
				                    'posts_per_page' => 2,
				                     "tax_query" =>array(
				                        array(
				                            'taxonomy' => $term->taxonomy,
				                            'field'    => 'id',
				                            'terms'    => $term->term_id,
				                        )
				                    ),
				                     'meta_query' => array(
										array(
											'key' => 'wpcf-hot',
											'value' => 1,
										)
									)
				                );
								$query = new WP_Query($travelList);
								if($query->have_posts()) :
									while ($query->have_posts()) :
										$query->the_post(); ?>

											<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
				                              <div class="img_top_HN">
				                                  <?php the_post_thumbnail(); ?>
				                                  <img src="<?php echo url."/img/top_product.png" ?>" class="top_pd img-responsive" alt="Top Product" />
				                              </div>
				                              <div class="content_top_HN all_top_product">
				                                  <h3><?php the_title(); ?></h3>
				                                  <p class="description_top_HN"><?php echo excerpt(10); ?></p>
				                                  <p class="link_top_HN text-center">
				                                      <a href="<?php the_permalink() ?>"><?php _e('+ infor','golf') ?></a>
				                                  </p>
				                              </div>
				                          	</div>
							<?php
									endwhile;
								endif;
							?>
							</div>
							<div class="row normal-travel">
								<?php
								$travelList =  array(
				                    'posts_per_page' => -1,
				                     "tax_query" =>array(
				                        array(
				                            'taxonomy' => $term->taxonomy,
				                            'field'    => 'id',
				                            'terms'    => $term->term_id,
				                        )
				                    ),
				                     'meta_query' => array(
										array(
											'key' => 'wpcf-hot',
											'compare' => 'NOT EXISTS'
										)
									)
				                );
								$query = new WP_Query($travelList);
								if($query->have_posts()) :
									while ($query->have_posts()) :
										$query->the_post(); ?>
											<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
			                                    <div class="img_HN">
			                                        <?php the_post_thumbnail(); ?>
			                                    </div>
			                                    <div class="content_HN all_top_product">
			                                        <h3><?php the_title(); ?></h3>
			                                        <p class="description_HN"><?php echo excerpt(10); ?></p>
			                                        <p class="text-center link_HN">
			                                            <a href="<?php the_permalink() ?> "><?php _e('+ infor','golf') ?></a>
			                                        </p>
			                                    </div>
			                                </div>
								<?php
									endwhile;
								endif; ?>
							</div>
						</div>
					</div>
					<div class="col-md-3" id="sidebar">
						<?php get_sidebar() ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>


<?php get_footer(); ?>
