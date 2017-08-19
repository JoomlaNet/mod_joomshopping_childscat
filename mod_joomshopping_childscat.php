<?php
/**
 * @package    Module Joomshopping Childs Category
 * @version    1.0.0
 * @author     JoomlaNet - joomlanet.ru
 * @copyright  Copyright (c) 2017 - 2017 JoomlaNet. All rights reserved.
 * @license    GNU/GPL license: http://www.gnu.org/copyleft/gpl.html
 * @link       https://joomlanet.ru
 */

defined('_JEXEC') or die;
require_once dirname(__FILE__) . '/helper.php';
$image_category_path = "/components/com_jshopping/files/img_categories";
$noimage = "noimage.gif";
$categories = modJoomshoppingChildscatHelper::getParentcategory($params);
require JModuleHelper::getLayoutPath('mod_joomshopping_childscat', $params->get('layout', 'default'));
