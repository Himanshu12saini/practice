<?php 
include "config.php";

$num_per_page = 2;

if(isset($_GET['page'])){
    $page = $_GET['page'];
}else{
    $page = 1;
}
$start_form = ($page-1)*$num_per_page;

if(isset($_POST['search'])){
    $value = $_POST['search'];
    $sql = "SELECT * FROM student WHERE CONCAT(name,email) LIKE '%$value%'";
}else{
    $sql = "SELECT * FROM student WHERE deleted_at = 0 LIMIT $start_form,$num_per_page"; 
}

if(mysqli_query($con,$sql)){
    echo mysqli_error($con);
}
$result = mysqli_query($con,$sql);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="col-mt-5">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-body">
                                <a href="register.php"><button class="btn btn-primary">Add</button></a>
                                <a href="restore.php"><button class="btn btn-warning">Restore</button></a>
                                <form action="" method="POST">
                                    <div class="row">
                                        <div class="col">
                                            <div>
                                                <input type="text" name="search" class="form-control my-3" placeholder="search">
                                                <button type="submit" class="btn btn-info" name="submit">Search</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                <table class="table table-dark table-striped-coloumns">
                                    <thead>
                                        <tr>
                                            <th scope="col">S-NO</th>
                                            <th scope="col">NAME</th>
                                            <th scope="col">EMAIL</th>
                                            <th scope="col">PASSWORD</th>
                                            <th scope="col">GENDER</th>
                                            <th scope="col">COURSE</th>
                                            <th scope="col">CITY</th>
                                            <th scope="col">ACTION</th>
                                        </tr>
                                    </thead>
                                    <?php
                                    if(mysqli_num_rows($result)>0){
                                        // print_r($result);
                                        // die;
                                        $count=1;
                                        while($row=mysqli_fetch_assoc($result)){
                                    ?>
                                    <tbody>
                                        <tr>
                                            <td><?php echo $count ;?></td>
                                            <td><?php echo $row['name'];?></td>
                                            <td><?php echo $row['email'];?></td>
                                            <td><?php echo $row['password'];?></td>
                                            <td><?php echo $row['gender'];?></td>
                                            <td><?php echo $row['course'];?></td>
                                            <td><?php echo $row['city'];?></td>
                                            <td>
                                            <a href="edit.php?id=<?php echo $row['id']?>"><button class="btn btn-success">Edit</button></a> 
                                            <a href="deleted_at.php?id=<?php echo $row['id']?>"><button class="btn btn-danger">Delete</button></a> 
                                            </td>
                                        </tr>
                                    </tbody>
                                    <?php $count++;}?>
                                    <?php } else { ?>
                                    <div>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td class="d-flex justify-content-center margin-left:100">No such Recorde</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>

                                    </tr>
                                    </div>
                                    <?php } ?>
                                </table>
                                <?php
                                $sql1 = "SELECT * FROM student";
                                $result1 = mysqli_query($con,$sql1);
                                $total_recorde=mysqli_num_rows($result1);
                                $total_page=ceil($total_recorde/$num_per_page);

                                echo "<ul class='pagination admin-pagination'>";
                                for($i=1;$i<=$total_page;$i++){
                                    echo "<li>
                                    <a href='index.php?page=" . $i . "'>
                                    <button class='btn btn-success mx-1'>" . $i . "</button>
                                    </a>
                                    </li>";
                                }
                                echo "</ul>";
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
