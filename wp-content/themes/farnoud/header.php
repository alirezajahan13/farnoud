<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package farnoud
 */

?>

<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<!-- Adding Search Console And Analytics -->
	<meta name="google-site-verification" content="WnZ5MFQ25M4z5_sg2nMdGdyVxsaWy15Kf64aF6VZKb0" />

	<!-- Google tag (gtag.js) -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=G-BFCMQ28DDN"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'G-BFCMQ28DDN');
	</script>

	<?php wp_head(); ?>
</head>
<body <?php if(is_singular('question')){ echo 'itemscope itemtype="https://schema.org/QAPage"'; } ?> <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div class="mobMenuContainer">
	<svg xmlns="http://www.w3.org/2000/svg" stroke="#fff" fill="#fff" stroke-width="25" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve"><path d="m375.808 143.28-11.504-11.12-108.128 111.984L148.032 132.16l-11.488 11.12 108.512 112.384-108.512 112.368 11.488 11.12 108.144-111.984 108.128 111.984 11.504-11.12-108.512-112.368z"/><path d="M0 0v512h512V0H0zm496.032 496.032H15.968V15.968h480.064v480.064z"/><g/><g/><g/><g/><g/><g/><g/><g/><g/><g/><g/><g/><g/><g/><g/></svg>
	<?php
		wp_nav_menu(
			array(
				'theme_location' => 'menu-2',
				'container_class'  => 'mobileMenu',
			)
		);
	?>
</div>
<?php if(!is_singular('source')){ ?>
<!-- <div class="theMainIcon">
	<a href="tel://09121111111" class="phoneNumber">
		<span class="textAnimation">مشاوره با وکیل</span>
		<svg class="svgAnimation" width="25px" height="25px" fill="#fedc70" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 287.32 287.32" style="enable-background:new 0 0 287.32 287.32" xml:space="preserve"><path d="M267.749 191.076c-14.595-11.729-27.983-17.431-40.93-17.431-18.729 0-32.214 11.914-44.423 24.119-1.404 1.405-3.104 2.06-5.349 2.06-10.288.001-28.387-12.883-53.794-38.293-29.89-29.892-41.191-48.904-33.592-56.506 20.6-20.593 27.031-41.237-4.509-80.462C73.861 10.51 62.814 3.68 51.38 3.68c-15.42 0-27.142 12.326-37.484 23.202-1.788 1.88-3.477 3.656-5.133 5.312-11.689 11.688-11.683 37.182.017 68.2 12.837 34.033 38.183 71.055 71.37 104.247 25.665 25.663 53.59 46.403 80.758 60.328 23.719 12.158 46.726 18.672 64.783 18.672h.007c11.3 0 20.479-2.465 26.541-7.478 12.314-10.181 35.234-29.039 35.081-51.439-.084-12.014-6.667-23.273-19.571-33.648z"></path></svg>
	</a>
</div> -->
<?php } ?>

<div class="mainOverlay"></div>
<div class="searchContainer">
    <form action="/" method="get">
        <button type="submit"><svg stroke="#777" width="25px" height="25px" xmlns="http://www.w3.org/2000/svg" id="Layer_1" x="0" y="0" version="1.1" viewBox="0 0 29 29" xml:space="preserve"><circle cx="11.854" cy="11.854" r="9" fill="none" stroke-miterlimit="10" stroke-width="2"/><path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="2" d="M18.451 18.451l7.695 7.695"/></svg></button>
        <input type="text" name="s" id="search" value="<?php the_search_query(); ?>" placeholder="موضوع مورد نظر خود را سرچ کنید" />
		<div class="searchBtn">
			<a class="generalLinkButton inlinedLink secondaryLinkButton closeInput">بستن</a>
			<button type="submit" class="generalLinkButton inlinedLink" >جستجو</button>
		</div>
    </form>
</div>

<div id="page" class="site">
<!-- <div class="topHeaderBack">
	<div class="topHeader mainView">
		<a href="https://farnoud.ir/blog/">بلاگ</a>
		<a href="https://farnoud.ir/contact/">تماس با ما</a>
		<a href="https://farnoud.ir/about/">درباره ما</a>
		<a href="https://farnoud.ir/request/">درخواست مشاوره</a>
		<div class="headerSearchPart">
			<span><svg xmlns="http://www.w3.org/2000/svg" fill="#fff" stroke="#fff" stroke-width="2" viewBox="0 0 488.4 488.4" style="enable-background:new 0 0 488.4 488.4" xml:space="preserve"><path d="M0 203.25c0 112.1 91.2 203.2 203.2 203.2 51.6 0 98.8-19.4 134.7-51.2l129.5 129.5c2.4 2.4 5.5 3.6 8.7 3.6s6.3-1.2 8.7-3.6c4.8-4.8 4.8-12.5 0-17.3l-129.6-129.5c31.8-35.9 51.2-83 51.2-134.7C406.4 91.15 315.2.05 203.2.05S0 91.15 0 203.25zm381.9 0c0 98.5-80.2 178.7-178.7 178.7s-178.7-80.2-178.7-178.7 80.2-178.7 178.7-178.7 178.7 80.1 178.7 178.7z"/><g/><g/><g/><g/><g/><g/><g/><g/><g/><g/><g/><g/><g/><g/><g/></svg></span>
		</div>
	</div>
