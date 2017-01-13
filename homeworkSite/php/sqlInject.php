<?php
error_reporting(E_ALL);
  ini_set('display_errors', 1);
  session_start();
$servername = "localhost";
$username = "guest";
$password = "guestpassword";
$dbname = "phpfinalproject";
$conn = new mysqli($servername, $username, $password, $dbname);
include("header.php");
?>
<div class="panel panel-info">
	<div class="panel-body">
		<h4>Used only for demo</h4>
	</div>
</dev>
<form action="" method="post">
<!--<table width="50%">
    <tr>
        <td>User</td>
        <td><input type="text" name="user" disabled placeholder="Only for Demo"></td>
    </tr>
    <tr>
        <td></td>
        <td><input type="text" name="password" disabled placeholder="Only for Demo"></td>
    </tr>
</table>
    <input type="submit" value="OK" name="s">
--></form>

<?php
include("footer.php");
if($_POST['s']){
    $user = $_POST['user'];
    $pass = $_POST['password'];
    $re = $conn->query("SELECT * FROM `User` WHERE `USERNAME` = '$user' LIMIT 1");
    while($row = $re->fetch_assoc()){
      print_r($row);
    }
}
?>
