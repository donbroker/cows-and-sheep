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

<script type="text/javascript">
	document.getElementById("myButton").onclick = function () {
        var url = Searchify({
		    post_type: 'cows_and_sheep',
		    cow_or_sheep: 'sheep',
		    county: document.getElementById('county').value,
		    area: document.getElementById('area').value,
		    age: document.getElementById('age').value
	    });
       	location.href = url;
   	};
</script>

<?php wp_footer(); ?>
</body>

</html>

