<?php 
/* Template Name: Home */
get_header();
?>

      <!-- SLIDER START -->
      <section>
         <div class="owl-carousel hero-banner">
            <div class="item">
               <div class="bg-img">
                  <div class="container">
                     <div class="row">
                        <div class="col-lg-6">
                           <h1>Admission Going On 2021</h1>
                           <p>Join #1 Distance Education Center & Professional Course in Chandigarh TriCity</p>
                           <button class="orange-btn">Contact Us</button>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="item">
               <div class="bg-img">
                  <div class="container">
                     <div class="row">
                        <div class="col-lg-6">
                            <h1>Admission Going On 2021</h1>
                           <p>Join #1 Distance Education Center & Professional Course in Chandigarh TriCity</p>
                           <button class="orange-btn">Contact Us</button>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="item">
               <div class="bg-img">
                  <div class="container">
                     <div class="row">
                        <div class="col-lg-6">
                           <h1>Admission Going On 2021</h1>
                           <p>Join #1 Distance Education Center & Professional Course in Chandigarh TriCity</p>
                           <button class="orange-btn">Contact Us</button>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- SLIDER END -->
      <!-- DISTANCE EDUCATION  START -->
      <section>
         <div class="bg-blue distance-edu">
            <div class="container">
               <div class="col-md-10 m-auto">
                  <div class="row">
                     <div class="col-md-7">
                        <div class="left-text">
                           <p>Aﬀordable Quality Education with</p>
                           <h2>DISTANCE EDUCATION PROGRAMMES</h2>
                        </div>
                     </div>
                     <div class="col-md-5">
                        <div class="text-right">
                           <div class="right-btns">
                              <div>
                                 <a href="https://www.royalcareer.in/contact-us/" class="white-btn">CONTACT US</a>
                              </div>
                              <div> <a class="popmake-225 orange-btn" id="request_callback_1"><span class="req-icon"><i class="fa fa-phone" aria-hidden="true"></i></span>Request for call back</a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         </div>
      </section>
      <!-- DISTANCE EDUCATION  END -->
    <!-- ACHIEVEMENTS START -->
      <section>
          
         <div class="ranking achivements">
                <?php
            $args = array(  
        'post_type' => 'achievement',
        'post_status' => 'publish',
        'posts_per_page' => -1, 
        'orderby' => 'title', 
        'order' => 'ASC',
    );
     $loop = new WP_Query( $args ); 
          ?>
			 <div class="announcements">
               <h1 class="text-center">OUR COURCES</h1>
               <img class="seaker-img" src="http://www.royalcareer.in/wp-content/uploads/2021/05/Education_Cap.png" align="images">
            </div>
            <div class="heading" style="padding-bottom: 40px;">
               <h1><?php echo get_post_meta(6, 'achievements_title_title', true); ?></h1>
               <p><?php echo get_post_meta(6, 'achievements_title_description', true); ?></p>
            </div>
            <div class="container-fluid">
               <div class="row">
                   <?php  while ( $loop->have_posts() ) : $loop->the_post();  ?>
                  <div class="col-md-3">
                     <div class="rank-content">
                        <div class="rank-img">
                            <?php the_post_thumbnail('null'); ?>
                        </div>
                        <div class="rank-text courses_box">
                           <h3><?php the_title(); ?></h3>
                           <p><?php  the_excerpt(); ?></p>
                        </div>
                     </div>
                  </div>
                  <?php endwhile; ?>
            
               </div>
             
            </div>
              <?php wp_reset_postdata(); ?>
         </div>
      </section>
      <!-- ACHIEVEMENTS END -->
      <!-- ANNOUNCEMENTS  START-->
      <section>
         <div class="container">
            <div class="announcements">
               <h1 class="text-center">ANNOUNCEMENTS</h1>
               <img class="seaker-img" src="<?php echo get_bloginfo('template_url'); ?>/images/speaker.png" align="images">
            </div>
         </div>
      </section>
      <!-- ANNOUNCEMENTS  END-->
      <!-- RANKINGS & AWARDS START -->
      <section>
         <div class="ranking">
             <?php   $args = array(  
        'post_type' => 'post',
    'post_status' => 'publish',
    'category_name' => 'RANKINGS & AWARDS',
    );

    $loop = new WP_Query( $args ); 
   ?>
            <div class="heading">
               <h1>RANKINGS & AWARDS</h1>
               <p>Contrary to popular belief, Lorem Ipsum is not simply random text.</p>
            </div>
            <div class="container-fluid">
               <div class="row">
                   <?php while ( $loop->have_posts() ) : $loop->the_post();  ?>
                  <div class="col-md-3">
                     <div class="rank-content award_div">
                        <div class="rank-img">
						<?php 
						/*	 $rank_1= get_post_meta(6, 'announcements_1_image', true);
					  		 $rank_1_img = wp_get_attachment_image_src($rank_1, 'full');*/
							 
							?>
                          <?php the_post_thumbnail('null'); ?>
                        </div>
                        <div class="rank-text">
                           <h3><?php the_title(); ?></h3>
                           <p><?php the_excerpt(); ?></p>
                        </div>
                     </div>
                  </div>
                  <?php  endwhile; ?>

               </div>
            </div>
            <?php   wp_reset_postdata();?>
         </div>
      </section>
      <!-- RANKINGS & AWARDS END -->
      <!-- OUR UNIVERSITY NUMBERS  START-->
      <section>
         <div class="university-numbers">
            <div class="heading">
               <h1><?php echo get_post_meta(6, 'our_university_numbers_title', true); ?></h1>
            </div>
            <div class="university-bg">
               <div class="container-fluid">
                  <div class="row">
                     <div class="col-md-3">
                        <div class="un-numbers">
                           <h4><?php echo get_post_meta(6, 'university_block_1_title', true); ?></h4>
                           <p><?php echo get_post_meta(6, 'university_block_1_content', true); ?> </p>
                        </div>
                     </div>
                     <div class="col-md-3">
                        <div class="un-numbers">
                           <h4><?php echo get_post_meta(6, 'university_block_1_title-1', true); ?></h4>
                           <p><?php echo get_post_meta(6, 'university_block_1_content_1', true); ?> </p>
                        </div>
                     </div>
                     <div class="col-md-3">
                        <div class="un-numbers">
                           <h4><?php echo get_post_meta(6, 'university_block_1_title_2', true); ?></h4>
                           <p><?php echo get_post_meta(6, 'university_block_1_content_2', true); ?> </p>
                        </div>
                     </div>
                     <div class="col-md-3">
                        <div class="un-numbers">
                           <h4><?php echo get_post_meta(6, 'university_block_1_title_3', true); ?></h4>
                           <p><?php echo get_post_meta(6, 'university_block_1_content_3', true); ?> </p>
                        </div>
                     </div>
                     <div class="col-md-3">
                        <div class="un-numbers">
                          <h4><?php echo get_post_meta(6, 'university_block_1_title_4', true); ?></h4>
                           <p><?php echo get_post_meta(6, 'university_block_1_content_4', true); ?> </p>
                        </div>
                     </div>
                     <div class="col-md-3">
                        <div class="un-numbers">
                           <h4><?php echo get_post_meta(6, 'university_block_1_title_5', true); ?></h4>
                           <p><?php echo get_post_meta(6, 'university_block_1_content_5', true); ?> </p>
                        </div>
                     </div>
                     <div class="col-md-3">
                        <div class="un-numbers">
                            <h4><?php echo get_post_meta(6, 'university_block_1_title_6', true); ?></h4>
                           <p><?php echo get_post_meta(6, 'university_block_1_content_6', true); ?> </p>
                        </div>
                     </div>
                     <div class="col-md-3">
                        <div class="un-numbers">
                           <h4><?php echo get_post_meta(6, 'university_block_1_title_7', true); ?></h4>
                           <p><?php echo get_post_meta(6, 'university_block_1_content_7', true); ?> </p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- OUR UNIVERSITY NUMBERS END -->
      <!-- VIBRANT LPUDE EXPERIENCE START -->
      <section>
               <?php   $args = array(  
        'post_type' => 'post',
    'post_status' => 'publish',
    'category_name' => 'VIBRANT LPUDE EXPERIENCE',
    );

    $loop = new WP_Query( $args ); 
   ?>
         <div class="ranking vibrant">
            <div class="heading">
               <h1>VIBRANT LPUDE EXPERIENCE</h1>
               <p>Bridging the Distance</p>
            </div>
            <div class="container-fluid">
               <div class="row">
                      <?php while ( $loop->have_posts() ) : $loop->the_post();  ?>
                  <div class="col-md-3">
                     <div class="rank-content">
                        <div class="rank-img">
                          <?php the_post_thumbnail('null'); ?>
                        </div>
                        <div class="rank-text">
                           <h3><?php the_title(); ?></h3>
                           <p><?php the_excerpt(); ?></p>
                        <!--   <button class="orange-btn">Read more</button>-->
                        </div>
                     </div>
                  </div>
                   <?php  endwhile; ?>
               </div>
            </div>
         </div>
           <?php   wp_reset_postdata();?>
      </section>
      <!-- VIBRANT LPUDE EXPERIENCE END -->

  
      <!-- TESTIMONIALS START -->
      <section>
          <?php
            $args = array(  
        'post_type' => 'testimonial',
        'post_status' => 'publish',
        'posts_per_page' => -1, 
        'orderby' => 'title', 
        'order' => 'ASC',
    );
     $loop = new WP_Query( $args ); 
          ?>
         <div class="testimonals">
            <div class="heading">
               <h1><?php echo get_post_meta(6, 'testimonial_Title_title', true); ?></h1>
               <p><?php echo get_post_meta(6, 'achievements_title_description', true); ?></p>
            </div>
            <div class="owl-carousel testimonals-slider">
                <?php   while ( $loop->have_posts() ) : $loop->the_post();  ?>
               <div class="item">
                  <div class="testimonals-detail">
                     <div class="col-md-5 m-auto">
                        <div class="row">
                           <div class="col-md-4">
                              <div class="avtar-img">
                                  <?php the_post_thumbnail('post-thumbnail', ['class' => 'rounded-circle']); ?>
                                             
                              </div>
                           </div>
                           <div class="col-md-8">
                              <div class="avtar-detail">
                                    <img  src="<?php echo get_bloginfo('template_url'); ?>/images/quotes.png" class="quotes-img" alt="img"> 
                                  
                                 <p><?php the_excerpt(); ?></p>
                                 <h6><?php the_title(); ?></h6>
                               
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
             <?php    endwhile; ?>
            </div>
         </div>
         <?php  wp_reset_postdata();  ?>
      </section>
      <!-- TESTIMONIALS END  -->
      <!-- OUR LEADING RECRUITERS START  -->
      <section>
         <div class="our-leading container">
            <div class="heading">
               <h1><?php echo get_post_meta(6, 'our_leading_recruiters_title', true); ?></h1>
            </div>
            <?php 
            global $post;
               $args = array(  
        'post_type' => 'recruiters',
        'post_status' => 'publish',
        'orderby' => 'title', 
        'order' => 'ASC',
    );

    $loop = new WP_Query( $args ); ?>
          
            <div class="owl-carousel leading-slider">
                <?php  while ( $loop->have_posts() ) : $loop->the_post();  ?>
               <div class="item">
                  <div class="bg-gry">
                    <?php     
                
        the_post_thumbnail("null"); 
        ?>
                  </div>
               </div>
               <?php   endwhile; ?>
            </div>
            <?php    wp_reset_postdata();  ?>
         </div>
      </section>
      <!-- OUR LEADING RECRUITERS END  -->
<?php  get_footer(); ?>