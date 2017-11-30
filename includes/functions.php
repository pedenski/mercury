<?php 
/* CONNECT TO DB PDO */
function PDOconn() { //connect to remote DB
 $user = "app";
 $pass = "a1b2c3d4";
 $db = new PDO('mysql:host=10.167.95.39;dbname=smsc', $user, $pass);
 return $db;
}

/* CONNECT TO DB PDO */
function PDOconnLocal() { //connect to remote DB
 $user = "root";
 $pass = "a1b2c3d4";
 $db = new PDO('mysql:host=localhost;dbname=mercury_db', $user, $pass);
 return $db;
}

function get_app() {
	$db = PDOconn();
	$query = "SELECT * FROM applications ORDER BY enabled DESC";
	$sql = $db->prepare($query);
	$sql->execute();
	$row = $sql->fetchALL();
	return $row;
}

function get_topdestination() {
	$db = PDOconn();
	$query = "SELECT Destination,COUNT(*) as count FROM sms GROUP BY Destination ORDER BY count DESC LIMIT 5;";
	$sql = $db->prepare($query);
	$sql->execute();
	$row = $sql->fetchALL();
	return $row;
}

function get_whitelist() {
	$db = PDOconn();
	$query = "SELECT * FROM whitelist";
	$sql = $db->prepare($query);
	$sql->execute();
	$row = $sql->fetchALL();
	return $row;
}

function get_sms() {
	$db = PDOconn();
	$query = "SELECT * FROM sms ORDER BY ID DESC LIMIT 15";
	$sql = $db->prepare($query);
	$sql->execute();
	$row = $sql->fetchALL();
	return $row;
}

function get_users() {
	$db = PDOconnLocal(); //connect to local DB
	$query = "SELECT * FROM users";
	$sql = $db->prepare($query);
	$sql->execute();
	$row = $sql->fetchALL();
	return $row;

}

function count_users_rows()  {
	//count the rows of users 
	$db = PDOconnLocal(); //connect to local DB
	$res = $db->query('SELECT COUNT(*) FROM users');
	$num_rows = $res->fetchColumn();
	return $num_rows;
}


function insert_sms($receiver,$sms){

	//insert to local DB

	$db = PDOconnLocal();
	$statement = $db->prepare("INSERT INTO localsms (id, user, sms, destination) VALUES (?, ?, ?, ?)");
 	$statement->execute(array(NULL, 'test', $sms, $receiver));
}


function broadcast($num,$sms){
$url = 'http://10.167.95.42:8080/SMSCGateway/Sender';
$data = array('Username' => '***', 'Password' => '***','Destination' => $num, 'SMS' => $sms);

$options = array(
    'http' => array(
        'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
        'method'  => 'POST',
        'content' => http_build_query($data),
    ),
);
$context  = stream_context_create($options);
$result = file_get_contents($url, false, $context);
return $result;
}




function check_session($session) {
	if(!empty($session)) {
		return true;
	}
}


function ok($num,$sms){
	return 1;
}

?>
