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
            
				
								

				<?php
				endwhile;

				// Reset Post Data
				wp_reset_postdata();
												?>    
					
                     
		<?php 			comments_template('',true);?>

     </div><!--/.col-xs-12.col-sm-9-->

        <div class="col-xs-6 col-sm-3 sidebar-offcanvas" id="sidebar">
          <div class="list-group">
           	<?php get_sidebar(); ?>
          </div>
        </div><!--/.sidebar-offcanvas-->
      </div><!--/row-->