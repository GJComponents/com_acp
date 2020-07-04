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

use Joomla\CMS\HTML\HTMLHelper;
use Joomla\CMS\Language\Text;

/**
 * Com_acp helper.
 *
 * @package  gartes-Router
 * @since    1.0.0
 */
class Com_acpHelper
{
	/**
	 * Render submenu.
	 *
	 * @param   string  $vName  The name of the current view.
	 *
	 * @return  void
	 *
	 * @since   1.0.0
	 */
	public function addSubmenu($vName)
	{
		HTMLHelper::_(
			'sidebar.addEntry',
			Text::_('COM_COM_ACP'),
			'index.php?option=com_com_acp&view=com_acps',
			$vName === 'com_acps'
		);
	}
}
