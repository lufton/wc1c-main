<?php namespace Wc1c\Wc\Contracts;

defined('ABSPATH') || exit;

use Wc1c\Wc\Category;

/**
 * CategoriesStorageContract
 *
 * @package Wc1c\Wc\Contracts
 */
interface CategoriesStorageContract
{
	/**
	 * Получение категории или категорий по наименованию категории из WooCommerce
	 *
	 * @param string $name Наименование искомой категории
	 *
	 * @return false|Category|Category[]
	 */
	public function getByName($name);

	/**
	 * Получение категории или категорий по идентификатору категории из WooCommerce
	 *
	 * @param int|string $id Идентификатор категории
	 *
	 * @return false|Category
	 */
	public function getById($id);

	/**
	 * Получение категории или категорий по идентификатору категории из 1С
	 *
	 * @param $id
	 *
	 * @return false|Category|Category[]
	 */
	public function getByExternalId($id);
}