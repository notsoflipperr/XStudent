<?php      
    session_start();
    include('php_files/connection.php');  
    $username = $_POST['username'];  
    $password = $_POST['password'];  
      
        $username = stripcslashes($username);  
        $password = stripcslashes($password);
      
        $sql = "select * from faculty where faculty_id = '$username' and login_password = '$password'";  
        $result = mysqli_query($conn, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){
            $_SESSION["faculty_username"] = $username;  
            //echo "<h1><center> Login successful </center></h1>";  
            header("Location: TeacherDashboard.php");
        }  
        else{  
            echo "<h1> Login failed. Invalid username or password.</h1>";  
        }     
?>  