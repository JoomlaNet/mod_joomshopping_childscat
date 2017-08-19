﻿<?php
/**
 * @package    Module Joomshopping Childs Category
 * @version    1.0.0
 * @author     JoomlaNet - joomlanet.ru
 * @copyright  Copyright (c) 2017 - 2017 JoomlaNet. All rights reserved.
 * @license    GNU/GPL license: http://www.gnu.org/copyleft/gpl.html
 * @link       https://joomlanet.ru
 */

defined('_JEXEC') or die;
?>
<ul class="js_childscat">
	<?php
	foreach ($categories as $category)
	{
		$link = SEFLink('index.php?option=com_jshopping&controller=category&task=view&category_id=' . $category->id, 1);
		echo '<li class="js_childscat_list"><a href="' . $link . '">' . $category->name . '</a></li>';
	}
	?>
</ul>