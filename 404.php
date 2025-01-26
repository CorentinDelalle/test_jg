<?php
/*
Template Name: error-404
*/

get_header();
?>

<main id="primary" class="site-main">

	<section class="error-404 not-found">
		<h1>Erreur 404
		</h1>
		<p>Oops ! On dirait que cette page n’existe pas !
</p>
<img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/illustration-404.webp'); ?>" alt="Image d'illustration d'erreur 404" class="img-404">
<p class="back-to-home">
	<a href="<?php echo home_url(); ?>" >Retour à l’accueil</a>
</p>
	</section>
</main>

<?php
get_footer();
