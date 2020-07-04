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

use Joomla\CMS\Table\Table;

/**
 * Com_acp table.
 *
 * @since  1.0.0
 */
class TableCom_acp extends Table
{
	/**
	 * Constructor
	 *
	 * @param   JDatabaseDriver  $db  Database driver object.
	 *
	 * @since   1.0.0
	 */
	public function __construct(JDatabaseDriver $db)
	{
		parent::__construct('#__com_acp_items', 'id', $db);
	}
}
