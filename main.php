
<?php
require_once("conn.php");
if((isset($_POST['Name'])&& $_POST['Name'] !='') && (isset($_POST['Email'])&& $_POST['Email'] !=''))
{
$Name = $conn->real_escape_string($_POST['Name']);
$Email = $conn->real_escape_string($_POST['Email']);
$Phone = $conn->real_escape_string($_POST['Phone']);
$comments = $conn->real_escape_string($_POST['comments']);

$sql="INSERT INTO contact (name, email, phone, comments) VALUES ('".$Name."','".$Email."', '".$Phone."', '".$comments."')";

if(!$result = $conn->query($sql)){
die('There was an error running the query [' . $conn->error . ']');
}
else
{
echo "Thank you! We will contact you soon";
}
}
else
{
echo "Please fill Name and Email";
}
?>
