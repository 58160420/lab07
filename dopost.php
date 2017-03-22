
<?php
include("db.php");
echo "<h3>View posted data:</h3>";
echo "<pre>";
print_r($_POST);
echo "</pre>";
echo "<hr>";
echo "<h3>View individual data:</h3>";
echo $_POST['name']."<br>";
echo $_POST['email']."<br>";
echo $_POST['address']."<br>";


$name = $_POST['name'];
$email = $_POST['email'];
$sex = $_POST['sex'];
$intr1 = $_POST['intr1'];
$intr2 = $_POST['intr2'];
$address = $_POST['address'];
$province = $_POST['province'];
if(isset($_POST['submit'])) {
   $sql = "INSERT INTO register_form (name, email, sex,intr1,intr2,address,province) values ('$name', '$email', '$sex', '$intr1', '$intr2', '$address', '$province')";
if ($conn->query($sql) === TRUE) {
    echo "successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
}
?>