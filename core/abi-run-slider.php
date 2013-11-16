<?php
  // Run Function
  function abi_sliderarabi_Run(){?>
      <script>
        $("#run_slider").carouFredSel({
          circular: true,
          infinite: true,
          auto  : true,
          width: '800px',
          auto : {
            fx : "fade",
            easing : "linear",
            duration: 800
          },
          prev  : { 
            button  : ".left_side",
            key   : "left",
            fx : "scroll",easing : "linear", duration: 800
          },
          next  : { 
            button  : ".right_side",
            key   : "right",
            fx : "scroll",easing : "linear", duration: 800
          },
          pagination  : ".pagination"
        });
      </script>
  <?php } 
  add_action('wp_footer' , 'abi_sliderarabi_Run', 50);
?>