<?php
/**

Sayfa şablonu
 *
 */

	get_header(); ?>

    <div id="wrapper">

      <div class="row row-offcanvas row-offcanvas-right">
			 <div id="sidebar-wrapper">
									
												<?php get_sidebar(); ?>

								   
					</div><!-- /#sidebar-wrapper -->
       
	   <div class="col-lg-12">
                 <div id="page-content-wrapper">

								
	
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
											<a class="username" style="display:inline-block; clear:both; float:none;" href="<?php bloginfo('url') ?>/yazar/<?php the_author(); ?>"><?php the_author(); ?></a><br>
											<a href="" style="display:inline-block; float:none; clear:both;" class="entry-tarih" title=""><small><?php the_date(); ?> </a> #<?php the_ID();?></small>
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
           </div>          
     </div><!--/.col-xs-12.col-sm-9-->
      </div><!--/row-->
		 <?php get_footer(); ?>
</div><!--/.container-->			