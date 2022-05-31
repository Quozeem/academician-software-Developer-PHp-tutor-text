<?php 
session_start();
// add to cart quert
	include_once("includes/functions.php");
if(isset($_POST["command"]))
{
	if($_POST["command"] == "add" &&  $_POST['productid']>0)
	{
		$pid=$_POST['productid'];
                 
		$connected=new connection();
		$connected->addtocart($pid,1);
		header("location: http://localhost/queeny.like-themes.com/");
		exit();
	}
	}
    ?>
    <?php include "sidebar.php";?>

	<!-- Content -->
	<div class="lte-text-page margin-disabled">
        <div class="row centered">
        	            <div class="col-xl-12 col-xs-12">
				<article id="post-13198" class="post-13198 page type-page status-publish hentry">
	<div class="entry-content clearfix" id="entry-div">
				<div data-elementor-type="wp-page" data-elementor-id="13198" class="elementor elementor-13198" data-elementor-settings="[]">
			<div class="elementor-inner">
				<div class="elementor-section-wrap">
							<section class="elementor-element elementor-element-4d0ebda elementor-section-full_width elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section" data-id="4d0ebda" data-element_type="section">
						<div class="elementor-container elementor-column-gap-no">
				<div class="elementor-row">
				<div class="elementor-element elementor-element-a831cd7 elementor-column elementor-col-100 elementor-top-column" data-id="a831cd7" data-element_type="column">
			<div class="elementor-column-wrap  elementor-element-populated">
					<div class="elementor-widget-wrap">
				<div class="elementor-element elementor-element-3440070 elementor-widget elementor-widget-lte-zoomslider" data-id="3440070" data-element_type="widget" data-widget_type="lte-zoomslider.default">
				<div class="elementor-widget-container">
			<div class="lte-slider-zoom lte-background-black  zoom-default  zoom-origin-center-center  lte-zs-overlay-black" data-zs-prev="" data-zs-next="" data-zs-overlay="black" data-zs-initzoom="1.2" data-zs-speed="20000" data-zs-interval="4500" data-zs-switchSpeed="7000" data-zs-arrows="false" data-zs-bullets="true" 
            data-zs-src='[&#34;http:\/\/queeny.like-themes.com\/wp-content\/uploads\/2019\/06\/SLIDE_01.jpg&#34;,&#34;http:\/\/queeny.like-themes.com\/wp-content\/uploads\/2019\/06\/SLIDE_02.jpg&#34;,&#34;http:\/\/queeny.like-themes.com\/wp-content\/uploads\/2019\/06\/SLIDE_03-new.jpg&#34;,&#34;http:\/\/queeny.like-themes.com\/wp-content\/uploads\/2019\/06\/SLIDE_04.jpg&#34;]'><span class="lte-tagline"><span>Nam lobortis dui et feugiat pellentesque</span></span><div class="container lte-zs-slider-wrapper"><div class="lte-zs-slider-inner  inited visible  lte-zs-slide-0" data-index="0"><style>.elementor-13596 .elementor-element.elementor-element-6e5ff1d .elementor-spacer-inner{height:250px;}.elementor-13596 .elementor-element.elementor-element-743304d{text-align:center;}.elementor-13596 .elementor-element.elementor-element-7b44feb .elementor-spacer-inner{height:10px;}.elementor-13596 .elementor-element.elementor-element-c5ad175 > .elementor-container{max-width:740px;}.elementor-13596 .elementor-element.elementor-element-d26c9d7 .elementor-text-editor{text-align:center;}.elementor-13596 .elementor-element.elementor-element-d26c9d7{width:initial;max-width:initial;}.elementor-13596 .elementor-element.elementor-element-fec2598 .elementor-spacer-inner{height:80px;}.elementor-13596 .elementor-element.elementor-element-f78794a{text-align:center;}.elementor-13596 .elementor-element.elementor-element-2e25cc5 .elementor-spacer-inner{height:260px;}@media(max-width:1199px){.elementor-13596 .elementor-element.elementor-element-6e5ff1d .elementor-spacer-inner{height:120px;}.elementor-13596 .elementor-element.elementor-element-2e25cc5 .elementor-spacer-inner{height:150px;}}@media(max-width:767px){.elementor-13596 .elementor-element.elementor-element-6e5ff1d .elementor-spacer-inner{height:90px;}.elementor-13596 .elementor-element.elementor-element-2e25cc5 .elementor-spacer-inner{height:150px;}}</style>		<div data-elementor-type="wp-post" data-elementor-id="13596" class="elementor elementor-13596" data-elementor-settings="[]">
			<div class="elementor-inner">
				<div class="elementor-section-wrap">
							<section class="elementor-element elementor-element-49635294 elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section" data-id="49635294" data-element_type="section">
						<div class="elementor-container elementor-column-gap-default">
				<div class="elementor-row">
				<div class="elementor-element elementor-element-67d13d0e elementor-column elementor-col-100 elementor-top-column" data-id="67d13d0e" data-element_type="column">
			<div class="elementor-column-wrap  elementor-element-populated">
					<div class="elementor-widget-wrap">
				<div class="elementor-element elementor-element-6e5ff1d elementor-widget elementor-widget-spacer" data-id="6e5ff1d" data-element_type="widget" data-widget_type="spacer.default">
				<div class="elementor-widget-container">
					<div class="elementor-spacer">
			<div class="elementor-spacer-inner"></div>
		</div>
				</div>
				</div>
				<div class="elementor-element elementor-element-743304d elementor-widget elementor-widget-lte-header" data-id="743304d" data-element_type="widget" data-widget_type="lte-header.default">
				<div class="elementor-widget-container">
			<div class="lte-heading lte-size-lg header-subheader lte-subcolor-main lte-margin has-subheader heading-tag-h1"><h4 class="lte-subheader">Action Film Lingerie</h4><h1 class="lte-header">
            Action Film</h1></div>		</div>
				</div>
				<div class="elementor-element elementor-element-7b44feb elementor-widget elementor-widget-spacer" data-id="7b44feb" data-element_type="widget" data-widget_type="spacer.default">
				<div class="elementor-widget-container">
					<div class="elementor-spacer">
			<div class="elementor-spacer-inner"></div>
		</div>
				</div>
				</div>
				<section class="elementor-element elementor-element-c5ad175 elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-inner-section" data-id="c5ad175" data-element_type="section">
						<div class="elementor-container elementor-column-gap-default">
				<div class="elementor-row">
				<div class="elementor-element elementor-element-93f60c7 elementor-column elementor-col-100 elementor-inner-column" data-id="93f60c7" data-element_type="column">
			<div class="elementor-column-wrap  elementor-element-populated">
					<div class="elementor-widget-wrap">
				<div class="elementor-element elementor-element-d26c9d7 elementor-widget__width-initial elementor-widget elementor-widget-text-editor" data-id="d26c9d7" data-element_type="widget" data-widget_type="text-editor.default">
				<div class="elementor-widget-container">
					<div class="elementor-text-editor elementor-clearfix"><p>Curabitur vel vulputate urna. Mmaecenas vel pretium eros. Sed sollicitudin, velit a iaculis blandit, risus arcu auctor ante, eu malesuada massa eros id elit. Aenean in faucibus odio.</p></div>
				</div>
				</div>
						</div>
			</div>
		</div>
						</div>
			</div>
		</section>
				<div class="elementor-element elementor-element-fec2598 elementor-widget elementor-widget-spacer" data-id="fec2598" data-element_type="widget" data-widget_type="spacer.default">
				<div class="elementor-widget-container">
					<div class="elementor-spacer">
			<div class="elementor-spacer-inner"></div>
		</div>
				</div>
				</div>
				<div class="elementor-element elementor-element-f78794a elementor-widget elementor-widget-lte-button" data-id="f78794a" data-element_type="widget" data-widget_type="lte-button.default">
				<div class="elementor-widget-container">
			<div class="lte-btn-wrap">
	<a href="#"  class="lte-btn  btn-lg color-hover-white"><span class="lte-btn-inner"><span class="lte-btn-before"></span>Read More<span class="lte-btn-after"></span></span></a></div>		</div>
				</div>
				<div class="elementor-element elementor-element-2e25cc5 elementor-widget elementor-widget-spacer" data-id="2e25cc5" data-element_type="widget" data-widget_type="spacer.default">
				<div class="elementor-widget-container">
					<div class="elementor-spacer">
			<div class="elementor-spacer-inner"></div>
		</div>
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
		</div><div class="lte-zs-slider-inner  lte-zs-slide-1" data-index="1"><style>.elementor-13597 .elementor-element.elementor-element-6e5ff1d .elementor-spacer-inner{height:250px;}.elementor-13597 .elementor-element.elementor-element-743304d{text-align:center;}.elementor-13597 .elementor-element.elementor-element-7b44feb .elementor-spacer-inner{height:10px;}.elementor-13597 .elementor-element.elementor-element-c5ad175 > .elementor-container{max-width:740px;}.elementor-13597 .elementor-element.elementor-element-d26c9d7 .elementor-text-editor{text-align:center;}.elementor-13597 .elementor-element.elementor-element-d26c9d7{width:initial;max-width:initial;}.elementor-13597 .elementor-element.elementor-element-fec2598 .elementor-spacer-inner{height:80px;}.elementor-13597 .elementor-element.elementor-element-f78794a{text-align:center;}.elementor-13597 .elementor-element.elementor-element-2e25cc5 .elementor-spacer-inner{height:260px;}@media(max-width:1199px){.elementor-13597 .elementor-element.elementor-element-6e5ff1d .elementor-spacer-inner{height:120px;}.elementor-13597 .elementor-element.elementor-element-2e25cc5 .elementor-spacer-inner{height:150px;}}@media(max-width:767px){.elementor-13597 .elementor-element.elementor-element-6e5ff1d .elementor-spacer-inner{height:90px;}.elementor-13597 .elementor-element.elementor-element-2e25cc5 .elementor-spacer-inner{height:150px;}}</style>		<div data-elementor-type="wp-post" data-elementor-id="13597" class="elementor elementor-13597" data-elementor-settings="[]">
			<div class="elementor-inner">
				<div class="elementor-section-wrap">
							<section class="elementor-element elementor-element-49635294 elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section" data-id="49635294" data-element_type="section">
						<div class="elementor-container elementor-column-gap-default">
				<div class="elementor-row">
				<div class="elementor-element elementor-element-67d13d0e elementor-column elementor-col-100 elementor-top-column" data-id="67d13d0e" data-element_type="column">
			<div class="elementor-column-wrap  elementor-element-populated">
					<div class="elementor-widget-wrap">
				<div class="elementor-element elementor-element-6e5ff1d elementor-widget elementor-widget-spacer" data-id="6e5ff1d" data-element_type="widget" data-widget_type="spacer.default">
				<div class="elementor-widget-container">
					<div class="elementor-spacer">
			<div class="elementor-spacer-inner"></div>
		</div>
				</div>
				</div>
				<div class="elementor-element elementor-element-743304d elementor-widget elementor-widget-lte-header" data-id="743304d" data-element_type="widget" data-widget_type="lte-header.default">
				<div class="elementor-widget-container">
			<div class="lte-heading lte-size-lg header-subheader lte-subcolor-main lte-margin has-subheader heading-tag-h1">
            <h4 class="lte-subheader">Romatic Film</h4><h1 class="lte-header">Romatic Film </h1></div>		</div>
				</div>
				<div class="elementor-element elementor-element-7b44feb elementor-widget elementor-widget-spacer" data-id="7b44feb" data-element_type="widget" data-widget_type="spacer.default">
				<div class="elementor-widget-container">
					<div class="elementor-spacer">
			<div class="elementor-spacer-inner"></div>
		</div>
				</div>
				</div>
				<section class="elementor-element elementor-element-c5ad175 elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-inner-section" data-id="c5ad175" data-element_type="section">
						<div class="elementor-container elementor-column-gap-default">
				<div class="elementor-row">
				<div class="elementor-element elementor-element-93f60c7 elementor-column elementor-col-100 elementor-inner-column" data-id="93f60c7" data-element_type="column">
			<div class="elementor-column-wrap  elementor-element-populated">
					<div class="elementor-widget-wrap">
				<div class="elementor-element elementor-element-d26c9d7 elementor-widget__width-initial elementor-widget elementor-widget-text-editor" data-id="d26c9d7" data-element_type="widget" data-widget_type="text-editor.default">
				<div class="elementor-widget-container">
					<div class="elementor-text-editor elementor-clearfix"><p>Curabitur vel vulputate urna. Mmaecenas vel pretium eros. Sed sollicitudin, velit a iaculis blandit, risus arcu auctor ante, eu malesuada massa eros id elit. Aenean in faucibus odio.</p></div>
				</div>
				</div>
						</div>
			</div>
		</div>
						</div>
			</div>
		</section>
				<div class="elementor-element elementor-element-fec2598 elementor-widget elementor-widget-spacer" data-id="fec2598" data-element_type="widget" data-widget_type="spacer.default">
				<div class="elementor-widget-container">
					<div class="elementor-spacer">
			<div class="elementor-spacer-inner"></div>
		</div>
				</div>
				</div>
				<div class="elementor-element elementor-element-f78794a elementor-widget elementor-widget-lte-button" data-id="f78794a" data-element_type="widget" data-widget_type="lte-button.default">
				<div class="elementor-widget-container">
			<div class="lte-btn-wrap">
	<a href="#"  class="lte-btn  btn-lg color-hover-white"><span class="lte-btn-inner"><span class="lte-btn-before"></span>Read More<span class="lte-btn-after"></span></span></a></div>		</div>
				</div>
				<div class="elementor-element elementor-element-2e25cc5 elementor-widget elementor-widget-spacer" data-id="2e25cc5" data-element_type="widget" data-widget_type="spacer.default">
				<div class="elementor-widget-container">
					<div class="elementor-spacer">
			<div class="elementor-spacer-inner"></div>
		</div>
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
		</div><div class="lte-zs-slider-inner  lte-zs-slide-2" data-index="2"><style>.elementor-13595 .elementor-element.elementor-element-6e5ff1d .elementor-spacer-inner{height:250px;}.elementor-13595 .elementor-element.elementor-element-743304d{text-align:center;}.elementor-13595 .elementor-element.elementor-element-7b44feb .elementor-spacer-inner{height:10px;}.elementor-13595 .elementor-element.elementor-element-c5ad175 > .elementor-container{max-width:740px;}.elementor-13595 .elementor-element.elementor-element-d26c9d7 .elementor-text-editor{text-align:center;}.elementor-13595 .elementor-element.elementor-element-d26c9d7{width:initial;max-width:initial;}.elementor-13595 .elementor-element.elementor-element-fec2598 .elementor-spacer-inner{height:80px;}.elementor-13595 .elementor-element.elementor-element-f78794a{text-align:center;}.elementor-13595 .elementor-element.elementor-element-2e25cc5 .elementor-spacer-inner{height:260px;}@media(max-width:1199px){.elementor-13595 .elementor-element.elementor-element-6e5ff1d .elementor-spacer-inner{height:120px;}.elementor-13595 .elementor-element.elementor-element-2e25cc5 .elementor-spacer-inner{height:150px;}}@media(max-width:767px){.elementor-13595 .elementor-element.elementor-element-6e5ff1d .elementor-spacer-inner{height:90px;}.elementor-13595 .elementor-element.elementor-element-2e25cc5 .elementor-spacer-inner{height:150px;}}</style>		<div data-elementor-type="wp-post" data-elementor-id="13595" class="elementor elementor-13595" data-elementor-settings="[]">
			<div class="elementor-inner">
				<div class="elementor-section-wrap">
							<section class="elementor-element elementor-element-49635294 elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section" data-id="49635294" data-element_type="section">
						<div class="elementor-container elementor-column-gap-default">
				<div class="elementor-row">
				<div class="elementor-element elementor-element-67d13d0e elementor-column elementor-col-100 elementor-top-column" data-id="67d13d0e" data-element_type="column">
			<div class="elementor-column-wrap  elementor-element-populated">
					<div class="elementor-widget-wrap">
				<div class="elementor-element elementor-element-6e5ff1d elementor-widget elementor-widget-spacer" data-id="6e5ff1d" data-element_type="widget" data-widget_type="spacer.default">
				<div class="elementor-widget-container">
					<div class="elementor-spacer">
			<div class="elementor-spacer-inner"></div>
		</div>
				</div>
				</div>
				<div class="elementor-element elementor-element-743304d elementor-widget elementor-widget-lte-header" data-id="743304d" data-element_type="widget" data-widget_type="lte-header.default">
				<div class="elementor-widget-container">
			<div class="lte-heading lte-size-lg header-subheader lte-subcolor-main lte-margin has-subheader heading-tag-h1">
            <h4 class="lte-subheader">Korea Film</h4><h1 class="lte-header">Korea Film</h1></div>		</div>
				</div>
				<div class="elementor-element elementor-element-7b44feb elementor-widget elementor-widget-spacer" data-id="7b44feb" data-element_type="widget" data-widget_type="spacer.default">
				<div class="elementor-widget-container">
					<div class="elementor-spacer">
			<div class="elementor-spacer-inner"></div>
		</div>
				</div>
				</div>
				<section class="elementor-element elementor-element-c5ad175 elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-inner-section" data-id="c5ad175" data-element_type="section">
						<div class="elementor-container elementor-column-gap-default">
				<div class="elementor-row">
				<div class="elementor-element elementor-element-93f60c7 elementor-column elementor-col-100 elementor-inner-column" data-id="93f60c7" data-element_type="column">
			<div class="elementor-column-wrap  elementor-element-populated">
					<div class="elementor-widget-wrap">
				<div class="elementor-element elementor-element-d26c9d7 elementor-widget__width-initial elementor-widget elementor-widget-text-editor" data-id="d26c9d7" data-element_type="widget" data-widget_type="text-editor.default">
				<div class="elementor-widget-container">
					<div class="elementor-text-editor elementor-clearfix"><p>Curabitur vel vulputate urna. Mmaecenas vel pretium eros. Sed sollicitudin, velit a iaculis blandit, risus arcu auctor ante, eu malesuada massa eros id elit. Aenean in faucibus odio.</p></div>
				</div>
				</div>
						</div>
			</div>
		</div>
						</div>
			</div>
		</section>
				<div class="elementor-element elementor-element-fec2598 elementor-widget elementor-widget-spacer" data-id="fec2598" data-element_type="widget" data-widget_type="spacer.default">
				<div class="elementor-widget-container">
					<div class="elementor-spacer">
			<div class="elementor-spacer-inner"></div>
		</div>
				</div>
				</div>
				<div class="elementor-element elementor-element-f78794a elementor-widget elementor-widget-lte-button" data-id="f78794a" data-element_type="widget" data-widget_type="lte-button.default">
				<div class="elementor-widget-container">
			<div class="lte-btn-wrap">
	<a href="#"  class="lte-btn  btn-lg color-hover-white"><span class="lte-btn-inner"><span class="lte-btn-before"></span>Read More<span class="lte-btn-after"></span></span></a></div>		</div>
				</div>
				<div class="elementor-element elementor-element-2e25cc5 elementor-widget elementor-widget-spacer" data-id="2e25cc5" data-element_type="widget" data-widget_type="spacer.default">
				<div class="elementor-widget-container">
					<div class="elementor-spacer">
			<div class="elementor-spacer-inner"></div>
		</div>
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
		</div><div class="lte-zs-slider-inner  lte-zs-slide-3" data-index="3"><style>.elementor-13495 .elementor-element.elementor-element-6e5ff1d .elementor-spacer-inner{height:250px;}.elementor-13495 .elementor-element.elementor-element-743304d{text-align:center;}.elementor-13495 .elementor-element.elementor-element-7b44feb .elementor-spacer-inner{height:10px;}.elementor-13495 .elementor-element.elementor-element-c5ad175 > .elementor-container{max-width:740px;}.elementor-13495 .elementor-element.elementor-element-d26c9d7 .elementor-text-editor{text-align:center;}.elementor-13495 .elementor-element.elementor-element-d26c9d7{width:initial;max-width:initial;}.elementor-13495 .elementor-element.elementor-element-fec2598 .elementor-spacer-inner{height:80px;}.elementor-13495 .elementor-element.elementor-element-f78794a{text-align:center;}.elementor-13495 .elementor-element.elementor-element-2e25cc5 .elementor-spacer-inner{height:260px;}@media(max-width:1199px){.elementor-13495 .elementor-element.elementor-element-6e5ff1d .elementor-spacer-inner{height:120px;}.elementor-13495 .elementor-element.elementor-element-2e25cc5 .elementor-spacer-inner{height:150px;}}@media(max-width:767px){.elementor-13495 .elementor-element.elementor-element-6e5ff1d .elementor-spacer-inner{height:90px;}.elementor-13495 .elementor-element.elementor-element-2e25cc5 .elementor-spacer-inner{height:150px;}}</style>		<div data-elementor-type="wp-post" data-elementor-id="13495" class="elementor elementor-13495" data-elementor-settings="[]">
			<div class="elementor-inner">
				<div class="elementor-section-wrap">
							<section class="elementor-element elementor-element-49635294 elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section" data-id="49635294" data-element_type="section">
						<div class="elementor-container elementor-column-gap-default">
				<div class="elementor-row">
				<div class="elementor-element elementor-element-67d13d0e elementor-column elementor-col-100 elementor-top-column" data-id="67d13d0e" data-element_type="column">
			<div class="elementor-column-wrap  elementor-element-populated">
					<div class="elementor-widget-wrap">
				<div class="elementor-element elementor-element-6e5ff1d elementor-widget elementor-widget-spacer" data-id="6e5ff1d" data-element_type="widget" data-widget_type="spacer.default">
				<div class="elementor-widget-container">
					<div class="elementor-spacer">
			<div class="elementor-spacer-inner"></div>
		</div>
				</div>
				</div>
				<div class="elementor-element elementor-element-743304d elementor-widget elementor-widget-lte-header" data-id="743304d" data-element_type="widget" data-widget_type="lte-header.default">
				<div class="elementor-widget-container">
			<div class="lte-heading lte-size-lg header-subheader lte-subcolor-main lte-margin has-subheader heading-tag-h1"><h4 class="lte-subheader">Fashion Lingerie</h4><h1 class="lte-header">Spring Arrivals</h1></div>		</div>
				</div>
				<div class="elementor-element elementor-element-7b44feb elementor-widget elementor-widget-spacer" data-id="7b44feb" data-element_type="widget" data-widget_type="spacer.default">
				<div class="elementor-widget-container">
					<div class="elementor-spacer">
			<div class="elementor-spacer-inner"></div>
		</div>
				</div>
				</div>
				<section class="elementor-element elementor-element-c5ad175 elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-inner-section" data-id="c5ad175" data-element_type="section">
						<div class="elementor-container elementor-column-gap-default">
				<div class="elementor-row">
				<div class="elementor-element elementor-element-93f60c7 elementor-column elementor-col-100 elementor-inner-column" data-id="93f60c7" data-element_type="column">
			<div class="elementor-column-wrap  elementor-element-populated">
					<div class="elementor-widget-wrap">
				<div class="elementor-element elementor-element-d26c9d7 elementor-widget__width-initial elementor-widget elementor-widget-text-editor" data-id="d26c9d7" data-element_type="widget" data-widget_type="text-editor.default">
				<div class="elementor-widget-container">
					<div class="elementor-text-editor elementor-clearfix"><p>Curabitur vel vulputate urna. Mmaecenas vel pretium eros. Sed sollicitudin, velit a iaculis blandit, risus arcu auctor ante, eu malesuada massa eros id elit. Aenean in faucibus odio.</p></div>
				</div>
				</div>
						</div>
			</div>
		</div>
						</div>
			</div>
		</section>
				<div class="elementor-element elementor-element-fec2598 elementor-widget elementor-widget-spacer" data-id="fec2598" data-element_type="widget" data-widget_type="spacer.default">
				<div class="elementor-widget-container">
					<div class="elementor-spacer">
			<div class="elementor-spacer-inner"></div>
		</div>
				</div>
				</div>
				<div class="elementor-element elementor-element-f78794a elementor-widget elementor-widget-lte-button" data-id="f78794a" data-element_type="widget" data-widget_type="lte-button.default">
				<div class="elementor-widget-container">
			<div class="lte-btn-wrap">
	<a href="#"  class="lte-btn  btn-lg color-hover-white"><span class="lte-btn-inner"><span class="lte-btn-before"></span>Read More<span class="lte-btn-after"></span></span></a></div>		</div>
				</div>
				<div class="elementor-element elementor-element-2e25cc5 elementor-widget elementor-widget-spacer" data-id="2e25cc5" data-element_type="widget" data-widget_type="spacer.default">
				<div class="elementor-widget-container">
					<div class="elementor-spacer">
			<div class="elementor-spacer-inner"></div>
		</div>
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
		</div></div></div>		</div>
				</div>
						</div>
			</div>
		</div>
						</div>
			</div>
		</section>
				<section class="lte-background-gray elementor-element elementor-element-ec6e17e lte-background-gray lte-overlay-wrapper-line-main elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section" data-id="ec6e17e" data-element_type="section">
						<div class="elementor-container elementor-column-gap-default">
				<div class="elementor-row">
				<div class="elementor-element elementor-element-9998e6e elementor-column elementor-col-50 elementor-top-column" data-id="9998e6e" data-element_type="column">
			<div class="elementor-column-wrap  elementor-element-populated">
					<div class="elementor-widget-wrap">
				<div class="elementor-element elementor-element-d048dad elementor-widget elementor-widget-spacer" data-id="d048dad" data-element_type="widget" data-widget_type="spacer.default">
				<div class="elementor-widget-container">
					<div class="elementor-spacer">
			<div class="elementor-spacer-inner"></div>
		</div>
				</div>
				</div>
				<div class="elementor-element elementor-element-11cfc0a elementor-widget elementor-widget-spacer" data-id="11cfc0a" data-element_type="widget" data-widget_type="spacer.default">
				<div class="elementor-widget-container">
					<div class="elementor-spacer">
			<div class="elementor-spacer-inner"></div>
		</div>
				</div>
				</div>
				<div class="elementor-element elementor-element-a409489 elementor-widget elementor-widget-lte-header" data-id="a409489" data-element_type="widget" data-widget_type="lte-header.default">
				<div class="elementor-widget-container">
			<div class="lte-heading header-subheader lte-subcolor-main lte-margin has-subheader heading-tag-h2">
            <h4 class="lte-subheader">Trailer and clips</h4><h2 class="lte-header">Soundtracks</h2></div>		</div>
				</div>
				<div class="elementor-element elementor-element-9a28209 elementor-widget__width-initial elementor-widget 
                elementor-widget-text-editor" data-id="9a28209" data-element_type="widget" data-widget_type="text-editor.default">
				<div class="elementor-widget-container">
					<div class="elementor-text-editor elementor-clearfix">
                    <p>Mauris in augue id felis sollicitudin laoreet eu vitae tellus. Sed pellentesque enim in eros molestie, pulvinar lacinia arcu tempus. Integer porttitor neque a lacus blandit, eget iaculis enim malesuada.</p></div>
				</div>
				</div>
				<div class="elementor-element elementor-element-d25b433 elementor-widget elementor-widget-spacer" data-id="d25b433" data-element_type="widget" data-widget_type="spacer.default">
				<div class="elementor-widget-container">
					<div class="elementor-spacer">
			<div class="elementor-spacer-inner"></div>
		</div>
				</div>
				</div>
				<div class="elementor-element elementor-element-0e842e3 elementor-widget__width-initial elementor-widget elementor-widget-lte-countup" data-id="0e842e3" data-element_type="widget" data-widget_type="lte-countup.default">
				<div class="elementor-widget-container">
			<div class="lte-countup layout-default container-fluid"><div class="row">
				<div class=" col-md-4 col-sm-4  col-sm-6 col-ms-6 col-xs-12 center-flex countUp-wrap">
					<div class=" countUp-item item">
						<h2 class="lte-header"><span class="lte-countup-animation">150</span></h2>
						<h4 class="lte-subheader">Horror Film</h4>
					</div>					
				</div>
				<div class=" col-md-4 col-sm-4  col-sm-6 col-ms-6 col-xs-12 center-flex countUp-wrap">
					<div class=" countUp-item item">
						<h2 class="lte-header"><span class="lte-countup-animation">26</span></h2>
						<h4 class="lte-subheader">Action Film</h4>
					</div>					
				</div>
			<div class=" col-md-4 col-sm-4  col-sm-6 col-ms-6 col-xs-12 center-flex countUp-wrap">
					<div class=" countUp-item item">
						<h2 class="lte-header"><span class="lte-countup-animation">14</span></h2>
						<h4 class="lte-subheader">Triller</h4>
					</div>					
				</div></div></div>		</div>
				</div>
				<div class="elementor-element elementor-element-ef2cbe7 elementor-widget elementor-widget-spacer" data-id="ef2cbe7" data-element_type="widget" data-widget_type="spacer.default">
				<div class="elementor-widget-container">
					<div class="elementor-spacer">
			<div class="elementor-spacer-inner"></div>
		</div>
				</div>
				</div>
				<div class="elementor-element elementor-element-9aa78a9 elementor-widget elementor-widget-lte-button" data-id="9aa78a9" data-element_type="widget" data-widget_type="lte-button.default">
				<div class="elementor-widget-container">
		<!--	<div class="lte-btn-wrap">
	<a href="#"  class="lte-btn  btn-lg color-hover-default"><span class="lte-btn-inner"><
    span class="lte-btn-before"></span>Read More<span class="lte-btn-after"></span></span></a></div-->		</div>
				</div>
				<div class="elementor-element elementor-element-623348c elementor-widget elementor-widget-spacer" data-id="623348c" data-element_type="widget" data-widget_type="spacer.default">
				<div class="elementor-widget-container">
					<div class="elementor-spacer">
			<div class="elementor-spacer-inner"></div>
		</div>
				</div>
				</div>
						</div>
			</div>
		</div>
				<div class="elementor-element elementor-element-7d41870 elementor-column elementor-col-50 elementor-top-column" data-id="7d41870" data-element_type="column">
			<div class="elementor-column-wrap  elementor-element-populated">
					<div class="elementor-widget-wrap">
				<div class="elementor-element elementor-element-3666ad8 elementor-widget elementor-widget-spacer" data-id="3666ad8" data-element_type="widget" data-widget_type="spacer.default">
				<div class="elementor-widget-container">
					<div class="elementor-spacer">
			<div class="elementor-spacer-inner"></div>
		</div>
				</div>
				</div>
				<div class="elementor-element elementor-element-88d42ad animated-slow elementor-absolute elementor-hidden-phone elementor-invisible elementor-widget elementor-widget-image" data-id="88d42ad" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeIn&quot;,&quot;_position&quot;:&quot;absolute&quot;}" data-widget_type="image.default">
				<div class="elementor-widget-container">
					<div class="elementor-image">
                     <?php
                      include_once("includes/db.php");
                    
                        $select="SELECT * FROM joinall ORDER BY id DESC LIMIT 1";
                        $result=mysqli_query($con,$select);
                        $row=mysqli_fetch_array($result)
                         
                        ?>
										
     <iframe width="1086"  class="attachment-large size-large" height="611" src="https://www.youtube.com/embed/qcDYij6P-8g" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
							</div>
				</div>
				</div>
				<div class="elementor-element elementor-element-849ce0c lte-image-shadow elementor-widget elementor-widget-image" data-id="849ce0c" data-element_type="widget" data-widget_type="image.default">
				<div class="elementor-widget-container">
					<div class="elementor-image">
										
                                        <iframe width="1086"  class="attachment-large size-large" height="611" src="https://www.youtube.com/embed/qcDYij6P-8g" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
			</div>
				</div>
				</div>
				<div class="elementor-element elementor-element-4d96168 elementor-widget elementor-widget-spacer" data-id="4d96168" data-element_type="widget" data-widget_type="spacer.default">
				<div class="elementor-widget-container">
					<div class="elementor-spacer">
			<div class="elementor-spacer-inner"></div>
		</div>
				</div>
				</div>
						</div>
			</div>
		</div>
						</div>
			</div>
		</section>
				<section class="lte-background-black elementor-element elementor-element-de650fc lte-background-black elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section" data-id="de650fc" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
						<div class="elementor-container elementor-column-gap-default">
				<div class="elementor-row">
				<div class="elementor-element elementor-element-260aba8 elementor-column elementor-col-100 elementor-top-column" data-id="260aba8" data-element_type="column">
			<div class="elementor-column-wrap  elementor-element-populated">
					<div class="elementor-widget-wrap">
				<div class="elementor-element elementor-element-5866a8e elementor-widget elementor-widget-spacer" data-id="5866a8e" data-element_type="widget" data-widget_type="spacer.default">
				<div class="elementor-widget-container">
					<div class="elementor-spacer">
			<div class="elementor-spacer-inner"></div>
		</div>
				</div>
				</div>
				<div class="elementor-element elementor-element-83eee70 elementor-widget elementor-widget-lte-header" data-id="83eee70" data-element_type="widget" data-widget_type="lte-header.default">
				<div class="elementor-widget-container">
			<div class="lte-heading header-subheader lte-underline lte-subcolor-main lte-margin has-subheader heading-tag-h2">
            <h4 class="lte-subheader">Genres </h4><h2 class="lte-header">Film Collections</h2></div>		</div>
				</div>
				<section class="elementor-element elementor-element-713b1cb elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-inner-section" data-id="713b1cb" data-element_type="section">
						<div class="elementor-container elementor-column-gap-default">
				<div class="elementor-row">
				<div class="elementor-element elementor-element-17a84a1 elementor-column elementor-col-100 elementor-inner-column" data-id="17a84a1" data-element_type="column">
			<div class="elementor-column-wrap  elementor-element-populated">
					<div class="elementor-widget-wrap">
				<div class="elementor-element elementor-element-9ebbffd elementor-widget elementor-widget-text-editor" data-id="9ebbffd" data-element_type="widget" data-widget_type="text-editor.default">
				<div class="elementor-widget-container">
					<div class="elementor-text-editor elementor-clearfix"><p>Nam lobortis dui et feugiat pellentesque. Proin ut volutpat diam. Etiam molestie feugiat ligula, id rhoncus ante ultrices eget. Nam vel mauris a augue tempus semper quis at mi.</p></div>
				</div>
				</div>
						</div>
			</div>
		</div>
						</div>
			</div>
		</section>
				<div class="elementor-element elementor-element-3a4c8b6 elementor-widget elementor-widget-spacer" data-id="3a4c8b6" data-element_type="widget" data-widget_type="spacer.default">
				<div class="elementor-widget-container">
					<div class="elementor-spacer">
			<div class="elementor-spacer-inner"></div>
		</div>
				</div>
				</div>
				<div class="elementor-element elementor-element-482ecb4 elementor-widget elementor-widget-lte-services" data-id="482ecb4" data-element_type="widget" data-widget_type="lte-services.default">
				<div class="elementor-widget-container">
			<div class="lte-lte-services-sc-wrapper lte-services-sc"><div class="row">		<div class="lte-item  col-lg-3 col-md-6 ">
			<div class="lte-item-inner">
				<!--<a href="services/beach-collection-2/index.html" class="lte-image"--->
			<a  class="lte-image">	<img width="385" height="525" src="https://www.bing.com/th?id=AMMS_6d470ee9755d8702031078ebfa15c223&w=180&h=270&c=7&rs=1&qlt=80&o=6&cdv=1&dpr=1.1&pid=16.1" 
            class="attachment-queeny-services size-queeny-services wp-post-image" alt="" sizes="(max-width: 385px) 100vw, 385px" />					<span class="lte-photo-overlay"></span>
				</a>
			    <div class="lte-description">
			        <a  class="lte-header">
			        	<h5 class="lte-header">Korea Film</h5>
			        </a>
		        	<p>
		        		Duis venenatis dolor id diam eleifend, vel viverra diam efficitur		        	</p>
		        	<a  class="lte-btn btn-transparent btn-xs"><span class="lte-btn-inner"><span class="lte-btn-before"></span><span class="lte-btn-after"></span></span></a>			    </div>
			</div>
		</div>
				<div class="lte-item  col-lg-3 col-md-6 ">
			<div class="lte-item-inner">
				<a class="lte-image">
					<img width="385" height="525" src="data:image/jpeg;base64,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" 
                    class="attachment-queeny-services size-queeny-services wp-post-image" alt="" sizes="(max-width: 385px) 100vw, 385px" />					<span class="lte-photo-overlay"></span>
				</a>
			    <div class="lte-description">
			        <a  class="lte-header">
			        	<h5 class="lte-header">Action Film</h5>
			        </a>
		        	<p>
		        		Aenean est risus, posuere at lacus et, gravida pharetra nunc		        	</p>
		        	<a  class="lte-btn btn-transparent btn-xs"><span class="lte-btn-inner"><span class="lte-btn-before"></span><span class="lte-btn-after"></span></span></a>			    </div>
			</div>
		</div>
				<div class="lte-item  col-lg-3 col-md-6 ">
			<div class="lte-item-inner">
				<a class="lte-image">
					<img width="385" height="525" src="https://th.bing.com/th/id/OIP.-1UarFqKlOIb4V41BUAWmgHaK-?w=121&h=180&c=7&r=0&o=5&dpr=1.1&pid=1.7"
                     class="attachment-queeny-services size-queeny-services wp-post-image" alt=""  sizes="(max-width: 385px) 100vw, 385px" />					<span class="lte-photo-overlay"></span>
				</a>
			    <div class="lte-description">
			        <a  class="lte-header">
			        	<h5 class="lte-header">Drama film</h5>
			        </a>
		        	<p>
		        		Nunc quam diam, eleifend sit amet molestie sit amet, rutrum at mi		        	</p>
		        	<a  class="lte-btn btn-transparent btn-xs"><span class="lte-btn-inner"><span class="lte-btn-before"></span><span class="lte-btn-after"></span></span></a>			    </div>
			</div>
		</div>
				<div class="lte-item  col-lg-3 col-md-6 ">
			<div class="lte-item-inner">
				<a  class="lte-image">
					<img width="385" height="525" src="https://th.bing.com/th?q=American+Action+Film&w=120&h=120&c=1&rs=1&qlt=90&cb=1&dpr=1.1&pid=InlineBlock&mkt=en-WW&cc=NG&setlang=en&adlt=moderate&t=1&mw=247"
                     class="attachment-queeny-services size-queeny-services wp-post-image" alt="" sizes="(max-width: 385px) 100vw, 385px" />					<span class="lte-photo-overlay"></span>
				</a>
			    <div class="lte-description">
			        <a class="lte-header">
			        	<h5 class="lte-header">Triller Film</h5>
			        </a>
		        	<p>
		        		Vestibulum porta viverra tortor, sit amet convallis sem blandit et		        	</p>
		        	<a class="lte-btn btn-transparent btn-xs">
                    <span class="lte-btn-inner"><span class="lte-btn-before"></span><span class="lte-btn-after"></span></span></a>			    </div>
			</div>
		</div>
		</div></div>		</div>
				</div>
						</div>
			</div>
		</div>
						</div>
			</div>
		</section>
				<section class="elementor-element elementor-element-a8861c6 elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section" data-id="a8861c6" data-element_type="section">
						<div class="elementor-container elementor-column-gap-default">
				<div class="elementor-row">
				<div class="elementor-element elementor-element-592cbd4 elementor-column elementor-col-100 elementor-top-column" data-id="592cbd4" data-element_type="column">
			<div class="elementor-column-wrap  elementor-element-populated">
					<div class="elementor-widget-wrap">
				<div class="elementor-element elementor-element-7c631ac elementor-widget elementor-widget-spacer" data-id="7c631ac" data-element_type="widget" data-widget_type="spacer.default">
				<div class="elementor-widget-container">
					<div class="elementor-spacer">
			<div class="elementor-spacer-inner"></div>
		</div>
				</div>
				</div>
						</div>
			</div>
		</div>
						</div>
			</div>
		</section>
		
				<section class="elementor-element elementor-element-5b37a6b elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section" data-id="5b37a6b" data-element_type="section">
						<div class="elementor-container elementor-column-gap-default">
				<div class="elementor-row">
				<div class="elementor-element elementor-element-0d00e99 elementor-column elementor-col-100 elementor-top-column" data-id="0d00e99" data-element_type="column">
			<div class="elementor-column-wrap  elementor-element-populated">
					<div class="elementor-widget-wrap">
				<div class="elementor-element elementor-element-cc3c48b elementor-widget elementor-widget-spacer" data-id="cc3c48b" data-element_type="widget" data-widget_type="spacer.default">
				<div class="elementor-widget-container">
					<div class="elementor-spacer">
			<div class="elementor-spacer-inner"></div>
		</div>
				</div>
				</div>
				<div class="elementor-element elementor-element-025c7f8 elementor-widget elementor-widget-lte-header" data-id="025c7f8" data-element_type="widget" data-widget_type="lte-header.default">
				<div class="elementor-widget-container">
			<div class="lte-heading header-subheader lte-underline lte-subcolor-main lte-margin has-subheader heading-tag-h2">
            <h4 class="lte-subheader">Online Store</h4><h2 class="lte-header">Latest Film</h2></div>		</div>
				</div>
                	<form name="form1" method="post" action="">
	<input type="hidden" name="productid">
    <input type="hidden" name="command">
				<div class="elementor-element elementor-element-6d275b0 elementor-widget elementor-widget-lte-products" data-id="6d275b0" data-element_type="widget" data-widget_type="lte-products.default">
				<div class="elementor-widget-container">
			<div class="lte-products-sc-wrapper">
		<div class="woocommerce">
		<ul class="products columns-4 lte-products-sc lte-products-sc-list">	
        	<li id="post-13433" class="product post-13433 type-product status-publish has-post-thumbnail product_cat-lingerie first instock shipping-taxable purchasable product-type-simple">
		 <?php
         // fetch out latest film
                      include_once("includes/db.php");
                      //  $categories="";
                        $select="SELECT * FROM joinall ORDER BY id DESC LIMIT 9";
                       // $select="SELECT * FROM advertise ORDER BY id DESC";
                        $result=mysqli_query($con,$select);
                        
                        if(!$result){
                            die("failed").mysqli_connect_error();
                        }while($row=mysqli_fetch_array($result)){
                            
                        ?>	<div class="item">	
                
            		<div class="lte-image">
              <?php  
              // if the particula film still available in store
              if(( $row['stockout'] <= "0") ){
    ?> <a href="#">     
		<img width="480" src="Bikini_Iimages/compress_<?php echo $row['file'];?>"
         class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt=""   style="  height:250px" /></a> <?php
         } else{?><a href="product/glory-lady-lingerie-set/?id=<?php echo $row['id'];?>">     
		<img width="480" src="Bikini_Iimages/compress_<?php echo $row['file'];?>"
         class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt=""   style="  height:250px" /></a><?php }?>
         </div>
         <div class="lte-item-descr"><a href="">
         <h2 class="woocommerce-loop-product__title"><?php echo $row['brand']; ?></h2></a>
	<span class="price"><span class="woocommerce-Price-amount amount">
    <span class="woocommerce-Price-currencySymbol">&#36;</span><?php echo $row['price']; ?></span></span>
    <?php 
    
    if( ($row['stockout'] <= "0") ){
    ?>
    	<button type="submit"  name="add" onclick="addtocart(<?php echo $row['id']?>)" disabled=""
              class="button product_type_simple add_to_cart_button ajax_add_to_cart">Sold Out
																	</button>
                     
  <?php   }else{
    ?>
    <button type="submit"  name="add" onclick="addtocart(<?php echo $row['id']?>)"
              class="button product_type_simple add_to_cart_button ajax_add_to_cart">Purchase
																	</button>
 <a href="product/glory-lady-lingerie-set/?id=<?php echo $row['id'];?>" class="lte-btn-more lte-btn btn">More Info</a></div>
      
  <?php }?>
          	                                                             
<!--<a href="index2742.html?add-to-cart=13433" data-quantity="1" class="button product_type_simple add_to_cart_button ajax_add_to_cart" 
data-product_id="13433" data-product_sku="" aria-label="Add &ldquo;Glory Lady Lingerie Set&rdquo; to your cart" rel="nofollow">Add to cart</a><a href="product/glory-lady-lingerie-set/index.html?id=<?php //echo $row['id'];?>" class="lte-btn-more lte-btn btn">More Info</a></div-->
			</div>		</li>
					<li id="post-9248" class="product post-9248 type-product status-publish has-post-thumbnail product_cat-underwear  instock shipping-taxable purchasable product-type-simple">
	<?php } ?>	<!--	<div class="item">			<div class="lte-image">
		<img width="480" height="655" src="wp-content/uploads/2019/06/shop-07-480x655.jpg" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="" srcset="http://queeny.like-themes.com/wp-content/uploads/2019/06/shop-07-480x655.jpg 480w, http://queeny.like-themes.com/wp-content/uploads/2019/06/shop-07-220x300.jpg 220w, http://queeny.like-themes.com/wp-content/uploads/2019/06/shop-07-751x1024.jpg 751w, http://queeny.like-themes.com/wp-content/uploads/2019/06/shop-07-768x1047.jpg 768w, http://queeny.like-themes.com/wp-content/uploads/2019/06/shop-07-242x330.jpg 242w, http://queeny.like-themes.com/wp-content/uploads/2019/06/shop-07-385x525.jpg 385w, http://queeny.like-themes.com/wp-content/uploads/2019/06/shop-07-587x800.jpg 587w, http://queeny.like-themes.com/wp-content/uploads/2019/06/shop-07-403x550.jpg 403w, http://queeny.like-themes.com/wp-content/uploads/2019/06/shop-07-600x818.jpg 600w, http://queeny.like-themes.com/wp-content/uploads/2019/06/shop-07.jpg 880w" sizes="(max-width: 480px) 100vw, 480px" /></div><div class="lte-item-descr"><a href="product/gray-lace-underwear-set/index.html"><h2 class="woocommerce-loop-product__title">Gray Lace Underwear Set</h2></a>
	<span class="price"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">&#36;</span>19.00</span></span>
