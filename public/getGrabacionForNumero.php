<?php

define("CALLSERVER1", "190.96.80.10");
define("CALLUSER1"  , "callmeta");
define("CALLPASS1"  , "m3t42013");

define("CALLSERVER2", "190.96.80.10");
define("CALLUSER2"  , "root");
define("CALLPASS2"  , "crdtl2670");

define("CALLSERVER3", "190.153.161.243");
define("CALLUSER3"  , "metalsol_root");
define("CALLPASS3"  , "crdtl2670");

$numero = null;
$ruta = null;

if($_GET['n'] == null || !isset($_GET['n']) || $_GET['k'] != 'temporal' || !isset($_GET['k'])) {
	return null;
} else {
	$numero = $_GET['n'];
}

// Callcenter 1
$mysqli = new mysqli(CALLSERVER1, CALLUSER1, CALLPASS1, "metalsol_ccenter");
$query = "SELECT * FROM grabaciones WHERE ruta LIKE '%$numero%' ORDER BY id DESC LIMIT 1";
$result = $mysqli->query($query);

if($result->num_rows < 1) {
	// Callcenter 2
	$mysqli = new mysqli(CALLSERVER2, CALLUSER2, CALLPASS2, "metalsol_ccenter");
	$result = $mysqli->query($query);

	if($result->num_rows < 1) {
		// Callcenter 3
		$mysqli = new mysqli(CALLSERVER3, CALLUSER3, CALLPASS3, "metalsol_ccenter");
		$result = $mysqli->query($query);
	}
}

if($result->num_rows > 0) {
	$row = $result->fetch_assoc();
	$ruta = $row['ruta'];
	$result->close();
}

$mysqli->close();
header('Content-type: text/json');
echo json_encode($ruta);
