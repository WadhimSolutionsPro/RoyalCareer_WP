.<!-- FOOTER START -->
      <footer>
         <div class="footer">
            <div class="container">
               <div class="col-md-12">
                  <div class="row">
                     <div class="col-md-3">
                         <?php if ( is_active_sidebar( 'footer-1' ) ) : ?>
                          <?php dynamic_sidebar( 'footer-1' ); ?>
                          <?php endif; ?>
                     </div>
                     <div class="col-md-3">
                         <?php dynamic_sidebar( 'footer-2' ); ?>
                     </div>
                     <div class="col-md-3">
                         <?php dynamic_sidebar( 'footer-3' ); ?>              
                     </div>
                     <div class="col-md-3">
                      <?php dynamic_sidebar( 'footer-4' ); ?>
                     </div>
                  </div>
               </div>
            </div>
            <div class="copyright">
                 <?php dynamic_sidebar( 'footer-copyright-text' ); ?>
            </div>
         </div>
      </footer>
<?php wp_footer(); ?>
      <!-- FOOTER END -->
   </body>
   <script src="<?php echo get_bloginfo('template_url'); ?>/js/jquery.min.js"></script>
   <script src="<?php echo get_bloginfo('template_url'); ?>/js/popper.min.js"></script>
   <script src="<?php echo get_bloginfo('template_url'); ?>/js/bootstrap.min.js"></script>
   <script src="https://use.fontawesome.com/3c958ec531.js"></script>
   <script src="<?php echo get_bloginfo('template_url'); ?>/js/owl.carousel.js"></script>
   <script src="<?php echo get_bloginfo('template_url'); ?>/js/owl.js"></script>
</html>