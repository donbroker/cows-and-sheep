<?php
/**
 * Template Name: Home Page
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package understrap
 */

get_header();
$container = get_theme_mod( 'understrap_container_type' );
?>

<div class="slider">
	<?php echo do_shortcode("[metaslider id=19]"); ?>
</div>

<div class="wrapper" id="full-width-page-wrapper">
	<div class="<?php echo esc_attr( $container ); ?>" id="content">
		<div class="row">
			<div class="col">
				<div class="search-container">
					<div class="row">
						<div class="col-sm-1">
							<img src="<?php echo site_url(); ?>/images/cows-and-sheep-magnifying-glass.png" />
						</div>   
						<div class="col">
							 <img src="<?php echo site_url(); ?>/images/cows-and-sheep-sheep-search-bg.png" />
						</div>
						<div class="col">
							<select id="county">
								<option selected="selected" value="armagh">Armagh</option>
								<option value="down">Down</option>
								<option value="tyrone">Tyrone</option>
							</select>
						</div>
						<div class="col">
							<input type="text" id="area" name="Area">
						</div>
						<div class="col">
							<select id="age">
								<option value="one">1</option>
								<option value="two">2</option>
								<option value="three">3</option>
								<option value="twentyone">21</option>
							</select>
						</div>
						<div class="col">
							<button id="myButton" class="float-left submit-button">SEARCH</button>
						</div> 
					<div>
					</div>	
				</div>
			</div>
		</div><!-- .row end -->
	</div><!-- Container end -->
</div><!-- Wrapper end -->

<?php get_footer(); ?>
