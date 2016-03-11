<?php
/**
ana template dosyası
Dağıtım buradan başlıyor
 *
 */

	get_header(); ?>

    <div id="wrapper">

        <div id="sidebar-wrapper">
      
				
						
									<?php get_sidebar(); ?>

					   
				</div><!-- /#sidebar-wrapper -->
	
        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid xyz">
                <div class="row">
                    <div class="col-lg-12">
         		
							
	
                    <?php
							$my_query = new WP_Query( array ( 'orderby' => 'rand', 'posts_per_page' => '1' ) );
							// output the random post
							while ( $my_query->have_posts() ) : $my_query->the_post();

					?>
				<h1 class="title" id="baslik_15805300">
					<a href="<?php the_permalink() ?>"><?php the_title() ?></a>
				</h1>
            
						
			<div class="ilk-entry">
                    <ol class="entry-list">
						<li class="entry first wbox">
                            <div class="entry-text clearfix">
								
                                <div class="entry-text-wrap">	
			

				<?php the_content(); ?>
		
				  
										<div class="entry-options yeni "><div style="  display: inline-block;float: right;">
											<?php the_author_posts_link(); ?>
											<small><?php the_date(); ?>  #<?php the_ID();?></small>
											<div class="clearfix"></div>
										  </div>
										</div> 				
								</div>
							</div>
				<?php
				endwhile;

				// Reset Post Data
				wp_reset_postdata();
												?>    
						</li>
					</ol>
			</div>
                     
		<?php 			comments_template('',true);?>

					</div>
                </div>
            </div>
        </div>
        <!-- /#page-content-wrapper -->
         
     

	 <?php get_footer(); ?>
</div><!--/.container-->