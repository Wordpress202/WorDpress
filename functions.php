<?php
// Register Custom Menus
function register_custom_menus() {
    // Define locations for custom menus
    $locations = array(
        'primary_menu' => __( 'Primary Menu', 'text_domain' ),
        'footer_menu' => __( 'Footer Menu', 'text_domain' ),
        // Add more menu locations if needed
    );
    register_nav_menus( $locations );
}
add_action( 'init', 'register_custom_menus' );


add_action('acf/init', 'my_acf_op_init');
function my_acf_op_init() {

    // Check function exists.
    if( function_exists('acf_add_options_page') ) {

        // Register options page.
        $option_page = acf_add_options_page(array(
            'page_title'    => ('Theme General Settings'),
            'menu_title'    => ('Theme Settings'),
            'menu_slug'     => 'theme-general-settings',
            'capability'    => 'edit_posts',
            'redirect'      => false
        ));
    }
}
//local host img 
add_theme_support( 'post-thumbnails' );



// Define a shortcode function
function hello_shortcode() {
    return 'Hello, welcome to our website!';
}

// Register the shortcode
add_shortcode('hello', 'hello_shortcode');



function info_shortcode($atts) {
    // Extract shortcode attributes
    $atts = shortcode_atts(
        array(
            'title' => 'title',     // Default name
            'text' => 'text', // Default salutation
             'img' => 'img',  // Default message
              'button' => 'button',
              'button1' => 'button1',
              
        ),
        $atts,
        'info'
    );

    // Get the values of the attributes
    $title = esc_attr($atts['title']);
    $text = esc_attr($atts['text']);
    $button = esc_attr($atts['button']);
    $button1 = esc_attr($atts['button1']);
   
    $img = esc_attr($atts['img']);
   

    // Return the HTML block code directly
    return "
        

        
        <div class='banner__inner'>
          <div class='banner__left'>
                <h1> $title</h1>
                <p> $text</p>
                <div>
                <a href='' class='banner_btn'>$button</a>
                <a href='' class='banner_btn'>$button1 </a>
             </div>
          </div>
          
          <div class='banner__right'>
             <img src='$img' >
          </div>
        </div>

    ";
}

// Register the shortcode
add_shortcode('news', 'news_shortcode');

function news_shortcode($atts) {
    // Extract shortcode attributes
    $atts = shortcode_atts(
        array(
            'title' => 'title',    
            'text' => 'text',
             'img' => 'img',  
              'button' => 'button',
              'button1' => 'button1',
              
        ),
        $atts,
        'news'
    );

    // Get the values of the attributes
    $title = esc_attr($atts['title']);
    $text = esc_attr($atts['text']);
    $button = esc_attr($atts['button']);
    $button1 = esc_attr($atts['button1']);

   
    $img = esc_attr($atts['img']);
   

    // Return the HTML block code directly
    return "
    <section class='banner'>
    <div class='container'>
        <div class='banner__inner'>
            <div class='banner__left'>
                <h1>
                $title
                </h1>
                <p>
                $text
                </p>
                <div>
                    <a href='#'>$button</a>
                    <a href='#'>$button1</a>
                </div>
            </div>

            <div class='banner__right'>
                <img src='$img' />
            </div>
        </div>
    </div>
   
        
    </div>
</section>


        
       

    ";
}

// Register the shortcode
add_shortcode('news', 'news_shortcode');




function pro_shortcode($atts) {
    // Extract shortcode attributes
    $atts = shortcode_atts(
        array(
            'title' => 'title',    
            'text' => 'text',
             'img' => 'img',  
              'button' => 'button',
              
        ),
        $atts,
        'pro'
    );

    // Get the values of the attributes
    $title = esc_attr($atts['title']);
    $text = esc_attr($atts['text']);
    $button = esc_attr($atts['button']);
    $img = esc_attr($atts['img']);
   

    // Return the HTML block code directly
    return "
    <section class='title__imgs' style='background-image: url($img);'>
    <div class='container'>
      <div class='titles__name'>
        <div>
          <div class='title__name'>
      <h2>$title</h2>
      </div>
        <div class='title__text'>
       <p> $text</p>
       
       </div>
      
      <div class='title__btn'>
        <a href='#'>$button</a>
      </div>
        </div>
      </div>

      </div>
   </section>


            </div>
        </div>
    </div>
   
        
    </div>
</section>


        
       

    ";
}

// Register the shortcode
add_shortcode('pro', 'pro_shortcode');

