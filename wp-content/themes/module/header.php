<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Module
 * @since 1.0.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="description" content="">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">

	<meta name="description" content="" />
	<meta name="title" content="" />
	<meta name="keywords" content="" />
	<?php
	$favicon = get_field('favicon', 'option'); 
	if($favicon)
	{
	?>
	<!-- Favicon -->
	<link rel="icon" href="<?php echo $favicon ?>" type="image/x-icon" />
	<?php
	}
	?>
	<!--=== Windows Phone JS Code Start ===-->
	<script type="text/javascript">
		if (navigator.userAgent.match(/IEMobile\/10\.0/)) {
			var msViewportStyle = document.createElement('style')
			msViewportStyle.appendChild(
				document.createTextNode(
					'@-ms-viewport{width:auto!important}'
					)
				)
			document.querySelector('head').appendChild(msViewportStyle)
		}
	</script>
	<!--=== Windows Phone JS Code End ===-->
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

	<svg class="svg-defs">
		<defs>
			<symbol id="btn-arrow" viewBox="0 0 6 11">
				<path opacity="0.8" fill-rule="evenodd" clip-rule="evenodd"
					d="M5.81597 5.95456C6.06134 5.7035 6.06134 5.2965 5.81597 5.04544L0.979908 0.0941471C0.857379 -0.0313824 0.65843 -0.0313824 0.535902 0.0941471L0.0918961 0.548706C-0.030632 0.674235 -0.030632 0.877735 0.0918961 1.00326L4.26227 5.27256C4.38479 5.39809 4.38479 5.60191 4.26227 5.72712L0.0918961 9.99674C-0.030632 10.1223 -0.030632 10.3258 0.0918961 10.4513L0.535902 10.9059C0.65843 11.0314 0.857379 11.0314 0.979908 10.9059L5.81597 5.95456Z" />
			</symbol>

			<symbol id="earth-icon" viewBox="0 0 15 15">
				<path fill-rule="evenodd" clip-rule="evenodd"
					d="M11.1115 11.0824C11.4397 10.0849 11.6321 9.02559 11.6775 7.94118H14.0951C13.9959 9.43897 13.3985 10.7996 12.4641 11.8619C12.0331 11.5597 11.5818 11.2985 11.1115 11.0824ZM10.8004 11.9122C11.1556 12.079 11.4997 12.2713 11.8297 12.4928C11.2491 12.9971 10.5807 13.3999 9.85015 13.6787C10.2194 13.1299 10.5371 12.5382 10.8004 11.9122ZM4.29926 11.8632C4.57544 12.5294 4.91206 13.1576 5.30824 13.7369C4.51544 13.4572 3.79235 13.0332 3.16985 12.4928C3.53118 12.2506 3.90838 12.0401 4.29926 11.8632ZM4.25912 3.11559C3.88324 2.94309 3.51971 2.73971 3.17162 2.50588C3.76985 1.98662 4.46206 1.57544 5.21868 1.29618C4.84103 1.86353 4.52074 2.47235 4.25912 3.11559ZM10.8415 3.0675C10.5922 2.46353 10.2909 1.89088 9.93882 1.35397C10.6346 1.63103 11.2712 2.02235 11.8279 2.50544C11.5107 2.71765 11.1816 2.90559 10.8415 3.0675ZM7.93324 7.05882V4.68882C8.75382 4.64868 9.55456 4.49779 10.3178 4.23574C10.5997 5.13441 10.7643 6.08647 10.7996 7.05882H7.93324ZM7.93324 7.94118H10.7951C10.7515 8.91176 10.5807 9.85853 10.2926 10.7515C9.53779 10.4951 8.74588 10.3513 7.93324 10.3116V7.94118ZM7.05088 7.94118V10.3125C6.28279 10.3509 5.53368 10.4863 4.81721 10.7188C4.53529 9.83559 4.36809 8.90029 4.32485 7.94118H7.05088ZM7.05088 7.05882H4.32044C4.35529 6.10059 4.51544 5.16221 4.79029 4.275C5.51559 4.51279 6.27397 4.64868 7.05088 4.68794V7.05882ZM14.0951 7.05882H11.6824C11.6471 5.95985 11.4649 4.8975 11.1454 3.89912C11.6034 3.68603 12.0441 3.43279 12.4646 3.13897C13.3985 4.20088 13.9959 5.56147 14.0951 7.05882ZM8.56412 0.976324C9.16235 1.68529 9.64941 2.50941 10.0182 3.40588C9.34985 3.63397 8.65059 3.76721 7.93324 3.80647V0.904412C8.14676 0.918088 8.35676 0.942353 8.56412 0.976324ZM7.05088 0.905294V3.80559C6.37632 3.76765 5.71809 3.64765 5.08721 3.4425C5.46132 2.52309 5.95853 1.67824 6.57221 0.955147C6.73015 0.933088 6.88941 0.915882 7.05088 0.905294ZM2.53588 3.13853C2.98809 3.45529 3.46324 3.72706 3.95912 3.94941C3.64985 4.93324 3.4725 5.97838 3.43765 7.05882H0.904412C1.00412 5.56103 1.60147 4.20044 2.53588 3.13853ZM0.904412 7.94118H3.44294C3.48706 9.0075 3.67456 10.0487 3.99265 11.0316C3.48441 11.2566 2.99912 11.5372 2.53588 11.8619C1.60147 10.7996 1.00412 9.43897 0.904412 7.94118ZM6.66574 14.0594C6.02735 13.3337 5.51118 12.4804 5.12162 11.5482C5.74191 11.3501 6.38779 11.2319 7.05088 11.1949V14.0951C6.92162 14.0863 6.79324 14.0753 6.66574 14.0594ZM7.93324 14.0956V11.194C8.63912 11.2324 9.32779 11.3594 9.98515 11.5804C9.60088 12.491 9.09441 13.3253 8.47147 14.0382C8.29412 14.0647 8.115 14.0841 7.93324 14.0956ZM12.9101 12.6856C14.2019 11.3382 15 9.51397 15 7.5C15 3.81485 12.3401 0.7575 8.83721 0.125735C8.83324 0.125294 8.82971 0.124412 8.82574 0.123971C8.39471 0.0472059 7.95309 0 7.5 0C3.35779 0 0 3.35779 0 7.5C0 9.52147 0.803382 11.3528 2.10397 12.7015C2.10882 12.7085 2.10971 12.7169 2.115 12.724C2.12735 12.7399 2.145 12.7482 2.15912 12.7619C3.51926 14.1424 5.40882 15 7.5 15C9.58191 15 11.4649 14.1507 12.8241 12.7804C12.8453 12.7619 12.8713 12.7509 12.8894 12.7275C12.8996 12.7147 12.9018 12.6993 12.9101 12.6856Z"
					fill="#BDC6CF" />
			</symbol>

			<symbol id="green-check" viewBox="0 0 16 11">
				<path fill-rule="evenodd" clip-rule="evenodd" d="M15.8621 0.780759L15.1957 0.13406C15.0117 -0.0446868 14.7134 -0.0446868 14.5294 0.13406L5.93323 8.47926C5.74923 8.65801 5.45088 8.65801 5.26688 8.47926L1.47116 4.79432C1.28716 4.61557 0.988342 4.61557 0.804815 4.79432L0.137998 5.44102C-0.0459995 5.61977 -0.0459995 5.90943 0.137998 6.08818L4.92195 10.7319C5.28947 11.089 5.8857 11.0894 6.25417 10.7329L15.8616 1.42837C16.0461 1.24963 16.0461 0.959506 15.8621 0.780759Z" />
			</symbol>

			<symbol id="select-arrow" viewBox="0 0 8 5">
				<path fill-rule="evenodd" clip-rule="evenodd"
					d="M7.9494 0.990181L4.00003 4.9509C4.21251 5.01637 3.7871 5.01637 4.00003 4.9509L0.0506592 0.990181C-0.123934 0.525346 0.140676 0 1.038 0H6.96206C7.85894 0 8.12411 0.525346 7.9494 0.990181Z"
					fill="#86939E" />
			</symbol>

		</defs>
	</svg>

	<!-- header start -->
	<header class="header clearfix">
		<div class="container">
			<!-- navbar menu start -->
			<nav class="navbar navbar-expand-md">
				<?php $logo = (get_field('logo', 'option'))?get_field('logo', 'option'):THEME_IMAGES.'new-logo.svg'; ?>
				<a class="navbar-brand" href="<?php echo site_url(); ?>">
					<img src="<?php echo $logo ?>" />
				</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
					aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</span>
				</button>

				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<?php
						wp_nav_menu( array(
							'fallback_cb' => 'custom_primary_menu_fallback',
							'menu' => 'Main manu',
							'container' => false,
							'menu_class'=>'navbar-nav',
							'add_li_class'  => 'nav-item',
							'theme_location' => 'top'
						) );

					?>

				</div>
			</nav>
			<!-- navbar menu end -->
		</div>
	</header>
	<!-- header end -->