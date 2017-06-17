$(document).ready(function myfunction()
{
$("#Submit").click(function myfunction1()
{
var event_name=document.getElementsByname("event_name").value;
var event_theme=document.getElementsByname("event_theme").value;
var event_date=document.getElementsByname("event_date").value;
var event_venue=document.getElementsByname("event_venue").value;

// Returns successful data submission message when the entered information is stored in database.
var dataString= '&event_name1=' +event_name + '&event_theme1=' +event_theme + '&event_date' +event_date + '&event_venue' +event_venue;

//alert(dataString);

if (event_name== '' || event_theme== '' || event_date== '' || event_venue== '' ) 
{
alert("Please fill all fields");
}
else
{
// AJAX Code To Submit Form.

$.ajax  ({
	type: "POST",
	url: "functions.php",
	data: dataString,
	cache: false,
	success: function(success)
	{
		alert(success);
	}
		});
}
return false;
});
});
	