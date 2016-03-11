<?php
// Dosyaya direk erişimi engelliyoruz.
if (!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME'])){
die ('Lütfen bu sayfaya doğrudan yükleme yapmayınız, teşekkürler.');
}
// Yazının şifresi var mı bakıyoruz, şifresi varsa birşey yapmaya gerek yok, çünkü yazı içeriğinde şifreli olduğuna dair gerekli açıklama yapılıyor
if(!post_password_required()){
// Yorum var mı bakıyoruz.
if(have_comments()){
echo '';
echo '<ol class="entry-list">';
wp_list_comments('callback=yorum_sablonum');
echo '</ol>';
}else{
echo '';
}
}
//Yorum Sayfa Sayısı birden fazla ise diğer sayfalar için link oluşturuyoruz.
if(get_comment_pages_count()>1 && get_option('page_comments')){
    paginate_comments_links();
}
$yorum_parametreleri = array(
'must_log_in' => '',
'title_reply' => '',
'label_submit' => 'Entry Gir',
'class_submit' => 'btn btn-colored_1 btn-sm',
'logged_in_as' => '',
'fields' => apply_filters('comment_form_default_fields', array(
'author' => '<input id="author" name="author" type="text" placeholder="Adınız'.($req ? '*' : '').'" value="'.esc_attr($commenter['comment_author']).'" size="30"'.($req ? 'required="required"' : '').'/>',
'email' => '<input id="email" name="email" type="email" placeholder="Email Adresiniz'.($req ? '*' : '').'" value="'.esc_attr($commenter['comment_author_email']).'" size="30"'.($req ? 'required="required"' : '').'/>',
'url' => '<input id="url" name="url" placeholder="Website Adresiniz'.($req ? '*' : '').'" type="text" value="'.esc_attr($commenter['comment_author_url']).'" size="30"'.($req ? 'required="required"' : '').'/>',

)),
'comment_field' => '<textarea class="form-control entry_textarea" style="width:100%;max-width:100%;" id="comment" name="comment" cols="45" rows="8" aria-required="true"></textarea>',
);
if ( is_user_logged_in() ) :
comment_form($yorum_parametreleri);
endif;
?>