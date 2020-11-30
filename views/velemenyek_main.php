<?
$mysqli = @new mysqli("localhost", "root", "", "my_db");
if ($mysqli_connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli_connect_errno . ") " . $mysqli_connect_error;
}
   
if (isset($_GET['message'])) {
   
    $user=$mysqli_real_escape_string($_GET['user']);
    $message=$mysqli_real_escape_string($_GET['message']);
    $date=date('Y-m-d H:i:s');
   
    $sql="INSERT INTO forum(id, user, message, date) VALUES(0,'$user','$message','$date')";
    $mysqli_query($sql);
}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>PHP and MySql</title>
</head>

<body>


<?
$sql = "SELECT * FROM forum";
$result = $mysqli_query($sql);

while($row = $result_fetch_assoc()) {
  echo $row['user'].',  '.$row['date'].;
  echo $row['message'].;
  echo '------------------------ ';
}
?>

<form method="get" action="forum.php">
<p>User:
  <label for="user"></label>
  <input type="text" name="user" id="user" />
  <br />
</p>
<p>Message: <br />
  <label for="message"></label>
  <textarea name="message" id="message" cols="45" rows="5"></textarea>
</p>
<p>
  <input type="submit" name="submit" id="submit" value="Post message" />
</p>
</form>

</body>
</html>