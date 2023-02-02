<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../styles/style.css" rel="stylesheet" type="text/css">
    <title>Document</title>
    <style rel="stylesheet" type="text/css">
        main
        {
            height: 500px;
  display: flex;
  flex-direction: column;
        }
        </style>
</head>
<body>
    <header>
        <img id="logo" src="../image/logo.jpg" alt="upes logo" width="10%">
        <h1>University of petroleum and energy studies</h1>
    </header>
    <nav>
        
        <div class="special-list">
            <ul style="list-style:none">
                <li><a href="../index.html">Home<img class="icon" src="../image/home.svg" width="25" height="30"></a></li>
                <li><a href="../catalog.html">Course info<img class="icon" src="../image/info.svg" width="25" height="30"></a></li>
                <li><a href="../registration.html">Apply Now<img class="icon" src="../image/plus.svg" width="25" height="30"></a></li>
                <li><a href="../login.html">Login<img class="icon" src="../image/login.svg" width="25" height="30"></a></li>
            </ul>
            <form>
        <input type="search" placeholder="search query" id="search">
        <input type="submit" value="Search">
        </form>
        </div>
    </nav>
    <main>
        <br>
        <br>
    <?php
if($_SERVER["REQUEST_METHOD"]=="POST")
{
$servername="localhost";
$username="root";
$password="";
$fname=$_POST["fname"];
$sname=$_POST["sname"];
$email=$_POST["email"];
$mobno=$_POST["mobile"];
$gender=$_POST["Gender"];
$course=$_POST["course"];
$resident=$_POST["resident"];
$dbname="upesdb";
$conn=new mysqli($servername,$username,$password);
$query="CREATE DATABASE $dbname";
$conn->query($query);
$conn=new mysqli($servername,$username,$password,$dbname);
$query="CREATE TABLE student (
    ApplicationId INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    Firstname VARCHAR(20) NOT NULL,
    Surname VARCHAR(20) NOT NULL,
    Email VARCHAR(20) NOT NULL,
    MobNo INT(10) NOT NULL,
    Gender VARCHAR(20) NOT NULL,
    Course VARCHAR(20) NOT NULL,
    UK VARCHAR(20) NOT NULL,
    DOB VARCHAR(25) NOT NULL 
  )";
$conn->query($query);
$new_date = date('Y-m-d', strtotime($_POST['birthday']));
$conn=new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error)
echo "connection failed";
$query="INSERT INTO student (Firstname, Surname, email, Mobno, Gender, Course,UK,DOB)
VALUES ('$fname','$sname','$email','$mobno','$gender','$course','$resident','$new_date')";
if($conn->query($query)==TRUE)
echo "<h1>You have registered succesfully<h1>";
$conn->close();
}
?>
<br>
<br>
    </main>
    <footer>
        <p>Follow us on:</p>
        <a href="https://www.twitter.com">Twitter</a>
        <a href="https://www.facebook.com">facebook</a>
        <a href="https://www.youtube.com">Youtube</a>
    </footer>
</body>
</html>