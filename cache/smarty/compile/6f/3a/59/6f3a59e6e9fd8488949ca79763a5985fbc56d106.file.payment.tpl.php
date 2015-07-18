<?php /* Smarty version Smarty-3.1.19, created on 2015-07-18 02:24:35
         compiled from "/var/www/html/Collivery-Prestashop/themes/default-bootstrap/modules/bankwire/views/templates/hook/payment.tpl" */ ?>
<?php /*%%SmartyHeaderCode:161389776755a99cc30f9998-53581838%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6f3a59e6e9fd8488949ca79763a5985fbc56d106' => 
    array (
      0 => '/var/www/html/Collivery-Prestashop/themes/default-bootstrap/modules/bankwire/views/templates/hook/payment.tpl',
      1 => 1435846490,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '161389776755a99cc30f9998-53581838',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_55a99cc3160ac3_67187238',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55a99cc3160ac3_67187238')) {function content_55a99cc3160ac3_67187238($_smarty_tpl) {?>
<div class="row">
	<div class="col-xs-12">
		<p class="payment_module">
			<a class="bankwire" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getModuleLink('bankwire','payment'), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Pay by bank wire','mod'=>'bankwire'),$_smarty_tpl);?>
">
				<?php echo smartyTranslate(array('s'=>'Pay by bank wire','mod'=>'bankwire'),$_smarty_tpl);?>
 <span><?php echo smartyTranslate(array('s'=>'(order processing will be longer)','mod'=>'bankwire'),$_smarty_tpl);?>
</span>
			</a>
		</p>
	</div>
</div>
<?php }} ?>
