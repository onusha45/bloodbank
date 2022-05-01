<?php
    include('db/connect.php');
    $name = "SELECT * FROM Place";
    $result = mysqli_query($conn, $name);

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
                    <a href="home.php#hospital">Blood bank</a>
                    <a href="login.php">Log in</a>
                </div>
            </div>
        </nav>
        <div class="container hospital" id="hospital">
            <div class="col">
                <h2>Select the place</h2>
                <form method="POST" action="bloodbank1.php">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Select District</label>
                        <div class="col-sm-8">
                    <select name="hospital" class="form-select" id="autoSizingSelect">
                        <?php while($row = mysqli_fetch_assoc($result)){ ?>
                        <option><?php echo $row['address']; ?></option>
                        <?php } ?>
                    </select>
                </div>
                    </div>
                    <button type="submit" name='submit' class="btn btn-primary">Search</button>
                </form>
            </div>
            <h2 class="hea" id="heas">Blood Bank</h2><br><br>
            <table class="col table">
                <thead>
                <tr style="background-color: rgb(245, 96, 96);">
                    <th scope="col">S.No</th>
                    <th scope="col">Name</th>
                    <th scope="col">Address</th>
                    <th scope="col">Contact No.</th>
                </tr>
                </thead>
                <tbody>
                <tr class="content"></tr>
                    <th scope="row">No Data Found</th>
                </tr>
            
                </tbody>
            </table>
        </div>
    </body>
</html>