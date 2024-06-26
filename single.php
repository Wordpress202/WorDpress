<?php


get_header('single');
?>


    <div class="blog">
        <div class="container">
        <?php if ( has_post_thumbnail() ) : ?>
               <img class="blog-item-imgs" src="<?php the_post_thumbnail_url(); ?>" alt="">       
                        <?php endif; ?>
                        <h2><?php  the_title();?></h2>
                        <div>
                            <?php
                            the_content();
                            ?>
                        </div>
        </div>
    </div>

   <div class="container">
    <H2>New Blog</H2>
            <div class="blog__inner">
            <?php
    $args = array(
    'post_type' => 'post',
    'posts_per_page' => -3, // To retrieve all posts, set it to -1
    'orderby' =>'rand'
     
);

$query = new WP_Query($args);

if ($query->have_posts()) {
    while ($query->have_posts()) {
        $query->the_post();?>

       
             <div class="blog__item">
             <?php if ( has_post_thumbnail() ) : ?>
                  <div class="blog-item-img" style="background-image: url(<?php the_post_thumbnail_url(); ?>);"></div>
             <?php endif; ?>
                   
                    <div class="blog-item-name">
                       <a class="name" href="<?php the_permalink();  ?>"> <h4><?php  the_title();?></h4></a>
                    </div>
                    <div class="blog-item-text">
                        <span> <?php  the_excerpt();?>
                        </span>
                   
        </div>
        <div class="btn">
            <a href="<?php the_permalink();  ?>"><input type="button" value="Нописать"></a>
        </div>
           
     </div>
        <?php
    }
    wp_reset_postdata();
} else {
    // No posts found
    echo 'No posts found';
}
?>




<?php


get_footer();
?>
