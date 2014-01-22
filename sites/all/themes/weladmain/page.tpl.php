<div id="container" class="clearfix">
  <!-- header -->
  <?php include_once('inc/header.inc.php');?>
  <!-- header -->
<div class="row">
  <section id="main" role="main" class="clearfix <?php print ($page['sidebar_first']) ?'large-9 ' : 'large-12 ';?>columns">
    <?php print $messages; ?>
    <a id="main-content"></a>
    <?php if ($page['highlighted']): ?><div id="highlighted"><?php print render($page['highlighted']); ?></div><?php endif; ?>
    <?php print render($title_prefix); ?>
    <?php if ($title): ?><h1 class="title" id="page-title"><?php print $title; ?></h1><?php endif; ?>
    <?php print render($title_suffix); ?>
    <?php if (!empty($tabs['#primary'])): ?><div class="tabs-wrapper clearfix"><?php print render($tabs); ?></div><?php endif; ?>
    <?php print render($page['help']); ?>
    <?php if ($action_links): ?><ul class="action-links"><?php print render($action_links); ?></ul><?php endif; ?>
    <?php print render($page['content']); ?>
  </section> <!-- /#main -->
  <?php include_once('inc/sidebar.inc.php');?>
  </div>
  <!-- footer -->
  <?php include_once('inc/footer.inc.php');?>
  <!-- //footer -->
</div> <!-- /#container -->
