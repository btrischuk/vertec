<?php

/** Template Name: clients */ 


get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<div class="hero">
				<img class= "about-home" src= '<?php echo CFS()->get( 'about_hero_image' );	?>'>

		<?php if ( have_posts() ) : ?>

			<?php if ( is_home() && ! is_front_page() ) : ?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>
			<?php endif; ?>

			
			<div class="about-paragraph-container">
				<p class="about-paragraph">
					I am a Front End Developer with a strong focus on WordPress, JavaScript, PHP, Html5, Css3, Sass, JQuery, and  Responsive Designed web pages.
				</p>

				<p class="about-paragraph">
				Saskatchewan-rockclimber. Everyone I ever tell seems to have a completely different perspective of what that entails.  You can just image the misconceptions that description of myself brings. Instead of directly clarifying this, I feed my very sarcastic humor with various comments. This gives me great joy.  Living the lifestyle of a rock climber requires a high level of creativity and psych when one finds himself born in the prairies, home of one lonely climbable rock within a 500km range. Needless to say I now find myself living amongst the mountains.
				</p>

				<p class="about-paragraph">
					I  am very grateful for this foundation as it has taught me a great deal regarding how to pursue a goal in the face of intimidation, lack of resources, and many hurdles. I am able to transfer this determined mindset into the world of programming. 
				</p>

				<p class="about-paragraph">
					My passion for software development continues to grow and take a greater bite out of my passion-pie-chart. 
				</p>
			</div>

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content' ); ?>

			<?php endwhile; ?>

			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>


