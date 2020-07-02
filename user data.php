<?php
    if(isset($_POST['submit'])){
        $firstname = $_POST['Firstname'];
        $lastname = $_POST['Lastname'];
        $id = $_POST['ID'];
        $mobno = $_POST['Mobilenumber'];
        $email = $_POST['Email'];
        $age = $_POST['Age'];
    }
        $dbhost = "localhost";
        $dbuser = "root";
        $pass = "";
        $db = "users1";
        function openConn($dbhost, $dbuser, $pass, $db){
                $conn = new mysqli($dbhost, $dbuser, $pass, $db) or die("Connection Failed ".$conn->error);
                return $conn;
            }
            function closeConn($conn){
                $conn->close();
            }
            $conn = openConn($dbhost, $dbuser, $pass, $db);
            if(!$conn)
                echo "Not Connected";
    $sql = "INSERT INTO UserData(`First name`, `Last name`, `ID`, `Mobile number`,`Email`,`Age`)
            VALUES ('$firstname','$lastname','$id','$mobno','$email', '$age')";
    mysqli_query($conn,$sql) or die(mysqli_error($conn));
    closeConn($conn);
    ?>
