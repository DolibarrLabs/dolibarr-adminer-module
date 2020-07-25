<?php

// Load Dolibase
dol_include_once('adminer/autoload.php');

// Load Dolibase Module class
dolibase_include_once('core/class/module.php');

/**
 *	Class to describe and enable module
 */
class modAdminer extends DolibaseModule
{
	/**
	 * Function called after module configuration.
	 * 
	 */
	public function loadSettings()
	{
		// Update picto for Dolibarr 12++
		if (function_exists('version_compare') && version_compare(DOL_VERSION, '12.0.0') >= 0) {
			$this->picto = "adminer_128.png@adminer";
		}

		// Set permissions
		$this->addPermission("use", "UseAdminer", "u");

		// Add menus
		$menu_title = compare_version(DOL_VERSION, '<' ,'7.0.0') ? "Adminer" : "AdminerWithIcon";
		$this->addLeftMenu($this->config['other']['top_menu_name'], "adminer", $menu_title, "/adminer/lib/adminer.php", '$user->rights->adminer->use', '1', 100, '_blank');
	}
}
