<?php /* Smarty version Smarty-3.1.19, created on 2015-07-18 02:24:35
         compiled from "/var/www/html/Collivery-Prestashop/themes/default-bootstrap/modules/cheque/views/templates/hook/payment.tpl" */ ?>
<?php /*%%SmartyHeaderCode:178625846455a99cc3180155-13507304%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1d0042d13af37f7fb39b91ca1d90ac727d12b3e9' => 
    array (
      0 => '/var/www/html/Collivery-Prestashop/themes/default-bootstrap/modules/cheque/views/templates/hook/payment.tpl',
      1 => 1435846490,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '178625846455a99cc3180155-13507304',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_55a99cc31f1616_17726530',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55a99cc31f1616_17726530')) {function content_55a99cc31f1616_17726530($_smarty_tpl) {?>
<div class="row">
	<div class="col-xs-12">
        <p class="payment_module">
            <a class="cheque" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getModuleLink('cheque','payment',array(),true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Pay by check.','mod'=>'cheque'),$_smarty_tpl);?>
">
                <?php echo smartyTranslate(array('s'=>'Pay by check','mod'=>'cheque'),$_smarty_tpl);?>
 <span><?php echo smartyTranslate(array('s'=>'(order processing will be longer)','mod'=>'cheque'),$_smarty_tpl);?>
</span>
            </a>
        </p>
    </div>
</div>
<?php }} ?>
