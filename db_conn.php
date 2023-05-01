<?php
$servername = 'localhost';
$db_name = 'work';
$username = 'root';
$password = '';

$conn = new  mysqli($servername, $username, $password, $db_name);
if (!$conn) {
  echo 'Connection failed😒😒';
}
//  else {
//   echo 'Connection established successfully😱💪😃';
// }
?>