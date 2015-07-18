<?php /* Smarty version Smarty-3.1.19, created on 2015-07-18 00:46:00
         compiled from "/var/www/html/Collivery-Prestashop/themes/default-bootstrap/modules/blockwishlist/my-account.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11058800555a985a87d2c66-54890167%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dcc61eac2a207d66f77870cd8a3d8f7949ba0399' => 
    array (
      0 => '/var/www/html/Collivery-Prestashop/themes/default-bootstrap/modules/blockwishlist/my-account.tpl',
      1 => 1435846490,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11058800555a985a87d2c66-54890167',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_55a985a8834880_26182907',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55a985a8834880_26182907')) {function content_55a985a8834880_26182907($_smarty_tpl) {?>

<!-- MODULE WishList -->
<li class="lnk_wishlist">
	<a 	href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getModuleLink('blockwishlist','mywishlist',array(),true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'My wishlists','mod'=>'blockwishlist'),$_smarty_tpl);?>
">
		<i class="icon-heart"></i>
		<span><?php echo smartyTranslate(array('s'=>'My wishlists','mod'=>'blockwishlist'),$_smarty_tpl);?>
</span>
	</a>
</li>
<!-- END : MODULE WishList --><?php }} ?>
