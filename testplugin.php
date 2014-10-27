<?php defined('_JEXEC') or die;

/**
 * File       testplugin.php
 * Created    10/27/14 1:37 PM
 * Author     Matt Thomas | matt@betweenbrain.com | http://betweenbrain.com
 * Support    https://github.com/betweenbrain/
 * Copyright  Copyright (C) 2014 betweenbrain llc. All Rights Reserved.
 * License    GNU GPL v2 or later
 */
class plgSystemTestplugin extends JPlugin
{
	/**
	 * Constructor.
	 *
	 * @param   object &$subject The object to observe
	 * @param   array  $config   An optional associative array of configuration settings.
	 *
	 * @since   1.0.0
	 */
	public function __construct(&$subject, $config)
	{
		parent::__construct($subject, $config);

		$this->app = JFactory::getApplication();
		$this->db  = JFactory::getDbo();

		// Load the language file on instantiation
		$this->loadLanguage();

	}

	/**
	 * Event triggered after the framework has loaded and the application initialise method has been called.
	 *
	 * @return bool
	 */
	function onAfterInitialise()
	{
		if ($this->app->isSite())
		{

		}

		return true;
	}
}
