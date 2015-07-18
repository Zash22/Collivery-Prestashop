<?php

// Class AdminAddressesController extends AdminAddressesControllerCore
//Class AdminAddressesController extends AdminAddressesControllerCore
class AdminAddressesController extends AdminAddressesControllerCore
{

	public $required_fields;
	
public function __construct()

	
	{
				//$this->className = 'AdminAddressesController';
			parent::__construct();
	}
	
			//$required_fields = AddressFormat::getFieldsRequired();


	public function renderForm()
	{
		$this->fields_form = array(
			'legend' => array(
				'title' => $this->l('Addresses'),
				'icon' => 'icon-envelope-alt'
			),
			'input' => array(
				array(
					'type' => 'text_customer',
					'label' => $this->l('Customer'),
					'name' => 'id_customer',
					'required' => false,
				),
				array(
					'type' => 'text',
					'label' => $this->l('Identification Number'),
					'name' => 'dni',
					'required' => false,
					'col' => '4',
					'hint' => $this->l('huguiu')
				),
				array(
					'type' => 'text',
					'label' => $this->l('My Custom Field'),
					'name' => 'my_custom_field',
					'required' => false,
					'col' => '4',
					'hint' => $this->l('Some custom text!')
				),				
				array(
					'type' => 'text',
					'label' => $this->l('Address alias'),
					'name' => 'alias',
					'required' => true,
					'col' => '4',
					'hint' => $this->l('Invalid characters:').' &lt;&gt;;=#{}'
				),
				array(
					'type' => 'text',
					'label' => $this->l('Home phone'),
					'name' => 'phone',
					'required' => false,
					'col' => '4',
					'hint' => Configuration::get('PS_ONE_PHONE_AT_LEAST') ? sprintf($this->l('You must register at least one phone number.')) : ''
				),
				array(
					'type' => 'text',
					'label' => $this->l('Mobile phone'),
					'name' => 'phone_mobile',
					'required' => false,
					'col' => '4',
					'hint' => Configuration::get('PS_ONE_PHONE_AT_LEAST') ? sprintf($this->l('You must register at least one phone number.')) : ''
				),
				array(
					'type' => 'textarea',
					'label' => $this->l('Other'),
					'name' => 'other',
					'required' => false,
					'cols' => 15,
					'rows' => 3,
					'hint' => $this->l('Forbidden characters:').' &lt;&gt;;=#{}'
				),
			),
			'submit' => array(
				'title' => $this->l('Save'),
			)
		);
		$id_customer = (int)Tools::getValue('id_customer');
		if (!$id_customer && Validate::isLoadedObject($this->object))
			$id_customer = $this->object->id_customer;
		if ($id_customer)
		{
			$customer = new Customer((int)$id_customer);
			$token_customer = Tools::getAdminToken('AdminCustomers'.(int)(Tab::getIdFromClassName('AdminCustomers')).(int)$this->context->employee->id);
		}

		$this->tpl_form_vars = array(
			'customer' => isset($customer) ? $customer : null,
			'tokenCustomer' => isset ($token_customer) ? $token_customer : null
		);

		// Order address fields depending on country format
		$addresses_fields = $this->processAddressFormat();
		// we use  delivery address
		$addresses_fields = $addresses_fields['dlv_all_fields'];

		$temp_fields = array();

		foreach ($addresses_fields as $addr_field_item)
		{
			if ($addr_field_item == 'company')
			{
				$temp_fields[] = array(
					'type' => 'text',
					'label' => $this->l('Company'),
					'name' => 'company',
					'required' => false,
					'col' => '4',
					'hint' => $this->l('Invalid characters:').' &lt;&gt;;=#{}'
				);
				$temp_fields[] = array(
					'type' => 'text',
					'label' => $this->l('VAT number'),
					'col' => '2',
					'name' => 'vat_number'
				);
			}
			else if ($addr_field_item == 'lastname')
			{
				if (isset($customer) &&
					!Tools::isSubmit('submit'.strtoupper($this->table)) &&
					Validate::isLoadedObject($customer) &&
					!Validate::isLoadedObject($this->object))
					$default_value = $customer->lastname;
				else
					$default_value = '';

				$temp_fields[] = array(
					'type' => 'text',
					'label' => $this->l('Last Name'),
					'name' => 'lastname',
					'required' => true,
					'col' => '4',
					'hint' => $this->l('Invalid characters:').' 0-9!&amp;lt;&amp;gt;,;?=+()@#"�{}_$%:',
					'default_value' => $default_value,
				);
			}
			else if ($addr_field_item == 'firstname')
			{
				if (isset($customer) &&
					!Tools::isSubmit('submit'.strtoupper($this->table)) &&
					Validate::isLoadedObject($customer) &&
					!Validate::isLoadedObject($this->object))
					$default_value = $customer->firstname;
 	 	 	 	else
 	 	 	 		$default_value = '';

				$temp_fields[] = array(
					'type' => 'text',
					'label' => $this->l('First Name'),
					'name' => 'firstname',
					'required' => true,
					'col' => '4',
					'hint' => $this->l('Invalid characters:').' 0-9!&amp;lt;&amp;gt;,;?=+()@#"�{}_$%:',
					'default_value' => $default_value,
				);
			}
			else if ($addr_field_item == 'address1')
			{
				$temp_fields[] = array(
					'type' => 'text',
					'label' => $this->l('Address'),
					'name' => 'address1',
					'col' => '6',
					'required' => true,
				);
			}
			else if ($addr_field_item == 'address2')
			{
				$temp_fields[] = array(
					'type' => 'text',
					'label' => $this->l('Address').' (2)',
					'name' => 'address2',
					'col' => '6',
					'required' => false,
				);
			}
			elseif ($addr_field_item == 'postcode')
			{
				$temp_fields[] = array(
					'type' => 'text',
					'label' => $this->l('Zip/Postal Code'),
					'name' => 'postcode',
					'col' => '2',
					'required' => true,
				);
			}
			else if ($addr_field_item == 'city')
			{
				$temp_fields[] = array(
					'type' => 'text',
					'label' => $this->l('City'),
					'name' => 'city',
					'col' => '4',
					'required' => true,
				);
			}
			
			else if ($addr_field_item == 'id_town')
			{
			
			$temp_fields[] = array(
					'type' => 'text',
					'label' => $this->l('Town'),
					'name' => 'id_town',
					'required' => true,
					'col' => '4',
// 					'options' => array(
// 						'query' => array(),
// 						'id' => 'id_town',
// 						'name' => 'name'
// 						'options' => array(
// 						'query' => array(),
// 						'id' => 'id_state',
// 						'name' => 'name'
'required' => true,
					
				);
				
				}
			else if ($addr_field_item == 'country' || $addr_field_item == 'Country:name')
			{
				$temp_fields[] = array(
					'type' => 'select',
					'label' => $this->l('Country'),
					'name' => 'id_country',
					'required' => false,
					'col' => '4',
					'default_value' => (int)$this->context->country->id,
					'options' => array(
						'query' => Country::getCountries($this->context->language->id),
						'id' => 'id_country',
						'name' => 'name'
					)
				);
				$temp_fields[] = array(
					'type' => 'select',
					'label' => $this->l('State'),
					'name' => 'id_state',
					'required' => false,
					'col' => '4',
					'options' => array(
						'query' => array(),
						'id' => 'id_state',
						'name' => 'name'
					)
				);
// 				$temp_fields[] = array(
// 					'type' => 'select',
// 					'label' => $this->l('Town'),
// 					'name' => 'id_town',
// 					'required' => true,
// 					'col' => '4',
// // 					'options' => array(
// // 						'query' => array(),
// // 						'id' => 'id_town',
// // 						'name' => 'name'
// 						'options' => array(
// 						'query' => array(),
// 						'id' => 'id_state',
// 						'name' => 'name'
// 					)
// 				);
				$temp_fields[] = array(
				'type' => 'select',
				'label' => $this->l('Suburb'),
				'name' => 'id_suburb',
				'required' => true,
				'col' => '4',
				'options' => array(
					'query' => array(),
					'id' => 'id_suburb',
					'name' => 'name'
				)
				);
				$temp_fields[] = array(
					'type' => 'select',
					'label' => $this->l('Location Type'),
					'name' => 'id_delivery_location_type',
					'required' => true,
					'col' => '4',
					'options' => array(
						'query' => array(),
						'id' => 'id_delivery_location_type',
						'name' => 'name'
					)
				);
			}
		}

		// merge address format with the rest of the form
		array_splice($this->fields_form['input'], 3, 0, $temp_fields);

		return AdminController::renderForm();
	}
	
	
		public static function startAdminAddressOverride()
	{
		
		
		return $this->renderForm();


		
	}

}
