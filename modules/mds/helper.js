
function replaceText(oldText, newText, node){ 
  node = node || document.body; 

  var childs = node.childNodes, i = 0;

  while(node = childs[i]){ 
    if (node.nodeType == Node.TEXT_NODE){ 
      node.textContent = node.textContent.replace(oldText, newText); 
    } else { 
      replaceText(oldText, newText, node); 
    } 
    i++; 
  } 
}

function addDropDownSuburb()
{

$("#city")
    .replaceWith('<select id="city" name="city" >' +
	'<option value="">-</option>' +
          '<option value="1">1</option>' +
          '<option value="2">2</option>' +
          '<option value="3">3</option>' +
          '<option value="4">4</option>' +
          '<option value="5">5</option>' +
        '</select>');
}

function addDropDownLocationType(location_types)
{
	//	alert (location_types.length);
	
// 	for (counter=0; counter<10; counter++)
// 	{
//    document.write(location_types[counter] + "<br>");
//    //alert (location_types[counter] + "<br >");
// 	}
//	location_types.toString();
	
// 	 var temp = new Array();
	
var text;

for (counter=0; counter<16; counter++)
		{

			text += "\'<option value=\"location_types[counter]\">\'" +  location_types[counter]  + "\'</option>\' + ";
		}
alert(text);
	
	
$("#address2")
    .replaceWith('<select id="address2" name="address2" >' +
	'<option value="">-</option>' +
	text +

	 '</select>');
          
          
          
          
/*          
          '<option value="1">1</option>' +
          '<option value="2">2</option>' +
          '<option value="3">3</option>' +
          '<option value="4">4</option>' +
          '<option value="5">5</option>' +
        '</select>');
	*/

	
	
	

  

}





function test()
{
// 	    var jArray=  json_encode($phpArray ); 
// 
//     for(var i=0;i<6;i++){
//         alert(jArray[i]);
//     }
	
}






