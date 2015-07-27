<?php /*%%SmartyHeaderCode:3587428655b21437b37c99-39664978%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b4dbfce5396db33fa425bd1c53ec8ccd49e73ee5' => 
    array (
      0 => '/var/www/html/Collivery-Prestashop/themes/default-bootstrap/modules/blockmyaccountfooter/blockmyaccountfooter.tpl',
      1 => 1435846490,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3587428655b21437b37c99-39664978',
  'variables' => 
  array (
    'link' => 0,
    'returnAllowed' => 0,
    'voucherAllowed' => 0,
    'HOOK_BLOCK_MY_ACCOUNT' => 0,
    'is_logged' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_55b21437e025e2_61094432',
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55b21437e025e2_61094432')) {function content_55b21437e025e2_61094432($_smarty_tpl) {?>
<!-- Block myaccount module -->
<section class="footer-block col-xs-12 col-sm-4">
	<h4><a href="http://localhost/Collivery-Prestashop/index.php?controller=my-account" title="Manage my customer account" rel="nofollow">My account</a></h4>
	<div class="block_content toggle-footer">
		<ul class="bullet">
			<li><a href="http://localhost/Collivery-Prestashop/index.php?controller=history" title="My orders" rel="nofollow">My orders</a></li>
						<li><a href="http://localhost/Collivery-Prestashop/index.php?controller=order-slip" title="My credit slips" rel="nofollow">My credit slips</a></li>
			<li><a href="http://localhost/Collivery-Prestashop/index.php?controller=addresses" title="My addresses" rel="nofollow">My addresses</a></li>
			<li><a href="http://localhost/Collivery-Prestashop/index.php?controller=identity" title="Manage my personal information" rel="nofollow">My personal info</a></li>
						
            <li><a href="http://localhost/Collivery-Prestashop/index.php?mylogout" title="Sign out" rel="nofollow">Sign out</a></li>		</ul>
	</div>
</section>
<!-- /Block myaccount module -->
<?php }} ?>
