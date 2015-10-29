      <hr>

      <footer>
        <p class="left">&copy; <?php bloginfo('name'); ?> <?php echo date('Y'); ?></p>
        <nav class="nav right">
            <?php
              $args = array(
                'menu'        => 'footer-menu',
                'menu_class'  => 'nav navbar-nav',
                'container'   => 'false',
                'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
              );
              wp_nav_menu( $args );
            ?>
        </nav>
      </footer>
    </div> <!-- /container -->



    <?php wp_footer(); ?>

  </body>
</html>