<a href="indexff81.html?add-to-cart=9248" data-quantity="1" class="button product_type_simple add_to_cart_button ajax_add_to_cart" data-product_id="9248" data-product_sku="" aria-label="Add &ldquo;Gray Lace Underwear Set&rdquo; to your cart" rel="nofollow">Add to cart</a><a href="product/gray-lace-underwear-set/index.html" class="lte-btn-more lte-btn btn">More Info</a></div>
			</div-->		</li>
					<li id="post-13432" class="product post-13432 type-product status-publish has-post-thumbnail product_cat-fashion last instock shipping-taxable purchasable product-type-simple">
		<!--	<div class="item">			<div class="lte-image">
		<img width="480" height="655" src="wp-content/uploads/2019/06/shop-01-480x655.jpg" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="" srcset="http://queeny.like-themes.com/wp-content/uploads/2019/06/shop-01-480x655.jpg 480w, http://queeny.like-themes.com/wp-content/uploads/2019/06/shop-01-220x300.jpg 220w, http://queeny.like-themes.com/wp-content/uploads/2019/06/shop-01-751x1024.jpg 751w, http://queeny.like-themes.com/wp-content/uploads/2019/06/shop-01-768x1047.jpg 768w, http://queeny.like-themes.com/wp-content/uploads/2019/06/shop-01-242x330.jpg 242w, http://queeny.like-themes.com/wp-content/uploads/2019/06/shop-01-385x525.jpg 385w, http://queeny.like-themes.com/wp-content/uploads/2019/06/shop-01-587x800.jpg 587w, http://queeny.like-themes.com/wp-content/uploads/2019/06/shop-01-403x550.jpg 403w, http://queeny.like-themes.com/wp-content/uploads/2019/06/shop-01-600x818.jpg 600w, http://queeny.like-themes.com/wp-content/uploads/2019/06/shop-01.jpg 880w" sizes="(max-width: 480px) 100vw, 480px" /></div><div class="lte-item-descr"><a href="product/snow-queen-underwear-set/index.html"><h2 class="woocommerce-loop-product__title">Snow Queen Underwear Set</h2></a>
	<span class="price"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">&#36;</span>468.99</span></span>
