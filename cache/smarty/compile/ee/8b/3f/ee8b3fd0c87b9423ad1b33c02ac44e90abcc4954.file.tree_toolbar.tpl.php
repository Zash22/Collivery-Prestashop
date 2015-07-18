<?php /* Smarty version Smarty-3.1.19, created on 2015-07-18 02:52:15
         compiled from "/var/www/html/Collivery-Prestashop/admin6336ud39b/themes/default/template/controllers/products/helpers/tree/tree_toolbar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6814390355a9a33fe51d59-39571694%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ee8b3fd0c87b9423ad1b33c02ac44e90abcc4954' => 
    array (
      0 => '/var/www/html/Collivery-Prestashop/admin6336ud39b/themes/default/template/controllers/products/helpers/tree/tree_toolbar.tpl',
      1 => 1435846488,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6814390355a9a33fe51d59-39571694',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'actions' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_55a9a33feb4c22_51548239',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55a9a33feb4c22_51548239')) {function content_55a9a33feb4c22_51548239($_smarty_tpl) {?>
<div class="tree-actions pull-right">
	<?php if (isset($_smarty_tpl->tpl_vars['actions']->value)) {?>
	<?php  $_smarty_tpl->tpl_vars['action'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['action']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['actions']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['action']->key => $_smarty_tpl->tpl_vars['action']->value) {
$_smarty_tpl->tpl_vars['action']->_loop = true;
?>
		<?php echo $_smarty_tpl->tpl_vars['action']->value->render();?>

	<?php } ?>
	<?php }?>
</div><?php }} ?>
