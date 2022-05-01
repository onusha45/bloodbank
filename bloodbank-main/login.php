<?php
    include('db/connect.php');
    $name = "SELECT * FROM admin";
    $result = mysqli_query($conn, $name);
?>
<html>
    <head>
        <title>log in</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
    <nav class="navbar">
        <h2>Blood Bank Management System</h2>
    </nav>
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
    <form  method="POST" action="db/login.php">
        <div class="login">
            <div class="row mb-3" >
                <label for="inputEmail3" class="col-sm-2 col-form-label">Select hospital</label>
                <div class="col-sm-8">
                    <select name="hospital" class="form-select" id="autoSizingSelect">
                        <?php while($row = mysqli_fetch_assoc($result)){ ?>
                        <option><?php echo $row['name']; ?></option>
                        <?php } ?>
                    </select>
                </div>
            </div>
            <div class="row mb-3">
                <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
                <div class="col-sm-8">
                <input name = 'password' type="password" class="form-control" id="inputPassword3">
                </div>
            </div>
            <button name="submit" type="submit" class="btn btn-primary">Log in</button>
        </div>
    </form>
    </body>
</html>