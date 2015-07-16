<?php /*%%SmartyHeaderCode:151812537655a77eeb353b62-45090238%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4e11e3b9d75b9359295bc3b72122dd1602a5e8dc' => 
    array (
      0 => '/var/www/html/Collivery-Prestashop/themes/default-bootstrap/modules/blockmanufacturer/blockmanufacturer.tpl',
      1 => 1435846490,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '151812537655a77eeb353b62-45090238',
  'variables' => 
  array (
    'display_link_manufacturer' => 0,
    'link' => 0,
    'manufacturers' => 0,
    'text_list' => 0,
    'text_list_nb' => 0,
    'manufacturer' => 0,
    'form_list' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_55a77eeb71b954_87932349',
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55a77eeb71b954_87932349')) {function content_55a77eeb71b954_87932349($_smarty_tpl) {?>
<!-- Block manufacturers module -->
<div id="manufacturers_block_left" class="block blockmanufacturer">
	<p class="title_block">
					<a href="http://localhost/Collivery-Prestashop/index.php?controller=manufacturer" title="Manufacturers">
						Manufacturers
					</a>
			</p>
	<div class="block_content list-block">
								<ul>
														<li class="last_item">
						<a 
						href="http://localhost/Collivery-Prestashop/index.php?id_manufacturer=1&amp;controller=manufacturer" title="More about Fashion Manufacturer">
							Fashion Manufacturer
						</a>
					</li>
												</ul>
										<form action="/Collivery-Prestashop/index.php" method="get">
					<div class="form-group selector1">
						<select class="form-control" name="manufacturer_list">
							<option value="0">All manufacturers</option>
													<option value="http://localhost/Collivery-Prestashop/index.php?id_manufacturer=1&amp;controller=manufacturer">Fashion Manufacturer</option>
												</select>
					</div>
				</form>
						</div>
</div>
<!-- /Block manufacturers module -->
<?php }} ?>
