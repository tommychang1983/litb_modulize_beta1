<?php /* Smarty version Smarty-3.1.12, created on 2012-11-01 13:46:15
         compiled from "templates\widget\pannel.tpl" */ ?>
<?php /*%%SmartyHeaderCode:102750927c4577d072-64345733%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ece17a6fe6b32bda5d9232a1c767386674266e5b' => 
    array (
      0 => 'templates\\widget\\pannel.tpl',
      1 => 1351777568,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '102750927c4577d072-64345733',
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
      'nocache_hash' => '102750927c4577d072-64345733',
      'has_nocache_code' => false,
      'called_functions' => 
      array (
      ),
    ),
  ),
  'cache_lifetime' => 3600,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_50927c457b39b7_73430520',
  'variables' => 
  array (
    'prodDetail' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50927c457b39b7_73430520')) {function content_50927c457b39b7_73430520($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("../entity/starList/starList.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>



<?php Smarty_Internal_Function_Call_Handler::call ('starList',$_smarty_tpl,array('prodDetail'=>$_smarty_tpl->tpl_vars['prodDetail']->value),'102750927c4577d072_64345733',false);?>
<?php }} ?>