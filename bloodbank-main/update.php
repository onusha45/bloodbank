<?php
    include('db/connect.php');
    session_start();
    if(!isset($_SESSION['login']) || !$_SESSION['login']==1){
         header('Location:login.php');
    }
    $query = "SELECT * FROM blood";
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
                    <a href="admin.php" class = "is-active">Home</a>
                    <a href="update.php">Update Blood</a>
                    <a href="db/logout.php">Log out</a>
                </div>
            </div>
        </nav>
        <div class="container update">
            <div class="col">
            <form method="POST" action="db/update.php">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Select Blood</label>
                    <select name="hospital" class="form-select" id="autoSizingSelect">
                        <?php while($row = mysqli_fetch_assoc($result)){ ?>
                        <option><?php echo $row['name']; ?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Enter the Quantity</label>
                    <input name="quantity" type="text" class="form-control" id="exampleInputPassword1">
                </div>
                <button name="submit" type="submit" class="btn btn-primary">Submit</button>
            </form>
            </div>
        </div>
        
    </body>
</html>