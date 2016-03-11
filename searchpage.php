<?php
/*
Template Name: Arama
*/
?>
<?php get_header() ?>

	<div class="page-container clearfix" id="main-wrap"> 
        <style>
        	.reklamAds{ text-align:center;}
			.mastheadAds{ margin-top:15px;}
        </style>
        <div class="index-wrap clearfix"><div class="giris_list col-md-12">		<ul class="nav nav-tabs ">
			            
			                
                
                                        
                        <li class="active"><a href="<?php bloginfo('url') ?>">yeniler</a></li>
		</ul>
         <ul class="bigindex-list clearfix wbox "> 		
<?php
								global $wp_query;
								$total_results = $wp_query->found_posts;
								if ( $total_results ) :
								$i = 0;
									while ($total_results ) : $total_results
									$i++;
										// Your loop code
									?>		 
	<li class="clearfix ozel_list">
                                                <div class="trend_list_no trend_list_no_ozel"><?php echo $i ?></div>
                                				
              
                <div class="baslik-info">
				<?php if ( function_exists("has_post_thumbnail") && has_post_thumbnail() ) { ?>
					                             
                        <div class="index-image">
                           
							<?php the_post_thumbnail(array(70,70), array("class" => "alignleft post_thumbnail")); ?>
                                                    </div>
                    <?php  } ?>
                                        <a href="<?php the_permalink(); ?>">
                        <div class="index-title">
                            <?php the_title(); ?>
                            <small><?php comments_number( '0', '1', '%' ); ?>.</small>                        </div>
                    </a>
                                        <p class="index-ilk_entry entry_165391776">
										<?php the_excerpt() ?> <a style="float:right;" href="<?php the_permalink() ?>">Başlığa Uç >></a>
										
										</p>
                    <footer class="index-footer clearfix">
                    	<div class="bilgi">
                           <a  class="baslik_kul" href="<?php bloginfo('url') ?>/yazar/<?php the_author(); ?>/"><?php the_author(); ?></a>
                           <a href="<?php the_permalink(); ?>"><?php the_date(); ?></a>
                                                             
                                                      <!--  <?php the_category(' '); ?> -->
                        </div>
                      
                    </footer>
                                    </div>
            </li>
                    <?php endwhile;
								else :
									echo wpautop( 'Hadi ama bu başlık sağlam' );
								endif;
								?>                           
<li class="sayfalama">

    <?php sayfalama() ?>

  	
</li>
 </ul> 
 </div>
 <?php get_sidebar('2'); ?>
 <?php get_sidebar(); ?>
 
 </div></div>       
 <?php get_footer(); ?>