</div> -->
<div class="mainHeaderBack darkBg">
	<div class="mainHeader mainView">
		<div class="headerLogoPart">
			<img src="<?php bloginfo('template_directory')?>/img/farnoud-gold-logo.png?<?php echo _S_VERSION ?>" alt="">
		</div>
		<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'container_class'  => 'mainMenu',
				)
			);
		?>
		<div class="mobileMenuIcon">
			<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 50 50" style="enable-background:new 0 0 50 50" xml:space="preserve"><path d="M0 3h50v2H0zm0 14h50v2H0zm0 14h50v2H0zm0 14h50v2H0z"/><g/><g/><g/><g/><g/><g/><g/><g/><g/><g/><g/><g/><g/><g/><g/></svg>
		</div>
		<div class="headerSearchPart">
			<span><svg xmlns="http://www.w3.org/2000/svg" fill="#fff" stroke="#fff" stroke-width="2" viewBox="0 0 488.4 488.4" style="enable-background:new 0 0 488.4 488.4" xml:space="preserve"><path d="M0 203.25c0 112.1 91.2 203.2 203.2 203.2 51.6 0 98.8-19.4 134.7-51.2l129.5 129.5c2.4 2.4 5.5 3.6 8.7 3.6s6.3-1.2 8.7-3.6c4.8-4.8 4.8-12.5 0-17.3l-129.6-129.5c31.8-35.9 51.2-83 51.2-134.7C406.4 91.15 315.2.05 203.2.05S0 91.15 0 203.25zm381.9 0c0 98.5-80.2 178.7-178.7 178.7s-178.7-80.2-178.7-178.7 80.2-178.7 178.7-178.7 178.7 80.1 178.7 178.7z"/><g/><g/><g/><g/><g/><g/><g/><g/><g/><g/><g/><g/><g/><g/><g/></svg></span>
		</div>
	</div>
</div>


<!-- Sticky Header -->
<div class="stickyHeader">
<!-- <div class="topHeaderBack">
	<div class="topHeader mainView">
		<a href="https://farnoud.ir/blog/">بلاگ</a>
		<a href="https://farnoud.ir/contact/">تماس با ما</a>
		<a href="https://farnoud.ir/about/">درباره ما</a>
		<a href="https://farnoud.ir/request/">درخواست مشاوره</a>
		<div class="headerSearchPart">
			<span><svg xmlns="http://www.w3.org/2000/svg" fill="#fff" stroke="#fff" stroke-width="2" viewBox="0 0 488.4 488.4" style="enable-background:new 0 0 488.4 488.4" xml:space="preserve"><path d="M0 203.25c0 112.1 91.2 203.2 203.2 203.2 51.6 0 98.8-19.4 134.7-51.2l129.5 129.5c2.4 2.4 5.5 3.6 8.7 3.6s6.3-1.2 8.7-3.6c4.8-4.8 4.8-12.5 0-17.3l-129.6-129.5c31.8-35.9 51.2-83 51.2-134.7C406.4 91.15 315.2.05 203.2.05S0 91.15 0 203.25zm381.9 0c0 98.5-80.2 178.7-178.7 178.7s-178.7-80.2-178.7-178.7 80.2-178.7 178.7-178.7 178.7 80.1 178.7 178.7z"/><g/><g/><g/><g/><g/><g/><g/><g/><g/><g/><g/><g/><g/><g/><g/></svg></span>
		</div>
	</div>
</div> -->
<div class="mainHeaderBack darkBg">
	<div class="mainHeader mainView">
		<div class="headerLogoPart">
			<img src="<?php bloginfo('template_directory')?>/img/farnoud-gold-logo.png?<?php echo _S_VERSION ?>" alt="">
		</div>
		<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'container_class'  => 'mainMenu',
				)
			);
		?>
		<div class="mobileMenuIcon">
			<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 50 50" style="enable-background:new 0 0 50 50" xml:space="preserve"><path d="M0 3h50v2H0zm0 14h50v2H0zm0 14h50v2H0zm0 14h50v2H0z"/><g/><g/><g/><g/><g/><g/><g/><g/><g/><g/><g/><g/><g/><g/><g/></svg>
		</div>
		<div class="headerSearchPart">
			<span><svg xmlns="http://www.w3.org/2000/svg" fill="#fff" stroke="#fff" stroke-width="2" viewBox="0 0 488.4 488.4" style="enable-background:new 0 0 488.4 488.4" xml:space="preserve"><path d="M0 203.25c0 112.1 91.2 203.2 203.2 203.2 51.6 0 98.8-19.4 134.7-51.2l129.5 129.5c2.4 2.4 5.5 3.6 8.7 3.6s6.3-1.2 8.7-3.6c4.8-4.8 4.8-12.5 0-17.3l-129.6-129.5c31.8-35.9 51.2-83 51.2-134.7C406.4 91.15 315.2.05 203.2.05S0 91.15 0 203.25zm381.9 0c0 98.5-80.2 178.7-178.7 178.7s-178.7-80.2-178.7-178.7 80.2-178.7 178.7-178.7 178.7 80.1 178.7 178.7z"/><g/><g/><g/><g/><g/><g/><g/><g/><g/><g/><g/><g/><g/><g/><g/></svg></span>
		</div>
	</div>
</div>
</div>





