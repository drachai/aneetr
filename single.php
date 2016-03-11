<?php 
/*
Sayfa dağıtımı buradan yapılıyor. content-ilk post ilk sayfa, content-diger yorumların 2. ve 3. sayfası bu sayede 
*/
get_header(); ?>
<div class="container">

      <div class="row row-offcanvas row-offcanvas-right">
	
		<?php  if ( get_option( 'page_comments' ) && ( get_query_var( 'cpage' ) <= 1 || get_query_var( 'cpage' ) < get_comment_pages_count( ) ) ) { 

			get_template_part( 'content', 'ilk' );
		
		}else{
						get_template_part( 'content', 'diger' );

		};
		
 get_footer(); 
 ?>
</div><!--/.container-->