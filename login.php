l><?php
    if(isset($_POST['submit-login']))
    {
        include 'database.php';

        $email = mysqli_real_escape_string($con,$_POST['email-login']);
        $password = mysqli_real_escape_string($con,$_POST['password-login']);
        // $password = password_hash($password, PASSWORD_DEFAULT);
        
        $sql = "select * from users where email = '$email'";
        $result = mysqli_query($con, $sql);
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);

        if($row)
        {
            if($password == $row["password"])
            {
                header("Location: welcome.php");
            }
            else
            {
                echo '<script> 
                alert("Login failed. Invalid email or password!!");
                window.location.href = "home.php";
                </script>';
            }
        }
        
    }
?>