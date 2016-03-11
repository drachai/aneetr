<?php function custom_excerpt_length( $length ) {
	return 20;
}
add_theme_support( 'post-formats', array(
		'aside', 'image', 'video', 'quote', 'link', 'gallery', 'status', 'audio', 'chat'
	) );

add_theme_support( 'infinite-scroll', array(
    'container' => 'content',
    'footer' => 'page',
) );

add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

function new_excerpt_more( $more ) {
	return '';
}
add_filter( 'excerpt_more', 'new_excerpt_more' );

add_filter('init', create_function('$a', 'global $wp_rewrite; $wp_rewrite->author_base = "uyeler"; $wp_rewrite->flush_rules();'));  


 add_theme_support( 'post-thumbnails' ); 
 
 add_filter( 'comments_open', 'my_comments_open', 10, 2 );

function my_comments_open( $open, $post_id ) {

	$post = get_post( $post_id );

	if ( 'page' == $post->post_type )
		$open = false;

	return $open;
}
function yorum_sablonum(){
	
$yorum = $_GLOBAL['comment']; // global comment değişkenini yorum değişkenine aktardık

?>


<li class="entry wbox">
                        <div class="entry-text clearfix">      
                                <div class="entry-text-wrap " data-leng="88"><?php comment_text(); ?> </div>                           
                                <div class="entry-options yeni "><div style="  display: inline-block;float: right;">
					<a class="username" style="display:inline-block;  float:none;" href="<?php bloginfo('url') ?>/uyeler/<?php the_author(); ?>"><?php comment_author() ?></a>
					<a href="<?php comments_open(); ?>" style="display:inline-block; float:none; " class="entry-tarih" title="04-11-2015 04:57"><small><?php comment_date(); ?> </a> <?php comment_ID(); ?><?php edit_comment_link(__('düzenle'), '<p>', '</p>'); ?>
</small>
				 	<div class="clearfix"></div>
				  </div>
				  </div>
								                                
													</div>
					</li>




<?php
}

if ( function_exists('register_sidebar') )
     register_sidebars(1, array(
    'name' => 'Sidebar2',
    'before_widget' =>'  <div class="wbox">',
    'before_title' => '<h2 class="title"><a href="#">',
    'after_title' => '</a></h2></div> <div class="wbox baslik_theme1"><div style="padding:15px;">',
    'after_widget' =>'</div></div>',
) );

function add_wp3menu_support() {
    register_nav_menus(
            array(
                'Menu-ust' => __('Üst Menü'), // 2. Değer Özel Menünün Adı
                'Menu-alt' => __('Alt Menü'), // 2. Değer Özel Menünün Adı
            
    ));
}

add_action('init', 'add_wp3menu_support');

function sayfalama($pages = '', $range = 3)
{
$showitems = ($range * 2)+1;
global $paged;
if(empty($paged)) $paged = 1;
if($pages == '')
{
global $wp_query;
$pages = $wp_query->max_num_pages;
if(!$pages)
{
$pages = 1;
}
}
if(1 != $pages)
{
echo "<div class='wp-pagenavi'>";

if($paged > 2 && $paged > $range+1 && $showitems < $pages) echo "<a href='".get_pagenum_link(1)."'>İlk</a>";
if($paged > 1 && $showitems < $pages) echo "<a href='".get_pagenum_link($paged - 1)."'>&laquo;</a>";
for ($i=1; $i <= $pages; $i++)
{
if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems ))
{
echo ($paged == $i)? "<span class='current'>".$i."</span>  ":"  <a href='".get_pagenum_link($i)."' class='inactive' >".$i."</a>  ";
}
}
if ($paged < $pages && $showitems < $pages) echo "<a href='".get_pagenum_link($paged + 1)."'>&raquo;</a>";
if ($paged < $pages-1 &&  $paged+$range-1 < $pages && $showitems < $pages) echo "<a href='".get_pagenum_link($pages)."'>Son</a>";
echo "</div>\n";
}
}




function __CakirEfekan_Baslik_Arama( $search, &$wp_query )
{
    global $wpdb;
    if(empty($search)) {
        return $search; // skip processing - no search term in query
    }
    $q = $wp_query->query_vars;
    $n = !empty($q['exact']) ? '' : '%';
    $search =
    $searchand = '';
    foreach ((array)$q['search_terms'] as $term) {
        $term = esc_sql($wpdb->esc_like($term));
        $search .= "{$searchand}($wpdb->posts.post_title LIKE '{$n}{$term}{$n}')";
        $searchand = ' AND ';
    }
    if (!empty($search)) {
        $search = " AND ({$search}) ";
        if (!is_user_logged_in())
            $search .= " AND ($wpdb->posts.post_password = '') ";
    }
    return $search;
}
add_filter('posts_search', '__CakirEfekan_Baslik_Arama', 500, 2);


