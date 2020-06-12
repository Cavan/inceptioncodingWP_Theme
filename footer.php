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
          $args =  array(           
                    'theme_location' => 'bottom-menu',
                    'menu_class' => 'list-unstyled',
          );
          wp_nav_menu($args);     
        ?>
        
      </div>
      <div class="col-6 col-md">
        <h5>About</h5>
        <ul class="list-unstyled text-small">
          <li><a class="text-muted" href="#">Team</a></li>
          <li><a class="text-muted" href="#">Locations</a></li>
          <li><a class="text-muted" href="#">Privacy</a></li>
          <li><a class="text-muted" href="#">Terms</a></li>
        </ul>
      </div>
    </div>
  </footer>
</div>
<?php wp_footer(); ?>
</body>
</html>
