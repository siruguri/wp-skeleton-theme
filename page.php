// This opens the wrapper div

<?php get_header(); ?>

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
// Content goes in here

<?php endwhile; else: ?>
// What to do when there are no posts
<?php endif; ?>


// This happens all the time.

// Sidebars are good and healthy. Let's have one of them ... 
<?php get_sidebar(); ?>

// So are footers, right?

// This closes the wrapper div
<?php get_footer(); ?>

// And you could have many!
// <?php get_sidebar( 'left' ); ?>
// <?php get_sidebar( 'right' ); ?>
// <?php get_sidebar( 'somewhere-else' ); // This would the file sidebar-somewhere-else.php ?>


</body>
</html>