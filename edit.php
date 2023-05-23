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
</head>
<body>
  <div class="container">
    <?php
    include "config.php";
    $id = $_GET['id'];
    $sql = "SELECT * FROM student WHERE id = $id";
   
    $result = mysqli_query($con,$sql);
    $row = mysqli_fetch_assoc($result);
    
    $course1 = explode(',',$row['course']);
    ?>
    <div class="row">
      <div class="col-md-12">
        <div class="col-mt-5">
          <div class="card">
            <div class="card-header">
              <div class="card-title">
                <h2>Student Register Form</h2>
              </div>
              <div class="card-body">
                <form action="update.php?id=<?php echo $row['id']?>" method="POST" enctype="multipart/form-data">
                  <div>
                    <label for="name"><b>Name</b></label>
                    <input type="text" name="name" class="form-control" value="<?php echo $row['name']?>"/>
                  </div>
                  <br>
                  <div>
                    <label for="email"><b>Email</b></label>
                    <input type="email" name="email" class="form-control"  value="<?php echo $row['email']?>"/>
                  </div>
                  <br>
                  <div>
                    <label for="password"><b>Password</b></label>
                    <input type="password" name="password" class="form-control"  value="<?php echo $row['password']?>"/>
                  </div>
                  <br>
                  <div>
                    <label for="gender"><b>Gender</b></label><br>
                    <input type="radio" name="gender" value="male" <?php if($row['gender']=='male'){
                      echo 'checked';
                    }?>/>
                    <label for="male">male</label><br>
                    <input type="radio" name="gender" value="female" <?php if($row['gender']=='female'){
                      echo 'checked';
                    }?>/>
                    <label for="female">female</label>
                  </div>
                  <br>
                  <div>
                   <label for="course"><b>Course</b></label>
                   <br>
                   <input type="checkbox" name="course[]" id="html" value="html" <?php if(in_array('html', $course1)){
                    echo 'checked';
                   }?>/>
                   <label for="html">html</label>
                   <br>
                   <input type="checkbox" name="course[]" id="css" value="css" <?php if(in_array('css', $course1)){
                    echo 'checked';
                   }?>/>
                   <label for="css">css</label>
                   <br>
                   <input type="checkbox" name="course[]" id="java" value="java" <?php if(in_array('java', $course1)){
                    echo 'checked';
                   }?>/>
                   <label for="java">java</label>
                  </div>
                  <br>
                  <div>
                    <select name="city" class="form-control">
                      <option>...select city...</option>
                      <option value="pinjor" <?php if($row['city']=='pinjor'){
                      echo 'selected';
                    }?>>pinjor</option>
                      <option value="kalka" <?php if($row['city']=='kalka'){
                      echo 'selected';
                    }?>>kalka</option>
                      <option value="punchkula" <?php if($row['city']=='punchkula'){
                      echo 'selected';
                    }?>>punchkula</option>
                      <option value="chandigarh" <?php if($row['city']=='chandigarh'){
                      echo 'selected';
                    }?>>chandigarh</option>
                    </select>
                  </div>
                  <br>
                  <div>
                    <button type="submit" name="submit" class="btn btn-primary w-100">Update</button>
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