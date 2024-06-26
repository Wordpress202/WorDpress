
<?php get_header(); ?>

<section class="banner">
    <div class="container">
        <div class="banner__inner">
          <div class="banner__left">
                <h1> <?php the_field("banner_name") ?></h1>
                <p> <?php the_field("banner_text") ?></p>
                    <div>
                        <a href="#"><?php the_field("baner_btn") ?></a>
                        <a href="#"><?php the_field("baner_button") ?></a>
                    </div>
          </div>
          
          <div class="banner__right">
             <img src="<?php the_field("banner_img") ?>" alt="">
          </div>
        </div>
    </div>
    <div class="container">
            <div class="blog__inner">
            <?php
    $args = array(
    'post_type' => 'post',
    'posts_per_page' => 3, 
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
                        <span class="data"><?php  echo get_the_date('l F j, Y')?></span>
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

               
            
        </div>
 </div>
               

  </section>
  <section class="section">
    <div class="container">
      <div class="section__inner">
        
        <?php  
          $repeater_section_pow = get_field('section_pow');
          if($repeater_section_pow){
            foreach($repeater_section_pow as $repeater_section_pow_row){
              $repeater_section_pow_field1_value = $repeater_section_pow_row["section_img"];
              $repeater_section_pow_field2_value = $repeater_section_pow_row["section_num"];
              $repeater_section_pow_field3_value = $repeater_section_pow_row["section_texts"];
              $repeater_section_pow_field4_value = $repeater_section_pow_row["sectiom_text_title"];

           ?>
        <div class="section__item" >   
    <div class="section__wrap" style="background-image: url(<?php echo $repeater_section_pow_field1_value?>);">

 <div class="section__title">
            <div>
           <i><?php echo $repeater_section_pow_field2_value?></i>
           <span><?php echo $repeater_section_pow_field3_value?></span>
           </div>
          </div>
          <div class="section__text">
          <?php echo $repeater_section_pow_field4_value?>
          </div>
        </div>
        </div>
 
   
          <?php    }
          }else{
            echo 'no repeater rows found.';
          }
          ?>


         

      </div>
      </div>
    
  </section>
  <section class="title__imgs" style="background-image: url(<?php the_field("title_back") ?>);">
    <div class="container">
      <div class="titles__name">
        <div>
          <div class="title__name">
      <h2><?php the_field("title_name") ?></h2>
      </div>
        <div class="title__text">
        <?php the_field("title_text") ?>
      </div>
      
      <div class="title__btn">
        <a href="#"><?php the_field("title_btn") ?></a>
      </div>
        </div>
      </div>

      </div>
   </section>
   <section class="search__section">
    <div class="search__inner">
        <div class="container">
          <div class="search__btn">
        <div>
          <a href="#"><?php the_field("btnsearch") ?></a>
        </div>
      </div>
        <div class="title__text__wrap">
        <h2><?php the_field("search_names") ?></h2>
      </div>
  </div>
  </div>
        </section>

        <section class="products">
  <div class="container">
    <div class="products__inner">
      
      <?php  
          $repeater_product_pov = get_field('product_pov');
          if($repeater_product_pov){
            foreach($repeater_product_pov as $repeater_product_pov_row){
              $repeater_product_pov_field1_value = $repeater_product_pov_row["products_img"];
              $repeater_product_pov_field2_value = $repeater_product_pov_row["product_text"];
              $repeater_product_pov_field3_value = $repeater_product_pov_row["product_buy"];
              $repeater_product_pov_field4_value = $repeater_product_pov_row["btn"];
            

           ?>
        
 <div class="product__item">
  <div class="product__item-wrap">
          <div class="product__item-img" style="background-image: url(<?php echo $repeater_product_pov_field1_value?>);">
            
          </div>
          <div class="product__item-info">
            <span><?php echo $repeater_product_pov_field2_value?></span>
                     <b><?php echo $repeater_product_pov_field3_value?></b>
          </div>
        </div>
        <div class="bttn">
  <button><?php echo $repeater_product_pov_field4_value?></button>
 </div>
      </div> 
 
   
          <?php    }
          }else{
            echo 'no repeater rows found.';
          }
          ?>



    </div>
   
  </div>
</section>

        
 <section class="about">
  <div class="container">
    <div class="about__inner">
    <div class="about__left">
      <h2><?php the_field("about_name") ?></h2>
        <p><?php the_field("about_text") ?></p>
            <a href="#"><?php the_field("about_btn") ?></a>
    </div>
    <div class="about__right">
      <img src="<?php the_field("about_imgs") ?>);">
    </div>
  </div>
</div>
</section>
  <section class="best__praducts">
  <div class="container">
    <div class="best__praducts-top">
      <div>
            <h2><?php the_field("best_name") ?></h2>
      </div>
      <div>
        <a href="#"><?php the_field("best_btn") ?></a>
      </div>
    </div>  

 <div  class="porducts_left">
  <div class="best__praducts-main">
   

      <?php  
      $repeater_best_pav = get_field('best_pav');
      if($repeater_best_pav){
        foreach($repeater_best_pav as $repeater_best_pav_row){
          $repeater_best_pav_field1_value = $repeater_best_pav_row["best_pav_img"];
          $repeater_best_pav_field2_value = $repeater_best_pav_row["best_pov_name"];
          $repeater_best_pav_field3_value = $repeater_best_pav_row["best_pov_text"];
          $repeater_best_pav_field4_value = $repeater_best_pav_row["best_pow_text"];
      

       ?>
       
    <div class="best__praducts-item">
      <div class="best__praducts-info">
      <div class="best__praducts-img" style="background-image: url(<?php echo $repeater_best_pav_field1_value?>);"></div>
      

    
 <div class="best__praducts-rating">
        <span><?php echo $repeater_best_pav_field2_value?></span>
      </div>
      <div class="best__praducts-title">
      
      </div>
      <div class="best__praducts-price">
        <b><?php echo $repeater_best_pav_field4_value?></b>
        
      </div>
 <div class="or">
 <span><?php echo $repeater_best_pav_field3_value?></span>
 </div>
    
 <div class="btn">
  <button>Add Cart</button>
 </div>

       </div>  
 </div>       
      <?php    }
      }else{
        echo 'no repeater rows found.';
      }
      ?> 


      </div>
 </div>
 

 </div>    
    </div>
    </section>
<section class="review">
<div class="container">
    <div class="review__head">
      <a href="#" class="review__btn"><?php the_field("slider_btn") ?></a>
      <h2><?php the_field("slider_name") ?></h2>
    </div>
   
      <div class="swiper " id="slider1">
  <!-- Additional required wrapper -->
  <div class="swiper-wrapper">
    <!-- Slides -->
 
    <?php  
      $repeater_list = get_field('list');
      if($repeater_list){
        foreach($repeater_list as $repeater_list_row){
          $repeater_list_field1_value = $repeater_list_row["review_text"];
          $repeater_list_field2_value = $repeater_list_row["review_imgs"];
          $repeater_list_field3_value = $repeater_list_row["review_name"];
      ?>
       
   <div class="swiper-slide">
      <div class="review__item">
        <p><?php echo $repeater_list_field1_value?></p>
    
      
          <div class="rewiew__img" >
          <img src ="<?php echo $repeater_list_field2_value?>"> 
        </div>
       <div class="review__user">
                <span><?php echo $repeater_list_field3_value?></span>
     </div>
        </div>
    </div>


    
 

      <?php    }
      }else{
        echo 'no repeater rows found.';
      }
      ?> 

</div>
<div class="swiper-button-prev"></div>
  <div class="swiper-button-next"></div>
       </div>  
 </div>       
  
    
</section>



<section class="mapAndForm">
  <div class="container">
    <div class="mapAndForm__inner">
      <div class="mapAndForm__map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15952.596011755124!2d-78.67528946101106!3d-1.6574699913135817!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x91d30727e108f8d9%3A0x1e258da19d1630cb!2sCOFFEE%20AMERICANO%20-%20CREP&#39;S%20%26%20PIZZA!5e0!3m2!1sru!2sam!4v1698447890465!5m2!1sru!2sam" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></div>
      <div class="mapAndForm__form">
        <span><?php the_field("coffine_title") ?></span>
        <h2><?php the_field("coffina_name") ?></h2>
        <div>
        <?php
           echo do_shortcode( '[contact-form-7 id="9eda827" title="Контактная форма 1"]' );
      ?>
        </div>
        </div>
      
    </div>
  </div>
  </div>

</section>

<section class="box">
  <div class="container">
    <div class="box__btn">
      <a href="#">FROM OUR BLOG</a>
    </div>
    <div class="box__title">
      <h2>OUR NEWS & ARTICLES</h2>
    </div>
  </div>

</section>
<section class="cofine">

  <div class="container">
    <div class="cofine__inner">

          <div class="coffine">

        
             <?php                
            
                 $repeater_coffinalist = get_field('coffinalist');
    
                 if ($repeater_coffinalist) {
                   
                     foreach ($repeater_coffinalist as $repeater_coffinalist_row) {
                        
                          $repeater_coffinalist_field1_value = $repeater_coffinalist_row['coffina_img'];
                          $repeater_coffinalist_field2_value = $repeater_coffinalist_row['coffina_text'];
                          $repeater_coffinalist_field3_value = $repeater_coffinalist_row['coffina_name'];
                          $repeater_coffinalist_field4_value = $repeater_coffinalist_row['coffina_btn'];
                         
                 
                         ?>
    
    <div class="cofine__img" >
       <img src="<?php echo $repeater_coffinalist_field1_value?>" >
    
    <div class="cofine__border">
       <div class="cofine__title">
        <span><b>BY:</b><?php echo $repeater_coffinalist_field2_value?></span>
       </div>
       <div class="cofine__name">
        <a href="#"><?php echo $repeater_coffinalist_field3_value?></a>
       </div>
       <div class="cofine__body">
        <a href="#"><?php echo $repeater_coffinalist_field4_value?></a>
       </div>
    </div>
</div>
    
                         <?php }
                 } else {
                 echo 'No repeater rows found.';
                 }
    
                 ?>
    
        </div>
    </div>
    </div>
    </div>
      </div>

  
</section>
<?php get_footer(); ?>