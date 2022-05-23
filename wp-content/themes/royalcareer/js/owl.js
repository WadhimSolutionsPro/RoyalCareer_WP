     $(document).ready(function() {
           $('.hero-banner').owlCarousel({
             loop: true,
             responsiveClass: true,
             responsive: {
               0: {
                 items: 1,
                 nav: true
               },
               600: {
                 items: 1,
                 nav: false
               },
               1000: {
                 items: 1,
                 nav: true,
                 loop: false,
               }
             }
           })
         })
         $(document).ready(function() {
           $('.testimonals-slider').owlCarousel({
             loop: true,
             responsiveClass: true,
             responsive: {
               0: {
                 items: 1,
                 nav: true
               },
               600: {
                 items: 1,
                 nav: false
               },
               1000: {
                 items: 1,
                 nav: true,
                 loop: false,
               }
             }
           })
         })
         $(document).ready(function() {
           $('.leading-slider').owlCarousel({
           
             loop: true,
             margin:10,
             responsiveClass: true,
             responsive: {
               0: {
                 items: 2,
                 nav: true
               },
               600: {
                 items: 3,
                 nav: false
               },
               1000: {
                 items: 7,
                 nav: true,
                 loop: false,
               }
             }
           })
         })