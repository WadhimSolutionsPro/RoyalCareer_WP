<?php 
/* Template Name: About */
get_header();
?>

  <section>
          <div class="container">

         <div class="contact_Details">
     
         	<div class="row">
         	<div class="col-md-6">
         		<div class="laptop-img">
                            <?php
                             $rank_1= get_post_meta(200, 'about_us_banner', true);
					  		 $rank_1_img = wp_get_attachment_image_src($rank_1, 'full'); 
					  		 ?>
                           <img src="<?php echo $rank_1_img[0];?>" alt="img">
                        </div>
         	</div>
      	<div class="col-md-6">
            <div class="about_us">
            	 <h2 class="heading"><?php echo get_post_meta(200, 'about_us_about_us_block_heading', true); ?></h2><br>
               <p><?php echo get_post_meta(200, 'about_us_about_us_description', true); ?></p>
            </div>
         </div>
     </div>
     </div>
 </div>
      </section>
      <!-- OUR LEADING RECRUITERS END  -->
<?php  get_footer(); ?>