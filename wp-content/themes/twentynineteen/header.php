<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */
?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="profile" href="https://gmpg.org/xfn/11" />
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">

	<!-- Jeev: Site borders -->
	<div id="site-border-left"></div>
	<div id="site-border-right"></div>
	<div id="site-border-top"></div>
	<div id="site-border-bottom"></div>
	
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'twentynineteen' ); ?></a>
	
	<!-- Jeev: Nav menu + Mobile Menu -->
	<header>
		<nav class="navbar  navbar-fixed-top navbar-default">
			<div class="container">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				</button>

			<div class="collapse navbar-collapse" id="navbar-collapse">
				<ul class="nav navbar-nav ">
				<li><a href="https://rajeevdigital.uk/index.html" title="">01 : Home</a></li>
				<!-- <li><a href="https://rajeevdigital.uk/my_work.html" title="">02 : My Work</a></li> -->
				<li><a href="/blog/" title="" style="font-weight: 700;">02 : Blog</a></li>
				<li><a href="https://rajeevdigital.uk/about.html" title="">03 : About me</a></li>
				<li><a href="https://rajeevdigital.uk/contact.html" title="">04 : Contact</a></li>
				</ul>


			</div> 
			</div>
		</nav>
	</header>
		
			<!-- <div class="logo">
				<img src="assets/images/R-Web_3.png" alt="Rajev Digital Logo" class="rajeev-digital-logo">  
			</div> -->

			<div class="site-branding-container container">
				<?php get_template_part( 'template-parts/header/site', 'branding' ); ?>
			</div><!-- .layout-wrap -->

			<?php if ( is_singular() && twentynineteen_can_show_post_thumbnail() ) : ?>
				<div class="site-featured-image">
					<?php
						twentynineteen_post_thumbnail();
						the_post();
						$discussion = ! is_page() && twentynineteen_can_show_post_thumbnail() ? twentynineteen_get_discussion_data() : null;

						$classes = 'entry-header';
					if ( ! empty( $discussion ) && absint( $discussion->responses ) > 0 ) {
						$classes = 'entry-header has-discussion';
					}
					?>
					<div class="<?php echo $classes; ?>">
						<?php get_template_part( 'template-parts/header/entry', 'header' ); ?>
					</div><!-- .entry-header -->
					<?php rewind_posts(); ?>
				</div>
			<?php endif; ?>
		</header><!-- #masthead -->

	<div id="content" class="site-content container"> <!--Jeev: Added container to align content -->
