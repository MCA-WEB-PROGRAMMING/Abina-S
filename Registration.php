
<html>
<head>
<style>
    body
{
  background-color:cadetblue;
  font-family:cursive;
  width: 500px;
  padding: 100px;
}
</style>
</head>
<body>
<div class="container">
<form name="f1" method="POST">
    <h3 align="center"><u>REGISTERATION FORM</u></h3>
  <table align="center">
<tr>
  <td>User Name:</td>
  <td><input type="text" name="username" value=""/></td>
</tr>
<tr>
<td>Address:</td>
<td><input type="text" name="add" value=""></td>
</tr>
<tr>
<td>Age:</td>
<td><input type="number" name="age" value=""></td>
</tr>
<tr>
<td>Phone:</td>
<td><input type="number" name="ph" value=""></td>
</tr>
<tr>
<td>Email:</td>
<td><input type="text" name="em" value=""></td>
</tr>
<tr>
<td>Password:</td>
<td><input type="password" name="password" value=""></td>
</tr>
<tr>
<td><input type="submit" name="submit"></td>
</tr>
</table>
</div>
</form>
<table border="1"align="center">
<tr>
<th>Username</th>
<th>Address</th>
<th>Age</th>
<th>Phone</th>
<th>Email</th>
</tr>

<?php
if(isset($_POST['submit']))
{
    $username=$_POST['username'];
    $address=$_POST['add'];
    $password=$_POST['password'];
    $age=$_POST['age'];
    $phone=$_POST['ph'];
    $email=$_POST['em'];
    $n1=preg_match('@[A-Z]@',$username);
   $conn=mysqli_connect("localhost","root","","Registeration");
    if($conn)
    {
        echo("Successfully connected");
        echo "<br>";
    }
    else{
        echo("error");
        echo "<br>";
    }
    if($username=="")
    {
        echo("Please Enter the username!")."<br>";
    }
    elseif(!$n1)
    {
    echo("Only letters are allowed for the  Name Filed")."<br>";
    }
    if($password=="")
    {
        echo("please enter a password")."<br>";
    }
    if($age=="")
    {
        echo("Please Enter your age!")."<br>";
    }
    if($phone=="")
    {
        echo("Please Enter a valid phone number!")."<br>";
    }
    if($email=="")
    {
        echo("Please Enter your mail id!")."<br>";
    }
    
if (!filter_var($email, FILTER_VALIDATE_EMAIL))
 {
 echo("Invalid email format");
 echo "<br>";
}
$query="INSERT INTO reg_table(Username,Address,Age,Phone,Email,Password)VALUES('{$username}','{$address}','{$age}','{$phone}','{$email}','{$password}')";
 
if(mysqli_query($conn,$query))
{
    echo("successfully inserted");
    echo "<br>";
}
else
{
    echo("insertion failed");
}
$s="SELECT * FROM reg_table";
$data=mysqli_query($conn,$s);
while($res=mysqli_fetch_assoc($data))
{
    ?>
   <tr>
    <td><?php echo $res['User Name'];?></td>
    <td><?php echo $res['Address'];?></td>
    <td><?php echo $res['Age'];?></td>
    <td><?php echo $res['Phone'];?></td>
    <td><?php echo $res['Email'];?></td>
</tr>
<?php
}

}
?>
</table>
</body>
</html>