<a href="indexdd5e.html?add-to-cart=13432" data-quantity="1" class="button product_type_simple add_to_cart_button ajax_add_to_cart" data-product_id="13432" data-product_sku="" aria-label="Add &ldquo;Snow Queen Underwear Set&rdquo; to your cart" rel="nofollow">Add to cart</a><a href="product/snow-queen-underwear-set/index.html" class="lte-btn-more lte-btn btn">More Info</a></div>
			</div-->		</li>
	
			</ul></div></div>		</div>
				</div> </form>
				<div class="elementor-element elementor-element-ff99bfe elementor-widget elementor-widget-spacer" data-id="ff99bfe" data-element_type="widget" data-widget_type="spacer.default">
				<div class="elementor-widget-container">
					<div class="elementor-spacer">
			<div class="elementor-spacer-inner"></div>
		</div>
				</div>
				</div>
						</div>
			</div>
		</div>
						</div>
			</div>
		</section>
				<section class="lte-background-black elementor-element elementor-element-313bbd6 lte-overlay-wrapper-black lte-background-black lte-parallax-yes elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section" data-id="313bbd6" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
						<div class="elementor-container elementor-column-gap-default">
				<div class="elementor-row">
				<div class="elementor-element elementor-element-440c6e3 elementor-column elementor-col-100 elementor-top-column" data-id="440c6e3" data-element_type="column">
			<div class="elementor-column-wrap  elementor-element-populated">
					<div class="elementor-widget-wrap">
				<div class="elementor-element elementor-element-c4a5850 elementor-widget elementor-widget-spacer" data-id="c4a5850" data-element_type="widget" data-widget_type="spacer.default">
				<div class="elementor-widget-container">
					<div class="elementor-spacer">
			<div class="elementor-spacer-inner"></div>
		</div>
				</div>
				</div>
				<div class="elementor-element elementor-element-5f3e28a elementor-widget elementor-widget-lte-header" data-id="5f3e28a" data-element_type="widget" data-widget_type="lte-header.default">
				<div class="elementor-widget-container">
			<div class="lte-heading header-subheader lte-color-white lte-subcolor-main lte-margin has-subheader heading-tag-h2"><h4 class="lte-subheader">Testimonials</h4><h2 class="lte-header">What Our Buyers Say</h2></div>		</div>
				</div>
				<div class="elementor-element elementor-element-067de27 elementor-widget elementor-widget-spacer" data-id="067de27" data-element_type="widget" data-widget_type="spacer.default">
				<div class="elementor-widget-container">
					<div class="elementor-spacer">
			<div class="elementor-spacer-inner"></div>
		</div>
				</div>
				</div>
				<div class="elementor-element elementor-element-d6f3600 elementor-widget elementor-widget-lte-testimonials" data-id="d6f3600" data-element_type="widget" data-widget_type="lte-testimonials.default">
				<div class="elementor-widget-container">
			<div class="lte-swiper-slider-wrapper"><div class="lte-swiper-slider swiper-container lte-testimonials-list " data-space-between="30" data-arrows="sides" data-autoplay="0" data-autoplay-interaction="" data-loop="" data-speed="1000" data-effect="slide" data-slides-per-group="1" data-breakpoints="1;;;;;"><div class="swiper-wrapper"><div class="lte-item swiper-slide"><div class="lte-inner ">
	<div class="lte-descr"><p>Nullam orci dui, dictum et magna sollicitudin, 
    tempor blandit erat. Maecenas suscipit tellus sit amet augue placerat fringilla a id lacus. Morbis
    .</p></div><!--<div class="lte-image"><img width="110" height="110" src="wp-content/uploads/2018/02/client-02-110x110.jpg"
     class="attachment-queeny-tiny-square size-queeny-tiny-square wp-post-image" alt="" srcset="http://queeny.like-themes.com/wp-cont
     ent/uploads/2018/02/client-02-110x110.jpg 110w, http://queeny.like-themes.com/wp-content/uploads/2018/02/client-02-300x300.jpg 300
     w, http://queeny.like-themes.com/wp-content/uploads/2018/02/client-02-150x150.jpg 150w, http://queeny.like-themes.com/wp-content/u
     ploads/2018/02/client-02-768x768.jpg 768w, http://queeny.like-themes.com/wp-content/uploads/2018/02/client-02-330x330.jpg 330w, ht
     tp://queeny.like-themes.com/wp-content/uploads/2018/02/client-02-250x250.jpg 250w, http://queeny.like-themes.com/wp-content/upload
     s/2018/02/client-02-140x140.jpg 140w, http://queeny.like-themes.com/wp-content/uploads/2018/02/client-02-275x275.jpg 275w, http:/
     /queeny.like-themes.com/wp-content/uploads/2018/02/client-02-800x800.jpg 800w, http://queeny.like-themes.com/wp-content/uploads/
     2018/02/client-02-550x550.jpg 550w, http://queeny.like-themes.com/wp-content/uploads/2018/02/client-02-480x480.jpg 480w, http://
     queeny.like-themes.com/wp-content/uploads/2018/02/client-02-600x600.jpg 600w, http://queeny.like-themes.com/wp-content/uploads/
     2018/02/client-02-100x100.jpg 100w, http://queeny.like-themes.com/wp-content/uploads/2018/02/client-02.jpg 952w" sizes="(max-wi
     dth: 110px) 100vw, 110px" /></div><div class="lte-header">Patric Stone</div><div class="lte-subheader">Freelancer</div--></div>
