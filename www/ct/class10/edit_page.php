<?php
include 'dbconnect.php';

if(isset($_POST['save_btn']))
{
    $id=$_POST['emp_id'];
    $name=$_POST['name'];
    $age=$_POST['age'];
    $salary=$_POST['salary'];
    $designation=$_POST['designation'];

//    echo $id." ".$name." ".$age." ".$salary." ".$designation;
//    exit();
    $sql="UPDATE tariquli_class SET name='$name',age=$age,salary=$salary,designation='$designation' WHERE emp_id='$id'";
        $preparestatement=$dbcon->prepare($sql);
        $preparestatement->execute();

    header("Location:index.php");


//    if(!empty(trim($_POST['name'])) || !empty(trim($_POST['salary'])))
//    {
//        $sql="UPDATE tariquli_class SET name='$name',age=$age,salary=$salary,designation='$designation' WHERE emp_id='$id'";
//        $preparestatement=$dbcon->prepare($sql);
//        $preparestatement->execute();
//        echo("<script>alert('Successfully Updated..!!')</script>");
//        echo("<script>location.href='index.php'</script>");
//        header("Location:index.php");
//    }
//    else
//    {
//        echo("<script>alert('Sorry.! You put some field empty!')</script>");
//        echo("<script>location.href='index.php'</script>");
//
//    }
}

$employee_id=$_GET['id'];

$sql="SELECT * FROM tariquli_class WHERE emp_id='$employee_id'";
$query = $dbcon->prepare($sql);
$query->execute();
$employees = $query;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Show all Data</title>
    <link rel="stylesheet" href="css/bootstrap.min.css"/>
    <link rel="stylesheet" href="css/bootstrap-theme.min.css"/>
    <link rel="stylesheet" href="css/customize-bootstrap-grid.css">
    <link rel="stylesheet" href="css/font-awesome.min.css"/>
    <link rel="stylesheet" href="css/style.css"/>
</head>
<body>

<div class="container">
    <div class="row">

        <div class="col-md-12">
            <form action="" class="form-horizontal edit_form" method="post">
                <?php
                if($employees==true)
                {
                foreach($employees as $employee){
                ?>

                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Employee ID</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control"  name="emp_id" id="inputEmail3" placeholder="Employee ID" value="<?php echo $employee['emp_id'];?>" readonly>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Employee Name</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="name" id="inputEmail3" placeholder="Employee Name" value="<?php echo $employee['name'];?>">
                    </div>
                </div>

                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">Employee Age</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="age" id="inputEmail3" placeholder="Employee Age" value="<?php echo $employee['age'];?>">
                        </div>
                    </div>

                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Employee Salary</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="salary" id="inputEmail3" placeholder="Employee Salary" value="<?php echo $employee['salary'];?>">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Employee Designation</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="designation" id="inputEmail3" placeholder="Employee Designation" value="<?php echo $employee['designation'];?>">
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" name="save_btn" class="btn btn-success">Save</button>
                    </div>
                </div>
              <?php }} ?>
            </form>


        </div>
    </div>
</div>

<script src="js/jquery-1.11.3.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/script.js"></script>
</body>
</html>