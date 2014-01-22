<?php
/**
 * User:    Mhd Zaher Ghaibeh
 * Date:    4/14/13
 * Time:    4:17 PM
 * Project: welad
 * File:    header.inc.php
 */?>
<div class="row">
<div id="skip-link" class="large-12 columns">
  <a href="#main-content" class="element-invisible element-focusable"><?php print t('Skip to main content'); ?></a>
  <?php if ($main_menu): ?>
    <a href="#navigation" class="element-invisible element-focusable"><?php print t('Skip to navigation'); ?></a>
  <?php endif; ?>
</div>
</div>
<div class="row">
<header id="header" role="banner" class="clearfix large-12 columns">
  <div class="row">
    <div class="columns large-3">
      <?php if ($logo): ?>
        <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" id="logo">
          <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
        </a>
      <?php endif; ?>
      <?php if ($site_name || $site_slogan): ?>
        <!-- <hgroup id="site-name-slogan">
          <?php if ($site_name): ?>
            <h1 id="site-name">
              <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>"><span><?php print $site_name; ?></span></a>
            </h1>
          <?php endif; ?>
          <?php if ($site_slogan): ?>
            <h2 id="site-slogan"><?php print $site_slogan; ?></h2>
          <?php endif; ?>
        </hgroup> -->
      <?php endif; ?>
    </div><!-- logo+name -->
    <div class="large-9 columns">&nbsp;</div>
  </div>
  <div class="row">
    <div class="columns large-12">
      <?php print render($page['header']); ?>
    </div><!-- menu & stuff -->
  </div>
</header> <!-- /#header -->
</div>
<?php if ($breadcrumb):?><div class="row"><div class="columns large-12"><?php print $breadcrumb;?></div></div><?php endif;?>