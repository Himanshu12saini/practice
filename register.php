
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>Document</title>
    <!-- <link rel="stylesheet" href="style.css">     -->
<style>
.error {
  color:red;
}
  </style>
    <?php
    if(isset($_POST['submit'])){
      include "store.php";
    }else{
      $validation = [];
    }
    ?>
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="col-mt-5">
          <div class="card">
            <div class="card-header">
              <div class="card-title">
                <h2>Student Register Form</h2>
              </div>
              <div class="card-body">
                <form action="" method="POST" enctype="multipart/form-data">
                  <div>
                    <label for="name"><b>Name</b></label>
                    <input type="text" name="name" class="form-control"/>
                    <span class="error">*<?php if(isset($validation['nameErr'])){
                      echo $validation['nameErr'];
                    }?></span>
                  </div>
                  <br>
                  <div>
                    <label for="email"><b>Email</b></label>
                    <input type="email" name="email" class="form-control"/>
                    <span class="error">*<?php if(isset($validation['emailErr'])){
                      echo $validation['emailErr'];
                    }?></span>
                  </div>
                  <br>
                  <div>
                    <label for="password"><b>Password</b></label>
                    <input type="password" name="password" class="form-control"/>
                    <span class="error">*<?php if(isset($validation['passwordErr'])){
                      echo $validation['passwordErr'];
                    }?></span>
                  </div>
                  <br>
                  <div>
                    <label for="gender"><b>Gender</b></label><br>
                    <input type="radio" name="gender" value="male"/>
                    <label for="male">male</label><br>
                    <input type="radio" name="gender" value="female"/>
                    <label for="female">female</label>
                    <span class="error">*<?php if(isset($validation['genderErr'])){
                      echo $validation['genderErr'];
                    }?></span>
                  </div>
                  <br>
                  <div>
                   <label for="course"><b>Course</b></label>
                   <br>
                   <input type="checkbox" name="course[]" value="html" id="html"/>
                   <label for="">html</label>
                   <br>
                   <input type="checkbox" name="course[]" value="css" id="css"/>
                   <label for="">css</label>
                   <br>
                   <input type="checkbox" name="course[]" value="java" id="java"/>
                   <label for="">java</label>
                   <span class="error">*<?php if(isset($validation['courseErr'])){
                      echo $validation['courseErr'];
                    }?></span>
                  </div>
                  <br>
                  <div>
                    <select name="city" class="form-control">
                      <option>...select city...</option>
                      <option value="pinjor">pinjor</option>
                      <option value="kalka">kalka</option>
                      <option value="punchkula">punchkula</option>
                      <option value="chandigarh">chandigarh</option>
                    </select>
                    <span class="error">*<?php if(isset($validation['cityErr'])){
                      echo $validation['cityErr'];
                    }?></span>
                  </div>
                  <br>
                  <div>
                    <button type="submit" name="submit" class="btn btn-primary w-100">Submit</button>
                  </div>
            </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>