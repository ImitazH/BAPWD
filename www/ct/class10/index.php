<?php
include 'dbconnect.php';

$sql="SELECT * FROM tariquli_class";
$query = $dbcon->prepare($sql);
$query->execute();
$employees = $query;

if(isset($_POST['search']))
{
    $search_item=$_POST['search_item'];

    $sql="SELECT * FROM tariquli_class WHERE emp_id='$search_item' OR name='$search_item'";
    $query = $dbcon->prepare($sql);
    $query->execute();
    $employees = $query;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Show all Data</title>
    <link rel="stylesheet" href="css/bootstrap.min.css"/>
    <link rel="stylesheet" href="css/font-awesome.min.css"/>
    <link rel="stylesheet" href="css/style.css"/>
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="search_box pull-right">
                <form action="<?php echo $_SERVER['PHP_SELF'];?>" class="form-inline" method="post">
                    <div class="form-group">
                        <input type="text" class="form-control" name="search_item" placeholder="Enter Search Item">
                    </div>
                    <input type="submit" class="btn btn-success" name="search" value="Search">
                </form>
            </div>
        </div>
        <div class="col-md-12">
            <div class="table-responsive">
            <table class="table table-bordered text-center table-hover">
              <thead>
              <tr>
                  <th class="text-center">Employee ID</th>
                  <th class="text-center">Name</th>
                  <th class="text-center">Age</th>
                  <th class="text-center">Salary</th>
                  <th class="text-center">Designation</th>
                  <th class="text-center">Action</th>
              </tr>
              </thead>


                <tbody>

                <?php
                if($employees==true)
                {
                foreach($employees as $employee){
                ?>

                <tr>
                    <td><?php echo $employee['emp_id'];?></td>
                    <td><?php echo $employee['name'];?></td>
                    <td><?php echo $employee['age'];?></td>
                    <td><?php echo $employee['salary'];?></td>
                    <td><?php echo $employee['designation'];?></td>
                    <td>
                        <a href="edit_page.php?id=<?php echo $employee['emp_id'];?>" class="btn btn-primary btn-md">
                            Edit
                        </a>
                        <a href="delete.php?id=<?php echo $employee['emp_id'];?>" class="btn btn-danger btn-md">Delete</a>
                    </td>
                </tr>
				
				<?php }} ?>
				

                
                </tbody>
            </table>
            </div>


        </div>
    </div>
</div>
    
    <script src="js/jquery-1.11.3.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/script.js"></script>
</body>
</html>