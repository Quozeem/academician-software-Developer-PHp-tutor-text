<?php
session_start();
//add to cart query
	include_once("../includes/functions.php");
if(isset($_POST["command"]))
{
	if($_POST["command"] == "add" &&  $_POST['productid']>0)
	{
		$pid=$_POST['productid'];
                 
		$connected=new connection();
		$connected->addtocart($pid,1);
		header("location: ../shop/");
		exit();
	}
	}
    
?>
<!DOCTYPE html>
<html lang="en-US">

<!-- Mirrored from queeny.like-themes.com/shop/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 10 May 2022 15:50:34 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width">
	<meta name="format-detection" content="telephone=no">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="../xmlrpc.html">
	<title>Products &#8211; Bikini Store</title>
<link rel='dns-prefetch' href='http://fonts.googleapis.com/' />
<link rel='dns-prefetch' href='http://s.w.org/' />
<link rel="alternate" type="application/rss+xml" title="Queeny &raquo; Feed" href="../feed/index.html" />
<link rel="alternate" type="application/rss+xml" title="Queeny &raquo; Comments Feed" href="../comments/feed/index.html" />
<link rel="alternate" type="application/rss+xml" title="Queeny &raquo; Products Feed" href="feed/index.html" />
		<script type="text/javascript">
			window._wpemojiSettings = {"baseUrl":"https:\/\/s.w.org\/images\/core\/emoji\/12.0.0-1\/72x72\/","ext":".png","svgUrl":"https:\/\/s.w.org\/images\/core\/emoji\/12.0.0-1\/svg\/","svgExt":".svg","source":{"concatemoji":"http:\/\/queeny.like-themes.com\/wp-includes\/js\/wp-emoji-release.min.js?ver=5.4.10"}};
			/*! This file is auto-generated */
			!function(e,a,t){var n,r,o,i=a.createElement("canvas"),p=i.getContext&&i.getContext("2d");function s(e,t){var a=String.fromCharCode;p.clearRect(0,0,i.width,i.height),p.fillText(a.apply(this,e),0,0);e=i.toDataURL();return p.clearRect(0,0,i.width,i.height),p.fillText(a.apply(this,t),0,0),e===i.toDataURL()}function c(e){var t=a.createElement("script");t.src=e,t.defer=t.type="text/javascript",a.getElementsByTagName("head")[0].appendChild(t)}for(o=Array("flag","emoji"),t.supports={everything:!0,everythingExceptFlag:!0},r=0;r<o.length;r++)t.supports[o[r]]=function(e){if(!p||!p.fillText)return!1;switch(p.textBaseline="top",p.font="600 32px Arial",e){case"flag":return s([127987,65039,8205,9895,65039],[127987,65039,8203,9895,65039])?!1:!s([55356,56826,55356,56819],[55356,56826,8203,55356,56819])&&!s([55356,57332,56128,56423,56128,56418,56128,56421,56128,56430,56128,56423,56128,56447],[55356,57332,8203,56128,56423,8203,56128,56418,8203,56128,56421,8203,56128,56430,8203,56128,56423,8203,56128,56447]);case"emoji":return!s([55357,56424,55356,57342,8205,55358,56605,8205,55357,56424,55356,57340],[55357,56424,55356,57342,8203,55358,56605,8203,55357,56424,55356,57340])}return!1}(o[r]),t.supports.everything=t.supports.everything&&t.supports[o[r]],"flag"!==o[r]&&(t.supports.everythingExceptFlag=t.supports.everythingExceptFlag&&t.supports[o[r]]);t.supports.everythingExceptFlag=t.supports.everythingExceptFlag&&!t.supports.flag,t.DOMReady=!1,t.readyCallback=function(){t.DOMReady=!0},t.supports.everything||(n=function(){t.readyCallback()},a.addEventListener?(a.addEventListener("DOMContentLoaded",n,!1),e.addEventListener("load",n,!1)):(e.attachEvent("onload",n),a.attachEvent("onreadystatechange",function(){"complete"===a.readyState&&t.readyCallback()})),(n=t.source||{}).concatemoji?c(n.concatemoji):n.wpemoji&&n.twemoji&&(c(n.twemoji),c(n.wpemoji)))}(window,document,window._wpemojiSettings);
		</script>
		<style type="text/css">
img.wp-smiley,
img.emoji {
	display: inline !important;
	border: none !important;
	box-shadow: none !important;
	height: 1em !important;
	width: 1em !important;
	margin: 0 .07em !important;
	vertical-align: -0.1em !important;
	background: none !important;
	padding: 0 !important;
}
</style>
	<link rel='stylesheet' id='wp-block-library-css'  href='../wp-includes/css/dist/block-library/style.min923e.css?ver=5.4.10' type='text/css' media='all' />
