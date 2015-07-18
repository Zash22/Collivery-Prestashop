<?php /* Smarty version Smarty-3.1.19, created on 2015-07-18 00:45:28
         compiled from "/var/www/html/Collivery-Prestashop/pdf/delivery-slip.summary-tab.tpl" */ ?>
<?php /*%%SmartyHeaderCode:28933240855a98588c0e6f7-20142362%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6afe2d09abc77986f1f5659a5f57fa226e25d1f3' => 
    array (
      0 => '/var/www/html/Collivery-Prestashop/pdf/delivery-slip.summary-tab.tpl',
      1 => 1435846488,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '28933240855a98588c0e6f7-20142362',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'carrier' => 0,
    'order' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_55a98588ceb054_55449681',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55a98588ceb054_55449681')) {function content_55a98588ceb054_55449681($_smarty_tpl) {?>
<table id="summary-tab" width="100%">
	<tr>
		<th class="header small" valign="middle"><?php echo smartyTranslate(array('s'=>'Order Reference','pdf'=>'true'),$_smarty_tpl);?>
</th>
		<th class="header small" valign="middle"><?php echo smartyTranslate(array('s'=>'Order Date','pdf'=>'true'),$_smarty_tpl);?>
</th>
		<?php if (isset($_smarty_tpl->tpl_vars['carrier']->value)) {?>
			<th class="header small" valign="middle"><?php echo smartyTranslate(array('s'=>'Carrier','pdf'=>'true'),$_smarty_tpl);?>
</th>
		<?php }?>
	</tr>
	<tr>
		<td class="center small white"><?php echo $_smarty_tpl->tpl_vars['order']->value->getUniqReference();?>
</td>
		<td class="center small white"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['dateFormat'][0][0]->dateFormat(array('date'=>$_smarty_tpl->tpl_vars['order']->value->date_add,'full'=>0),$_smarty_tpl);?>
</td>
		<?php if (isset($_smarty_tpl->tpl_vars['carrier']->value)) {?>
			<td class="center small white"><?php echo $_smarty_tpl->tpl_vars['carrier']->value->name;?>
</td>
		<?php }?>
	</tr>
</table>

<?php }} ?>
