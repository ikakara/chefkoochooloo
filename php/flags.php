<?php
	require_once('db.php');

	$flagResults = $db->query('SELECT * FROM ZFLAG ORDER BY Z_PK ASC');
	$flags = array();

  	while ($flag = $flagResults->fetchArray()) {
  		$flags[] = array(
  			'id'		=>	$flag['Z_PK'],
  			'name'		=>	$flag['ZNAME']
  		);
  	}

  	echo json_encode($flags);

	$db->close();
?>