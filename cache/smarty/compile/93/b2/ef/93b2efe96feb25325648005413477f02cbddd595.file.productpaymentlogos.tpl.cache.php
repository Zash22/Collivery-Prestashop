<?php /* Smarty version Smarty-3.1.19, created on 2015-07-18 02:56:06
         compiled from "/var/www/html/Collivery-Prestashop/modules/productpaymentlogos/views/templates/hook/productpaymentlogos.tpl" */ ?>
<?php /*%%SmartyHeaderCode:202043962355a9a42626f6b7-84398978%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '93b2efe96feb25325648005413477f02cbddd595' => 
    array (
      0 => '/var/www/html/Collivery-Prestashop/modules/productpaymentlogos/views/templates/hook/productpaymentlogos.tpl',
      1 => 1435846598,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '202043962355a9a42626f6b7-84398978',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'banner_title' => 0,
    'banner_link' => 0,
    'module_dir' => 0,
    'banner_img' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_55a9a42635c241_47543730',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55a9a42635c241_47543730')) {function content_55a9a42635c241_47543730($_smarty_tpl) {?>
<!-- Productpaymentlogos module -->
<div id="product_payment_logos">
	<div class="box-security">
    <h5 class="product-heading-h5"><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['banner_title']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</h5>
  	<?php if ($_smarty_tpl->tpl_vars['banner_link']->value!='') {?><a href="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['banner_link']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" title="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['banner_title']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
"><?php }?>
		<img src="<?php echo $_smarty_tpl->tpl_vars['module_dir']->value;?>
<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['banner_img']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" alt="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['banner_title']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" class="img-responsive" />
	<?php if ($_smarty_tpl->tpl_vars['banner_link']->value!='') {?></a><?php }?>
    </div>
</div>
<!-- /Productpaymentlogos module -->
<?php }} ?>
