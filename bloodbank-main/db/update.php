<?php
include('connect.php');
    if(isset($_POST['submit'])){
        $name = $_POST['hospital'];
        $quantity = $_POST['quantity'];
        $query = "UPDATE blood SET quantity='$quantity' WHERE name='$name'";
        if(mysqli_query($conn, $query)){
            header('Location:../update.php?msg=successfully updated');
        }
        else{
            header('Location:../update.php?errmsg='.mysqli_error($conn));
        }
    }
?>