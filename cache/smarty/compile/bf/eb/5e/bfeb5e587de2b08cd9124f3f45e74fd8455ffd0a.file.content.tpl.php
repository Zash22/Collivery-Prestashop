<?php /* Smarty version Smarty-3.1.19, created on 2015-07-27 14:07:48
         compiled from "/var/www/html/Collivery-Prestashop/admin6336ud39b/themes/default/template/content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:114273165355b61f14168cb9-24522232%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bfeb5e587de2b08cd9124f3f45e74fd8455ffd0a' => 
    array (
      0 => '/var/www/html/Collivery-Prestashop/admin6336ud39b/themes/default/template/content.tpl',
      1 => 1435846488,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '114273165355b61f14168cb9-24522232',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_55b61f141a0c47_58590586',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55b61f141a0c47_58590586')) {function content_55b61f141a0c47_58590586($_smarty_tpl) {?>
<div id="ajax_confirmation" class="alert alert-success hide"></div>

<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div><?php }} ?>
