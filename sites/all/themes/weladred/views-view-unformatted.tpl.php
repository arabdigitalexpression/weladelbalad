<?php
/**
 * User:    Mhd Zaher Ghaibeh
 * Date:    4/15/13
 * Time:    12:27 PM
 * Project: welad
 * File:    views-view-unformatted.tpl.php
 */
/**
 * @file
 * Default simple view template to display a list of rows.
 *
 * @ingroup views_templates
 */
?>
<?php if (!empty($title)): ?>
  <h3><?php print $title; ?></h3>
<?php endif; ?>
<?php $i=1;foreach ($rows as $id => $row): ?>
  <div<?php if ($classes_array[$id]) { print ' class="' . $classes_array[$id] .'"';  } ?>>
    <?php print $row; ?>
  </div>
<?php $i++;endforeach; ?>