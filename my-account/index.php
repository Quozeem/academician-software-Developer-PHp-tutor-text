<?php 
session_start();

?>
<?php include "../innersidebar.php" ;?>
		<header class="lte-page-header lte-bg-parallax-enabled">
		    <div class="container">
		    	<div class="lte-header-h1-wrapper"><h1 class="header">My account</h1></div><ul class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/"><!-- Breadcrumb NavXT 6.4.0 -->
<li class="home"><span property="itemListElement" typeof="ListItem"><a property="item" typeof="WebPage" title="Go to Home." href="../" class="home"><span property="name">Home</span></a><meta property="position" content="1"></span></li>
<li class="post post-page current-item"><span property="itemListElement" typeof="ListItem"><span property="name">My account</span><meta property="position" content="2"></span></li>
</ul>		    </div>
			<span class="lte-tagline"><span>Fashion Lingerie Store</span></span><div class="lte-social lte-nav-second lte-type-"><ul><li><a href="#" target="_self"><span class="queeny_fa5_icons fab fa-twitter"></span></a></li><li><a href="#" target="_self"><span class="queeny_fa5_icons fab fa-facebook-f"></span></a></li><li><a href="#" target="_self"><span class="queeny_fa5_icons fab fa-instagram"></span></a></li><li><a href="#" target="_self"><span class="queeny_fa5_icons fab fa-youtube"></span></a></li></ul></div>		</header>
			</div><div class="container main-wrapper">
	<!-- Content -->
	<div class="lte-text-page margin-default">
        <div class="row centered">
        	            <div class="col-xl-12 col-xs-12">
				<article id="post-617" class="post-617 page type-page status-publish hentry">
	<div class="entry-content clearfix" id="entry-div">
		<div class="woocommerce"><div class="woocommerce-notices-wrapper">

<?php
$erromessage="";
 if (isset($_POST['LOGIN']))  {
$email= $_POST['email'];
   $word=md5($_POST['password']);
   include("../includes/db.php");
//select if users email already exits
 $log=mysqli_query($con,"SELECT * fROM users WHERE email='$email' AND password='$word'");
   if(!$log){
	   die("faileds").mysqli_connect_error();
   }
   while($row = mysqli_fetch_array($log)){
	   $mailler=($row['email']);
		$pass=md5($row['password']);
   }if(($email == $mailler) && (md5($word) ==  $pass)){
     $_SESSION['LOGGED']="true";
                    $_SESSION['email']=$email;
                     $_SESSION['password']=$word;
	   echo "<script> location.href='../checkout'</script>";
        }
	
   
   else{
    
                 $erromessage="Invalid Email or Password"; 
                 } }
   ?>
<?php if(!empty($erromessage)){
    ?><ul class="woocommerce-error" role="alert"><li>
                      <?php          echo $erromessage ;
                        ?>
  </li></ul><?php }?></div>

		<h2>Login</h2>

		<form class="woocommerce-form woocommerce-form-login login" action="" method="post">

			
			<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
				<label for="username">Email address&nbsp;<span class="required">*</span></label>
				<input type="text" class="woocommerce-Input woocommerce-Input--text input-text" name="email" id="username" autocomplete="username" value="" />			</p>
			<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
				<label for="password">Password&nbsp;<span class="required">*</span></label>
				<input class="woocommerce-Input woocommerce-Input--text input-text" type="password" name="password" id="password" autocomplete="current-password" />
			</p>

			
			<p class="form-row">
				<label class="woocommerce-form__label woocommerce-form__label-for-checkbox woocommerce-form-login__rememberme">
					<input class="woocommerce-form__input woocommerce-form__input-checkbox" name="rememberme" type="checkbox" id="rememberme" value="forever" /> <span>Remember me</span>
				</label>
				<input type="hidden" id="woocommerce-login-nonce" name="woocommerce-login-nonce" value="a1cefdcd94" />
                <input type="hidden" name="_wp_http_referer" value="/my-account/" />		
                		<button type="submit" class="woocommerce-button button woocommerce-form-login__submit" name="LOGIN" value="Log in">Log in</button>
			</p>
			<p class="woocommerce-LostPassword lost_password">
				<a href="lost-password/">Lost your password?</a>
			</p>

			
		</form>


</div>
	</div>
</article>
            </div>
        	        
        </div>
	</div>

