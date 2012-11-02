<?php

require ('include/setup.php');

$smarty = new Smarty_GuestBook();

$prodDetail = array(
		'starValue'=>'4',
		'totalStarValue'=>'5',
		'urlDetailPage'=>'http://www.lightinthebox.com/url',
		'reviewCount'=>'350'
	);

$smarty->assign("prodDetail",$prodDetail);

//** un-comment the following line to show the debug console
//$smarty->debugging = true;

$smarty->display("templates/widget/pannel.tpl");

?>