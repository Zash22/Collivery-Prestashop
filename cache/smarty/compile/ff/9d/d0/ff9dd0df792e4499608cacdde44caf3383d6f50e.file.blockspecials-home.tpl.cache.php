<?php /* Smarty version Smarty-3.1.19, created on 2015-07-14 15:54:12
         compiled from "/var/www/html/Collivery-Prestashop/modules/blockspecials/views/templates/hook/blockspecials-home.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11097937455a514847db604-30116418%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ff9dd0df792e4499608cacdde44caf3383d6f50e' => 
    array (
      0 => '/var/www/html/Collivery-Prestashop/modules/blockspecials/views/templates/hook/blockspecials-home.tpl',
      1 => 1435846550,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11097937455a514847db604-30116418',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'specials' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_55a514848541a7_68698014',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55a514848541a7_68698014')) {function content_55a514848541a7_68698014($_smarty_tpl) {?>
<?php if (isset($_smarty_tpl->tpl_vars['specials']->value)&&$_smarty_tpl->tpl_vars['specials']->value) {?>
	<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./product-list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array('products'=>$_smarty_tpl->tpl_vars['specials']->value,'class'=>'blockspecials tab-pane','id'=>'blockspecials'), 0);?>

<?php } else { ?>
<ul id="blockspecials" class="blockspecials tab-pane">
	<li class="alert alert-info"><?php echo smartyTranslate(array('s'=>'No special products at this time.','mod'=>'blockspecials'),$_smarty_tpl);?>
</li>
</ul>
<?php }?>
<?php }} ?>