</div><!--<div class="lte-item swiper-slide"><div class="lte-inner ">
	<div class="lte-descr"><p>Maecenas ultricies felis sit amet libero scelerisque, ut eleifend leo mattis. Aliquam porta facilisis metus. Pellentesque habitant morbi tristique.</p></div><div class="lte-image"><img width="110" height="110" src="wp-content/uploads/2018/02/client-04-110x110.jpg" class="attachment-queeny-tiny-square size-queeny-tiny-square wp-post-image" alt="" srcset="http://queeny.like-themes.com/wp-content/uploads/2018/02/client-04-110x110.jpg 110w, http://queeny.like-themes.com/wp-content/uploads/2018/02/client-04-300x300.jpg 300w, http://queeny.like-themes.com/wp-content/uploads/2018/02/client-04-150x150.jpg 150w, http://queeny.like-themes.com/wp-content/uploads/2018/02/client-04-768x768.jpg 768w, http://queeny.like-themes.com/wp-content/uploads/2018/02/client-04-330x330.jpg 330w, http://queeny.like-themes.com/wp-content/uploads/2018/02/client-04-250x250.jpg 250w, http://queeny.like-themes.com/wp-content/uploads/2018/02/client-04-140x140.jpg 140w, http://queeny.like-themes.com/wp-content/uploads/2018/02/client-04-275x275.jpg 275w, http://queeny.like-themes.com/wp-content/uploads/2018/02/client-04-800x800.jpg 800w, http://queeny.like-themes.com/wp-content/uploads/2018/02/client-04-550x550.jpg 550w, http://queeny.like-themes.com/wp-content/uploads/2018/02/client-04-480x480.jpg 480w, http://queeny.like-themes.com/wp-content/uploads/2018/02/client-04-600x600.jpg 600w, http://queeny.like-themes.com/wp-content/uploads/2018/02/client-04-100x100.jpg 100w, http://queeny.like-themes.com/wp-content/uploads/2018/02/client-04.jpg 952w" sizes="(max-width: 110px) 100vw, 110px" /></div><div class="lte-header">Hugo James</div><div class="lte-subheader">Manager</div></div>
