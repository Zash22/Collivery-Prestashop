<?php

include_once __DIR__."/Mds/Cache.php";
include_once __DIR__."/Mds/Collivery.php";

// use Mds\Collivery;
// use Mds\Cache;

class Mds extends CarrierModule
{
	private $_html = '';

	function __construct()
	{
		$this->name = 'mds';
		$this->tab = 'shipping_logistics';
		$this->author = 'Nicole Johnson';
		$this->version = '1.0';
		parent::__construct();
		$this->displayName = $this->l('MDS Shipping Module');
		$this->description = $this->l('MDS courier integration');
	}

	public function install()
	{
		parent::install();
		if (!$this->registerHook('leftColumn'))
			return false;
			
// 		if (!$this->createCarriers()) { //function for creating new currier
//             return FALSE;
//         }

        
	}
		
	public function getContent()
	{
		if (Tools::isSubmit('submit')) {
			Configuration::updateValue($this->name.'_email', Tools::getValue('your_email'));
			Configuration::updateValue($this->name.'_password', Tools::getValue('your_password'));
			Configuration::updateValue($this->name.'_riskcover', Tools::getValue('your_riskcover'));

		}
		$this->_displayForm();
		return $this->_html;
	}
		
	private function _displayForm()
	{
		$this->_html .= '
				<form action="'.$_SERVER['REQUEST_URI'].'" method="post">
				<fieldset>
				<label>'.$this->l('MDS account email').'</label>
				<div class="margin-form">
					<input type="text" name="your_email" value="'. Configuration::get($this->name.'_email') .'" />
					</div>
				<label>'.$this->l('MDS account password').'</label>
				<div class="margin-form">
					<input type="text" name="your_password"  value="'. Configuration::get($this->name.'_password') .'" />
				</div>
				<label>'.$this->l('MDS risk cover').'</label>
				<div class="margin-form">
					<input type="checkbox" name="your_riskcover"  />
				</div>
					<input type="submit" name="submit" value="'.$this->l('Update').'" class="button" />
				</fieldset>
				</form>';
	}
		
	public function hookLeftColumn()
	{
		return '<div >
					<h4>'. Configuration::get($this->name.'_email') . '</h4>
					<h4>'. Configuration::get($this->name.'_password') . '</h4>
				  </div> YELLOW!';
	}

	public function getOrderShippingCost($params, $shipping_cost)
	{
		return $shipping_cost;
	}

	public function getOrderShippingCostExternal($params)
	{
		return false;
	}
}



// class MdsAddress extends AddressCore {
class MdsAddress extends AddressControllerCore
 {

	public function __construct () {
		$this->hi();
        parent::__construct();
	
    }

    public function initContent()
	{
		parent::initContent();
		



		
		

	}
	
	public function hi ()
	{
				

		return "helloo:";
    }
    
 }
 
$acc = new MdsAddress();

echo $acc->hi();

			








