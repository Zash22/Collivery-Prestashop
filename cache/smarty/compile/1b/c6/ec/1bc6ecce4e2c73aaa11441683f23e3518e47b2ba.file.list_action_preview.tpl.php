<?php /* Smarty version Smarty-3.1.19, created on 2015-07-18 02:52:18
         compiled from "/var/www/html/Collivery-Prestashop/admin6336ud39b/themes/default/template/helpers/list/list_action_preview.tpl" */ ?>
<?php /*%%SmartyHeaderCode:74573832855a9a3420e7fc3-59377185%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1bc6ecce4e2c73aaa11441683f23e3518e47b2ba' => 
    array (
      0 => '/var/www/html/Collivery-Prestashop/admin6336ud39b/themes/default/template/helpers/list/list_action_preview.tpl',
      1 => 1435846488,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '74573832855a9a3420e7fc3-59377185',
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
  'unifunc' => 'content_55a9a342128ff5_47320686',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55a9a342128ff5_47320686')) {function content_55a9a342128ff5_47320686($_smarty_tpl) {?>
<a href="<?php echo $_smarty_tpl->tpl_vars['href']->value;?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>
" target="_blank">
	<i class="icon-eye"></i> <?php echo $_smarty_tpl->tpl_vars['action']->value;?>

</a>
<?php }} ?>
