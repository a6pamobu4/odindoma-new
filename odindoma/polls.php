<?php 
	
	$button_clicked = $_POST['button_clicked'];
	$poll_id = $_POST['poll_id'];
	$decrease = $_POST['decrease'];

	$jsonString = file_get_contents('polls.json');
	$data = json_decode($jsonString, true);

	if ($button_clicked == 'like') {
		foreach ($data as $key => $entry) {
	    if ($entry['id'] == $poll_id) {
	      $data[$key]['likes'] = $data[$key]['likes'] + 1;
	      if ($decrease == 'true' && $data[$key]['dislikes'] > 0) {
	      	$data[$key]['dislikes'] = $data[$key]['dislikes'] - 1;
	      }
	    }
		}
	}

	else {
		foreach ($data as $key => $entry) {
	    if ($entry['id'] == $poll_id) {
	      $data[$key]['dislikes'] = $data[$key]['dislikes'] + 1;
	      if ($decrease == 'true' && $data[$key]['likes'] > 0) {
	      	$data[$key]['likes'] = $data[$key]['likes'] - 1;
	      }
	    }
		}
	}

	$newJsonString = json_encode($data);
	file_put_contents('polls.json', $newJsonString);

?>