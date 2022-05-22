<?php


        include("Header.php");
        include("Navbar.php");
        $file_location = "./csv/students.csv";
        $values = array();
              

        function alertDiv($msg){
?>
          <div class="alert alert-warning alert-dismissible fade show text-center" role="alert">
            <strong class="text-center"><?php echo $msg; ?></strong> 
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>

<?php
        }
        
        if(isset($_POST["submit"])){

          // filtering submit buttons values 
          foreach($_POST as $val)
          {
            if($val != "Sign Up")
            {
                if(gettype($val) == "array")
                {
                    $temp = "";
                    foreach($val as $it)
                    {
                      
                        $temp = $temp.strtoupper($it)." ";
                    }
                    array_push($values,$temp);
                }
                else{
                    array_push($values,$val);
                }
            }
          }

          if(!file_exists($file_location)){
            $file = fopen($file_location,"a");
            $table_headers = array("ID","Name","Email","Gender","Batch","Courses","DEPT");
            fputcsv($file,$table_headers);
          }
          else{
            $file = fopen($file_location,"a");
          }
          

          if(!$file){
            echo "<script>alert('File Opening Failed!')</script>";
            exit(1);
          }

          fputcsv($file,$values);
          fclose($file);
          alertDiv("Success ! ");

        }
?>

      <div class="container">
      
      
        <div class="row">
          <div class="com-md-12">
              <h2 style="text-align:center">Student Information Form</h2>
            <form action="" method="POST">
                <!-- Id  -->
            <div class="form-group">
              <label for="name">ID</label>
              <input type="text" name="id" class="form-control" placeholder="Enter Your ID" required>
            </div>

            <!-- Name  -->
            <div class="form-group">
              <label for="name">Name</label>
              <input type="text" name="user_name" class="form-control" placeholder="Enter Your Name" required>
            </div>
          
            <!-- email  -->
            <div class="form-group">
              <label for="email">Email</label>
              <input type="email" class="form-control" name="email" placeholder="Enter Your Email" required>
            </div>

            <!-- gender  -->
            <div class="form-group my-2">
              <label>Gender</label>
              <input type="radio" class="form-check-input" name="gender" id="male" value="male" required/>
              <label for="male" class="form-check-label">Male</label>

              <input type="radio" class="form-check-input" name="gender" id="female" value="female" required/>
              <label for="female" class="form-check-label">Female</label>

            </div>

            <!-- Batch  -->
            <div class="form-group my-2">
              <label>Batch</label>
              <input type="radio" class="form-check-input" name="batch" id="a" value="69-a" required/>
              <label for="a" class="form-check-label">69-A</label>

              <input type="radio" class="form-check-input" name="batch" id="b" value="69-b"required/>
              <label for="b" class="form-check-label">69-B</label>

              <input type="radio" class="form-check-input" name="batch" id="c" value="69-c"required/>
              <label for="c" class="form-check-label">69-C</label>

            </div>

            <div class="form-group my-2">
              <label>Courses:</label>
              <input type="checkbox" class="form-check-input" name="course[0]" id="vip" value="vip" />
              <label for="vip" class="form-check-label">VIP</label>

              <input type="checkbox" class="form-check-input" name="course[1]" id="ml" value="ml"/>
              <label for="ml" class="form-check-label">Machine Learning</label>

              <input type="checkbox" class="form-check-input" value="algo" id="algo" name="course[2]">
              <label for="algo" class="form-check-label">ALgorithm</label>
            </div>

            <!-- department  -->
            <div class="form-group my-2">
              <label for="">Department</label>
              <select name="dept" id="dept" class="form-select">
                <option value="CSE" class>Computer Science and Engineering</option>
                <option value="EEE">Electrical and Electronics Engineering</option>
                <option value="ME">Mechanical Engineering</option>
              </select>
            </div>

            <div class="form-group my-2">
              <input class="btn btn-primary" type="submit" value="Sign Up" name="submit"/>
            </div>


            </form>

          </div>
        </div>
        
    </div>
      </div>
    <script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>
   <?php include("Footer.php"); ?> 

   