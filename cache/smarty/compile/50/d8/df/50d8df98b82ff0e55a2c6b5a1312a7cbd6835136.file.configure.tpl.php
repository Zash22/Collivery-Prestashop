<?php /* Smarty version Smarty-3.1.19, created on 2015-07-15 17:33:04
         compiled from "/var/www/html/Collivery-Prestashop/modules/cronjobs/views/templates/admin/configure.tpl" */ ?>
<?php /*%%SmartyHeaderCode:88992223755a67d30c23a79-42168222%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '50d8df98b82ff0e55a2c6b5a1312a7cbd6835136' => 
    array (
      0 => '/var/www/html/Collivery-Prestashop/modules/cronjobs/views/templates/admin/configure.tpl',
      1 => 1436881980,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '88992223755a67d30c23a79-42168222',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'module_dir' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_55a67d30cb69b7_90030037',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55a67d30cb69b7_90030037')) {function content_55a67d30cb69b7_90030037($_smarty_tpl) {?>

<div class="panel">
	<h3><?php echo smartyTranslate(array('s'=>'What does this module do?','mod'=>'cronjobs'),$_smarty_tpl);?>
</h3>
	<p>
		<img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['module_dir']->value, ENT_QUOTES, 'UTF-8', true);?>
/logo.png" class="pull-left" id="cronjobs-logo" />
		<?php echo smartyTranslate(array('s'=>'Originally, cron is a Unix system tool that provides time-based job scheduling: you can create many cron jobs, which are then run periodically at fixed times, dates, or intervals.','mod'=>'cronjobs'),$_smarty_tpl);?>

		<br/>
		<?php echo smartyTranslate(array('s'=>'This module provides you with a cron-like tool: you can create jobs which will call a given set of secure URLs to your PrestaShop store, thus triggering updates and other automated tasks.','mod'=>'cronjobs'),$_smarty_tpl);?>

	</p>
</div>
<?php }} ?>
