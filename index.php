<?php

get_header('single');
?>


<div class="products">
        <div class="container">
       
            <h2><?php the_title(); ?></h2>
            <div>
                 <?php
                the_content();
                ?>

            </div>
        </div>
</div>


<?php
get_footer();

?>