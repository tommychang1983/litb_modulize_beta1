<?php

// load Smarty library
require('Smarty.class.php');

// The setup.php file is a good place to load
// required application library files, and you
// can do that right here. An example:
// require('guestbook/guestbook.lib.php');

class Smarty_GuestBook extends Smarty {

   function __construct()
   {

        // Class Constructor.
        // These automatically get set with each new instance.

        parent::__construct();

		$this->setTemplateDir('C:\Program Files (x86)\Zend\Apache2\htdocs\litb_modulize_beta1\src\templates');
		$this->setCompileDir('C:\Program Files (x86)\Zend\Apache2\htdocs\litb_modulize_beta1\src\templates_c');
		$this->setConfigDir('C:\Program Files (x86)\Zend\Apache2\htdocs\litb_modulize_beta1\src\configs');
		$this->setCacheDir('C:\Program Files (x86)\Zend\Apache2\htdocs\litb_modulize_beta1\src\cache');

        $this->caching = Smarty::CACHING_LIFETIME_CURRENT;
        $this->assign('app_name', 'Guest Book');
   }

}
?>
