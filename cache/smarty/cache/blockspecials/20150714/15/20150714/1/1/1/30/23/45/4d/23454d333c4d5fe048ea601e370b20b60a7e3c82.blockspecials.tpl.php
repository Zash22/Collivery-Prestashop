<?php /*%%SmartyHeaderCode:45224972455a5148b860f34-81697699%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '23454d333c4d5fe048ea601e370b20b60a7e3c82' => 
    array (
      0 => '/var/www/html/Collivery-Prestashop/themes/default-bootstrap/modules/blockspecials/blockspecials.tpl',
      1 => 1435846490,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '45224972455a5148b860f34-81697699',
  'variables' => 
  array (
    'link' => 0,
    'special' => 0,
    'PS_CATALOG_MODE' => 0,
    'priceDisplay' => 0,
    'specific_prices' => 0,
    'priceWithoutReduction_tax_excl' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_55a5148bd91c10_13877843',
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55a5148bd91c10_13877843')) {function content_55a5148bd91c10_13877843($_smarty_tpl) {?>
<!-- MODULE Block specials -->
<div id="special_block_right" class="block">
	<p class="title_block">
        <a href="http://localhost/Collivery-Prestashop/index.php?controller=prices-drop" title="Specials">
            Specials
        </a>
    </p>
	<div class="block_content products-block">
    		<ul>
        	<li class="clearfix">
            	<a class="products-block-image" href="http://localhost/Collivery-Prestashop/index.php?id_product=5&amp;controller=product">
                    <img 
                    class="replace-2x img-responsive" 
                    src="http://localhost/Collivery-Prestashop/img/p/1/2/12-small_default.jpg" 
                    alt="" 
                    title="Printed Summer Dress" />
                </a>
                <div class="product-content">
                	<h5>
                        <a class="product-name" href="http://localhost/Collivery-Prestashop/index.php?id_product=5&amp;controller=product" title="Printed Summer Dress">
                            Printed Summer Dress
                        </a>
                    </h5>
                                        	<p class="product-description">
                            Long printed dress with thin...
                        </p>
                                        <div class="price-box">
                    	                        	<span class="price special-price">
                                                                    28,98 €                            </span>
                                                                                                                                 <span class="price-percent-reduction">-5%</span>
                                                                                         <span class="old-price">
                                                                    30,51 €                            </span>
                            
                                            </div>
                </div>
            </li>
		</ul>
		<div>
			<a 
            class="btn btn-default button button-small" 
            href="http://localhost/Collivery-Prestashop/index.php?controller=prices-drop" 
            title="All specials">
                <span>All specials<i class="icon-chevron-right right"></i></span>
            </a>
		</div>
    	</div>
</div>
<!-- /MODULE Block specials -->
<?php }} ?>
