<?php      
    session_start();
    include('php_files/connection.php');  
    $username = $_POST['username'];  
    $password = $_POST['password'];  

        $username = stripcslashes($username);  
        $password = stripcslashes($password);
      
        $sql = "select * from login where username = '$username' and password = '$password'";  
        $result = mysqli_query($conn, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){  
            //echo "<h1><center> Login successful </center></h1>";
            $_SESSION["username"] = $username;
            header("Location: StudentDashboard.php");
        }  
        else{  
            echo "<h1> Login failed. Invalid username or password.</h1>";  
        }     
?>  