$(document).ready(function()
{
	fetch_guest();
	guest_transfer();
	show_all_events();
	
	$("#Submit_event").on("click",function()
	{
		var eventForm=$('#event_form');
		var dataString = "action=events&"+eventForm.serialize();
			
		if (!eventForm[0].checkValidity()) 
		{
			eventForm[0].reportValidity();
			return;
		}		
		$.ajax (
		{
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
		
		if (!guestForm[0].checkValidity()) 
		{
			guestForm[0].reportValidity();
			return;
		}
		$.ajax  (
		{
			type: 'POST',	
			url: 'ajax.php', 
			data: dataString,
			cache: false,
			success: function(result)
			{
				alert(result);
				document.getElementById("guest_form").reset();
				fetch_guest();
			}	
		});	
	});

	$("#Submit_rsvp").on("click",function()
	{
		var rsvpForm=$('#rsvp_form');
		var dataString = "action=update_details&"+rsvpForm.serialize();
		
		if (!rsvpForm[0].checkValidity()) 
		{
			rsvpForm[0].reportValidity();
			return;
		}
		$.ajax  (
		{
			type: 'POST',	
			url: 'ajax.php', 
			data: dataString,
			cache: false,
			success: function(result)
			{
				document.getElementById("rsvp_form").reset();
				document.getElementById("msg").innerHTML=result;	
			}	
		});		
	});
	
	$("#Submit_request").on("click",function()
	{
		var requestForm=$('#request_form');
		var dataString = "action=requests&"+requestForm.serialize();
		
		if (!requestForm[0].checkValidity()) 
		{
			requestForm[0].reportValidity();
			return;
		}
		$.ajax  (
		{
			type: 'POST',	
			url: 'ajax.php', 
			data: dataString,
			cache: false,
			success: function(result)
			{
				alert(result);
				document.getElementById("request_form").reset();	
			}	
		});
	});

	$(document).on('click','.approve',function()
	{
		var id= $(this).attr("id");	
		var approve="approve";
		$.ajax(
		{
			type: 'POST',
			url: 'functions.php',
			data:{request_id:id,acton:approve},
			cache: false,
			success: function(result)
			{
				alert(result);
				fetch_guest();
				guest_transfer();
			}
		});
	});

	$(document).on('click','.reject',function()
	{
		var id= $(this).attr("id");
		var reject="reject";
		$.ajax(
		{
			type: 'POST',
			url: 'ajax.php',
			data:{request_id:id,action:reject},
			cache: false,
			success: function(result)
			{			
				alert(result);
				fetch_guest();
				guest_transfer();
			
			}
		});
	});

	function fetch_guest()
	{
		var action="showallguests";
		$.ajax(
		{
			type:"POST",
			url: "ajax.php",
			data:{action:action},
			cache: false,
			success: function(result)
			{
				$("#guestlist").html(result);
			}
		});
	}

	function guest_transfer()
	{
		var action="transferguests";
		$.ajax(
		{
			type: "POST",
			url: "ajax.php",
			data:{action:action},
			cache: false,
			success: function(result)
			{
				$("#requestlist").html(result);
			}
		});
	}

	function show_all_events()
	{
		var action="allevents";
		$.ajax({
			type: "POST",
			url: "ajax.php",
			data: {action:action},
			cache: false,
			success: function(result)
			{
				$("#all_events").html(result);
			}
		});
	}

	$(document).on('click','.edit',function()
	{
		var id= $(this).attr("id");
		var edit_event="edit_event";
		$.ajax(
		{
			type: 'POST',
			url: 'ajax.php',
			data:{event_id:id,action:edit_event},
			cache: false,
			success: function(result)
			{
				var data=result.split(",");
				$('#update_event_name').val(data[0]);
				$('#update_event_date').val(data[1]);
				$('#update_event_venue').val(data[2]);
				$('#update_event_id').val(data[3]);	
			}
		});
	});

	$("#update_event").on("click",function()
	{
		var eventForm=$('#edit_event');
		var dataString = "action=update_event&"+eventForm.serialize();	
		if (!eventForm[0].checkValidity()) 
		{
			eventForm[0].reportValidity();
			return;
		}		
		$.ajax  (
		{
			type: 'POST',	
			url: 'ajax.php', 
			data: dataString,
			cache: false,
			success: function(result)
			{
				alert(result);
				document.getElementById("edit_event").reset();
				show_all_events();
			}	
		});	
	});

	$(document).on('click','.delete',function()
	{	
		var update_event_id= $(this).attr("id");
		var action="delete_event";
		$.ajax(
		{
			type: 'POST',
			url: 'ajax.php',
			data: {action:action,update_event_id},
			cache: false,
			success: function(result)
			{
				console.log(result);
				show_all_events();	
			}
		});
	});
 return false;
});

	