<!DOCTYPE html>
<html>
<head>
    <title>Registration Form</title>
</head>
<body>
    <h2>Registration Form</h2>
    <form method="post">
        <label for="username">User Name:</label>
        <input type="text" name="name" required><br><br>

        <label for="password">Password:</label>
        <input type="password" name="password" required><br><br>

        <input type="radio" value="radio" required>I Accept terms and condition</input>

        <input type="submit" value="Submit">
    </form>
    <?php
$name = $_POST['name'];
$password = $_POST['password'];

//database connection
$conn = new mysqli('localhost','root','','jett');
if($conn->connect_error){
    die('Connection Failed  :  '.$conn->connect_error);
}else{
    $stmt = $conn->prepare("insert into mainreg(USERNAME, PASSWORD)values('$name', '$password')");
    $stmt->execute();
    echo "Registration Successfully...";
    $stmt->close();
    $conn->close();
}
?>
</body>
</html>

I have already account!
Gp to <a href="https://hr2010.github.io/jet-login/">Login</a> page!
