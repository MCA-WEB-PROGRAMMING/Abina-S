<html>
<head>
    <style>
        h3{
         color:red;
        }
        body{
            background-color:beige;
        }
        </style>
    <body align="center">
        <h3><u>Register Form</u></h3>
        <form action=" " method="POST">
        <div class="container">
        <table align="center">
            <tr>
<td> NAME:
    <input type="text" name="nme">
</td>
</tr>
<tr>
<td>ADDRESS:<input type="textarea" cols="30" rows="5" name="add">
</td>
</tr>
<td>AGE:<input type ="number" name="age">
</td>
</tr>
<td>USERNAME:<input type="text" name="unme">
</td>
</tr>
<td>
    <input type="submit" value="Submit">
</td>
</table>
</div>
<?php
$conn=mysqli_connect("localhost","root","","reg_db");
if($conn)
{
    echo"successfully connected";
    echo"<br>";

}
else{
    echo"connection failed";
}
if(isset($_POST['Submit'])){
    $_POST['Name'];
    $_POST['Address'];
    $_POST['Age'];
    $_POST['Username'];


}
$query="INSERT INTO form_table('Name', 'Address', 'Age', 'Username');VALUES{('Name','Address','Age','Username')}";
$d=mysqli_connect($conn,$query);
if($query){
    echo"successfully inserted";
    echo"<br>";
}
else{
    echo"insertion failed";
    echo"<br>";
}
$s="SELECT * FROM form_table";  
$data=mysqli_connect($s,$query);
while($res=mysqli_fetch_assoc($data)){
?>
<table>
    <tr>
        <th>NAME</th>
        <th>ADDRESS</th>
        <th>AGE</th>
        <th>USERNAME</th>
</tr>
</table>
<td><?php echo $res(['Name']) ?></td>
<td><?php echo $res(['Address']) ?></td>
<td><?php echo $res(['Age']) ?></td>
<td><?php echo $res(['Username']) ?></td>
<?php
}
?>
</body>
</form>
</head>
</html>



 
