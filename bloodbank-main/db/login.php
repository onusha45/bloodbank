<?php
    include('connect.php');
    if(isset($_POST['submit'])){
        $name = $_POST['hospital'];
        $password = $_POST['password'];
        if($password == ''){
            $msg = 'Password is required';
            header('Location:../login.php?err='.$msg);
        }
        $query = "SELECT * FROM admin WHERE name='$name'";
        $result = mysqli_query($conn, $query);
        $row = mysqli_num_rows($result);
        if($row == 0){
            $msg = "Password didn't matched";
            header('Location:../login.php?err='.$msg);
        }
        else{
            $data = mysqli_fetch_assoc($result);
            session_start();
            $_SESSION['login']=1;
            $_SESSION['User_id']= $data['id'];
            header('Location:../admin.php');
        }
    }
?>