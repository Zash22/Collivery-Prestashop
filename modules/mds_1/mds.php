<?php

// include_once __DIR__."/Mds/Cache.php";
// include_once __DIR__."/Mds/Collivery.php";

// use Mds\Collivery;
// use Mds\Cache;

class mds extends CarrierModule
{
	private $_html = '';
	const PREFIX = 'mds_';
	private  $_hooks = array(
		'actionCarrierUpdate', 'leftColumn' ); //For control change of the carrier's ID (id_carrier), the module must use the updateCarrier hook.
    
     private $_carriers = array(
		'My new carrier' => 'mds');
	
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
		if (parent::install()) {
			foreach ($this->_hooks as $hook) 
			{
				if (!$this->registerHook($hook)) 
				{
					return FALSE;
				}
			}

			if (!$this->createCarriers()) 
			{ //function for creating new currier
				return FALSE;
			}

			return TRUE;
		}

    return FALSE;

	}
	
	
	public   function deleteCarriers()
	{
		foreach ($this->_carriers as $value) 
		{
			$tmp_carrier_id = Configuration::get(self::PREFIX . $value);
			$carrier = new Carrier($tmp_carrier_id);
			$carrier->delete();
		}

		return TRUE;
	}
	
	public function uninstall()
	{
		if (parent::uninstall()) {
			foreach ($this->_hooks as $hook) {
				if (!$this->unregisterHook($hook)) {
					return FALSE;
				}
			}

			if (!$this->deleteCarriers()) {
				return FALSE;
			}

			return TRUE;
		}

		return FALSE;
	}
	
	
	public   function createCarriers()
	{
		foreach ($this->_carriers as $key => $value) {
			//Create new carrier
			$carrier = new Carrier();
			$carrier->name = $key;
			$carrier->active = TRUE;
			$carrier->deleted = 0;
			$carrier->shipping_handling = FALSE;
			$carrier->range_behavior = 0;
			$carrier->delay[Configuration::get('PS_LANG_DEFAULT')] = $key;
			$carrier->shipping_external = TRUE;
			$carrier->is_module = TRUE;
			$carrier->external_module_name = $this->name;
			$carrier->need_range = TRUE;

			if ($carrier->add()) {
				$groups = Group::getGroups(true);
				foreach ($groups as $group) {
					Db::getInstance()->autoExecute(_DB_PREFIX_ . 'carrier_group', array(
						'id_carrier' => (int) $carrier->id,
						'id_group' => (int) $group['id_group']
					), 'INSERT');
				}

				$rangePrice = new RangePrice();
				$rangePrice->id_carrier = $carrier->id;
				$rangePrice->delimiter1 = '0';
				$rangePrice->delimiter2 = '1000000';
				$rangePrice->add();

				$rangeWeight = new RangeWeight();
				$rangeWeight->id_carrier = $carrier->id;
				$rangeWeight->delimiter1 = '0';
				$rangeWeight->delimiter2 = '1000000';
				$rangeWeight->add();

				$zones = Zone::getZones(true);
				foreach ($zones as $z) {
					Db::getInstance()->autoExecute(_DB_PREFIX_ . 'carrier_zone',
						array('id_carrier' => (int) $carrier->id, 'id_zone' => (int) $z['id_zone']), 'INSERT');
					Db::getInstance()->autoExecuteWithNullValues(_DB_PREFIX_ . 'delivery',
						array('id_carrier' => $carrier->id, 'id_range_price' => (int) $rangePrice->id, 'id_range_weight' => NULL, 'id_zone' => (int) $z['id_zone'], 'price' => '0'), 'INSERT');
					Db::getInstance()->autoExecuteWithNullValues(_DB_PREFIX_ . 'delivery',
						array('id_carrier' => $carrier->id, 'id_range_price' => NULL, 'id_range_weight' => (int) $rangeWeight->id, 'id_zone' => (int) $z['id_zone'], 'price' => '0'), 'INSERT');
				}

				copy(dirname(__FILE__) . '/views/img/' . $value . '.jpg', _PS_SHIP_IMG_DIR_ . '/' . (int) $carrier->id . '.jpg'); //assign carrier logo

				Configuration::updateValue(self::PREFIX . $value, $carrier->id);
				Configuration::updateValue(self::PREFIX . $value . '_reference', $carrier->id);
			}
		}

		return TRUE;
	}
		
	public function getContent()
	{
		if (Tools::isSubmit('submit')) 
		{
			Configuration::updateValue($this->name.'_email', Tools::getValue('your_email'));
			Configuration::updateValue($this->name.'_password', Tools::getValue('your_password'));
			Configuration::updateValue($this->name.'_riskcover', Tools::getValue('your_riskcover'));

		}
		$this->_displayForm();
		return $this->_html;
	}
		
	public  function _displayForm()
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
		//return 777;
	}

	public function getOrderShippingCostExternal($params)
	{
		return false;
	}

	public function hookActionCarrierUpdate($params)
	{
		if ($params['carrier']->id_reference == Configuration::get(self::PREFIX . 'swipbox_reference')) 
		{
			Configuration::updateValue(self::PREFIX . 'swipbox', $params['carrier']->id);
		}
	}
}



// class MdsAddress extends AddressCore {
// class MdsAddress extends AddressControllerCore
//  {
// 
// 	public function __construct () {
// 		$this->hi();
//         parent::__construct();
// 	
//     }
// 
//     public function initContent()
// 	{
// 		parent::initContent();
// 		
// 	}
// 	
// 	public function hi ()
// 	{
// 				
// 
// 		return "helloo:";
//     }
//     
//  }
//  
// $acc = new MdsAddress();
// 
// echo $acc->hi();

			








