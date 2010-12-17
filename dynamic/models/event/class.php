<?php

class event
{
	
	function js_list()
	{
		
		//header('Content-type: application/json');
		$db = the::database();
		$events = $db->get_event_list('',1);
		return json_encode($events);
	}

}


