<?php defined('ABSPATH') || exit;?>

<form method="post" action="">
	<?php wp_nonce_field('wc1c-admin-settings-save', '_wc1c-admin-nonce'); ?>
    <div class="wc1c-admin-settings rounded-3 bg-white p-2 mt-2">
        <table class="form-table wc1c-admin-form-table wc1c-admin-settings-form-table">
		    <?php $args['object']->generateHtml($args['object']->getFields(), true); ?>
        </table>
    </div>
    <p class="submit mt-0">
	    <input type="submit" name="submit" id="submit" class="button button-primary p-1 fs-6 px-3" value="<?php _e('Save settings', 'wc1c-main'); ?>">
    </p>
</form>