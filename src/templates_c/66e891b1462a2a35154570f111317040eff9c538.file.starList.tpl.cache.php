<?php /* Smarty version Smarty-3.1.12, created on 2012-11-01 13:45:56
         compiled from "C:\Program Files (x86)\Zend\Apache2\htdocs\litb_modulize_beta1\src\templates\entity\starList\starList.tpl" */ ?>
<?php /*%%SmartyHeaderCode:933750927d144ba255-48864799%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '66e891b1462a2a35154570f111317040eff9c538' => 
    array (
      0 => 'C:\\Program Files (x86)\\Zend\\Apache2\\htdocs\\litb_modulize_beta1\\src\\templates\\entity\\starList\\starList.tpl',
      1 => 1351777555,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '933750927d144ba255-48864799',
  'function' => 
  array (
    'starList' => 
    array (
      'parameter' => 
      array (
      ),
      'compiled' => '
<span class="star stars<?php echo $_smarty_tpl->tpl_vars[\'prodDetail\']->value[\'starValue\'];?>
" >
	<em> <?php echo $_smarty_tpl->tpl_vars[\'prodDetail\']->value[\'starValue\'];?>
 stars of <?php echo $_smarty_tpl->tpl_vars[\'prodDetail\']->value[\'totalStarValue\'];?>
</em>
</span>
<a href="<?php echo $_smarty_tpl->tpl_vars[\'prodDetail\']->value[\'urlDetailPage\'];?>
#have_reviews" onclick ="showDetail();return void();"><?php echo $_smarty_tpl->tpl_vars[\'prodDetail\']->value[\'reviewCount\'];?>
</a>
',
      'nocache_hash' => '933750927d144ba255-48864799',
      'has_nocache_code' => false,
      'called_functions' => 
      array (
      ),
    ),
  ),
  'variables' => 
  array (
    'prodDetail' => 0,
  ),
  'has_nocache_code' => 0,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_50927d144dabf4_35411979',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50927d144dabf4_35411979')) {function content_50927d144dabf4_35411979($_smarty_tpl) {?><?php }} ?>