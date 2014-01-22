<?php
/**
 * User:    Mhd Zaher Ghaibeh
 * Date:    4/14/13
 * Time:    4:17 PM
 * Project: welad
 * File:    footer.inc.php
 */?>
<div class="row">
<footer id="footer" role="contentinfo" class="large-12 columns clearfix">
  <ul class="large-block-grid-3 small-block-grid-1 footer">
    <li><?php print render($page['footer_right']);?></li>
    <li><?php print render($page['footer_center']);?></li>
    <li><?php print render($page['footer_left']);?></li>
  </ul>
  <?php print render($page['footer']); ?>
  <?php print $feed_icons ?>
</footer> <!-- /#footer -->
</div>