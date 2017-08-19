<?php
/**
 * @package    Module Joomshopping Childs Category
 * @version    1.0.0
 * @author     JoomlaNet - joomlanet.ru
 * @copyright  Copyright (c) 2017 - 2017 JoomlaNet. All rights reserved.
 * @license    GNU/GPL license: http://www.gnu.org/copyleft/gpl.html
 * @link       https://joomlanet.ru
 */

defined('_JEXEC') or die('');

require_once dirname(__FILE__).'/helper.php';
$categories = modParentcatHelper::getParentcategory($params);

require JModuleHelper::getLayoutPath('mod_parentcat', $params->get('layout', 'default'));
