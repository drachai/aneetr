<?php
/*
Template Name: Login
*/
?>
<?php get_header(); ?>
<div class="page-container clearfix" id="main-wrap"> 
        <style>
        	.reklamAds{ text-align:center;}
			.mastheadAds{ margin-top:15px;}
        </style>
       <?php get_sidebar('3'); ?><div id="content"><div id="right-container" class="clearfix "><div id="middle-block" class="col-md-9">        <div class="wbox clearfix">
            <h1 class="title"><?php bloginfo('name') ?> kullanıcı girişi</h1>
        </div>
        <div class="wbox">
			<div class="wbox_sub">
    			<div class="row">
					                    <form action="<?php bloginfo('url'); ?>/wp-login.php" name="loginform" id="loginform" method="post">
                        

	                                <div class="form-group col-md-7">
            <label class="control-label">üye adı:</label>
            <input class="form-control" name="log" type="text" value="" placeholder="üye adı">
        </div>
        <div class="form-group col-md-7">
            <label class="control-label">şifre:</label>
            <input class="form-control" name="pwd" type="password" id="sifre" placeholder="şifre">
        </div>
        <div class="form-group col-md-7">
            <input class="btn btn-success" name="gonder" type="submit" id="gonder" value="login">
                    </div>
        <script language="JavaScript" type="text/javascript">
            if(document.loginform && document.loginform.kuladi) document.loginform.kuladi.focus();
            if(document.giris_modal_form && document.giris_modal_form.kuladi) document.giris_modal_form.kuladi.focus();
			console.log(1);
        </script>
        <div class="col-md-7">
            <input name="redirect_to" type="hidden" value="<?php bloginfo('url'); ?>">		
			<input type="checkbox" name="rememberme" value="forever" id="sifresorma" title="bu özelliği sadece kendinize ait olan bilgisayarlarda kullanınız. ortak kullanılan bilgisayarlarda heleki internet kafe, lab gibi public mekanlarda asla kullanmayınız, kullananları uyarınız.">
            <label for="sifresorma" title="bu özelliği sadece kendinize ait olan bilgisayarlarda kullanınız. ortak kullanılan bilgisayarlarda heleki internet kafe, lab gibi public mekanlarda asla kullanmayınız, kullananları uyarınız.">şifremi hatırla.</label>

        </div>
        
        
                                
                                           </form>
                </div>
			</div>
		</div>
</div><?php get_sidebar(); ?></div><!-- row fluid sonu esneklik veriyor--></div></div><footer id="main-footer" class="main-footer-solframe clearfix col-md-12">

<?php get_footer(); ?>
