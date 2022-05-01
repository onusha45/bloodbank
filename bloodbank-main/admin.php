<?php
    session_start();
    if(!isset($_SESSION['login']) || !$_SESSION['login']==1){
         header('Location:login.php');
    }

?>
<?php
 include('db/connect.php');
 $query = "SELECT * FROM blood";
 $result = mysqli_query($conn, $query);
?>
<html>
    <head>
        <title>Home</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="css/style.css">
    </head>
    <script src="https://kit.fontawesome.com/833795b4ff.js" crossorigin="anonymous"></script>
    <body>

        <nav class="sidenavbar">
            <div class="container">
                <div class="row sidenav">
                    <a href="admin.php" class = "is-active">Home</a>
                    <a href="update.php">Update Blood</a>
                    <a href="db/logout.php">Log out</a>
                </div>
            </div>
        </nav>
        
        <div class = "ava">
        <div class="card next">
            <div style="margin-top: 25px;" class="container">
                <h1>Tribhuwan University Teaching Hospital Blood Center</h1>
            </div><hr>
            <div class="card-body bod">
            <h5 class="card-title">Blood Availability</h5>
            <table class="table available">
                <thead>
                <tr>
                    <th scope="col">S.No</th>
                    <th scope="col">Blood Type</th>
                    <th scope="col">Quantity</th>
                </tr>
                </thead>
                <tbody><?php $num=0; while($row = mysqli_fetch_assoc($result)){ $num++; ?>
                    <tr>
                        <td><?php echo $num; ?></td>
                        <td class="blood"><?php echo $row['name']; ?></td>
                        <td><?php echo $row['quantity']; ?></td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
            </div>
            <br>
            <div class="container">
                <div class="row">
                <div class="col">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3531.3996864107853!2d85.32850381453537!3d27.73581558278018!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb193938d75799%3A0xd2587869d0e9fc21!2sTribhuwan%20University%20Teaching%20Hospital%20Blood%20Center!5e0!3m2!1sen!2snp!4v1651158982235!5m2!1sen!2snp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div class="col">
                    <h5 class="card-title">Located in: <br>Tribhuvan University Teaching Hospital (TUTH)</h5><hr>
                    <h5 class="card-title">Phone: 01-4412303</h5><br>
                </div>
                </div>
            </div>
            </div>
      </div>
    </div>
    </body>
</html>