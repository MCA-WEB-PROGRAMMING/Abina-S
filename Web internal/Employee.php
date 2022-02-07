<html>
<head>
    <style>
        body{
    float: left;
  background-color:palevioletred;
  width: 500px;
  padding: 100px;
  
        }
</style>
    <title>company details</title>
</head>
<body>

        <form name="myform" method="POST">
            <table align="center">
                <tr>
                    <th><u><h3 align="center">EMPLOYEE DATA ENTRY</u></h3></th>
                </tr>
                <tr>
                    <td>Employee Id:</td>
                    <td><input type="number" name="b1"></td>
                </tr>
                <tr>
                    <td>Employee Name:</td>
                    <td><input type="text" name="b2"></td>
                </tr>
                <tr>
                    <td>Job Name:</td>
                    <td><input type="text" name="b3"></td>
                </tr>
                <tr>
                    <td>Manager Id:</td>
                    <td><input type="number" name="b4"></td>
                </tr>
                <tr>
                    <td>Salary</td>
                    <td><input type="number" name="b5"></td>
                </tr>
                <tr>
                    <td><input type="submit" name="submit"></td>
                </tr>
            </table>
        
</form>
<form name="f2" method="POST">
    <table align="center">
    <tr>
                <td>Employees whose salary greater than 35,000:
                
                <input type="submit" name="check" value="check"></td>
    </tr>
</table>
</form>

<?php
if(isset($_POST['submit']))
{
    $id=$_POST['b1'];
    $name=$_POST['b2'];
    $job=$_POST['b3'];
    $mid=$_POST['b4'];
    $salary=$_POST['b5'];
    $conn=mysqli_connect("localhost","root","","employee");
    if($conn)
    {
        echo ("successfully connected");
        echo "<br>";
    }
    else
    {
        echo("failed");
    }


   $sql="INSERT INTO employeedata(emp_id,emp_name,job_name,manager_id,salary) VALUES($id,'$name','$job',$mid,$salary)";  
    
    if(mysqli_query($conn,$sql))
    {
        echo("inserted successfully")."<br>";
    }
    else
    {
        echo("failed");
    }
}
if(isset($_POST['check']))
{
    $conn=mysqli_connect("localhost","root","","employee");
    
    ?>
<table border="2" align="center">
            <tr>
                <th>Employee.Id</th>
                <th>Name</th>
                <th>Job</th>
                <th>Manager.Id</th>
                <th>Salary</th>
            </tr>
            <?php
            $s="SELECT * FROM employeedata WHERE salary>35000";
            $data=mysqli_query($conn,$s);
            while($res=mysqli_fetch_assoc($data))
            {
                ?>
            <tr>
                <td><?php echo $res['emp_id'];?></td>
                <td><?php echo $res['emp_name'];?></td>
                <td><?php echo $res['job_name'];?></td>
                <td><?php echo $res['manager_id'];?></td>
                <td><?php echo $res['salary'];?></td>
            </tr>
            <?php

            }   
}
?>
</table>
</body>
</html>