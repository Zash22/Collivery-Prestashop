<?php /* Smarty version Smarty-3.1.19, created on 2015-07-18 00:45:28
         compiled from "/var/www/html/Collivery-Prestashop/pdf/delivery-slip.addresses-tab.tpl" */ ?>
<?php /*%%SmartyHeaderCode:47870200755a98588b1a094-94225887%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5222f9b04c7455cee22c6403f1101959a3550b2a' => 
    array (
      0 => '/var/www/html/Collivery-Prestashop/pdf/delivery-slip.addresses-tab.tpl',
      1 => 1435846488,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '47870200755a98588b1a094-94225887',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'order_invoice' => 0,
    'invoice_address' => 0,
    'delivery_address' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_55a98588c040d5_58445459',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55a98588c040d5_58445459')) {function content_55a98588c040d5_58445459($_smarty_tpl) {?>
<table id="addresses-tab" cellspacing="0" cellpadding="0">
	<tr>
		<td width="33%"><span class="bold"> </span><br/><br/>
			<?php echo $_smarty_tpl->tpl_vars['order_invoice']->value->shop_address;?>

		</td>
		<?php if (!empty($_smarty_tpl->tpl_vars['invoice_address']->value)) {?>
			<td width="33%"><?php if ($_smarty_tpl->tpl_vars['delivery_address']->value) {?><span class="bold"><?php echo smartyTranslate(array('s'=>'Delivery Address','pdf'=>'true'),$_smarty_tpl);?>
</span><br/><br/>
					<?php echo $_smarty_tpl->tpl_vars['delivery_address']->value;?>

				<?php }?>
			</td>
			<td width="33%"><span class="bold"><?php echo smartyTranslate(array('s'=>'Billing Address','pdf'=>'true'),$_smarty_tpl);?>
</span><br/><br/>
				<?php echo $_smarty_tpl->tpl_vars['invoice_address']->value;?>

			</td>
		<?php } else { ?>
			<td width="66%"><?php if ($_smarty_tpl->tpl_vars['delivery_address']->value) {?><span class="bold"><?php echo smartyTranslate(array('s'=>'Billing & Delivery Address','pdf'=>'true'),$_smarty_tpl);?>
</span><br/><br/>
					<?php echo $_smarty_tpl->tpl_vars['delivery_address']->value;?>

				<?php }?>
			</td>
		<?php }?>
	</tr>
</table>
<?php }} ?>
