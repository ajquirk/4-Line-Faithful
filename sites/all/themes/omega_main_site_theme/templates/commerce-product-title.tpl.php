<?php

/**
 * This template file overrides the default commerce-product-title.tpl.php file found in the Drupal Commerce Product submodule of Drupal Commerce.
 * It is used to remove the "Title:" label on the product display's Title field.
 * 
 * Alot of redundant code for removing 6 characters, but that's Drupal for ya.
 */

/**
 * @file
 * Default theme implementation to present the title on a product page.
 *
 * Available variables:
 * - $title: The title to render.
 * - $label: If present, the string to use as the title label.
 *
 * Helper variables:
 * - $product: The fully loaded product object the title belongs to.
 */
?>

<?php if ($title): ?>
  <div class="commerce-product-title">
    <?php /* if ($label): ?>
      <div class="commerce-product-title-label">
        <?php print $label; ?>
      </div>
    <?php endif; */?>
    <?php print $title; ?>
  </div>
<?php endif; ?>
