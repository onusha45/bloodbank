<?php
include('connect.php');
    if(isset($_POST['submit'])){
        $place = $_POST['hospital'];
        $query = "SELECT * FROM admin WHERE place=$place";
        $result = mysqli_query($conn, $query);
        
    }
?>