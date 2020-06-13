<!-- Start Footer Section -->
<footer class="pt-4 my-md-5 pt-md-5 border-top">
    <div class="row">
      <div class="col-12 col-md">
       
        <small class="d-block mb-3 text-muted">&copy; 2017-2020</small>
      </div>
      <div class="col-6 col-md">
        <h5></h5>
        <ul class="list-unstyled text-small">
          
        </ul>
      </div>
      <div class="col-6 col-md">
        <h5>Sitemap</h5>
        <?php 

            if (is_front_page())
            {
            $useMenuBottom = 'bottom-menu';
            }
            else
            {
              $useMenuBottom = 'not-frontpageBottom';
            }
          $args =  array(           
                    'theme_location' => $useMenuBottom,
                    'menu_class' => 'list-unstyled',
          );
          wp_nav_menu($args);     
        ?>
        
      </div>
      <div class="col-6 col-md">
        <h5>Connect With Us</h5>
        <ul class="list-unstyled text-small">
          <li><a class="text-muted" target="new" href="https://www.facebook.com/inceptioncoding"><img src="<?php bloginfo('template_directory');?>/icons/facebook.png" width="10%" alt="Visit Our Facebook Page" /></a></li>
        </ul>
      </div>
    </div>
  </footer>
</div>
<?php wp_footer(); ?>
</body>
</html>
