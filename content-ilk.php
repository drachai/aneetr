<div class="container">

      <div class="row row-offcanvas row-offcanvas-right">

        <div class="col-xs-12 col-sm-9">
          <p class="pull-right visible-xs">
            <button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas">Popüler</button>
          </p>
			
								
	
                    <?php
									while ( have_posts() ) : the_post(); 

					?>
				<h1 class="title" id="baslik_15805300">
					<a href="<?php the_permalink() ?>"><?php the_title() ?></a>
					<div class="title_sag">
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
													<?php edit_post_link( __( 'Düzenle' ), '<span class="edit-link">', '</span>' ); ?>

											<div class="clearfix"></div>
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

     </div><!--/.col-xs-12.col-sm-9-->

        <div class="col-xs-6 col-sm-3 sidebar-offcanvas" id="sidebar">
          <div class="list-group">
           	<?php get_sidebar(); ?>
          </div>
        </div><!--/.sidebar-offcanvas-->
      </div><!--/row-->