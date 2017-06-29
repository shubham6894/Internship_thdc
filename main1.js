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
		url: 'ajax1.php', 
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
		url: 'ajax1.php', 
		data: dataString,
		cache: false,
		success: function(result)
		{
			fetch_guest();
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
		url: 'ajax1.php', 
		data: dataString,
		cache: false,
		success: function(result)
		{
			alert(result);
			
			document.getElementById("rsvp_form").reset();
			
		}	
		});
		
	});
	

	$("#Submit_request").on("click",function()
	{
		console.log('huih');
	var requestForm=$('#request_form');
	var dataString = "action=requests&"+requestForm.serialize();
	console.log(dataString);
		if (!requestForm[0].checkValidity()) {
			requestForm[0].reportValidity();
			return;
		}
		$.ajax  ({
		type: 'POST',	
		url: 'ajax1.php', 
		data: dataString,
		cache: false,
		success: function(result)
		{
			alert(result);
			
			document.getElementById("request_form").reset();
			
		}	
		});
		
	});

	$(".approve").on("click",function()
	{
		var id= $(this).attr("id");	
		var approve="approve";
		console.log(id);
	$.ajax({
		type: 'POST',
		url: 'functions1.php',
		data:{request_id:id,acton:approve},
		cache: false,
		success: function(result)
		{
			alert(result);
		}
	});
	});

	$(".reject").on("click",function()
	{
		var id= $(this).attr("id");	
		var reject="reject";
		console.log(id);
	$.ajax({
		type: 'POST',
		url: 'functions1.php',
		data:{request_id:id,actin:reject},
		cache: false,
		success: function(result)
		{
			alert(result);
		}
	});
	});

	function fetch_guest()
	{
		var action="show_all_guests";
		$.ajax({
			url: ajax1.php,
			data: {action:action},
			cache: false,
			success: function(result){
				alert(result);
			}
		});
	}

 return false;

});

	