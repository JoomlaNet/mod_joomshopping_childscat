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

class modParentcatHelper
{
	public static function getParentcategory(&$params)
	{

		$cid = JRequest::getInt( 'category_id' ); //++

		$lang = JSFactory::getLang();

		$db = JFactory::getDbo();
		$query = $db->getQuery(true);
		$query->select('`category_id` AS id, `'.$lang->get('name').'` AS name');
		$query->from('#__jshopping_categories');
		$query->where('category_parent_id > 0');
		$query->where('category_publish = 1');
		$query->where('category_parent_id ='.$cid); //++
		$query->order('ordering DESC');
		$db->setQuery($query);

		$categories = $db->loadObjectList();

		return $categories;
	}

}