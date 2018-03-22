<?php
/**
 * @package kickstart
 *
 * Theme's header file.
 */
?>
<!doctype html>
<html lang="id">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="google" content="notranslate" />
    <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
    <?php get_template_part('parts/head', 'icons'); ?>
		<?php wp_head(); ?>
  </head>
  <body class="background-pattern">
	<?php get_template_part('parts/navigation', 'top'); ?>