</div><div class="lte-item swiper-slide"><div class="lte-inner ">
	<div class="lte-descr"><p>Morbi viverra volutpat ex, id pellentesque felis volutpat eu. Duis et tellus imperdiet, lacinia risus id, tincidunt ipsum. Integer euismod elit vel.</p></div><div class="lte-image"><img width="110" height="110" src="wp-content/uploads/2018/02/client-01-110x110.jpg" class="attachment-queeny-tiny-square size-queeny-tiny-square wp-post-image" alt="" srcset="http://queeny.like-themes.com/wp-content/uploads/2018/02/client-01-110x110.jpg 110w, http://queeny.like-themes.com/wp-content/uploads/2018/02/client-01-300x300.jpg 300w, http://queeny.like-themes.com/wp-content/uploads/2018/02/client-01-150x150.jpg 150w, http://queeny.like-themes.com/wp-content/uploads/2018/02/client-01-768x768.jpg 768w, http://queeny.like-themes.com/wp-content/uploads/2018/02/client-01-330x330.jpg 330w, http://queeny.like-themes.com/wp-content/uploads/2018/02/client-01-250x250.jpg 250w, http://queeny.like-themes.com/wp-content/uploads/2018/02/client-01-140x140.jpg 140w, http://queeny.like-themes.com/wp-content/uploads/2018/02/client-01-275x275.jpg 275w, http://queeny.like-themes.com/wp-content/uploads/2018/02/client-01-800x800.jpg 800w, http://queeny.like-themes.com/wp-content/uploads/2018/02/client-01-550x550.jpg 550w, http://queeny.like-themes.com/wp-content/uploads/2018/02/client-01-480x480.jpg 480w, http://queeny.like-themes.com/wp-content/uploads/2018/02/client-01-600x600.jpg 600w, http://queeny.like-themes.com/wp-content/uploads/2018/02/client-01-100x100.jpg 100w, http://queeny.like-themes.com/wp-content/uploads/2018/02/client-01.jpg 952w" sizes="(max-width: 110px) 100vw, 110px" /></div><div class="lte-header">Stefanie Rashford</div><div class="lte-subheader">Developer</div></div>
