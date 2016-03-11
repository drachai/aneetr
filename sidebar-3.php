<?php
/*
Template Name: Entry Listesi
*/
?>

<div style="height:calc(100% - 100px);" id="left-frame">      
  <div class="titles">
            <ul class="nav nav-tabs">
</br>

            </ul>
            <ul class="index-list" id="sol-index-list">
<?php 
// the query
$the_query = new WP_Query(  array( 'posts_per_page' => -1 ) ); ?>

<?php if ( $the_query->have_posts() ) : ?>

	<!-- pagination here -->

	<!-- the loop -->
	<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
		 <li class="clearfix index-list-li active">
                                        <a class="clearfix index-content" href="<?php the_permalink(); ?>">
                        <div class="index-title" title="">
                            <?php the_title(); ?>                            							                        </div>
                    </a>
                </li>
	<?php endwhile; ?>
	<!-- end of the loop -->

	<!-- pagination here -->

	<?php wp_reset_postdata(); ?>

<?php else : ?>
	<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>

			            </ul>
            <script>
            if(window.sessionStorage){
				var spEx = sessionStorage.getItem("sp");
				var spNew = 'yeniler';
				if(spEx == spNew){
					document.getElementById("sol-index-list").scrollTop = sessionStorage.getItem("sideScrollPosition");
				}else{
					sessionStorage.setItem("sp", spNew);
					sessionStorage.setItem("sideScrollPosition", 0);
				}
				spEx = spNew = null;
            }
            </script>
        </div>
</div><!--left-frame sonu--> 