<?php
/**
 * @package    gartes-Router
 *
 * @author     oleg <your@email.com>
 * @copyright  A copyright
 * @license    GNU General Public License version 2 or later; see LICENSE.txt
 * @link       http://your.url.com
 */

defined('_JEXEC') or die;

use Joomla\CMS\MVC\Controller\AdminController;

/**
 * Com_acps Controller.
 *
 * @package  gartes-Router
 * @since    1.0.0
 */
class Com_acpControllerCom_acps extends AdminController
{
	/**
	 * The prefix to use with controller messages.
	 *
	 * @var    string
	 * @since  1.0.0
	 */
	protected $text_prefix = 'com_com_acp_com_acp';

	/**
	 * Method to get a model object, loading it if required.
	 *
	 * @param   string  $name    The model name. Optional.
	 * @param   string  $prefix  The class prefix. Optional.
	 * @param   array   $config  Configuration array for model. Optional.
	 *
	 * @return  \JModelLegacy  The model.
	 *
	 * @since   1.0.0
	 */
	public function getModel(
		$name = 'Com_acp',
		$prefix = 'Com_acpsModel',
		$config = ['ignore_request' => true]
	) {
		return parent::getModel($name, $prefix, $config);
	}
}
