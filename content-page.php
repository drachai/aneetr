<?php
/**

Sayfa şablonu
 *
 */

	get_header(); ?>



        <div class="col-xs-12 col-sm-9">
          <p class="pull-right visible-xs">
            <button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas">Popüler</button>
          </p>
			
							
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

				// Reset Post Data
				wp_reset_postdata();
												?>    
						</li>
					</ol>
			</div>
                     
     </div><!--/.col-xs-12.col-sm-9-->

        <div class="col-xs-6 col-sm-3 sidebar-offcanvas" id="sidebar">
          <div class="list-group">
           	<?php get_sidebar(); ?>
          </div>
        </div><!--/.sidebar-offcanvas-->
      </div><!--/row-->
		 <?php get_footer(); ?>
</div><!--/.container-->			