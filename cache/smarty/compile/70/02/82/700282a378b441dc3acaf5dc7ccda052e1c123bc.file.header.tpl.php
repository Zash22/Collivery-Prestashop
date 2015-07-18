<?php /* Smarty version Smarty-3.1.19, created on 2015-07-18 02:26:44
         compiled from "/var/www/html/Collivery-Prestashop/pdf/header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:56111721355a99d446ce0e7-89607714%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '700282a378b441dc3acaf5dc7ccda052e1c123bc' => 
    array (
      0 => '/var/www/html/Collivery-Prestashop/pdf/header.tpl',
      1 => 1435846488,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '56111721355a99d446ce0e7-89607714',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'logo_path' => 0,
    'width_logo' => 0,
    'height_logo' => 0,
    'header' => 0,
    'date' => 0,
    'title' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_55a99d44782cc5_07721548',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55a99d44782cc5_07721548')) {function content_55a99d44782cc5_07721548($_smarty_tpl) {?>
<table style="width: 100%">
<tr>
	<td style="width: 50%">
		<?php if ($_smarty_tpl->tpl_vars['logo_path']->value) {?>
			<img src="<?php echo $_smarty_tpl->tpl_vars['logo_path']->value;?>
" style="width:<?php echo $_smarty_tpl->tpl_vars['width_logo']->value;?>
px; height:<?php echo $_smarty_tpl->tpl_vars['height_logo']->value;?>
px;" />
		<?php }?>
	</td>
	<td style="width: 50%; text-align: right;">
		<table style="width: 100%">
			<tr>
				<td style="font-weight: bold; font-size: 14pt; color: #444; width: 100%"><?php if (isset($_smarty_tpl->tpl_vars['header']->value)) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['header']->value, ENT_QUOTES, 'UTF-8', true);?>
<?php }?></td>
			</tr>
			<tr>
				<td style="font-size: 14pt; color: #9E9F9E"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['date']->value, ENT_QUOTES, 'UTF-8', true);?>
</td>
			</tr>
			<tr>
				<td style="font-size: 14pt; color: #9E9F9E"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES, 'UTF-8', true);?>
</td>
			</tr>
		</table>
	</td>
</tr>
</table>

<?php }} ?>
