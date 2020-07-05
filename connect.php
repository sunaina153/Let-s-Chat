<?php
$servername = "localhost";
$username = "root";
$password = "";


  $conn = new PDO("mysql:host=$servername;dbname=chat", $username, $password);

date_default_timezone_set('Asia/Kolkata');

function fetch_user_last_activity($user_id, $conn)
{
 $query = "SELECT * FROM login_details WHERE user_id = '$user_id' ORDER BY last_activity DESC LIMIT 1";
 $stmt = $conn->prepare($query);
 $stmt->execute();
 $result = $stmt->fetchAll();
 foreach($result as $row)
 {
  return $row['last_activity'];
 }
}
?>