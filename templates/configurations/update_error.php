<?php defined('ABSPATH') || exit; ?>

<?php
$label = __('Back to configurations list', 'wc1c');
$url = wc1c_admin_configurations_get_url('list');
wc1c_admin_back_link($label, $url);
?>

<?php
$title = __('Error', 'wc1c');
$title = apply_filters(WC1C_ADMIN_PREFIX . 'configurations_update_error_title', $title);
$text = __('Update is not available. Configuration not found or unavailable.', 'wc1c');
$text = apply_filters(WC1C_ADMIN_PREFIX . 'configurations_update_error_text', $text);
?>

<div class="wc1c-configurations-alert mb-2 mt-2">
    <h3><?php echo $title; ?></h3>
    <p><?php echo $text; ?></p>
</div>