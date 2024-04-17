<?php
    if(isset($_POST['submit-signup']))
    {
        include 'database.php';

        $username = mysqli_real_escape_string($con,$_POST['name']);
        $email = mysqli_real_escape_string($con,$_POST['email']);
        $password = mysqli_real_escape_string($con,$_POST['password']);
        $password_confirm = mysqli_real_escape_string($con,$_POST['repassword']);
        // $password = password_hash($password, PASSWORD_DEFAULT);
        if(strpos($username, ' ') !== false) {
            echo '<script>
            alert("Username cannot contain spaces");
            window.location.href = "home.php";
            </script>';
            exit; // Stop further execution
        }
        
        $sql = "select * from users where username = '$username'";
        $result = mysqli_query($con, $sql);
        $count_name = mysqli_num_rows($result);

        $sql = "select * from users where email = '$email'";
        $result = mysqli_query($con, $sql);
        $count_email = mysqli_num_rows($result);

        if($count_name == 0 || $count_email == 0)
        {
            if($password == $password_confirm)
            {
                $sql = "insert into users(username, email, password) values('$username', '$email', '$password')";
                $result = mysqli_query($con, $sql);
                if($result)
                {
                    echo '<script> User registered successfully </script>';
                }
                else
                {
                    echo '<script> Error in registration </script>';
                }
            }
            else{
                echo '<script>
                alert("Passwords do not match");
                window.location.href = "home.php";
                </script>';
            }
        }
        else
        {
            echo '<script> 
            alert("User already exists");
            window.location.href = "home.php";
            </script>';
        }
    }
?>