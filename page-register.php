<?php
/*
Template Name: Register
*/
?>
<?php
if( is_user_logged_in() ){
?>
<script type="text/javascript">
window.location.href = "<?php bloginfo('url') ?>";
</script>
<?php
}
else{
?>
<?php get_header() ?>

<div class="page-container clearfix" id="main-wrap"> 
       <?php get_sidebar('3'); ?> <div id="content"><div id="right-container" class="clearfix "><div id="middle-block" class="col-md-9"><div class="wbox clearfix">
    <h1 class="title">
        <a href="#"><?php bloginfo('name'); ?> üyesi ol</a>
    </h1>
</div>
<div class="wbox">
    <h5 class="wbox_title">üyelik formu</h5>
	<div class="wbox_sub clearfix">
		<div class="row">
            <form name="yeniuye" id="yeniuye" action="<?php bloginfo('url') ?>/wp-login.php?action=register" method="post" onsubmit="return yeniuye_submit();">
                		<div class="form-group col-md-7 ">
			<label class="control-label">üye adınız:</label>
			<input class="form-control" name="user_login" type="text" value="" placeholder="üye adınız">
					</div>
		<div class="form-group col-md-7 ">
			<label class="control-label">e-posta:</label>
			<input class="form-control" name="user_email" id="email" type="text" value="" placeholder="e-posta">
					</div>
		                <div class="col-md-12">
                    <blockquote>
                    <p style="font-size:12px">
					<b> Kayıt onayı size e-posta olarak gönderilecektir.</b><br>
                        <?php bloginfo('name'); ?> herkese açık bir sözlük çalışmasıdır. <?php bloginfo('name'); ?> giderek büyüyen yazar kadrosuna yeni yazarlar katmak istemekte, bunun yanında mevcut yazar kalitesini de korumak istemektedir. bu sebeple <?php bloginfo('name'); ?> sitemizde yazar alımları kontrol altında tutulmaktadır. <?php bloginfo('name'); ?> sitesinde yazar olmak için yukarıdakidaki formu doldurmanız gerekmektedir.
                        <br><br>bir <?php bloginfo('name'); ?> yazarı olabilmek için sözlük formatı hakkında bilgi sahibi olmanız gereklidir. <?php bloginfo('name'); ?> sitesini üçüncü şahıslara hakaret etmek için kullanmak sözlükten uçurulma sebebidir. sözlük'ten uçurulmamak için sözlük kurallarına uymanız gerekmektedir.
                    </p>
                    </blockquote>
                </div>
				<input type="hidden" name="redirect_to" value="<?php bloginfo('url'); ?>">
				<div class="form-group col-md-12">
                    <input type="submit" name="uyesubmit" value="gönder" class="btn btn-success">
                                        
                                    </div>
            </form>
        </div>
	</div>
</div>
<hr>
</div><?php get_sidebar(); ?></div><!-- row fluid sonu esneklik veriyor--></div></div><footer id="main-footer" class="main-footer-solframe clearfix col-md-12">
<?php get_footer();  } ?>
