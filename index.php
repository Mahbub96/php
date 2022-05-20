      <?php
        include("header.php");
      ?>
      <?php
        if(isset($_POST["submit"])){
          echo "<pre>";
            print_r($_POST);
          echo "</pre>";
        }
        ?>
    <div class="container">
        <div class="row">
          <div class="com-md-12">
              <h2 style="text-align:center">Sign Up From Here</h2>
            <form action="" method="POST">
            <div class="form-group">
              <label for="name">Name</label>
              <input type="text" name="user_name" class="form-control" placeholder="Enter Your Name">
            </div>
          
            <div class="form-group">
              <label for="email">Email</label>
              <input type="email" class="form-control" name="email" placeholder="Enter Your Email">
            </div>

            <div class="form-group">
              <label for="password">Password</label>
              <input type="password" class="form-control" name="user_passwd" placeholder="Enter Your Password">
            </div>

            <div class="form-group">
              <label for="address">Address</label>
              <textarea name="address" class="form-control"></textarea>
            </div>

            <div class="form-group">
              <label>Gender</label>
              <input type="radio" class="form-check-input" name="gender" id="male" value="male"/>
              <label for="male" class="form-check-label">Male</label>

              <input type="radio" class="form-check-input" name="gender" id="female" value="female"/>
              <label for="female" class="form-check-label">Female</label>

            </div>



            <div class="form-group">
              <label>Courses:</label>
              <input type="checkbox" class="form-check-input" name="course[0]" id="vip" value="vip"/>
              <label for="vip" class="form-check-label">VIP</label>

              <input type="checkbox" class="form-check-input" name="course[1]" id="ml" value="ml"/>
              <label for="ml" class="form-check-label">Machine Learning</label>

              <input type="checkbox" class="form-check-input" value="algo" id="algo" name="course[2]">
              <label for="algo" class="form-check-label">ALgorithm</label>
            </div>

            <div class="form-group">
              <label for="">Department</label>
              <select name="dept" id="dept" class="form-select">
                <option value="cse" class>Computer Science and Engineering<</option>
                <option value="EEE">Electrical and Electronics Engineering</option>
                <option value="me">Mechanical Engineering</option>
              </select>
            </div>

            <div class="form-group">
              <input class="btn btn-primary" type="submit" value="Sign Up" name="submit"/>
            </div>


            </form>

          </div>
        </div>
        
    </div>
   <?php include("footer.php"); ?> 