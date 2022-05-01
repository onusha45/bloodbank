<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
      <link rel="stylesheet" href="css/style.css">
      <title>Request</title>
</head>
<body>


<nav class="sidenavbar">
            <div class="container">
                <div class="row sidenav">
                    <a href="home.php" class = "is-active">Home</a>
                    <a href="available.php">Looking for blood</a>
                    <a href="nearbank1.php">Blood bank</a>
                    <a href="login.php">Log in</a>
                </div>
            </div>
        </nav> 



  <div class="contain container">
        <div class="row">
              <div class = " reserved col-md-6 ">
      <form method = "POST" action = "home.php">
        <div class="for_admin">
        </div></br>
        <div class="row mb-3">
            <label for="inputEmail3" class="col-sm-6 col-form-label">Name</label>
            <div class="col-sm-10">
            <input type="text" name="name" class="form-control" id="inputEmail3">
            </div>
        </div>
        <div class="row mb-3">
            <label for="inputEmail3" class="col-sm-6 col-form-label">Email</label>
            <div class="col-sm-10">
            <input type="text" name="name" class="form-control" id="inputEmail3">
            </div>
        </div>
        <div class="row mb-3">
            <label for="inputPassword3" class="col-sm-6 col-form-label">Contact</label>
            <div class="col-sm-10">
            <input type="text" name="roll" class="form-control" id="inputPassword3">
            </div>
        </div>
        <div class="row mb-3">
            <label for="inputPassword3" class="col-sm-6 col-form-label">Citizenship number</label>
            <div class="col-sm-10">
            <input type="text" name="roll" class="form-control" id="inputPassword3">
            </div>
        </div>
        <div class="row mb-3">
            <label for="inputPassword3" class="col-sm-6 col-form-label">Quantity</label>
            <div class="col-sm-10">
            <select name="hospital" class="form-select" id="autoSizingSelect">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                    </select>
            </div>
        </div>
        <div class="row mb-3">
            <label for="inputPassword3" class="col-sm-6 col-form-label">Hospital's Prescription</label>
            <div class="col-sm-10">
            <input type="file" name="roll" class="form-control" id="inputPassword3">
            </div>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="flexCheckIndeterminate">
            <label class="form-check-label" for="flexCheckIndeterminate">
                Need Delivery?
            </label>
        </div><br>
        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        </div>
        </div>
        </div>
</div>
</div>
    </div>


        </div>
  </div>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</html>