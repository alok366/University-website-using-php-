<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="styles/style.css" rel="stylesheet" type="text/css">
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
        <img id="logo" src="image/logo.jpg" alt="upes logo" width="10%">
        <h1>University of petroleum and energy studies</h1>
    </header>
    <nav>
        
        <div class="special-list">
            <ul style="list-style:none">
                <li><a href="index.html">Home<img class="icon" src="image/home.svg" width="25" height="30"></a></li>
                <li><a href="catalog.html">Course info<img class="icon" src="image/info.svg" width="25" height="30"></a></li>
                <li><a href="registration.html">Apply Now<img class="icon" src="image/plus.svg" width="25" height="30"></a></li>
                <li><a href="login.php">Login<img class="icon" src="image/login.svg" width="25" height="30"></a></li>
            </ul>
            <form>
        <input type="search" placeholder="search query" id="search">
        <input type="submit" value="Search">
        </form>
        </div>
    </nav>
    <main>
        <table border="2" >
            <form action="" method="post">
            <tr><th colspan="2">Login</th></tr>
            <tr>
                <th>Enter application Id</th>
                <td><input type="number" name="appid" </td>
            </tr>
            <tr>
                <th>Enter D.O.B</th>
                <td><input type="date" name="dob" ></td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" value="Submit"></td>
            </tr>
        </form>
        </table>
        <?php
        if($_SERVER["REQUEST_METHOD"]=="POST")
            {
                $servername="localhost";
                $username="root";
                $password="";
                $dbname="upesdb";
                $conn=new mysqli($servername,$username,$password,$dbname);
                $appid=$_POST["appid"];
                $dob= date('Y-m-d', strtotime($_POST['dob']));
                $query="SELECT * FROM student WHERE ApplicationId=$appid AND DOB='$dob'";
                $result=$conn->query($query);
                $row=$result->fetch_assoc();
                echo "<h1>Details of Applicant</h1>";
                echo "<table border=2>
                <tr>
                <th>Application ID</th>
                <th>First Name</th>
                <th>Surname</th>
                <th>Email</th>
                <th>Mobile Number</th>
                <th>Gender</th>
                <th>Course</th>
                <th>UK Resident</th>
                <th>Date of Birth</th>
                </tr>";
                echo "<tr>
                <td>".$row['ApplicationId']."</td>
                <td>".$row['Firstname']."</td>
                <td>".$row['Surname']."</td>
                <td>".$row['Email']."</td>
                <td>".$row['MobNo']."</td>
                <td>".$row['Gender']."</td>
                <td>".$row['Course']."</td>
                <td>".$row['UK']."</td>
                <td>".$row['DOB']."</td>
                </tr>
                </table>";
            }
            ?>
        
    </main>
    <footer>
        <p>Follow us on:</p>
        <a href="https://www.twitter.com">Twitter</a>
        <a href="https://www.facebook.com">facebook</a>
        <a href="https://www.youtube.com">Youtube</a>
    </footer>
</body>
</html>