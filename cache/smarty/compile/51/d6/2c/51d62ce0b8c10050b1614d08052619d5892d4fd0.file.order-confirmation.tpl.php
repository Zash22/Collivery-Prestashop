<?php /* Smarty version Smarty-3.1.19, created on 2015-07-20 10:34:31
         compiled from "/var/www/html/Collivery-Prestashop/themes/default-bootstrap/order-confirmation.tpl" */ ?>
<?php /*%%SmartyHeaderCode:170612102855acb297ebe092-88709176%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '51d62ce0b8c10050b1614d08052619d5892d4fd0' => 
    array (
      0 => '/var/www/html/Collivery-Prestashop/themes/default-bootstrap/order-confirmation.tpl',
      1 => 1435846490,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '170612102855acb297ebe092-88709176',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'HOOK_ORDER_CONFIRMATION' => 0,
    'HOOK_PAYMENT_RETURN' => 0,
    'is_guest' => 0,
    'id_order_formatted' => 0,
    'reference_order' => 0,
    'email' => 0,
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_55acb29814fb14_72400097',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55acb29814fb14_72400097')) {function content_55acb29814fb14_72400097($_smarty_tpl) {?>

<?php $_smarty_tpl->_capture_stack[0][] = array('path', null, null); ob_start(); ?><?php echo smartyTranslate(array('s'=>'Order confirmation'),$_smarty_tpl);?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<h1 class="page-heading"><?php echo smartyTranslate(array('s'=>'Order confirmation'),$_smarty_tpl);?>
</h1>

<?php $_smarty_tpl->tpl_vars['current_step'] = new Smarty_variable('payment', null, 0);?>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./order-steps.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./errors.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<?php echo $_smarty_tpl->tpl_vars['HOOK_ORDER_CONFIRMATION']->value;?>

<?php echo $_smarty_tpl->tpl_vars['HOOK_PAYMENT_RETURN']->value;?>

<?php if ($_smarty_tpl->tpl_vars['is_guest']->value) {?>
	<p><?php echo smartyTranslate(array('s'=>'Your order ID is:'),$_smarty_tpl);?>
 <span class="bold"><?php echo $_smarty_tpl->tpl_vars['id_order_formatted']->value;?>
</span> . <?php echo smartyTranslate(array('s'=>'Your order ID has been sent via email.'),$_smarty_tpl);?>
</p>
    <p class="cart_navigation exclusive">
	<a class="button-exclusive btn btn-default" href="<?php ob_start();?><?php echo urlencode($_smarty_tpl->tpl_vars['reference_order']->value);?>
<?php $_tmp7=ob_get_clean();?><?php ob_start();?><?php echo urlencode($_smarty_tpl->tpl_vars['email']->value);?>
<?php $_tmp8=ob_get_clean();?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('guest-tracking',true,null,"id_order=".$_tmp7."&email=".$_tmp8), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Follow my order'),$_smarty_tpl);?>
"><i class="icon-chevron-left"></i><?php echo smartyTranslate(array('s'=>'Follow my order'),$_smarty_tpl);?>
</a>
    </p>
<?php } else { ?>
<p class="cart_navigation exclusive">
	<a class="button-exclusive btn btn-default" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('history',true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Go to your order history page'),$_smarty_tpl);?>
"><i class="icon-chevron-left"></i><?php echo smartyTranslate(array('s'=>'View your order history'),$_smarty_tpl);?>
</a>
</p>
<?php }?>
<?php }} ?>
