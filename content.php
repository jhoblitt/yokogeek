<?php
/**
 * @package WordPress
 * @subpackage Yoko
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

<!--
This box is to the left of post content and uses up a lot of space.  We're
removing it and copying the apperance of a single post page
(yoko:content-single.php).

	<div class="entry-details">
		<?php if ( has_post_thumbnail() ): ?>
		<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('thumbnail'); ?></a>
		<?php endif; ?>
		<p><?php echo get_the_date(); ?><br/>
		<?php _e( 'by', 'yoko' ); ?> <?php the_author() ?><br/>
		<?php comments_popup_link( __( '0 comments', 'yoko' ), __( '1 Comment', 'yoko' ), __( '% Comments', 'yoko' ) ); ?></p>
	</div>
-->

<!--
Taken verbatim from yoko:content-single.php
-->
        <?php if ( has_post_thumbnail()) : ?>
                <div class="single-entry-details">
                        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('thumbnail'); ?></a>
                </div><!-- end single-entry-details -->
                <?php endif; ?>


<!-- end entry-details -->
    
<!--
head class changed from entry-header to single-entry-header
<h2> changed to <h1>
-->
	<header class="single-entry-header">
			<h1 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'yoko' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h1>

<!--
Taken verbatim from yoko:content-single.php
-->

<p><span class="entry-date"><?php echo get_the_date(); ?></span> <span class="entry-author"><?php _e( 'by', 'yoko' ); ?> <?php the_author() ?></span> <?php if ( comments_open() ) : ?> | <?php comments_popup_link( __( '0 comments', 'yoko' ), __( '1 Comment', 'yoko' ), __( '% Comments', 'yoko' ) ); ?><?php endif; ?></p>

	</header><!-- end entry-header -->
        
<!--
div class changed from entry-content to single-entry-content
-->
	<div class="single-entry-content">
		<?php if ( is_archive() || is_search() ) : // Only display excerpts for archives and search. ?>
			<?php the_excerpt(); ?>			
		<?php else : ?>
			<?php the_content( __( 'Continue Reading &rarr;', 'yoko' ) ); ?>		
			<?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'yoko' ), 'after' => '</div>' ) ); ?>					
		<?php endif; ?>
		
		<footer class="entry-meta">
			<p><?php if ( count( get_the_category() ) ) : ?>
			<?php printf( __( 'Categories: %2$s', 'yoko' ), 'entry-utility-prep entry-utility-prep-cat-links', get_the_category_list( ', ' ) ); ?> | 
			<?php endif; ?>
			<?php $tags_list = get_the_tag_list( '', ', ' ); 
			if ( $tags_list ): ?>
			<?php printf( __( 'Tags: %2$s', 'yoko' ), 'entry-utility-prep entry-utility-prep-tag-links', $tags_list ); ?> | 
			<?php endif; ?>
			<a href="<?php echo get_permalink(); ?>"><?php _e( 'Permalink ', 'yoko' ); ?></a>
			<?php edit_post_link( __( 'Edit &rarr;', 'yoko' ), '| <span class="edit-link">', '</span>' ); ?></p>
	</footer><!-- end entry-meta -->
	</div><!-- end entry-content -->
			
</article><!-- end post-<?php the_ID(); ?> -->
