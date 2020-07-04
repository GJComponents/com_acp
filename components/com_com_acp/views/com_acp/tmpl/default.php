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
use Joomla\CMS\Layout\FileLayout;

/** @var Com_acpViewCom_acp $this */

HTMLHelper::_('script', 'com_com_acp/script.js', ['version' => 'auto', 'relative' => true]);
HTMLHelper::_('stylesheet', 'com_com_acp/style.css', ['version' => 'auto', 'relative' => true]);

$layout       = new FileLayout('com_acp.page');
$data         = [];
$data['text'] = 'Hello Joomla!';
echo $layout->render($data);
