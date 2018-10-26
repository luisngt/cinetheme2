<button class="Panel-btn"><?php _e('Menu Principal', 'cinetheme'); ?></button>
  <section class="Panel">
    <?php  
    if(has_nav_menu('main_menu')):
        wp_nav_menu(array(
          'theme_location'=>'main_menu',
          'container'=>'nav',
          'container-class'=>'Menu'        
        ));
    else:
    ?>
      <nav class="Menu">
        <ul>
          <?php  wp_list_pages('title_li' );?> <!-- title_li quita el li Paginas del menu -->
        </ul>
      </nav> 
    <?php  
    
    endif;
    ?>
  </section>