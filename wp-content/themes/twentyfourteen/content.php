<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?>

<li><a href="<?php the_permalink();?>"><?php the_post_thumbnail();?></a><span>
<?php the_title();?></span></li>