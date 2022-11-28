<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<header class="entry-header alignwide">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		<?php twenty_twenty_one_post_thumbnail(); ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php
		the_content();
?>
		<div>1 : <?php echo get_field('name');?></div>
        <div>2 : <?php echo get_field('description');?></div>
        <div>3 : <?php echo the_field('are_you_married_');?></div>
        <div>4 : <?php 
$image = get_field('post_image');
if( !empty( $image ) ): ?>
    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
<?php endif; ?></div>
        <div>5 : <?php
$file = get_field('post_file');
if( $file ): ?>
    <a href="<?php echo $file['url']; ?>"><?php echo $file['filename']; ?></a>
<?php endif; ?></div>
        <div>6 : <?php echo get_field('news_editor');?></div>
        <div>7 : <?php echo get_field('news_dropdown');?></div>
        <div>8 : <?php
$featured_posts = get_field('news_post_object');
if( $featured_posts ): ?>
    <ul>
    <?php foreach( $featured_posts as $post ): 

        // Setup this post for WP functions (variable must be named $post).
        setup_postdata($post); ?>
        <li>
            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            <span>A custom field from this post: <?php the_field( 'field_name' ); ?></span>
        </li>
    <?php endforeach; ?>
    </ul>
    <?php 
    // Reset the global post object so that the rest of the page works correctly.
    wp_reset_postdata(); ?>
<?php endif; ?></div>

<div>9:<?php 
$terms = get_field('new_taxonomy');
if( $terms ): ?>
    <ul>
    <?php foreach( $terms as $term ): ?>
        <li>
            <h2><?php echo esc_html( $term->name ); ?></h2>
            <p><?php echo esc_html( $term->description ); ?></p>
            <a href="<?php echo esc_url( get_term_link( $term ) ); ?>">View all '<?php echo esc_html( $term->name ); ?>' posts</a>
        </li>
    <?php endforeach; ?>
    </ul>
<?php endif; ?></div>
		<?php
		wp_link_pages(
			array(
				'before'   => '<nav class="page-links" aria-label="' . esc_attr__( 'Page', 'twentytwentyone' ) . '">',
				'after'    => '</nav>',
				/* translators: %: Page number. */
				'pagelink' => esc_html__( 'Page %', 'twentytwentyone' ),
			)
		);
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer default-max-width">
		<?php twenty_twenty_one_entry_meta_footer(); ?>
	</footer><!-- .entry-footer -->

	<?php if ( ! is_singular( 'attachment' ) ) : ?>
		<?php get_template_part( 'template-parts/post/author-bio' ); ?>
	<?php endif; ?>

</article><!-- #post-<?php the_ID(); ?> -->
