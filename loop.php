<?php if ( ! have_posts() ) : ?>
	<h1><?php _e( 'Not Found', 'wp-skeleton' ); ?></h1>
	<p><?php _e( 'Apologies, but no results were found for the requested archive. Perhaps searching will help find a related post.', 'wp-skeleton' ); ?></p>
	<?php get_search_form(); ?>
<?php endif; ?>

<?php while ( have_posts() ) : the_post(); ?>

  <article>
   <post><div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
      <h4><a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'wp-skeleton' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h4>

      <p>
    	  <?php if ( is_archive() || is_search() ) : // Only display excerpts for archives and search. ?>
      		<?php the_excerpt(); ?>
      	<?php else : ?>
      		<?php the_content( __( 'Continue reading &rarr;', 'wp-skeleton' ) ); ?>
          <div style="clear:both;"></div>
      		<?php wp_link_pages( array( 'before' => '' . __( 'Pages:', 'wp-skeleton' ), 'after' => '' ) ); ?>
          <?php edit_post_link( __( 'Edit', 'wp-skeleton' ), '<p class="edit-post">', '</p>' ); ?>
      	<?php endif; ?>

    	</p>

    	<?php comments_template( '', true ); ?>
   </div></post>

    <side>
       <div id="circle"><div><?php comments_popup_link( '0','1', '%', '', 'off' ); ?></div></div>

       <date><?php the_date(get_option( 'date_format' )); ?></date>

         <list>
       <?php if ( count( get_the_category() ) ) : ?>
	   <?php printf( __( '%s', 'wp-skeleton' ), get_the_category_list( ', ' ) ); ?>
       <?php endif; ?>
         </list>
	
	   <list>
	 <?php $tags_list = get_the_tag_list( '', ', ' ); if ( $tags_list ): ?>
	 <?php printf( __( '%2$s', 'wp-skeleton' ), $tags_list ); ?>
	 <?php endif; ?>
	   </list>

	   </side>

	   </article>

<?php endwhile; ?>

