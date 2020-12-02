// Database funtions
<?php

// List all user info
function listuser() {
	if (PHP_SAPI === 'cli') {
		parse_str(implode('&', array_slice($argv, 1)), $_GET);
	}

	$id = $_GET['id'] ?? 1;
	$file_db = new PDO('sqlitedatabase.sqlite');

	foreach ($file_db->query('SELECT * FROM customers WHERE Id = ' . $id) as $row) {
		$customer = $row['Name'] . " - " . $row['Email'] . "\n";
		echo $customer;
	}
}

