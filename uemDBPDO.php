<?php
var_dump($_POST)
/*$data = $_POST;

//Validate Required Information
$errors = array();
$psw = $data['psw'];
$confirmPsw = $data['confirmPsw'];
if ($psw != $confirmPsw){
	echo "Confirm Correct Password.";
}
foreach(['firstName','lastName','emailAddress','cellNumber'] as $fields){
	if (empty($data[$fields])){
		$errors[] = sprintf(format:'This %s is a Required Field.', $fields);
	}
}
if (!empty($errors)){
	echo implode(separator: '<br />', $errors);
	exit;
}
//Validate Email
$emailAddress = $data['emailAddress'];
if (!filter_var($emailAddress, filter: FILTER_VALIDATE_EMAIL)){
	echo "Invalid Email Format.";
	exit;
}
//DATBASE CONNECTION
$host = 'localhost';
$database = 'uemDBEVOL';
$uer = 'root';
$password = 'EUl\51!zrT*';
$dsn = sprintf(format: "mysql:host=%s;dbname=%s;", $host, $database);

$options = [
	PDO::ATTR_ERRMODE 				=> PDO::ERRMODE_EXCEPTION,
	PDO::ATTR_DEFAULT_FETCH_MODE 	=> PDO::FETCH_ASSOC,
];
try {
	$pdo = new PDO($dsn, $user, $password, $options);
} catch (\PDOException $e){
	throw new \PDOException($e->getMessage(), (int)$e->getCode());
}*/

//END OF PHP FILE
?>