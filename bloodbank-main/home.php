<?php
 include('db/connect.php');
 $query = "SELECT * FROM hospitals";
 $result = mysqli_query($conn, $query);
?>

<html>
    <head>
        <title>Home</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <nav class="sidenavbar">
            <div class="container">
                <div class="row sidenav">
                    <a href="home.php" class = "is-active">Home</a>
                    <a href="bloodbank.php">Looking for blood</a>
                    <a href="#hospital">Blood bank</a>
                    <a href="login.php">Log in</a>
                </div>
            </div>
        </nav>
        <div class="container donate">
            <h1 class="h1topic">LEARN ABOUT DONATION</h1>
            <div class="row">
                <div class="col detail">
                    <h3 style="color: aliceblue; background-color: red;">Compatible Blood Type Donors</h3>
                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">Blood Type</th>
                            <th scope="col">Donate Blood To</th>
                            <th scope="col">Receive Blood From</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td class="blood">A+</td>
                            <td>A+ AB+</td>
                            <td>A+ A- O+ O-</td>
                        </tr>
                        <tr>
                            <td class="blood">O+</td>
                            <td>O+ A+ B+ AB+</td>
                            <td>O+ O-</td>
                        </tr>
                        <tr>
                            <td class="blood">B+</td>
                            <td>B+ AB+</td>
                            <td>B+ B- O+ O-</td>
                        </tr>
                        <tr>
                            <td class="blood">AB+</td>
                            <td>AB+</td>
                            <td>Everyone</td>
                        </tr>
                        <tr>
                            <td class="blood">A-</td>
                            <td>A+ A- AB- AB+</td>
                            <td>A- O-</td>
                        </tr>
                        <tr>
                            <td class="blood">O-</td>
                            <td>Everyone</td>
                            <td>O-</td>
                        </tr>
                        <tr>
                            <td class="blood">B-</td>
                            <td>B+ B- AB+ AB-</td>
                            <td>B- O-</td>
                        </tr>
                        <tr>
                            <td class="blood">AB-</td>
                            <td>AB+ AB-</td>
                            <td>AB- A- B- O-</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <hr style="margin-top:50px; margin-bottom:50px; border:bold;"> 
        <div class="container hospital" id="hospital">
            <h2 class="hea" id="heas">Blood Bank</h2><br><br>
            <table class="table">
                <thead>
                <tr style="background-color: rgb(245, 96, 96);">
                    <th scope="col">S.No</th>
                    <th scope="col">Name</th>
                    <th scope="col">Address</th>
                    <th scope="col">Phone</th>
                </tr>
                </thead>
                <tbody><?php $num=0; while($row=mysqli_fetch_assoc($result)){ $num++; ?>
                <tr class="content">
                    <th scope="row"><?php echo $num; ?></th>
                    <td><a href="available.php"><?php echo $row['name']; ?></a></td>
                    <td><?php echo $row['place']; ?></td>
                    <td><?php echo $row['contact']; ?></td>
                </tr>
                <?php } ?>
                </tbody>
            </table>
        </div>
    </body>
</html>