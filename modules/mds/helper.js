
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

function addDropDownSuburb(suburbs)
{
	var texts;

	for (count=1; count<suburbs.length; count++)
			{
				texts += "<option value=\""  + suburbs[count] + "\">" +  suburbs[count] + "</option> + ";
			//	console.log(suburbs[count,count]);
			}

	
	$("#city")
		.replaceWith('<select id="city" name="city" >' +
		'<option value="">-</option>' + texts +
		'</select>');
		
		

}

function addDropDownLocationType(location_types)
{
		
	var text;

	for (counter=1; counter<16; counter++)
			{
				text += "<option value=\"" + location_types[counter] + "\">" +  location_types[counter] + "</option> + ";
			}
	
	$("#address2")
		.replaceWith('<select id="address2" name="address2" >' +
		'<option value="">-</option>' + text +
		'</select>');

}

function test()
{
	
}

