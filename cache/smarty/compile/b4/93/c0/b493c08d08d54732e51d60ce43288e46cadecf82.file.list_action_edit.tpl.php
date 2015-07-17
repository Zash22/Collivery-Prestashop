<?php /* Smarty version Smarty-3.1.19, created on 2015-07-17 21:12:30
         compiled from "/var/www/html/Collivery-Prestashop/admin6336ud39b/themes/default/template/helpers/list/list_action_edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:90443078155a9539e076028-87547031%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b493c08d08d54732e51d60ce43288e46cadecf82' => 
    array (
      0 => '/var/www/html/Collivery-Prestashop/admin6336ud39b/themes/default/template/helpers/list/list_action_edit.tpl',
      1 => 1435846488,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '90443078155a9539e076028-87547031',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'href' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_55a9539e0d6832_98441079',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55a9539e0d6832_98441079')) {function content_55a9539e0d6832_98441079($_smarty_tpl) {?>
<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['href']->value, ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>
" class="edit">
	<i class="icon-pencil"></i> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>

</a><?php }} ?>
