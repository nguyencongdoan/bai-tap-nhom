<footer id="footer" class="module footer">
  <div class="container footer-top">
    <div class="row">
      <ul class="list-none col p-0 w-1/2 lg:w-2/3">
        <?php
        wp_nav_menu(array(
        'theme_location' => 'footer',
        'items_wrap' => '%3$s',
        'container' => false,
        'depth' => 2,
        // 'walker' => new App\Libs\Services\Nav\C8ThemeFooterMenu()
        ));
        ?>
      </ul>
      <div class="footer-item-col col w-1/2 lg:w-1/3">
        <?php echo App::getFooterAddress(); ?>

      </div>
    </div>

  </div>
  <div class="container text-center footer-bottom">
    <div class="footer-copyright last-mb-none p-3">
      <?php echo App::getCopyRight(); ?>

    </div>
  </div>
</footer>

<!-- endblock -->
<noscript>
<div id="mod-noscript" class="mod-noscript bg-black text-white fixed inset-0 z-200">
    <div class="table w-full h-full">
      <div class="table-cell align-middle text-center">
        <div class="container last-mb-none">
          <h3>To use web better, please enable Javascript.</h3>
        </div>
      </div>
    </div>
  </div>
</noscript>

