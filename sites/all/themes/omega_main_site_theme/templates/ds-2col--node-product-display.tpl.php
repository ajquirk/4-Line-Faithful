<?php

/**
 * Overridden to add an additional class to the 'body' of the product display page.
 * This is because it shares a CSS class with the body of generic content pages, and they need different styles.
 */

/**
 * @file
 * Display Suite 2 column template.
 */
?>
<<?php print $layout_wrapper; print $layout_attributes; ?> class="ds-2col <?php print $classes;?> clearfix">

  <?php if (isset($title_suffix['contextual_links'])): ?>
  <?php print render($title_suffix['contextual_links']); ?>
  <?php endif; ?>

  <<?php print $left_wrapper ?> class="group-left<?php print $left_classes; ?>">
    <?php print $left; ?>
  </<?php print $left_wrapper ?>>

  <<?php print $right_wrapper ?> class="group-right<?php print $right_classes; ?>">
    <?php print render($content['product:title']); ?>
    <?php print render($content['product:sku']); ?>
    <?php print render($content['product:commerce_price']); ?>
    <?php print render($content['field_product_reference']); ?>
    <div class="product-display-body">
      <?php print render($content['body']); ?>
    </div>
    <?php /* print $right; */ ?>
  </<?php print $right_wrapper ?>>

</<?php print $layout_wrapper ?>>

<?php if (!empty($drupal_render_children)): ?>
  <?php print $drupal_render_children ?>
<?php endif; ?>
