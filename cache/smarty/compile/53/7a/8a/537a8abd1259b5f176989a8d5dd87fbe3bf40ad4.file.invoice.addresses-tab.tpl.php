<?php /* Smarty version Smarty-3.1.19, created on 2015-07-27 14:13:20
         compiled from "/var/www/html/Collivery-Prestashop/pdf/invoice.addresses-tab.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12808947955b620605bd333-60256959%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '537a8abd1259b5f176989a8d5dd87fbe3bf40ad4' => 
    array (
      0 => '/var/www/html/Collivery-Prestashop/pdf/invoice.addresses-tab.tpl',
      1 => 1435846488,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12808947955b620605bd333-60256959',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'order_invoice' => 0,
    'delivery_address' => 0,
    'invoice_address' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_55b62060644dc1_81795765',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55b62060644dc1_81795765')) {function content_55b62060644dc1_81795765($_smarty_tpl) {?>
<table id="addresses-tab" cellspacing="0" cellpadding="0">
	<tr>
		<td width="33%"><span class="bold"> </span><br/><br/>
			<?php if (isset($_smarty_tpl->tpl_vars['order_invoice']->value)) {?><?php echo $_smarty_tpl->tpl_vars['order_invoice']->value->shop_address;?>
<?php }?>
		</td>
		<td width="33%"><?php if ($_smarty_tpl->tpl_vars['delivery_address']->value) {?><span class="bold"><?php echo smartyTranslate(array('s'=>'Delivery Address','pdf'=>'true'),$_smarty_tpl);?>
</span><br/><br/>
				<?php echo $_smarty_tpl->tpl_vars['delivery_address']->value;?>

			<?php }?>
		</td>
		<td width="33%"><span class="bold"><?php echo smartyTranslate(array('s'=>'Billing Address','pdf'=>'true'),$_smarty_tpl);?>
</span><br/><br/>
				<?php echo $_smarty_tpl->tpl_vars['invoice_address']->value;?>

		</td>
	</tr>
</table>
<?php }} ?>
