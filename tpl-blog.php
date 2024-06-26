<?php

/*
Template Name:Blog
*/

get_header('');
?>
<div class="container">
            <div class="blog__inner">
            <?php
    $args = array(
    'post_type' => 'post',
    'posts_per_page' => -1, 
    'category_name'=>''
     
);

$query = new WP_Query($args);

if ($query->have_posts()) {
    while ($query->have_posts()) {
        $query->the_post();?>

       
             <div class="blog__item">
             <?php if ( has_post_thumbnail() ) : ?>
                  <div class="blog-item-img" style="background-image: url(<?php the_post_thumbnail_url(); ?>);"></div>
             <?php endif; ?>
                   <div></div>
                    <div class="blog-item-name">
                       <a class="name" href="<?php the_permalink();  ?>"> <h4><?php  the_title();?></h4></a>
                        <span class="data"><?php  echo get_the_date('l F j, Y')?></span>
                    </div>
                    <div class="blog-item-text">
                        <span> <?php  the_excerpt();?>
                        </span>
                   
        </div>
        <div class="btn">
            <a href="<?php the_permalink();  ?>"><input type="button" value="Нописать"></a>
        </div>
  
        <?php
    }
    wp_reset_postdata();
} else {
    // No posts found
    echo 'No posts found';
}
?>

               
                  
     </div>   
        </div>
 </div>
</div>

<?php


get_footer();
?>

