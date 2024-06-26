<?php


/*
Template Name:Shop
*/

get_header('single');
?>
    
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
      </div> 

   
          <?php    }
          }else{
            echo 'no repeater rows found.';
          }
          ?>


       
    </div>
  </div>
</section>
<section class="best__praducts">
  <div class="container">
   

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

<?php


get_footer();
?>