<link rel='stylesheet' id='wp-block-library-theme-css'  href='../wp-includes/css/dist/block-library/theme.min923e.css?ver=5.4.10' type='text/css' media='all' />
<link rel='stylesheet' id='wc-block-style-css'  href='../wp-content/plugins/woocommerce/packages/woocommerce-blocks/build/stylefc72.css?ver=2.5.14' type='text/css' media='all' />
<link rel='stylesheet' id='contact-form-7-css'  href='../wp-content/plugins/contact-form-7/includes/css/styles6725.css?ver=5.1.7' type='text/css' media='all' />
<link rel='stylesheet' id='lt-custom-css'  href='../wp-content/plugins/lt-custom/css/lt-custom5152.css?ver=1.0' type='text/css' media='all' />
<link rel='stylesheet' id='lt-colorpicker-css'  href='../wp-content/plugins/lt-custom/css/colorpicker5152.css?ver=1.0' type='text/css' media='all' />
<link rel='stylesheet' id='lt-colorpicker-font-css'  href='http://fonts.googleapis.com/css?family=Open+Sans%7CPlayfair+Display%3A700&amp;ver=1.0#038;subset=latin' type='text/css' media='all' />
<link rel='stylesheet' id='lt-colorpicker-font-2-css'  href='http://fonts.googleapis.com/css?family=Lato%3A300%7CUbuntu%3A700&amp;ver=1.0#038;subset=latin' type='text/css' media='all' />
<link rel='stylesheet' id='dashicons-css'  href='../wp-includes/css/dashicons.min923e.css?ver=5.4.10' type='text/css' media='all' />
<link rel='stylesheet' id='post-views-counter-frontend-css'  href='../wp-content/plugins/post-views-counter/css/frontende7f0.css?ver=1.3.1' type='text/css' media='all' />
<link rel='stylesheet' id='woocommerce-layout-css'  href='../wp-content/plugins/woocommerce/assets/css/woocommerce-layout5fc8.css?ver=4.0.4' type='text/css' media='all' />
<link rel='stylesheet' id='woocommerce-smallscreen-css'  href='../wp-content/plugins/woocommerce/assets/css/woocommerce-smallscreen5fc8.css?ver=4.0.4' type='text/css' media='only screen and (max-width: 768px)' />
<link rel='stylesheet' id='woocommerce-general-css'  href='../wp-content/plugins/woocommerce/assets/css/woocommerce5fc8.css?ver=4.0.4' type='text/css' media='all' />
<style id='woocommerce-inline-inline-css' type='text/css'>
.woocommerce form .form-row .required { visibility: visible; }
</style>
<link rel='stylesheet' id='bootstrap-css'  href='../wp-content/themes/queeny/assets/css/bootstrap-grid5152.css?ver=1.0' type='text/css' media='all' />
<link rel='stylesheet' id='queeny-plugins-css'  href='../wp-content/themes/queeny/assets/css/plugins5152.css?ver=1.0' type='text/css' media='all' />
<link rel='stylesheet' id='queeny-theme-style-css'  href='../wp-content/themes/queeny/style5152.css?ver=1.0' type='text/css' media='all' />
<style id='queeny-theme-style-inline-css' type='text/css'>
@font-face {
			font-family: 'queeny-fontello';
			  src: url('../wp-content/themes/queeny/assets/fontello/lte-queenye4c2.eot?1.0');
			  src: url('../wp-content/themes/queeny/assets/fontello/lte-queenye4c2.eot?1.0#iefix') format('embedded-opentype'),
			       url('../wp-content/themes/queeny/assets/fontello/lte-queenye4c2.html?1.0') format('woff2'),
			       url('../wp-content/themes/queeny/assets/fontello/lte-queenye4c2.woff?1.0') format('woff'),
			       url('../wp-content/themes/queeny/assets/fontello/lte-queenye4c2.ttf?1.0') format('truetype'),
			       url('../wp-content/themes/queeny/assets/fontello/lte-queenye4c2.svg?1.0#lte-queeny') format('svg');
			  font-weight: normal;
			  font-style: normal;
			}
			:root {			  --black:  #101010 !important;			  --black-darker:  #000000 !important;			  --black-text:  rgba(16,16,16,1) !important;			  --black-light:  rgba(16,16,16,.7) !important;			  --gray:   #f6f4ef !important;			  --gray-lighter:   rgba(246,244,239,.5) !important;			  --white:  #FFFFFF !important;			  --white-text:  rgba(255,255,255,.75) !important;			  --main:   #b7a26d !important;			  --main-darker: #99844f !important;			  --main-lighter:  rgba(183,162,109,.5) !important;			  --second:   #b7a26d !important;			  --red:   #D12323 !important;			  --geen:   #D12323 !important;--font-main: 'Mulish';--font-headers: 'Marcellus SC';--font-subheaders: 'Monsieur La Doulaise';			  			}				.lte-page-header { background-image: url(../wp-content/uploads/2019/06/inner_header.jpg) !important; } #lte-widgets-footer { background-image: url(//queeny.like-themes.com/wp-content/uploads/2019/06/footer-bg.jpg) !important; } #nav-wrapper.lte-layout-transparent .lte-navbar.dark.affix { background-color: rgba(0,0,0,0.75) !important; } .lte-navbar .lte-logo img, .footer-widget-area .lte-logo img { max-height: 42px !important; } 
</style>
<link rel='stylesheet' id='font-awesome-css'  href='../wp-content/themes/queeny/assets/fonts/font-awesome/css/all.min5152.css?ver=1.0' type='text/css' media='all' />
<link rel='stylesheet' id='queeny-google-fonts-css'  href='http://fonts.googleapis.com/css?family=Mulish:400,300,400i,700,700i%7CMarcellus+SC:400%7CMonsieur+La+Doulaise:400&amp;subset=latin' type='text/css' media='all' />
<link rel='stylesheet' id='font-awesome-shims-css'  href='../wp-content/themes/queeny/assets/fonts/font-awesome/css/v4-shims.min5152.css?ver=1.0' type='text/css' media='all' />
<link rel='stylesheet' id='queeny-fontello-css'  href='../wp-content/themes/queeny/assets/fontello/lte-queeny-codes5152.css?ver=1.0' type='text/css' media='all' />
<script type='text/javascript' src='../wp-includes/js/jquery/jquery4a5f.js?ver=1.12.4-wp'></script>
<script type='text/javascript' src='../wp-includes/js/jquery/jquery-migrate.min330a.js?ver=1.4.1'></script>
<script type='text/javascript' src='../wp-content/themes/queeny/assets/js/modernizr-2.6.2.min61da.js?ver=2.6.2'></script>
<link rel='https://api.w.org/' href='../wp-json/index.html' />
<link rel="EditURI" type="application/rsd+xml" title="RSD" href="../xmlrpc0db0.html?rsd" />
<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="../wp-includes/wlwmanifest.xml" /> 
<meta name="generator" content="WordPress 5.4.10" />
<meta name="generator" content="WooCommerce 4.0.4" />
	<noscript><style>.woocommerce-product-gallery{ opacity: 1 !important; }</style></noscript>
	<style type="text/css">.recentcomments a{display:inline !important;padding:0 !important;margin:0 !important;}</style><link rel="icon" href="../wp-content/uploads/2019/06/cropped-favicon-100x100.png" sizes="32x32" />
<link rel="icon" href="../wp-content/uploads/2019/06/cropped-favicon-250x250.png" sizes="192x192" />
<link rel="apple-touch-icon" href="../wp-content/uploads/2019/06/cropped-favicon-250x250.png" />
<meta name="msapplication-TileImage" content="http://queeny.like-themes.com/wp-content/uploads/2019/06/cropped-favicon-275x275.png" />
<script language="javascript">
	function addtocart(pid){
		document.form1.productid.value=pid;
		document.form1.command.value='add';
		document.form1.submit();
	}
</script>
</head>
<body class="archive post-type-archive post-type-archive-product theme-queeny woocommerce woocommerce-page woocommerce-no-js full-width paceloader-enabled elementor-default">
<div id="lte-preloader" data-loader="Loading..."></div><div class="lte-content-wrapper lte-footer-parallax lte-layout-default">	<div class="lte-header-wrapper header-h1  header-parallax  hasBreadcrumbs lte-layout-default lte-pageheader-">
	<div class="lte-topbar-block lte-topbar-before-default"><div class="container">		<div data-elementor-type="wp-post" data-elementor-id="9728" class="elementor elementor-9728" data-elementor-settings="[]">
			<div class="elementor-inner">
				<div class="elementor-section-wrap">
							<section class="elementor-element elementor-element-1a0d664b elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section" data-id="1a0d664b" data-element_type="section">
						<div class="elementor-container elementor-column-gap-default">
				<div class="elementor-row">
				<div class="elementor-element elementor-element-6ba9c6ce elementor-hidden-tablet elementor-hidden-phone elementor-column elementor-col-50 elementor-top-column" data-id="6ba9c6ce" data-element_type="column">
			<div class="elementor-column-wrap  elementor-element-populated">
					<div class="elementor-widget-wrap">
				<div class="elementor-element elementor-element-44f225ad elementor-widget elementor-widget-text-editor" data-id="44f225ad" data-element_type="widget" data-widget_type="text-editor.default">
				<div class="elementor-widget-container">
					<div class="elementor-text-editor elementor-clearfix"></div>
				</div>
				</div>
				<div class="elementor-element elementor-element-71caa0a elementor-widget elementor-widget-lte-navmenu" data-id="71caa0a" data-element_type="widget" data-widget_type="lte-navmenu.default">
				<div class="elementor-widget-container">
			<div class="lte-navmenu-sc"><div class="menu-main-menu-container"><ul id="menu-main-menu" class="menu"><li id="menu-item-13201" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home menu-item-13201"><a href="../index.html" >Home</a></li>
<li id="menu-item-3557" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-3557"><a href="../faq/">About us</a></li>
<li id="menu-item-619" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-619"><a href="#" >Catalog</a></li>
<!--<li id="menu-item-59" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-59"><a >Blog</a></li--->
<li id="menu-item-13613" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-13613"><a href="../contacts/" >Contacts</a></li>
</ul></div></div>		</div>
				</div>
						</div>
			</div>
		</div>
				<div class="elementor-element elementor-element-c03db80 elementor-column elementor-col-50 elementor-top-column" data-id="c03db80" data-element_type="column">
			<div class="elementor-column-wrap  elementor-element-populated">
					<div class="elementor-widget-wrap">
				<div class="elementor-element elementor-element-99ac59f elementor-widget elementor-widget-shortcode" data-id="99ac59f" data-element_type="widget" data-widget_type="shortcode.default">
				<div class="elementor-widget-container">
					<div class="elementor-shortcode"><div class="lte-navbar-icons"><ul>
					<li class="lte-nav-search ">
						<div class="lte-top-search-wrapper" data-base-href="">
							<a href="#"  id="lte-top-search-ico"  class="lte-top-search-ico icon icon-search" aria-hidden="true"></a>
							<a href="#" class="lte-top-search-ico-close " aria-hidden="true">&times;</a>
							<input placeholder="Search" value="" type="text">
						</div><span class="lte-header">Search</span>
					</li>
						<li class="lte-nav-profile menu-item-has-children ">
							<a href="../my-account/"><span class="fa icon icon-login"></span><span class="lte-header">Login</span></a></li>
						<li class="lte-nav-cart ">
							<div class="cart-navbar">
								<a href="../cart/" class="lte-cart" title="View your shopping cart">
                                <span class="cart-contents header-cart-count count"> <?php
                                	if(empty($_SESSION['cart'])){
                                    	    echo "0";
                                    	   }
                                           else{
                                            echo count($_SESSION["cart"]);
                                           }?></span><span class="lte-icon-cart icon icon-shopping-bag"><span class="lte-header">Cart</span></span>
								</a>
							</div>
						</li></ul></div></div>
				</div>
				</div>
						</div>
			</div>
		</div>
						</div>
			</div>
		</section>
						</div>
			</div>
		</div>
		</div></div><div id="lte-nav-wrapper" class="lte-layout-default lte-nav-color-black">
	<nav class="lte-navbar" data-spy="" data-offset-top="0">
		<div class="container">
						
			<div class="lte-navbar-logo ">	
				<a class="lte-logo" href="../"><img src="../logo/bikini_logoo.jpeg" style="width:135px;height: 55px;" alt="Film" ></a>			</div>	
						
			<div id="lte-navbar" class="navbar-mobile-white navbar-collapse collapse" data-mobile-screen-width="1198">
				<div class="toggle-wrap">
					<a class="lte-logo" href="../"><img src="../logo/bikini_logoo.jpeg" style="width:135px;height: 55px;" alt="Film"></a>						
					<button type="button" class="lte-navbar-toggle collapsed">
						<span class="close">&times;</span>
					</button>							
					<div class="clearfix"></div>
				</div>
				<ul id="menu-main-menu-1" class="lte-ul-nav">
                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home menu-item-13201">
                <a href="../" ><span><span>Home</span></span></a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home menu-item-13201">
<a href="../faq/"><span><span>About us</span></span></a>
<!--<ul class="sub-menu">
	<li id="menu-item-13645" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-13645"><a href="../testimonials/index.html" ><span><span>Testimonials</span></span></a></li>
	<li id="menu-item-13637" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-13637"><a href="../faq/index.html" ><span><span>FAQ</span></span></a></li>
	<li id="menu-item-60" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-60"><a ><span><span>Gallery</span></span></a>
	<ul class="sub-menu">
		<li id="menu-item-47" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-47"><a href="../gallery-2-columns/index.html" ><span><span>Gallery 2-columns</span></span></a></li>
		<li id="menu-item-48" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-48"><a href="../gallery-3-columns/index.html" ><span><span>Gallery 3-columns</span></span></a></li>
		<li id="menu-item-49" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-49"><a href="../gallery-4-columns/index.html" ><span><span>Gallery 4-columns</span></span></a></li>
	</ul>
</li>
	<li id="menu-item-2584" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2584"><a href="../404-page.html" ><span><span>404 Page</span></span></a></li>
</ul-->
</li>
<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-619">
<a href="#" ><span><span>Catalog</span></span></a>
<ul class="sub-menu">
	<li id="menu-item-623" class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item current_page_item menu-item-623">
    <a href="../shop/" ><span><span>Shop</span></span></a></li>
	<li id="menu-item-622" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-622"><a href="../cart/" ><span><span>Cart</span></span></a></li>
	<li id="menu-item-621" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-621"><a href="../checkout/" ><span><span>Checkout</span></span></a></li>
	<li id="menu-item-620" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-620"><a href="../my-account/" ><span><span>My account</span></span></a></li>
</ul>
</li>
<!---<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-59"><a ><span><span>Blog</span></span></a>
<ul class="sub-menu">
	<li id="menu-item-3976" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-3976"><a href="#" ><span><span>Blog with Sidebar</span></span></a>
	<ul class="sub-menu">
		<li id="menu-item-43" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-43"><a href="../classic-blog-with-right-sidebar/index.html" ><span><span>Classic Right Sidebar</span></span></a></li>
		<li id="menu-item-7844" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-7844"><a href="../blog-masonry-with-sidebar/index.html" ><span><span>Masonry with Right Sidebar</span></span></a></li>
	</ul>
</li>
	<li id="menu-item-3977" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-3977"><a href="#" ><span><span>Blog without Sidebar</span></span></a>
	<ul class="sub-menu">
		<li id="menu-item-3975" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3975"><a href="../classic-blog-without-sidebar/index.html" ><span><span>Classic Blog</span></span></a></li>
		<li id="menu-item-45" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-45"><a href="../blog-two-columns-without-sidebar/index.html" ><span><span>Masonry 2-Columns</span></span></a></li>
		<li id="menu-item-44" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-44"><a href="../blog-three-columns/index.html" ><span><span>Masonry 3-Columns</span></span></a></li>
	</ul>
</li>
</ul>
</li-->
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-13613">
<a href="../contacts/" ><span><span>Contacts</span></span></a></li>
</ul><ul class="lte-navbar-icons-add">
						<li class="lte-nav-social "><a href="#" class="queeny_fa5_icons fas fa-phone-alt" target="_blank">
                        <span class="lte-header">2-583-018-36-28</span></a></li>
						<li class="lte-nav-button lte-inner-only"><a href="../shop/" class="lte-btn btn-xs">
                        <span class="lte-btn-inner"><span class="lte-btn-before"></span>BUY NOW<span class="lte-btn-after"></span></span></a></li></ul>				<div class="lte-mobile-controls">
					<div><ul>
					<li class="lte-nav-search ">
						<div class="lte-top-search-wrapper" data-base-href="">
							<a href="#"  id="lte-top-search-ico-mobile"  class="lte-top-search-ico icon icon-search" aria-hidden="true">
                            </a>
							
							<input placeholder="Search" value="" type="text">
						</div><span class="lte-header">Search</span>
					</li>
						<li class="lte-nav-profile menu-item-has-children ">
							<a href="../my-account/"><span class="fa icon icon-login"></span><span class="lte-header">Login</span></a></li>
						<li class="lte-nav-cart ">
							<div class="cart-navbar">
								<a href="../cart/" class="lte-cart" title="View your shopping cart">
                                <span class="cart-contents header-cart-count count"> <?php
                                	if(empty($_SESSION['cart'])){
                                    	    echo "0";
                                    	   }
                                           else{
                                            echo count($_SESSION["cart"]);
                                           }?></span><span class="lte-icon-cart icon icon-shopping-bag"><span class="lte-header">Cart</span></span>
								</a>
							</div>
						</li></ul></div>				
				</div>				
			</div>
			<div class="navbar-controls">	
				<button type="button" class="lte-navbar-toggle collapsed">
					<span class="icon-bar top-bar"></span>
					<span class="icon-bar middle-bar"></span>
					<span class="icon-bar bottom-bar"></span>
				</button>			
			</div>	
		</div>
	</nav>
</div>
		<header class="lte-page-header lte-bg-parallax-enabled">
		    <div class="container">
		    	<div class="lte-header-h1-wrapper"><h1 class="header">All Genres</h1></div><ul class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/"><!-- Breadcrumb NavXT 6.4.0 -->
<li class="home"><span property="itemListElement" typeof="ListItem"><a property="item" typeof="WebPage" title="Go to Home." href="../" class="home"><span property="name">Home</span></a><meta property="position" content="1"></span></li>
<li class="archive post-product-archive current-item"><span property="itemListElement" typeof="ListItem"><span property="name">Films</span><meta property="position" content="2"></span></li>
</ul>		    </div>
			<span class="lte-tagline"><span>Genres Film</span></span><div class="lte-social lte-nav-second lte-type-"><ul><li><a href="#" target="_self"><span class="queeny_fa5_icons fab fa-twitter"></span></a></li><li><a href="#" target="_self"><span class="queeny_fa5_icons fab fa-facebook-f"></span></a></li><li><a href="#" target="_self"><span class="queeny_fa5_icons fab fa-instagram"></span></a></li><li><a href="#" target="_self"><span class="queeny_fa5_icons fab fa-youtube"></span></a></li></ul></div>		</header>
			</div><div class="container main-wrapper"><div class="inner-page margin-default">
	  				<div class="row"><div class="col-xl-9 col-xl-push-3 col-lg-8 col-lg-push-4 col-md-12 lte-text-page products-column-with-sidebar matchHeight" ><header class="woocommerce-products-header">
	
	</header>
<div class="woocommerce-notices-wrapper"></div><p class="woocommerce-result-count">
	Showing <?php 
    // get for next and previous query
    if(isset($_GET['page'])){
	     include_once("../includes/db.php");
$n = mysqli_query($con,"select * from joinall ");
$count = mysqli_num_rows($n);
if( (($_GET['page']*6)+6)> $count){
     echo ($_GET['page']*6)."&ndash;".$count. " of ".$count ." results";
}else{

	   echo ($_GET['page']*6)."&ndash;".(($_GET['page']*6)+6). " of ".$count ." results";
	}}else{
	    include_once("../includes/db.php");
$n = mysqli_query($con,"select * from joinall");
$count = mysqli_num_rows($n);
	   echo "1&ndash;6 of ".$count." results";
	} ?></p>
<form class="woocommerce-ordering" method="get">
	<select name="orderby" class="orderby" aria-label="Shop order">
					<option value="menu_order"  selected='selected'>Default sorting</option>
					<option value="popularity" >Sort by popularity</option>
				<!--	<option value="rating" >Sort by average rating</option>
					<option value="date" >Sort by latest</option-->
					<option value="price" >Sort by price: low to high</option>
					<option value="price-desc" >Sort by price: high to low</option>
			</select>
	<input type="hidden" name="paged" value="1" />
	</form>
    <form name="form1" method="post" action="">
	<input type="hidden" name="productid">
    <input type="hidden" name="command">
<ul class="products columns-3" style="width: 100%;">
	
<li  style="width: 50%;" class="has-post-thumbnail product type-product post-11141 status-publish first instock product_cat-lingerie shipping-taxable purchasable product-type-simple">
 <?php
 // fetch all film products
    include_once("../includes/db.php");
 $n = mysqli_query($con,"select * from joinall ");
$count = mysqli_num_rows($n);
$d = ($count-6);
if (!isset($_GET['page'])) {
   
   $sql = "SELECT * FROM joinall WHERE id between '$d' and '$count' ORDER BY id DESC limit 6";
   
$query= mysqli_query($con,$sql);
} elseif(isset($_GET['page']) && ($_GET['page']=1)) {
  
  
    if($count <12){
        
    $recordsPerPage = ($count-6);
  // select out product by displaying 6 product per pages and for thr next page  
   $sql = "SELECT * FROM joinall WHERE id between '1' and '$recordsPerPage' limit 3 ";
$query= mysqli_query($con,$sql);
}}else{
    $page = (int)$_GET['page'];
   $recordsPerPage = 6*$page;
   
   $sql = "SELECT * FROM joinall WHERE id between '$recordsPerPage' and '$d' limit 6 ";
$query= mysqli_query($con,$sql);
}
if(!$query){
    echo "error <br/>".$query.mysqli_error($con);
}while($row = mysqli_fetch_array($query)){

                   /**   include_once("../includes/db.php");
                      //  $categories="";
                        $select="SELECT * FROM joinall ORDER BY id DESC LIMIT 6";
                       // $select="SELECT * FROM advertise ORDER BY id DESC";
                        $result=mysqli_query($con,$select);
                        
                        if(!$result){
                            die("failed").mysqli_connect_error();
                        }while($row=mysqli_fetch_array($result)){
                            */
                        ?>	<div class="item">			<div class="lte-image">
            <?php  if( $row['stockout'] <= "0"){
    ?> <a href="#">              
	<img width="480" height="655" src="../Bikini_Iimages/compress_<?php echo $row['file'];?>"  /></a> <?php
         } else { ?> <a href="../product/glory-lady-lingerie-set/?id=<?php echo $row['id'];?>">              
	<img width="480" height="655" src="../Bikini_Iimages/compress_<?php echo $row['file'];?>"  /></a> <?php } ?></div>
    <div class="lte-item-descr">
        <a ><h2 class="woocommerce-loop-product__title"><?php echo $row['brand']; ?></h2></a>
	<span class="price">
    <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">&#36;</span>
    <?php echo $row['price']; ?></span></span>
      <?php  if( $row['stockout'] <= "0"){
    ?>
<button disabled="disabled"
class="button product_type_simple add_to_cart_button ajax_add_to_cart">Sold out</button><?php
}else{?>
<button name="add" onclick="addtocart(<?php echo $row['id']?>)"
class="button product_type_simple add_to_cart_button ajax_add_to_cart">BUY NOW</button>
<a href="../product/glory-lady-lingerie-set/?id=<?php echo $row['id'];?>" class="lte-btn-more lte-btn btn">More Info</a>
<?php } ?></div>
			</div></li>
<li  style="width: 50%;" class="has-post-thumbnail product type-product post-11159 status-publish instock product_cat-lingerie shipping-taxable purchasable product-type-simple">
	<?php } ?></li>
<li style="width: 50%;" class="has-post-thumbnail product type-product post-11160 status-publish last instock product_cat-lingerie product_tag-clothes product_tag-fashion product_tag-underwear sale shipping-taxable purchasable product-type-simple">
	<!--<div class="item">			<div class="lte-image">
		
	<span class="onsale">Sale</span>
	<img width="480" height="655" src="../wp-content/uploads/2019/06/shop-04-480x655.jpg" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="" srcset="http://queeny.like-themes.com/wp-content/uploads/2019/06/shop-04-480x655.jpg 480w, http://queeny.like-themes.com/wp-content/uploads/2019/06/shop-04-220x300.jpg 220w, http://queeny.like-themes.com/wp-content/uploads/2019/06/shop-04-751x1024.jpg 751w, http://queeny.like-themes.com/wp-content/uploads/2019/06/shop-04-768x1047.jpg 768w, http://queeny.like-themes.com/wp-content/uploads/2019/06/shop-04-242x330.jpg 242w, http://queeny.like-themes.com/wp-content/uploads/2019/06/shop-04-385x525.jpg 385w, http://queeny.like-themes.com/wp-content/uploads/2019/06/shop-04-587x800.jpg 587w, http://queeny.like-themes.com/wp-content/uploads/2019/06/shop-04-403x550.jpg 403w, http://queeny.like-themes.com/wp-content/uploads/2019/06/shop-04-600x818.jpg 600w, http://queeny.like-themes.com/wp-content/uploads/2019/06/shop-04.jpg 880w" sizes="(max-width: 480px) 100vw, 480px" /></div><div class="lte-item-descr"><a href="../product/snow-white-lace-badi/index.html"><h2 class="woocommerce-loop-product__title">Snow-White Lace Badi</h2></a>
	<span class="price"><del><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">&#36;</span>178.99</span></del> <ins><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">&#36;</span>168.39</span></ins></span>
<a href="index22cc.html?add-to-cart=11160" data-quantity="1" class="button product_type_simple add_to_cart_button ajax_add_to_cart" data-product_id="11160" data-product_sku="" aria-label="Add &ldquo;Snow-White Lace Badi&rdquo; to your cart" rel="nofollow">Add to cart</a><a href="../product/snow-white-lace-badi/index.html" class="lte-btn-more lte-btn btn">More Info</a></div>
			</div--></li>
<li style="width: 50%;" class="has-post-thumbnail product type-product post-11126 status-publish first instock product_cat-lingerie product_tag-lingerie product_tag-store shipping-taxable purchasable product-type-simple">
</li>
<!--<li class="has-post-thumbnail product type-product post-11062 status-publish instock product_cat-underwear shipping-taxable purchasable product-type-simple">
	<div class="item">			<div class="lte-image">
		<img width="480" height="655" src="../wp-content/uploads/2019/06/shop-06-480x655.jpg" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="" srcset="http://queeny.like-themes.com/wp-content/uploads/2019/06/shop-06-480x655.jpg 480w, http://queeny.like-themes.com/wp-content/uploads/2019/06/shop-06-220x300.jpg 220w, http://queeny.like-themes.com/wp-content/uploads/2019/06/shop-06-751x1024.jpg 751w, http://queeny.like-themes.com/wp-content/uploads/2019/06/shop-06-768x1047.jpg 768w, http://queeny.like-themes.com/wp-content/uploads/2019/06/shop-06-242x330.jpg 242w, http://queeny.like-themes.com/wp-content/uploads/2019/06/shop-06-385x525.jpg 385w, http://queeny.like-themes.com/wp-content/uploads/2019/06/shop-06-587x800.jpg 587w, http://queeny.like-themes.com/wp-content/uploads/2019/06/shop-06-403x550.jpg 403w, http://queeny.like-themes.com/wp-content/uploads/2019/06/shop-06-600x818.jpg 600w, http://queeny.like-themes.com/wp-content/uploads/2019/06/shop-06.jpg 880w" sizes="(max-width: 480px) 100vw, 480px" /></div><div class="lte-item-descr"><a href="../product/golden-beach-set/index.html"><h2 class="woocommerce-loop-product__title">Golden Beach Set</h2></a>
	<span class="price"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">&#36;</span>249.99</span></span>
<a href="indexbb93.html?add-to-cart=11062" data-quantity="1" class="button product_type_simple add_to_cart_button ajax_add_to_cart" data-product_id="11062" data-product_sku="" aria-label="Add &ldquo;Golden Beach Set&rdquo; to your cart" rel="nofollow">Add to cart</a><a href="../product/golden-beach-set/index.html" class="lte-btn-more lte-btn btn">More Info</a></div>
			</div></li>
<li class="has-post-thumbnail product type-product post-9247 status-publish last instock product_cat-underwear sale shipping-taxable purchasable product-type-simple">
	<div class="item">			<div class="lte-image">
		
	<span class="onsale">Sale</span>
	<img width="480" height="655" src="../wp-content/uploads/2019/06/shop-09-480x655.jpg" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="" srcset="http://queeny.like-themes.com/wp-content/uploads/2019/06/shop-09-480x655.jpg 480w, http://queeny.like-themes.com/wp-content/uploads/2019/06/shop-09-220x300.jpg 220w, http://queeny.like-themes.com/wp-content/uploads/2019/06/shop-09-751x1024.jpg 751w, http://queeny.like-themes.com/wp-content/uploads/2019/06/shop-09-768x1047.jpg 768w, http://queeny.like-themes.com/wp-content/uploads/2019/06/shop-09-242x330.jpg 242w, http://queeny.like-themes.com/wp-content/uploads/2019/06/shop-09-385x525.jpg 385w, http://queeny.like-themes.com/wp-content/uploads/2019/06/shop-09-587x800.jpg 587w, http://queeny.like-themes.com/wp-content/uploads/2019/06/shop-09-403x550.jpg 403w, http://queeny.like-themes.com/wp-content/uploads/2019/06/shop-09-600x818.jpg 600w, http://queeny.like-themes.com/wp-content/uploads/2019/06/shop-09.jpg 880w" sizes="(max-width: 480px) 100vw, 480px" /></div><div class="lte-item-descr"><a href="../product/set-of-tightening-underwear/index.html"><h2 class="woocommerce-loop-product__title">Set of Tightening Underwear</h2></a>
	<span class="price"><del><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">&#36;</span>126.99</span></del> <ins><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">&#36;</span>119.49</span></ins></span>
<a href="indexfc06.html?add-to-cart=9247" data-quantity="1" class="button product_type_simple add_to_cart_button ajax_add_to_cart" data-product_id="9247" data-product_sku="" aria-label="Add &ldquo;Set of Tightening Underwear&rdquo; to your cart" rel="nofollow">Add to cart</a><a href="../product/set-of-tightening-underwear/index.html" class="lte-btn-more lte-btn btn">More Info</a></div>
			</div></li--->
</ul>
</form>
<nav class="woocommerce-pagination">
	<ul class='page-numbers'>
    <?php  if (!isset($_GET['page'])) { ?>
	<li><span aria-current="page" class="page-numbers current">1</span></li>
    <li><a class="page-numbers" href="?page=<?=  1 ?>" style="width: 70px;">Next</a></li>
    <?php } else{if(isset($_GET['page'])&&($_GET['page']==1)){ ?>
    <li><a href="../shop" class="page-numbers" style="background: #B7A26D; width:80px;">Previous</a></li>
    <a href="?page=<?= $page + 1 ?>" class="page-numbers " style="width: 70px;">Next &rarr;</a>
    
	 <?php }if($_GET['page']>1){$page = $_GET['page'];
    $records = 6*$page;
   // $dbc=mysqli_connect('localhost','root','','bikini_store') or die(mysql_error());
//mysql_select_db('database',$dbc) or die(mysql_error());
$n = mysqli_query($con,"select * from joinall");
$count = mysqli_num_rows($n);
$d = ($count-6);
if($records < $d)
    { ?>
      <a href="?page=<?= $page - 1 ?>" class="page-numbers" style="background: #B7A26D; width:80px;"> Previous</a>
   <a href="?page=<?= $page + 1 ?>" class="page-numbers" style="width: 70px;">Next &rarr;</a>
<?php }elseif($records >= $d){?>
     <a href="?page=<?= $page - 1 ?>" class="page-numbers" style="background: #B7A26D; width:80px;"> Previous</a>
    
<?php }}} ?>
    
    
    
	<!--li><a class="next page-numbers" href="page/2/index.html">&rarr;</a></li-->
</ul>
</nav>
</div>												<div class="col-xl-3 col-xl-pull-9 col-lg-4 col-lg-pull-8 col-md-12 div-sidebar" >
							<div id="content-sidebar" class="content-sidebar woocommerce-sidebar widget-area" role="complementary">
					<aside id="woocommerce_product_search-3" class="widget woocommerce widget_product_search">
                    <form role="search" method="get" class="woocommerce-product-search" action="">
	<label class="screen-reader-text" for="woocommerce-product-search-field-0">Search for:</label>
	<input type="search" id="woocommerce-product-search-field-0" class="search-field" placeholder="Search products&hellip;" value="" name="s" />
	<button type="submit" value="Search">Search</button>
	<input type="hidden" name="post_type" value="product" />
</form>
</aside><aside id="woocommerce_product_categories-5" class="widget woocommerce widget_product_categories">
<div class="lte-sidebar-header"><h3 class="header-widget "><span class="widget-icon"></span>GENRES 
<span class="last widget-icon"></span></h3></div><ul class="product-categories"><li class="cat-item cat-item-371">
<a > KOREA</a></li>
<li class="cat-item cat-item-359"><a >HORROR</a></li>
<li class="cat-item cat-item-360"><a >ACTION</a></li>
<li class="cat-item cat-item-352"><a >TRAILLER</a></li>
</ul></aside><aside id="woocommerce_price_filter-6" class="widget woocommerce widget_price_filter"><div class="lte-sidebar-header">
<h3 class="header-widget "><span class="widget-icon"></span>Filter by price<span class="last widget-icon"></span></h3></div>
<form method="get" action="">
	<div class="price_slider_wrapper">
		<div class="price_slider" style="display:none;"></div>
		<div class="price_slider_amount" data-step="10">
			<input type="text" id="min_price" name="min_price" value="0" data-min="0" placeholder="Min price" />
			<input type="text" id="max_price" name="max_price" value="470" data-max="470" placeholder="Max price" />
						<button type="submit" class="button">Filter</button>
			<div class="price_label" style="display:none;">
				Price: <span class="from"></span> &mdash; <span class="to"></span>
			</div>
						<div class="clear"></div>
		</div>
	</div>
</form>

</aside><aside id="woocommerce_product_tag_cloud-5" class="widget woocommerce widget_product_tag_cloud"><div class="lte-sidebar-header">
<h3 class="header-widget "><span class="widget-icon"></span>Product tags<span class="last widget-icon"></span></h3></div>
<div class="tagcloud"><a  class="tag-cloud-link tag-link-194 tag-link-position-1" style="font-size: 8pt;" aria-label="clothes (1 product)">clothes</a>
<a  class="tag-cloud-link tag-link-193 tag-link-position-2" style="font-size: 8pt;" aria-label="fashion (1 product)">HORROR FIILM</a>
<a  class="tag-cloud-link tag-link-328 tag-link-position-3" style="font-size: 8pt;" aria-label="lingerie (1 product)">ROMANTIC FILM</a>
<a  class="tag-cloud-link tag-link-329 tag-link-position-4" style="font-size: 8pt;" aria-label="store (1 product)">INDIA FILM</a>
<a  class="tag-cloud-link tag-link-273 tag-link-position-5" style="font-size: 8pt;" aria-label="underwear (1 product)">CHINESE FILM</a></div></aside>				</div>
			</div>
					</div>
	</div>
</div></div><?php include "../footer.php";?>
		<div class="lt-custom-popup" data-image="../wp-content/plugins/lt-custom/images/icon.png"></div>
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
<script type='text/javascript' src='../wp-includes/js/jquery/ui/core.mine899.js?ver=1.11.4'></script>
<script type='text/javascript' src='../wp-includes/js/jquery/ui/widget.mine899.js?ver=1.11.4'></script>
<script type='text/javascript' src='../wp-includes/js/jquery/ui/mouse.mine899.js?ver=1.11.4'></script>
<script type='text/javascript' src='../wp-includes/js/jquery/ui/slider.mine899.js?ver=1.11.4'></script>
<script type='text/javascript' src='../wp-content/plugins/woocommerce/assets/js/jquery-ui-touch-punch/jquery-ui-touch-punch.min5fc8.js?ver=4.0.4'></script>
<script type='text/javascript' src='../wp-content/plugins/woocommerce/assets/js/accounting/accounting.minaffb.js?ver=0.4.2'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var woocommerce_price_slider_params = {"currency_format_num_decimals":"0","currency_format_symbol":"$","currency_format_decimal_sep":".","currency_format_thousand_sep":",","currency_format":"%s%v"};
/* ]]> */
</script>
<script type='text/javascript' src='../wp-content/plugins/woocommerce/assets/js/frontend/price-slider.min5fc8.js?ver=4.0.4'></script>
<script type='text/javascript' src='../wp-content/plugins/elementor/assets/js/frontend-modules.minc867.js?ver=2.9.7'></script>
<script type='text/javascript' src='../wp-includes/js/jquery/ui/position.mine899.js?ver=1.11.4'></script>
<script type='text/javascript' src='../wp-content/plugins/elementor/assets/lib/dialog/dialog.minae9e.js?ver=4.7.6'></script>
<script type='text/javascript' src='../wp-content/plugins/elementor/assets/lib/waypoints/waypoints.min05da.js?ver=4.0.2'></script>
<script type='text/javascript' src='../wp-content/plugins/elementor/assets/lib/share-link/share-link.minc867.js?ver=2.9.7'></script>
<script type='text/javascript'>
var elementorFrontendConfig = {"environmentMode":{"edit":false,"wpPreview":false},"i18n":{"shareOnFacebook":"Share on Facebook","shareOnTwitter":"Share on Twitter","pinIt":"Pin it","downloadImage":"Download image"},"is_rtl":false,"breakpoints":{"xs":0,"sm":480,"md":768,"lg":1200,"xl":1440,"xxl":1600},"version":"2.9.7","urls":{"assets":"http:\/\/queeny.like-themes.com\/wp-content\/plugins\/elementor\/assets\/"},"settings":{"general":{"elementor_global_image_lightbox":"yes","elementor_lightbox_enable_counter":"yes","elementor_lightbox_enable_fullscreen":"yes","elementor_lightbox_enable_zoom":"yes","elementor_lightbox_enable_share":"yes","elementor_lightbox_title_src":"title","elementor_lightbox_description_src":"description"},"editorPreferences":[]},"post":{"id":0,"title":"Products &#8211; Queeny","excerpt":"<p>This is where you can add new products to your store.<\/p>\n"}};
</script>
<script type='text/javascript' src='../wp-content/plugins/elementor/assets/js/frontend.minc867.js?ver=2.9.7'></script>
</body>

<!-- Mirrored from queeny.like-themes.com/shop/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 10 May 2022 15:50:54 GMT -->
</html>

<!-- Dynamic page generated in 0.695 seconds. -->
<!-- Cached page generated by WP-Super-Cache on 2022-05-10 15:37:59 -->

<!-- super cache -->