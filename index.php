<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  </head>
  <body>
      <?php
        if(isset($_POST["submit"])){
            print_r($_POST);

        }
        ?>
    <div class="container">
        <form action="" method="post">
            <input type="text" name="name" placeholder="Enter Name"/>
            <input type="email" name="mail" placeholder="Enter Email"/>
            <input type="password" name="pass" placeholder="Enter password"/>
            <input type="submit" value="Sign Up" name="submit" class="btn btn-primary">


        </form>
        
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>