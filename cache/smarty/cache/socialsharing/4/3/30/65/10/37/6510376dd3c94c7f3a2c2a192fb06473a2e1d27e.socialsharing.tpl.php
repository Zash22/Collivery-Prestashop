<?php /*%%SmartyHeaderCode:32410110255a9a425b615f6-77776001%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6510376dd3c94c7f3a2c2a192fb06473a2e1d27e' => 
    array (
      0 => '/var/www/html/Collivery-Prestashop/modules/socialsharing/views/templates/hook/socialsharing.tpl',
      1 => 1435846612,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '32410110255a9a425b615f6-77776001',
  'variables' => 
  array (
    'PS_SC_TWITTER' => 0,
    'PS_SC_FACEBOOK' => 0,
    'PS_SC_GOOGLE' => 0,
    'PS_SC_PINTEREST' => 0,
    'module_dir' => 0,
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_55a9a425cdf174_67003386',
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55a9a425cdf174_67003386')) {function content_55a9a425cdf174_67003386($_smarty_tpl) {?>
	<p class="socialsharing_product list-inline no-print">
					<button data-type="twitter" type="button" class="btn btn-default btn-twitter social-sharing">
				<i class="icon-twitter"></i> Tweet
				<!-- <img src="http://localhost/Collivery-Prestashop/modules/socialsharing/img/twitter.gif" alt="Tweet" /> -->
			</button>
							<button data-type="facebook" type="button" class="btn btn-default btn-facebook social-sharing">
				<i class="icon-facebook"></i> Share
				<!-- <img src="http://localhost/Collivery-Prestashop/modules/socialsharing/img/facebook.gif" alt="Facebook Like" /> -->
			</button>
							<button data-type="google-plus" type="button" class="btn btn-default btn-google-plus social-sharing">
				<i class="icon-google-plus"></i> Google+
				<!-- <img src="http://localhost/Collivery-Prestashop/modules/socialsharing/img/google.gif" alt="Google Plus" /> -->
			</button>
							<button data-type="pinterest" type="button" class="btn btn-default btn-pinterest social-sharing">
				<i class="icon-pinterest"></i> Pinterest
				<!-- <img src="http://localhost/Collivery-Prestashop/modules/socialsharing/img/pinterest.gif" alt="Pinterest" /> -->
			</button>
			</p>
<?php }} ?>