</div><div class="lte-item swiper-slide"><div class="lte-inner ">
	<div class="lte-descr"><p>Nullam orci dui, dictum et magna sollicitudin, tempor blandit erat. Maecenas suscipit tellus sit amet augue placerat fringilla a id lacus. Fusce.</p></div><div class="lte-image"><img width="110" height="110" src="wp-content/uploads/2018/02/client-06-110x110.jpg" class="attachment-queeny-tiny-square size-queeny-tiny-square wp-post-image" alt="" srcset="http://queeny.like-themes.com/wp-content/uploads/2018/02/client-06-110x110.jpg 110w, http://queeny.like-themes.com/wp-content/uploads/2018/02/client-06-300x300.jpg 300w, http://queeny.like-themes.com/wp-content/uploads/2018/02/client-06-150x150.jpg 150w, http://queeny.like-themes.com/wp-content/uploads/2018/02/client-06-768x768.jpg 768w, http://queeny.like-themes.com/wp-content/uploads/2018/02/client-06-330x330.jpg 330w, http://queeny.like-themes.com/wp-content/uploads/2018/02/client-06-250x250.jpg 250w, http://queeny.like-themes.com/wp-content/uploads/2018/02/client-06-140x140.jpg 140w, http://queeny.like-themes.com/wp-content/uploads/2018/02/client-06-275x275.jpg 275w, http://queeny.like-themes.com/wp-content/uploads/2018/02/client-06-800x800.jpg 800w, http://queeny.like-themes.com/wp-content/uploads/2018/02/client-06-550x550.jpg 550w, http://queeny.like-themes.com/wp-content/uploads/2018/02/client-06-480x480.jpg 480w, http://queeny.like-themes.com/wp-content/uploads/2018/02/client-06-600x600.jpg 600w, http://queeny.like-themes.com/wp-content/uploads/2018/02/client-06-100x100.jpg 100w, http://queeny.like-themes.com/wp-content/uploads/2018/02/client-06.jpg 952w" sizes="(max-width: 110px) 100vw, 110px" /></div><div class="lte-header">Cassie Carleton</div><div class="lte-subheader">Designer</div></div>
