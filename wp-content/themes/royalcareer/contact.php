<?php 
/* Template Name: Contact */
get_header();
?>

  <section>
          <div class="container">

         <div class="contact_Details">
         	<h1 style="text-align: center;">Contact Us</h1>
         	<div class="row">
         	<div class="col-md-6">
         		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3430.1218607925316!2d76.71295491436969!3d30.714974393540885!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390fef531e6a91fd%3A0x73201fc40ed4c22a!2sRoyal%20career!5e0!3m2!1sen!2sin!4v1620662737763!5m2!1sen!2sin" width="500" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
         	</div>
      	<div class="col-md-6">
            <div class="contact_Form">
            	<?php echo do_shortcode( '[contact-form-7 id="50" title="Contact form 1"]' ); ?>
            </div>
         </div>
     </div>
     </div>
 </div>
      </section>
      <!-- OUR LEADING RECRUITERS END  -->
<?php  get_footer(); ?>