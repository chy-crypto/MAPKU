<?php
	if ($_FILES["image"]["error"] > 0) {
		echo "Error: " . $_FILES["image"]["error"] . "<br>";
	} else {
		$usr_id = $_REQUEST["ID"];
		$name = $_FILES["image"]["name"];
		$tmp = mime_content_type($_FILES["image"]["tmp_name"]);
		$data = Array();
		$data['type'] = $tmp;
		$data['name'] = $name;
		$data['id'] = $usr_id;
		move_uploaded_file($_FILES["image"]["tmp_name"],
		"./img/qq.gif");
	}
	print($_FILES["image"]["name"]);	
?>