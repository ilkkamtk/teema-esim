<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <?php wp_head(); ?>
</head>
<body>
<?php
if ( have_posts() ):
	while ( have_posts() ):
		the_post();
		?>
        <h1><?php the_title(); ?></h1>
        <article><?php the_content(); ?></article>
	<?php
	endwhile;
endif;
?>
</body>
</html>