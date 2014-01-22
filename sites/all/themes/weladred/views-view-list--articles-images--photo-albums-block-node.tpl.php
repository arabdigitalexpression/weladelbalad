<?php
/**
 * User    : Mhd Zaher Ghaibeh
 * Date    : 02/05/13
 * Time    : 2:08 PM
 * Project : welad
 * File    : views-view-list--articles-images--photo-albums-block-node.tpl.php
 */
/**
 * @file
 * Default simple view template to display a list of rows.
 *
 * - $title : The title of this group of rows.  May be empty.
 * - $options['type'] will either be ul or ol.
 * @ingroup views_templates
 */
?>
<?php print $wrapper_prefix; ?>
<?php if (!empty($title)) : ?>
  <h3><?php print $title; ?></h3>
<?php endif; ?>
<?php print $list_type_prefix; ?>
<?php foreach ($rows as $id => $row): ?>
  <li class="<?php print $classes_array[$id]; ?>"><div class="row"><?php print $row; ?></div></li>
<?php endforeach; ?>
<?php print $list_type_suffix; ?>
<?php print $wrapper_suffix; ?>
