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

use Joomla\CMS\Factory;
use Joomla\CMS\Form\Form;
use Joomla\CMS\MVC\Model\AdminModel;

/**
 * Com_acp
 *
 * @package  gartes-Router
 * @since    1.0.0
 */
class Com_acpModelCom_acp extends AdminModel
{
	/**
	 * @var   string  The prefix to use with controller messages.
	 *
	 * @since 1.0.0
	 */
	protected $text_prefix = 'COM_COM_ACP';

	/**
	 * Method to get the record form.
	 *
	 * @param   array    $data      An optional array of data for the form to interrogate.
	 * @param   boolean  $loadData  True if the form is to load its own data (default case), false if not.
	 *
	 * @return  Form|boolean    A Form object on success, false on failure
	 * @since   1.0.0
	 */
	public function getForm($data = [], $loadData = true)
	{
		// Get the form.
		$form = $this->loadForm(
			'com_com_acp.com_acp',
			'com_acp',
			['control' => 'jform', 'load_data' => $loadData]
		);

		if (empty($form))
		{
			return false;
		}

		return $form;
	}

	/**
	 * Method to get the data that should be injected in the form.
	 *
	 * @return    mixed    The data for the form.
	 *
	 * @since   1.0.0
	 *
	 * @throws  Exception
	 */
	protected function loadFormData()
	{
		// Check the session for previously entered form data.
		$data = Factory::getApplication()->getUserState(
			'com_com_acp.edit.com_acp.data',
			[]
		);

		if (empty($data))
		{
			$data = $this->getItem();
		}

		return $data;
	}
}