</div></div><?php include"../footer.php" ;?>
		<div class="lt-custom-popup" data-image="http://queeny.like-themes.com/wp-content/plugins/lt-custom/images/icon.png"></div>
		<a href="#" class="lte-go-top floating lte-go-top-icon"><span class="go-top-icon-v2 queeny_fa5_icons fas fa-arrow-up"></span></a>	<script type="text/javascript">
		var c = document.body.className;
		c = c.replace(/woocommerce-no-js/, 'woocommerce-js');
		document.body.className = c;
	</script>
	<link rel='stylesheet' id='elementor-frontend-css'  href='../wp-content/uploads/elementor/css/custom-frontend.minc332.css?ver=1588776044' type='text/css' media='all' />
<link rel='stylesheet' id='elementor-post-9728-css'  href='../wp-content/uploads/elementor/css/post-9728aae6.css?ver=1588776046' type='text/css' media='all' />
<link rel='stylesheet' id='elementor-icons-css'  href='../wp-content/plugins/elementor/assets/lib/eicons/css/elementor-icons.min4c7e.css?ver=5.6.2' type='text/css' media='all' />
<link rel='stylesheet' id='elementor-animations-css'  href='../wp-content/plugins/elementor/assets/lib/animations/animations.minc867.css?ver=2.9.7' type='text/css' media='all' />
<link rel='stylesheet' id='elementor-global-css'  href='../wp-content/uploads/elementor/css/globalc332.css?ver=1588776044' type='text/css' media='all' />
<script type='text/javascript'>
/* <![CDATA[ */
var wpcf7 = {"apiSettings":{"root":"http:\/\/queeny.like-themes.com\/wp-json\/contact-form-7\/v1","namespace":"contact-form-7\/v1"},"cached":"1"};
/* ]]> */
</script>
<script type='text/javascript' src='../wp-content/plugins/contact-form-7/includes/js/scripts6725.js?ver=5.1.7'></script>
<script type='text/javascript' src='../wp-content/plugins/lt-custom/js/colorpicker5152.js?ver=1.0'></script>
<script type='text/javascript' src='../wp-content/plugins/lt-custom/js/lt-custom5152.js?ver=1.0'></script>
<script type='text/javascript' src='../wp-content/plugins/woocommerce/assets/js/jquery-blockui/jquery.blockUI.min44fd.js?ver=2.70'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var wc_add_to_cart_params = {"ajax_url":"\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/?wc-ajax=%%endpoint%%","i18n_view_cart":"View cart","cart_url":"http:\/\/queeny.like-themes.com\/cart\/","is_cart":"","cart_redirect_after_add":"no"};
/* ]]> */
</script>
<script type='text/javascript' src='../wp-content/plugins/woocommerce/assets/js/frontend/add-to-cart.min5fc8.js?ver=4.0.4'></script>
<script type='text/javascript' src='../wp-content/plugins/woocommerce/assets/js/selectWoo/selectWoo.full.min0ba6.js?ver=1.0.6'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var pwsL10n = {"unknown":"Password strength unknown","short":"Very weak","bad":"Weak","good":"Medium","strong":"Strong","mismatch":"Mismatch"};
/* ]]> */
</script>
<script type='text/javascript' src='http://queeny.like-themes.com/wp-admin/js/password-strength-meter.min.js?ver=5.4.10'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var wc_password_strength_meter_params = {"min_password_strength":"3","stop_checkout":"","i18n_password_error":"Please enter a stronger password.","i18n_password_hint":"Hint: The password should be at least twelve characters long. To make it stronger, use upper and lower case letters, numbers, and symbols like ! \" ? $ % ^ & )."};
/* ]]> */
</script>
<script type='text/javascript' src='../wp-content/plugins/woocommerce/assets/js/frontend/password-strength-meter.min5fc8.js?ver=4.0.4'></script>
<script type='text/javascript' src='../wp-content/plugins/woocommerce/assets/js/js-cookie/js.cookie.min6b25.js?ver=2.1.4'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var woocommerce_params = {"ajax_url":"\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/?wc-ajax=%%endpoint%%"};
/* ]]> */
</script>
<script type='text/javascript' src='../wp-content/plugins/woocommerce/assets/js/frontend/woocommerce.min5fc8.js?ver=4.0.4'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var wc_cart_fragments_params = {"ajax_url":"\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/?wc-ajax=%%endpoint%%","cart_hash_key":"wc_cart_hash_797f8b2c4151e34e0a440cf30797fff3","fragment_name":"wc_fragments_797f8b2c4151e34e0a440cf30797fff3","request_timeout":"5000"};
/* ]]> */
</script>
<script type='text/javascript' src='../wp-content/plugins/woocommerce/assets/js/frontend/cart-fragments.min5fc8.js?ver=4.0.4'></script>
<script type='text/javascript' src='../wp-includes/js/imagesloaded.min55a0.js?ver=3.2.0'></script>
<script type='text/javascript' src='../wp-includes/js/masonry.mind617.js?ver=3.3.2'></script>
<script type='text/javascript' src='../wp-includes/js/jquery/jquery.masonry.minef70.js?ver=3.1.2b'></script>
<script type='text/javascript' src='../wp-content/themes/queeny/assets/js/jquery.matchHeight923e.js?ver=5.4.10'></script>
<script type='text/javascript' src='../wp-content/themes/queeny/assets/js/jquery.nicescroll9b73.js?ver=3.7.6.0'></script>
<script type='text/javascript' src='../wp-content/themes/queeny/assets/js/jquery.swipeboxc2d0.js?ver=1.4.4'></script>
<script type='text/javascript' src='../wp-content/themes/queeny/assets/js/bootstrap.mina352.js?ver=4.1.3'></script>
<script type='text/javascript' src='../wp-content/plugins/elementor/assets/lib/swiper/swiper.min48f5.js?ver=5.3.6'></script>
<script type='text/javascript' src='../wp-content/themes/queeny/assets/js/scrollreveal7984.js?ver=3.3.4'></script>
<script type='text/javascript' src='../wp-content/themes/queeny/assets/js/waypoint1f22.js?ver=1.6.2'></script>
<script type='text/javascript' src='../wp-content/themes/queeny/assets/js/parallax.minc358.js?ver=1.1.3'></script>
<script type='text/javascript' src='../wp-content/themes/queeny/assets/js/scripts5152.js?ver=1.0'></script>
<script type='text/javascript' src='../wp-content/themes/queeny/assets/js/map-style8a54.js?ver=1.0.0'></script>
<script type='text/javascript' src='../wp-content/themes/queeny/assets/js/pace923e.js?ver=5.4.10'></script>
<script type='text/javascript' src='../wp-includes/js/wp-embed.min923e.js?ver=5.4.10'></script>
<script type='text/javascript' src='../wp-content/plugins/elementor/assets/js/frontend-modules.minc867.js?ver=2.9.7'></script>
<script type='text/javascript' src='../wp-includes/js/jquery/ui/position.mine899.js?ver=1.11.4'></script>
<script type='text/javascript' src='../wp-content/plugins/elementor/assets/lib/dialog/dialog.minae9e.js?ver=4.7.6'></script>
<script type='text/javascript' src='../wp-content/plugins/elementor/assets/lib/waypoints/waypoints.min05da.js?ver=4.0.2'></script>
<script type='text/javascript' src='../wp-content/plugins/elementor/assets/lib/share-link/share-link.minc867.js?ver=2.9.7'></script>
<script type='text/javascript'>
var elementorFrontendConfig = {"environmentMode":{"edit":false,"wpPreview":false},"i18n":{"shareOnFacebook":"Share on Facebook","shareOnTwitter":"Share on Twitter","pinIt":"Pin it","downloadImage":"Download image"},"is_rtl":false,"breakpoints":{"xs":0,"sm":480,"md":768,"lg":1200,"xl":1440,"xxl":1600},"version":"2.9.7","urls":{"assets":"http:\/\/queeny.like-themes.com\/wp-content\/plugins\/elementor\/assets\/"},"settings":{"page":[],"general":{"elementor_global_image_lightbox":"yes","elementor_lightbox_enable_counter":"yes","elementor_lightbox_enable_fullscreen":"yes","elementor_lightbox_enable_zoom":"yes","elementor_lightbox_enable_share":"yes","elementor_lightbox_title_src":"title","elementor_lightbox_description_src":"description"},"editorPreferences":[]},"post":{"id":617,"title":"My%20account%20%E2%80%93%20Queeny","excerpt":"","featuredImage":false}};
</script>
<script type='text/javascript' src='../wp-content/plugins/elementor/assets/js/frontend.minc867.js?ver=2.9.7'></script>
</body>

<!-- Mirrored from queeny.like-themes.com/my-account/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 10 May 2022 15:50:30 GMT -->
</html>
