<?php namespace Wc1c\Cml\Contracts;

defined('ABSPATH') || exit;

/**
 * DataContract
 *
 * @package Wc1c\Cml\Contracts
 */
interface DataContract
{
	/**
	 * @return array Raw data
	 */
	public function getData();
}