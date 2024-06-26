<?php

/*
Template Name:Contact
*/

get_header('single');
?>
    


<section class="contact">
  <div class="container">
    
    <div class="contact__inner">
    
      <?php  
          $repeater_contact = get_field('contact');
          if($repeater_contact){
            foreach($repeater_contact as $repeater_contact_row){
              $repeater_contact_field1_value = $repeater_contact_row["contact_img"];
              $repeater_contact_field2_value = $repeater_contact_row["contact_us"];
             
            

           ?>
        
 <div class="contact__item">
  <div class="contact__item-wrap">
     <div class="contact__item-img" >
            <img src="<?php echo $repeater_contact_field1_value?>">
          </div>
          <div class="contact__item-info">
            
                     <p><?php echo $repeater_contact_field2_value?></p>
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


<?php


get_footer();
?>

