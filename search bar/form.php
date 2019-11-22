<?php 
$host= "localhost";
$username="root";
$password="";
$dbname="user_registration";

$conn = mysqli_connect($host,$username,$password,$dbname);

if(!$conn){
        echo "Error";
}


$val = isset($_POST['search']) ? $_POST['search'] : null;

$sql = "SELECT * FROM users WHERE userName LIKE '$val%'";
	
	if(mysqli_query($conn, $sql)) {
		$res = mysqli_query($conn, $sql);
		if (mysqli_num_rows($res) > 0) {
			$rows = $res->fetch_all(MYSQLI_ASSOC);
			foreach ($rows as $value) {
				echo $value['userName'] . "<br>";
			}
		} else {
			echo "No results";
		}
}
?>