<?php 
/**
 * Template Name: News Page */
 get_header();
  $args = array(  
        'category' => 'news',
        'post_status' => 'publish',
        'posts_per_page' => 8, 
        'orderby' => 'title', 
        'order' => 'ASC', 
    );

    $loop = new WP_Query( $args ); 
?>
<div class="container-fluid product_page_header">
            <div class="row">
                <div class="col-12 p-0 d-flex justify-content-center align-items-center news_header_block">
                    <div class="text-center fixed_wrapper-4">
                        <h1 class="h_product">News</h1><br/>
                        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. </p>
                    </div>
                </div>
            </div>
        </div>      
<div class="home_news news_page">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h3 class="welcome_header text-center">News</h3>
                    </div>
                    <div class="fixed_wrapper-2">
                        <div class="row">
                            <div class="col-6">
                                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata</p>
                            </div>
                            <div class="col-6">
                                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata</p>
                            </div>
                        </div>
                    </div>
                    <div class="row buttons_group">
                        <div class="col-12 d-flex justify-content-center">
                            <button type="button" class="btn btn-primary custom_button-1 long_button one_button selected">Alle</button>
                            <button type="button" class="btn btn-primary custom_button-1 long_button one_button">Messetermine</button>
                            <button type="button" class="btn btn-primary custom_button-1 long_button one_button">Referenzprojekte</button>
                            <button type="button" class="btn btn-primary custom_button-1 long_button one_button">Power2Heat</button>
                           
                        </div>
                    </div>
                    <div class="row news_wrapper">
                      <?php
					while ($loop->have_posts() ) : $loop->the_post(); 
							$post_id = get_the_ID();
							//echo"------------".get_the_post_thumbnail($post_id);
						//	the_excerpt(); 

					  ?> 
                        <div class="col-3 text-center one_news">
                            <div class="news_subwrap">
                                <img src="img/home_news_example.png" alt="" class="news_img">
                                <div class="internal_padding-0">
                                    <time datetime="01.01.22" class=" news_date"><?php echo get_the_date();?></time>
                                    <h4 class="news_header"><?php echo the_title();?></h4>
                                    <div class="news_text ">
                                        <p> <?php echo wp_trim_words( get_the_content(), 40, '...' );; ?></p>
                                    </div>
                                    <a href="<?php echo get_permalink($post_id);?>" class="btn btn-primary d-table custom_button-4">weiterlesen</a>
                                </div>
                            </div>
                        </div>
                   <?php
					endwhile;
    				wp_reset_postdata();
				   ?>   
                    </div>
                       
                </div>
            </div>
            <div class="call_me d-flex align-items-center justify-content-center">
                <div class="call_me_internal_wrapper d-flex flex-column text-center text-uppercase justify-content-center align-items-center">
                    <img src="img/ask_about_call_button.png" alt="" class="img_call_me">
                    <button type="button" class="btn btn-primary text_call_me" data-bs-toggle="modal" data-bs-target="#modal_r_a">
                        Rückruck anfragen
                    </button>
                </div>
            </div>
        </div>
<?php

get_footer();
