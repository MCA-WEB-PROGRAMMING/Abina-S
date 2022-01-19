<html>
    <head>
        <style>
          h1{
            color:white;
    
          }
          body{
            background-color:red;

          }
          </style>
</head>
<title>reg form</title>
   
        <body>
 <center>
   <h1><u>Patient Registration Form</u></h1>
                <form method="POST">
            <table>
              <tr>
                <td>PATIENT ID:</td>
                <td><input type="text"></td>
              </tr>
              <tr>
                <td>PATIENT NAME:</td>
                <td><input type="text" name="anme"></td>
              </tr>
              <tr>
                <td>AGE:</td>
                <td><input type="number" name="aagee"></td>
              </tr>
              <tr>
                  <td>ADDRESS:</td>
                  <td><textarea name="adds" rows="7" cols="30"></textarea>
                    </td>
              </tr>
              <tr>
                <td>DATE OF ADMISSION:</td>
                <td><input type="date" name="adom"></td>
              </tr>
              <tr>
                <td>PHONE NUMBER:</td>
                <td><input type="number" name="aphoneno"></td>
              </tr>
              <tr>
                <td>GENDER:</td>
                <td><input type="radio" id="html" name="agender" value="MALE">Male<br>
                    <input type="radio" id="html" name="agender" value="FEMALE">Female</td>
              </tr>
              <tr>
                  <td>DOCTOR'S NAME:</td>
                  <td>
                      <input type="text" name="adoctor">
                  </td>
              </tr>
              <tr>
                  <td>PRESCRIBE MEDICINE:</td>
                  <td><textarea name="textarea" rows="7" cols="30"></textarea> </td>
              </tr>
        <td><input type="submit" name="submit" value="SUBMIT"></td>
</center>
</table>
</form>
</body>
</html>
<center>
           <?php
   if(isset($_POST['submit']))
{
    $name=$_POST['anme'];
    $phoneno=$_POST['aphoneno'];
    $age=$_POST['aagee'];
    if($name=="")
    {
        echo("Please Enter your name!")."<br>";
    }
    if($age=="")
    {
        echo("Please Enter your age!")."<br>";
    }
    if($phoneno=="")
    {
        echo("Please Enter a valid phone number!")."<br>";
    }
  }
?>
</center>