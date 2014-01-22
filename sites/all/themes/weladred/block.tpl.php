<div class="row">
  <section id="<?php print $block_html_id; ?>" class="<?php print $classes; ?> large-12 columns"<?php print $attributes; ?>>
    <?php if (isset($title) && !empty($title) ): ?>
    <?php print render($title_prefix); ?>
      <h2<?php print $title_attributes; ?>><?php print $title; ?></h2>
    <?php print render($title_suffix); ?>
    <?php endif;?>
    <div class="content"<?php print $content_attributes; ?>>
      <?php print $content ?>
    </div>

  </section> <!-- /.block -->
</div>
