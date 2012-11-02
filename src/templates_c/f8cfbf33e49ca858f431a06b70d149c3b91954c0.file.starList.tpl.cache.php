<?php /* Smarty version Smarty-3.1.12, created on 2012-10-30 08:23:19
         compiled from "C:\Program Files (x86)\Zend\Apache2\htdocs\smartyTest1\src\templates\entity\starList\starList.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8885508f897ab97937-43855920%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f8cfbf33e49ca858f431a06b70d149c3b91954c0' => 
    array (
      0 => 'C:\\Program Files (x86)\\Zend\\Apache2\\htdocs\\smartyTest1\\src\\templates\\entity\\starList\\starList.tpl',
      1 => 1351585395,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8885508f897ab97937-43855920',
  'function' => 
  array (
  ),
  'cache_lifetime' => 3600,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_508f897b045eb0_36158563',
  'variables' => 
  array (
    'prodDetail' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_508f897b045eb0_36158563')) {function content_508f897b045eb0_36158563($_smarty_tpl) {?><span class="star stars<?php echo $_smarty_tpl->tpl_vars['prodDetail']->value['starValue'];?>
" >
	<em> <?php echo $_smarty_tpl->tpl_vars['prodDetail']->value['starValue'];?>
 stars of <?php echo $_smarty_tpl->tpl_vars['prodDetail']->value['totalStarValue'];?>
</em>
</span>
<a href="<?php echo $_smarty_tpl->tpl_vars['prodDetail']->value['url_detailPage'];?>
#have_reviews" onclick ="showDetail();return void();"><?php echo $_smarty_tpl->tpl_vars['prodDetail']->value['reviewCount'];?>
</a><?php }} ?>