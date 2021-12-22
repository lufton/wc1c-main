<?php namespace Wc1c\Admin\Wizards\Setup;

defined('ABSPATH') || exit;

use Wc1c\Admin\Wizards\StepAbstract;
use Wc1c\Traits\SingletonTrait;
use Wc1c\Traits\UtilityTrait;

/**
 * Complete
 *
 * @package Wc1c\Admin\Wizards
 */
class Complete extends StepAbstract
{
	use SingletonTrait;
	use UtilityTrait;

	/**
	 * Complete constructor.
	 */
	public function __construct()
	{
		$this->setId('complete');
	}

	/**
	 * Precessing step
	 */
	public function process()
	{
		delete_option('wc1c_wizard');

		add_action(WC1C_PREFIX . 'wizard_content_output', [$this, 'output'], 10);
	}

	/**
	 * Output wizard content
	 *
	 * @return void
	 */
	public function output()
	{
		$args =
		[
			'step' => $this,
			'back_url' => $this->utilityAdminConfigurationsGetUrl('all'),
		];

		wc1c()->templates()->getTemplate('wizards/steps/complete.php', $args);
	}
}