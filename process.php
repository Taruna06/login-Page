<?php

require_once('connection.php');

if(isset($_POST['btn-save'])){
    $UserName = mysqli_real_escape_string($con, $_POST['username']);
    $Email = mysqli_real_escape_string($con, $_POST['email']);
    $Password = mysqli_real_escape_string($con, $_POST['password']);
    $CPassword = mysqli_real_escape_string($con, $_POST['cpassword']);

    if(empty($UserName) || empty($Email) || empty($Password) || empty($CPassword) )
    {
        echo 'Please fill the details';
    }

    if($Password!=$CPassword)
    {
        echo 'Password not matched';
    }
    else
    {
        $Pass = md5($Password);
        $sql = "insert into users (UName, Email, Password) values('$UserName', '$Email', '$Pass')";
        $result = mysqli_query ( $con, $sql);

        if ($result)
        {
            echo 'Your record has been saved in the database';
        }
        else
        {
            echo 'Unsuccessful'; 
        }
    }
}

?>