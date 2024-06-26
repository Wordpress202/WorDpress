<?php
get_header('single'); // Include the header

if (have_posts()) : ?>
    <header class="page-header">
        <h1 class="page-title"><?php post_type_archive_title(); ?></h1>
    </header><!-- .page-header -->
    
  
        <?php while (have_posts()) : the_post(); ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <header class="entry-header">
                    <h2 class="entry-title">
                        <a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a>
                    </h2>
                </header><!-- .entry-header -->

                <?php if (has_post_thumbnail()) : ?>
                    <div class="entry-thumbnail">
                        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
                    </div>
                <?php endif; ?>

                <div class="entry-summary">
                    <?php the_excerpt(); ?>
                </div><!-- .entry-summary -->
            </article><!-- #post-## -->
        <?php endwhile; ?>

        <div class="pagination">
    
        </div><!-- .pagination -->

        
<?php else : ?>
    <p><?php _e('Sorry, no movies found.', 'text_domain'); ?></p>
<?php endif;

get_footer(); // Include the footer

?>