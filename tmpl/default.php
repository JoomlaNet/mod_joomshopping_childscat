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
		JHtml::stylesheet(JURI::base().'/modules/mod_joomshopping_childscat/assets/style.css',array(),true);
		echo
			'<a class="js_childscat_a" href="' . $link . '"><li class="js_childscat_list">
             <div class="js_childscat_img">
                <img class="jshop_img childscat" 
                    src="' . $image_category_path . '/' . ($category->image ? $category->image : $noimage) . '" 
                    alt="' . htmlspecialchars($category->name) . '" 
                    title="' . htmlspecialchars($category->name) . '"/>
             </div>
                    <div class="js_childscat_title">' . $category->name . '</div>
		    <div class="desck_children">'.$category->descript.'</div>
            </li></a>';
	}
	?>
</ul>
