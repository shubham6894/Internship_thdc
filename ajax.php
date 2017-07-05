<?php
require_once 'functions.php';
// die("heehehehe");
if (isset($_POST["action"])) {
	
	switch ($_POST["action"]) {
		
		case 'events':  $status=events();
						print json_encode($status);
						break;
		
		case 'guest_details':  $status=guest_details();
								print json_encode($status);
								break;
		
		case 'update_details':  update_details();
								break;
								
		case 'requests':        $status=requests();
								print json_encode($status);
								break;

		case 'showallguests':	rsvp();
							// die("heee");
								break;

		case 'transferguests': submit_requests();
								// die("ncchjsdch");
								break;

		case 'rsvpconfirm': 	rsvpconfirm();
								break;

		case 'allevents':		showallevents();
								break;
		

		case 'reject':			reject_guest();
								break;
		
		case 'edit_event': 		extract_event_data();
								break;

		case 'update_event':    update_event_data();
								break;

		case 'delete_event':    delete_event();
								break;													
		
		
		default:				echo "Invalid";
								break;
	}
}
?>