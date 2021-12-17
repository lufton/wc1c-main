<?php
/**
 * Namespace
 */
namespace Wc1c\Admin\Columns\WooCommerce;

/**
 * Only WordPress
 */
defined('ABSPATH') || exit;

/**
 * Dependencies
 */
use Wc1c\Traits\SingletonTrait;

/**
 * Categories
 *
 * @package Wc1c\Admin\Columns\WooCommerce
 */
final class Categories
{
	use SingletonTrait;

	/**
	 * Categories constructor.
	 */
	public function __construct()
	{
		add_filter('manage_edit-product_cat_columns', [$this, 'manage_edit_taxonomy_columns']);
		add_filter('manage_product_cat_custom_column', [$this, 'manage_taxonomy_custom_column'], 10, 3);
	}

	/**
	 * Adding a column to the categories for displaying 1C information
	 *
	 * @param $columns
	 *
	 * @return array
	 */
	public function manage_edit_taxonomy_columns($columns)
	{
		$columns_after =
		[
			'wc1c' => __('1C information', 'wc1c'),
		];

		return array_merge($columns, $columns_after);
	}

	/**
	 * Information from 1C in categories list
	 *
	 * @param $columns
	 * @param $column
	 * @param $id
	 *
	 * @return string
	 */
	public function manage_taxonomy_custom_column($columns, $column, $id)
	{
		if('wc1c' === $column)
		{
			$content = '<span class="na">' . __('not found', 'wc1c') . '</span>';

			$content = apply_filters(WC1C_ADMIN_PREFIX . 'interface_categories_column', $content, $columns, $id);

			$columns .= $content;
		}

		return $columns;
	}
}