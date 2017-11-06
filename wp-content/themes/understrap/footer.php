<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

$the_theme = wp_get_theme();
$container = get_theme_mod( 'understrap_container_type' );
?>

<div class="container">
    <div class="row">
        <div class="col">
            <div class="footer">

            </div>  
        </div>
    <div>
</div>

<?php wp_footer(); ?>
</body>

</html>

