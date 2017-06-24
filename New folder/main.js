$(document).ready(function()
{
	$("#Submit_event").on("click",function()
	{
	var eventForm=$('#event_form');
	var dataString = "action=events&"+eventForm.serialize();
	 console.log(dataString);
			
			if (!eventForm[0].checkValidity()) {
				eventForm[0].reportValidity();
				return;
			}
				
		$.ajax  ({
		type: 'POST',	
		url: 'ajax.php', 
		data: dataString,
		cache: false,
		success: function(result)
		{

			alert(result);
			document.getElementById("event_form").reset();
		}	
		
		});
		
	});




	$("#Submit_guests").on("click",function()
	{
	var guestForm=$('#guest_form');
	var dataString = "action=guest_details&"+guestForm.serialize();
	console.log(dataString);
			if (!guestForm[0].checkValidity()) {
				guestForm[0].reportValidity();
				return;
			}
		
		$.ajax  ({
		type: 'POST',	
		url: 'ajax.php', 
		data: dataString,
		cache: false,
		success: function(result)
		{
			alert(result);
			document.getElementById("guest_form").reset();
			
		}	
		});
		
	});

	$("#Submit_rsvp").on("click",function()
	{
		var rsvpForm=$('#rsvp_form');
	var dataString = "action=update_details&"+rsvpForm.serialize();
	console.log(dataString);
		if (!rsvpForm[0].checkValidity()) {
			rsvpForm[0].reportValidity();
			return;
		}
		
		
		$.ajax  ({
		type: 'POST',	
		url: 'ajax.php', 
		data: dataString,
		cache: false,
		success: function(result)
		{
			alert(result);
			
			document.getElementById("rsvp_form").reset();
			
		}	
		});
		
	});
 return false;

});

	