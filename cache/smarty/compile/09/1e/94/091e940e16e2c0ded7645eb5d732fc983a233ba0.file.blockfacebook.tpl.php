<?php /* Smarty version Smarty-3.1.19, created on 2015-07-20 10:18:21
         compiled from "/var/www/html/Collivery-Prestashop/modules/blockfacebook/blockfacebook.tpl" */ ?>
<?php /*%%SmartyHeaderCode:47478134855acaecdb72203-87513772%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '091e940e16e2c0ded7645eb5d732fc983a233ba0' => 
    array (
      0 => '/var/www/html/Collivery-Prestashop/modules/blockfacebook/blockfacebook.tpl',
      1 => 1435846512,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '47478134855acaecdb72203-87513772',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'facebookurl' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_55acaecdbbc7a8_31130633',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55acaecdbbc7a8_31130633')) {function content_55acaecdbbc7a8_31130633($_smarty_tpl) {?>
<?php if ($_smarty_tpl->tpl_vars['facebookurl']->value!='') {?>
<div id="fb-root"></div>
<div id="facebook_block" class="col-xs-4">
	<h4 ><?php echo smartyTranslate(array('s'=>'Follow us on Facebook','mod'=>'blockfacebook'),$_smarty_tpl);?>
</h4>
	<div class="facebook-fanbox">
		<div class="fb-like-box" data-href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['facebookurl']->value, ENT_QUOTES, 'UTF-8', true);?>
" data-colorscheme="light" data-show-faces="true" data-header="false" data-stream="false" data-show-border="false">
		</div>
	</div>
</div>
<?php }?>
<?php }} ?>
