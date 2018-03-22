<?php
/**
 * @package kickstart
 *
 * Partials top navigatopn
 */
$logo_id = get_theme_mod( 'custom_logo' );
$logo    = wp_get_attachment_image_src( $logo_id , 'full' );

if ( has_custom_logo() ) {
	$logodisplay = '<img src="'. esc_url( $logo[0] ) .'">';
} else {
	$logodisplay =  '<h1>'. get_bloginfo( 'name' ) .'</h1>';
}
?>

<nav class="navbar-nav navbar-dark bg-dark navbar-expand-md">
	<div class="container">
		<a href="/" title="<?php bloginfo('name'); ?>" class="navbar-brand">
			<?php echo $logodisplay; ?>
		</a>
		<button class="navbar-toggler border-0" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarTop" aria-expanded="false" aria-label="Toggle navigation">
			<i class="fas fa-ellipsis-h"></i>
		</button>
		<div class="collapse navbar-collapse" id="navbarTop">
    		<ul class="navbar-nav">
      			<li class="nav-item active">
        			<a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      			</li>
			</ul>
			 <form class="form-inline my-2 my-lg-0">
      			<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      			<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    		</form>
		</div>
	</div>
</nav>
