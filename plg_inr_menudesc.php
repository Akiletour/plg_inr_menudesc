<?php
/**
 * @package     Joomla.Plugin
 * @subpackage  Menu.Extend
 *
 * @copyright   Copyright (C) 2005 - 2013 inRage. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

// No direct access to this file
defined('_JEXEC') or die('Restricted access');

// Import Joomla! Plugin library file
jimport('joomla.plugin.plugin');

//The Content plugin Loadmodule
class plgSystemInr_menudesc extends JPlugin{

	function onContentPrepareForm($form, $data){

		if (!($form instanceof JForm)){
			$this->_subject->setError('JERROR_NOT_A_FORM');
			return false;
		}

		// Check we are manipulating a valid form.
		$name = $form->getName();
		if (!in_array($name, array('com_menus.item')))
			return true;

		// Add the registration fields to the form.
		JForm::addFormPath(dirname(__FILE__) . '/menus');
		$form->loadFile('menus', false);

		return true;
	}

}