// function renderForm()
// 	{
// 		$this->fields_form = array(
// 			'legend' => array(
// 				'title' => $this->l('Addresses'),
// 				'icon' => 'icon-envelope-alt'
// 			),
// 			'input' => array(
// 				array(
// 					'type' => 'text_customer',
// 					'label' => $this->l('Customer'),
// 					'name' => 'id_customer',
// 					'required' => false,
// 				),
// 				array(
// 					'type' => 'text',
// 					'label' => $this->l('Identification Number'),
// 					'name' => 'dni',
// 					'required' => false,
// 					'col' => '4',
// 					'hint' => $this->l('DNI /E')
// 				),
// 				array(
// 					'type' => 'text',
// 					'label' => $this->l('Address alias'),
// 					'name' => 'alias',
// 					'required' => true,
// 					'col' => '4',
// 					'hint' => $this->l('Invalid characters:').' &lt;&gt;;=#{}'
// 				),
// 				array(
// 					'type' => 'textarea',
// 					'label' => $this->l('Other'),
// 					'name' => 'other',
// 					'required' => false,
// 					'cols' => 15,
// 					'rows' => 3,
// 					'hint' => $this->l('Forbidden characters:').' &lt;&gt;;=#{}'
// 				),
// 				array(
// 					'type' => 'hidden',
// 					'name' => 'id_order'
// 				),
// 				array(
// 					'type' => 'hidden',
// 					'name' => 'address_type',
// 				),
// 				array(
// 					'type' => 'hidden',
// 					'name' => 'back'
// 				)
// 			),
// 			'submit' => array(
// 				'title' => $this->l('Save'),
// 			)
// 		);
// 
// 		$this->fields_value['address_type'] = (int)Tools::getValue('address_type', 1);
// 
// 		$id_customer = (int)Tools::getValue('id_customer');
// 		if (!$id_customer && Validate::isLoadedObject($this->object))
// 			$id_customer = $this->object->id_customer;
// 		if ($id_customer)
// 		{
// 			$customer = new Customer((int)$id_customer);
// 			$token_customer = Tools::getAdminToken('AdminCustomers'.(int)(Tab::getIdFromClassName('AdminCustomers')).(int)$this->context->employee->id);
// 		}
// 
// 		$this->tpl_form_vars = array(
// 			'customer' => isset($customer) ? $customer : null,
// 			'tokenCustomer' => isset ($token_customer) ? $token_customer : null,
// 			'back_url' => urldecode(Tools::getValue('back'))
// 		);
// 
// 		// Order address fields depending on country format
// 		$addresses_fields = $this->processAddressFormat();
// 		// we use  delivery address
// 		$addresses_fields = $addresses_fields['dlv_all_fields'];
// 
// 		// get required field
// 		$required_fields = AddressFormat::getFieldsRequired();
// 
// 		// Merge with field required
// 		$addresses_fields = array_unique(array_merge($addresses_fields, $required_fields));
// 
// 		$temp_fields = array();
// 
// 		foreach ($addresses_fields as $addr_field_item)
// 		{
// 			if ($addr_field_item == 'company')
// 			{
// 				$temp_fields[] = array(
// 					'type' => 'text',
// 					'label' => $this->l('Company'),
// 					'name' => 'company',
// 					'required' => in_array('company', $required_fields),
// 					'col' => '4',
// 					'hint' => $this->l('Invalid characters:').' &lt;&gt;;=#{}'
// 				);
// 				$temp_fields[] = array(
// 					'type' => 'text',
// 					'label' => $this->l('VAT number'),
// 					'col' => '2',
// 					'name' => 'vat_number',
// 					'required' => in_array('vat_number', $required_fields)
// 				);
// 			}
// 			elseif ($addr_field_item == 'lastname')
// 			{
// 				if (isset($customer) &&
// 					!Tools::isSubmit('submit'.strtoupper($this->table)) &&
// 					Validate::isLoadedObject($customer) &&
// 					!Validate::isLoadedObject($this->object))
// 					$default_value = $customer->lastname;
// 				else
// 					$default_value = '';
// 
// 				$temp_fields[] = array(
// 					'type' => 'text',
// 					'label' => $this->l('Last Name'),
// 					'name' => 'lastname',
// 					'required' => true,
// 					'col' => '4',
// 					'hint' => $this->l('Invalid characters:').' 0-9!&amp;lt;&amp;gt;,;?=+()@#"�{}_$%:',
// 					'default_value' => $default_value,
// 				);
// 			}
// 			elseif ($addr_field_item == 'firstname')
// 			{
// 				if (isset($customer) &&
// 					!Tools::isSubmit('submit'.strtoupper($this->table)) &&
// 					Validate::isLoadedObject($customer) &&
// 					!Validate::isLoadedObject($this->object))
// 					$default_value = $customer->firstname;
//  	 	 	 	else
//  	 	 	 		$default_value = '';
// 
// 				$temp_fields[] = array(
// 					'type' => 'text',
// 					'label' => $this->l('First Name'),
// 					'name' => 'firstname',
// 					'required' => true,
// 					'col' => '4',
// 					'hint' => $this->l('Invalid characters:').' 0-9!&amp;lt;&amp;gt;,;?=+()@#"�{}_$%:',
// 					'default_value' => $default_value,
// 				);
// 			}
// 			elseif ($addr_field_item == 'address1')
// 			{
// 				$temp_fields[] = array(
// 					'type' => 'text',
// 					'label' => $this->l('Address'),
// 					'name' => 'address1',
// 					'col' => '6',
// 					'required' => true,
// 				);
// 			}
// 			elseif ($addr_field_item == 'address2')
// 			{
// 				$temp_fields[] = array(
// 					'type' => 'text',
// 					'label' => $this->l('Address').' (2)',
// 					'name' => 'address2',
// 					'col' => '6',
// 					'required' => in_array('address2', $required_fields),
// 				);
// 			}
// 			elseif ($addr_field_item == 'postcode')
// 			{
// 				$temp_fields[] = array(
// 					'type' => 'text',
// 					'label' => $this->l('Zip/Postal Code'),
// 					'name' => 'postcode',
// 					'col' => '2',
// 					'required' => true,
// 				);
// 			}
// 			elseif ($addr_field_item == 'city')
// 			{
// 				$temp_fields[] = array(
// 					'type' => 'select',
// 					'label' => $this->l('City'),
// 					'name' => 'id_city',
// 					'required' => in_array('Country:name', $required_fields) || in_array('country', $required_fields),
// 					'col' => '4',
// 					'default_value' => (int)$this->context->country->id,
// 					'options' => array(
// 						'query' => Country::getCountries($this->context->language->id),
// 						'id' => 'id_city',
// 						'name' => 'name'
// 					)
// 				);
// 			}
// 			elseif ($addr_field_item == 'country' || $addr_field_item == 'Country:name')
// 			{
// 				$temp_fields[] = array(
// 					'type' => 'select',
// 					'label' => $this->l('Country'),
// 					'name' => 'id_country',
// 					'required' => in_array('Country:name', $required_fields) || in_array('country', $required_fields),
// 					'col' => '4',
// 					'default_value' => (int)$this->context->country->id,
// 					'options' => array(
// 						'query' => Country::getCountries($this->context->language->id),
// 						'id' => 'id_country',
// 						'name' => 'name'
// 					)
// 				);
// 				$temp_fields[] = array(
// 					'type' => 'select',
// 					'label' => $this->l('State'),
// 					'name' => 'id_state',
// 					'required' => false,
// 					'col' => '4',
// 					'options' => array(
// 						'query' => array(),
// 						'id' => 'id_state',
// 						'name' => 'name'
// 					)
// 				);
// 			}
// 			elseif ($addr_field_item == 'phone')
// 			{
// 				$temp_fields[] = array(
// 					'type' => 'text',
// 					'label' => $this->l('Home phone'),
// 					'name' => 'phone',
// 					'required' => in_array('phone', $required_fields) || Configuration::get('PS_ONE_PHONE_AT_LEAST'),
// 					'col' => '4',
// 					'hint' => Configuration::get('PS_ONE_PHONE_AT_LEAST') ? sprintf($this->l('You must register at least one phone number.')) : ''
// 				);
// 			}
// 			elseif ($addr_field_item == 'phone_mobile')
// 			{
// 				$temp_fields[] = array(
// 					'type' => 'text',
// 					'label' => $this->l('Mobile phone'),
// 					'name' => 'phone_mobile',
// 					'required' =>  in_array('phone_mobile', $required_fields) || Configuration::get('PS_ONE_PHONE_AT_LEAST'),
// 					'col' => '4',
// 					'hint' => Configuration::get('PS_ONE_PHONE_AT_LEAST') ? sprintf($this->l('You must register at least one phone number.')) : ''
// 				);
// 			}
// 		}
// 
// 		// merge address format with the rest of the form
// 		array_splice($this->fields_form['input'], 3, 0, $temp_fields);
// 
// 		return parent::renderForm();
// 	}