</div><div class="lte-item swiper-slide"><div class="lte-inner ">
	<div class="lte-descr"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam facilisis at turpis eu faucibus. In dignissim, enim eu ornare aliquet, metus ex.</p></div><div class="lte-image"><img width="110" height="110" src="wp-content/uploads/2018/02/client-08-110x110.jpg" class="attachment-queeny-tiny-square size-queeny-tiny-square wp-post-image" alt="" srcset="http://queeny.like-themes.com/wp-content/uploads/2018/02/client-08-110x110.jpg 110w, http://queeny.like-themes.com/wp-content/uploads/2018/02/client-08-300x300.jpg 300w, http://queeny.like-themes.com/wp-content/uploads/2018/02/client-08-150x150.jpg 150w, http://queeny.like-themes.com/wp-content/uploads/2018/02/client-08-768x768.jpg 768w, http://queeny.like-themes.com/wp-content/uploads/2018/02/client-08-330x330.jpg 330w, http://queeny.like-themes.com/wp-content/uploads/2018/02/client-08-250x250.jpg 250w, http://queeny.like-themes.com/wp-content/uploads/2018/02/client-08-140x140.jpg 140w, http://queeny.like-themes.com/wp-content/uploads/2018/02/client-08-275x275.jpg 275w, http://queeny.like-themes.com/wp-content/uploads/2018/02/client-08-800x800.jpg 800w, http://queeny.like-themes.com/wp-content/uploads/2018/02/client-08-550x550.jpg 550w, http://queeny.like-themes.com/wp-content/uploads/2018/02/client-08-480x480.jpg 480w, http://queeny.like-themes.com/wp-content/uploads/2018/02/client-08-600x600.jpg 600w, http://queeny.like-themes.com/wp-content/uploads/2018/02/client-08-100x100.jpg 100w, http://queeny.like-themes.com/wp-content/uploads/2018/02/client-08.jpg 952w" sizes="(max-width: 110px) 100vw, 110px" /></div><div class="lte-header">Coby Sue</div><div class="lte-subheader">Company Owner</div></div>
</div--></div></div></div>		</div>
				</div>
				<div class="elementor-element elementor-element-f8f026d elementor-widget elementor-widget-spacer" data-id="f8f026d" data-element_type="widget" data-widget_type="spacer.default">
				<div class="elementor-widget-container">
					<div class="elementor-spacer">
			<div class="elementor-spacer-inner"></div>
		</div>
				</div>
				</div>
						</div>
			</div>
		</div>
						</div>
			</div>
		</section>
			
				<section class="elementor-element elementor-element-955ec9c elementor-section-full_width elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section" data-id="955ec9c" data-element_type="section">
						<div class="elementor-container elementor-column-gap-no">
				<div class="elementor-row">
				<div class="elementor-element elementor-element-9c2bbea elementor-column elementor-col-100 elementor-top-column" data-id="9c2bbea" data-element_type="column">
			<div class="elementor-column-wrap  elementor-element-populated">
					<div class="elementor-widget-wrap">
				<div class="elementor-element elementor-element-df0d814 elementor-widget elementor-widget-lte-gallery" data-id="df0d814" data-element_type="widget" data-widget_type="lte-gallery.default">
				<div class="elementor-widget-container">
			<div class="lte-gallery-sc lte-gallery-grid">
            <?php
         
                        $select="SELECT * FROM joinall ORDER BY id DESC LIMIT 6";
                       // $select="SELECT * FROM advertise ORDER BY id DESC";
                        $result=mysqli_query($con,$select);
                        
                        if(!$result){
                            die("failed").mysqli_connect_error();
                        }while($row=mysqli_fetch_array($result)){
                            
                        ?>	
            				<a href="Bikini_Iimages/compress_<?php echo $row['file'];?>" class="swipebox lte-photo">
			<span>
			<img width="800" height="800" src="Bikini_Iimages/compress_<?php echo $row['file'];?>" 
            class="attachment-queeny-gallery-big size-queeny-gallery-big" alt="" ></span>
				<?php } ?>		
			<span>
	
        </span>	
					
			<span>
		</span>
				
			<span>
		</span>	
			<span>
		</span>			<span>
		</span>	
	
