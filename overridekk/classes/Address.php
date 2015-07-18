<?php


class Address extends AddressCore
{

	public $id_delivery_location_type;
	public $id_town;
	public $id_suburb;
	public $form;


	
public	function __construct($id_address)


{

//self::$definition['fields']['id_town'] = array('type' => self::TYPE_STRING, 'validate' => 'isGenericName');

	

	

parent::__construct();

			//	include '../controllers/admin/AdminAddressesController.php';
				
				

	
				
				

				//$this->collivery = $this->mdsService->returnColliveryClass();

}


public static $definition = array(
		'table' => 'address',
		'primary' => 'id_address',
		'fields' => array(
			'id_customer' => 		array('type' => self::TYPE_INT, 'validate' => 'isNullOrUnsignedId', 'copy_post' => false),
			'id_manufacturer' => 	array('type' => self::TYPE_INT, 'validate' => 'isNullOrUnsignedId', 'copy_post' => false),
			'id_supplier' => 		array('type' => self::TYPE_INT, 'validate' => 'isNullOrUnsignedId', 'copy_post' => false),
			'id_warehouse' => 		array('type' => self::TYPE_INT, 'validate' => 'isNullOrUnsignedId', 'copy_post' => false),
			'id_country' => 		array('type' => self::TYPE_INT, 'validate' => 'isUnsignedId', 'required' => true),
			'id_town'=> 			array('type' => self::TYPE_INT, 'validate' => 'isNullOrUnsignedId'),
			'id_suburb' => 			array('type' => self::TYPE_INT, 'validate' => 'isNullOrUnsignedId'),
			'alias' => 				array('type' => self::TYPE_STRING, 'validate' => 'isGenericName', 'required' => true, 'size' => 32),
			'company' => 			array('type' => self::TYPE_STRING, 'validate' => 'isGenericName', 'size' => 64),
			'lastname' => 			array('type' => self::TYPE_STRING, 'validate' => 'isName', 'required' => true, 'size' => 32),
			'firstname' => 			array('type' => self::TYPE_STRING, 'validate' => 'isName', 'required' => true, 'size' => 32),
			'vat_number' =>	 		array('type' => self::TYPE_STRING, 'validate' => 'isGenericName'),
			'address1' => 			array('type' => self::TYPE_STRING, 'validate' => 'isAddress', 'required' => true, 'size' => 128),
			'address2' => 			array('type' => self::TYPE_STRING, 'validate' => 'isAddress', 'size' => 128),
			'postcode' => 			array('type' => self::TYPE_STRING, 'validate' => 'isPostCode', 'size' => 12),
			'city' => 				array('type' => self::TYPE_STRING, 'validate' => 'isCityName', 'required' => true, 'size' => 64),
			'other' => 				array('type' => self::TYPE_STRING, 'validate' => 'isMessage', 'size' => 300),
			'phone' => 				array('type' => self::TYPE_STRING, 'validate' => 'isPhoneNumber', 'size' => 32),
			'phone_mobile' => 		array('type' => self::TYPE_STRING, 'validate' => 'isPhoneNumber', 'size' => 32),
			'dni' => 				array('type' => self::TYPE_STRING, 'validate' => 'isDniLite', 'size' => 16),
			'deleted' => 			array('type' => self::TYPE_BOOL, 'validate' => 'isBool', 'copy_post' => false),
			'date_add' => 			array('type' => self::TYPE_DATE, 'validate' => 'isDateFormat', 'copy_post' => false),
			'date_upd' => 			array('type' => self::TYPE_DATE, 'validate' => 'isDateFormat', 'copy_post' => false),
			'id_delivery_location_type' => 		array('type' => self::TYPE_INT, 'validate' => 'isNullOrUnsignedId'),
			),
	);
	

// public function show()
// 	{
// 		$arra = new Address();
// 					$outs = $arra->startAdminAddressOverride;
// 	
// 	}

	public static function getFieldsValidate()
	{
		$tmp_addr = new Address();
		$out = $tmp_addr->fieldsValidate;

		unset($tmp_addr);
		//print_r($out);
		return $out;
	}
	
	public static function aliasExist($alias, $id_address, $id_customer)
	{
		$query = new DbQuery();
		$query->select('count(*)');
		$query->from('address');
		$query->where('alias = \''.pSQL($alias).'\'');
		$query->where('id_address != '.(int)$id_address);
		$query->where('id_customer = '.(int)$id_customer);
		$query->where('deleted = 0');
		
		//print_r(Db::getInstance(_PS_USE_SQL_SLAVE_)->getValue($query));

		return Db::getInstance(_PS_USE_SQL_SLAVE_)->getValue($query);
	}

	public function getFieldsRequiredDB()
	{
		$this->cacheFieldsRequiredDatabase(false);
		if (isset(self::$fieldsRequiredDatabase['Address']))
			return self::$fieldsRequiredDatabase['Address'];
		return array();
	}
	
	
	
	include_once '../controllers/admin/AdminAddressesController.php';
	
		$this->renderForm();

	
	
}