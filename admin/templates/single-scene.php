<?php
/*
Template Name: ThreeD Garden Scene
Template Post Type: scene
*/

get_header();
?>

<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />

<!-- Font Awesome Icons -->
<script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">

<main id="site-content" role="main">

	<!-- scene title
	<h1><a href="<?php get_permalink(); ?>">ThreeD Garden: Scene -- <?php the_title(); ?></a></h1> -->

	<!-- vite -->
	<script>
		(function() {
			const prefersDark = window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches
			const setting = localStorage.getItem('vueuse-color-scheme') || 'auto'
			if (setting === 'dark' || (prefersDark && setting !== 'light')) {
				console.log("document.documentElement", document.documentElement)
				document.documentElement.classList.toggle('dark', true)
				// document.querySelector("#app").classList.toggle('dark', true)
			}
		})()
	</script>
	<link rel="modulepreload" href="/wp-content/plugins/threed-garden/public/dist/assets/vendor.js">

	<!-- vue dapp -->
	<script>
    window.global = window
    let global = globalThis
	</script>
  <!-- 
	<script type="module">
    import process from 'process'
    window.process = process
	</script>
	<script type="module">
    import buffer from 'buffer'
    window.Buffer = buffer.Buffer
	</script>
	<script type="module">
    import util from 'util'
    window.util = util
	</script> 
  -->
	

	<!-- vue app -->
	<div id="app"></div>
	
	<?php

	if ( have_posts() ) {

		while ( have_posts() ) {
			the_post();

			get_template_part( 'template-parts/content', get_post_type() );
		}
	}

	?>

</main><!-- #site-content -->

<?php get_template_part( 'template-parts/footer-menus-widgets' ); ?>

<?php get_footer(); ?>