</div>		</div>
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
			</div>
</article>
            </div>
        	        
        </div>
	</div>

</div>
<?php include "footer.php";?>
		<div class="lt-custom-popup" data-image="http://queeny.like-themes.com/wp-content/plugins/lt-custom/images/icon.png"></div>
		<a href="#" class="lte-go-top floating lte-go-top-icon"><span class="go-top-icon-v2 queeny_fa5_icons fas fa-arrow-up"></span></a>	<script type="text/javascript">
		var c = document.body.className;
		c = c.replace(/woocommerce-no-js/, 'woocommerce-js');
		document.body.className = c;
	</script>
	<link rel='stylesheet' id='elementor-post-9728-css'  href='wp-content/uploads/elementor/css/post-9728aae6.css?ver=1588776046' type='text/css' media='all' />
<link rel='stylesheet' id='elementor-post-13596-css'  href='wp-content/uploads/elementor/css/post-135968a3d.css?ver=1588776047' type='text/css' media='all' />
<link rel='stylesheet' id='elementor-post-13597-css'  href='wp-content/uploads/elementor/css/post-135978a3d.css?ver=1588776047' type='text/css' media='all' />
<link rel='stylesheet' id='elementor-post-13595-css'  href='wp-content/uploads/elementor/css/post-135958a3d.css?ver=1588776047' type='text/css' media='all' />
<link rel='stylesheet' id='elementor-post-13495-css'  href='wp-content/uploads/elementor/css/post-134958a3d.css?ver=1588776047' type='text/css' media='all' />
<link rel='stylesheet' id='lte-zoomslider-css'  href='wp-content/plugins/lte-ext/elementor/shortcodes/zoomslider/zoom-slider923e.css?ver=5.4.10' type='text/css' media='all' />
<script type='text/javascript'>
/* <![CDATA[ */
var wpcf7 = {"apiSettings":{"root":"http:\/\/queeny.like-themes.com\/wp-json\/contact-form-7\/v1","namespace":"contact-form-7\/v1"},"cached":"1"};
/* ]]> */
</script>
<script type='text/javascript' src='wp-content/plugins/contact-form-7/includes/js/scripts6725.js?ver=5.1.7'></script>
<script type='text/javascript' src='wp-content/plugins/lt-custom/js/colorpicker5152.js?ver=1.0'></script>
<script type='text/javascript' src='wp-content/plugins/lt-custom/js/lt-custom5152.js?ver=1.0'></script>
<script type='text/javascript' src='wp-content/plugins/woocommerce/assets/js/jquery-blockui/jquery.blockUI.min44fd.js?ver=2.70'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var wc_add_to_cart_params = {"ajax_url":"\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/?wc-ajax=%%endpoint%%","i18n_view_cart":"View cart","cart_url":"http:\/\/queeny.like-themes.com\/cart\/","is_cart":"","cart_redirect_after_add":"no"};
/* ]]> */
</script>
<script type='text/javascript' src='wp-content/plugins/woocommerce/assets/js/frontend/add-to-cart.min5fc8.js?ver=4.0.4'></script>
<script type='text/javascript' src='wp-content/plugins/woocommerce/assets/js/js-cookie/js.cookie.min6b25.js?ver=2.1.4'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var woocommerce_params = {"ajax_url":"\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/?wc-ajax=%%endpoint%%"};
/* ]]> */
</script>
<script type='text/javascript' src='wp-content/plugins/woocommerce/assets/js/frontend/woocommerce.min5fc8.js?ver=4.0.4'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var wc_cart_fragments_params = {"ajax_url":"\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/?wc-ajax=%%endpoint%%","cart_hash_key":"wc_cart_hash_797f8b2c4151e34e0a440cf30797fff3","fragment_name":"wc_fragments_797f8b2c4151e34e0a440cf30797fff3","request_timeout":"5000"};
/* ]]> */
</script>
<script type='text/javascript' src='wp-content/plugins/woocommerce/assets/js/frontend/cart-fragments.min5fc8.js?ver=4.0.4'></script>
<script type='text/javascript' src='wp-includes/js/imagesloaded.min55a0.js?ver=3.2.0'></script>
<script type='text/javascript' src='wp-includes/js/masonry.mind617.js?ver=3.3.2'></script>
<script type='text/javascript' src='wp-includes/js/jquery/jquery.masonry.minef70.js?ver=3.1.2b'></script>
<script type='text/javascript' src='wp-content/themes/queeny/assets/js/jquery.matchHeight923e.js?ver=5.4.10'></script>
<script type='text/javascript' src='wp-content/themes/queeny/assets/js/jquery.nicescroll9b73.js?ver=3.7.6.0'></script>
<script type='text/javascript' src='wp-content/themes/queeny/assets/js/jquery.swipeboxc2d0.js?ver=1.4.4'></script>
<script type='text/javascript' src='wp-content/themes/queeny/assets/js/bootstrap.mina352.js?ver=4.1.3'></script>
<script type='text/javascript' src='wp-content/plugins/elementor/assets/lib/swiper/swiper.min48f5.js?ver=5.3.6'></script>
<script type='text/javascript' src='wp-content/themes/queeny/assets/js/scrollreveal7984.js?ver=3.3.4'></script>
<script type='text/javascript' src='wp-content/themes/queeny/assets/js/waypoint1f22.js?ver=1.6.2'></script>
<script type='text/javascript' src='wp-content/themes/queeny/assets/js/parallax.minc358.js?ver=1.1.3'></script>
<script type='text/javascript' src='wp-content/themes/queeny/assets/js/scripts5152.js?ver=1.0'></script>
<script type='text/javascript' src='wp-content/themes/queeny/assets/js/map-style8a54.js?ver=1.0.0'></script>
<script type='text/javascript' src='wp-content/themes/queeny/assets/js/pace923e.js?ver=5.4.10'></script>
<script type='text/javascript' src='wp-includes/js/wp-embed.min923e.js?ver=5.4.10'></script>
<script type='text/javascript' src='wp-content/plugins/lte-ext/elementor/shortcodes/zoomslider/jquery.zoomslider.js'></script>
<script type='text/javascript' src='wp-content/plugins/lte-ext/elementor/shortcodes/countup/jquery.counterup.min.js'></script>
<script type='text/javascript' src='wp-content/plugins/elementor/assets/js/frontend-modules.minc867.js?ver=2.9.7'></script>
<script type='text/javascript' src='wp-includes/js/jquery/ui/position.mine899.js?ver=1.11.4'></script>
<script type='text/javascript' src='wp-content/plugins/elementor/assets/lib/dialog/dialog.minae9e.js?ver=4.7.6'></script>
<script type='text/javascript' src='wp-content/plugins/elementor/assets/lib/waypoints/waypoints.min05da.js?ver=4.0.2'></script>
<script type='text/javascript' src='wp-content/plugins/elementor/assets/lib/share-link/share-link.minc867.js?ver=2.9.7'></script>
<script type='text/javascript'>
var elementorFrontendConfig = {"environmentMode":{"edit":false,"wpPreview":false},"i18n":{"shareOnFacebook":"Share on Facebook","shareOnTwitter":"Share on Twitter","pinIt":"Pin it","downloadImage":"Download image"},"is_rtl":false,"breakpoints":{"xs":0,"sm":480,"md":768,"lg":1200,"xl":1440,"xxl":1600},"version":"2.9.7","urls":{"assets":"http:\/\/queeny.like-themes.com\/wp-content\/plugins\/elementor\/assets\/"},"settings":{"page":[],"general":{"elementor_global_image_lightbox":"yes","elementor_lightbox_enable_counter":"yes","elementor_lightbox_enable_fullscreen":"yes","elementor_lightbox_enable_zoom":"yes","elementor_lightbox_enable_share":"yes","elementor_lightbox_title_src":"title","elementor_lightbox_description_src":"description"},"editorPreferences":[]},"post":{"id":13198,"title":"Queeny%20%E2%80%93%20WordPress%20Theme","excerpt":"","featuredImage":false}};
</script>
<script type='text/javascript' src='wp-content/plugins/elementor/assets/js/frontend.minc867.js?ver=2.9.7'></script>
</body>

<!-- Mirrored from queeny.like-themes.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 10 May 2022 15:48:11 GMT -->
</html>

<!-- Dynamic page generated in 1.694 seconds. -->
<!-- Cached page generated by WP-Super-Cache on 2022-05-10 15:37:10 -->

<!-- super cache -->