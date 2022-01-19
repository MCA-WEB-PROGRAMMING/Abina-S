<html>
    <head>
        <title>Electricity Bill</title>
        <style>
h1{
    font-family:cursive;
    color:black;
}
body{
    background-color:pink;
}
table{
    font-family:cursive;
  
}
            </style>
</head>
<body>
    <center>
        <h1><u>Electricity Bill</u></h1>
    <form method="POST">
        <table>
            <tr>
            <td>Enter the Meter Number:
            <input type="number" name="num" value="">
</td>
</tr>
<tr>
    <td>Enter the Number of units:
        <input type="number" name="units" value="">
</td>
</tr>
<tr>
    <td>Enter the category:
        <select name="tariff">
            <option>Select</option>
            <option>Rural</option>
            <option>Residential</option>
            <option>Commercial</option>
</td>
</tr>
<tr>
                    <td>
                        <input type="submit" name="submit" value="Submit">
                    </td>
                </tr>
</center>
  </form>
</table>
</body>
</html>
<?php
if(isset($_POST['submit']))
{
    $num=$_POST['num'];
    $unit=$_POST['units'];
    $tariff=$_POST['tariff'];
    if($tariff == "Rural"){
        if($unit>0 && $unit<=50){
            $ec=10;
            $amount=(($unit*1.5)+$ec);
        }
        else if($unit>50 && $unit<=100){
            $ec=20;
            $amount=(($unit*2.5)+$ec);
        }
        else if($unit>100 && $unit<=250){
            $ec=30;
            $amount=(($unit*3.5)+$ec);
        }
        else if($unit>250 && $unit<=400){
            $ec=40;
            $amount=(($unit*4.5)+$ec);
        }
        else if($unit>400){
            $ec=50;
            $amount=(($unit*5.5)+$ec);
        }
    }
    if($tariff == "Residential"){
        if($unit>0 && $unit<=50){
            $ec=20;
            $amount=(($unit*0.5)+$ec);
        }
        else if($unit>50 && $unit<=100){
            $ec=25;
            $amount=(($unit*0.9)+$ec);
        }
        else if($unit>100 && $unit<=250){
            $ec=30;
            $amount=(($unit*1.5)+$a);
        }
        else if($unit>250 && $unit<=400){
            $ec=35;
            $amount=(($unit*1.9)+$ec);
        }
        else if($unit>400){
            $ec=40;
            $amount=(($unit*2.5)+$ec);
        }
    }
    if($tariff == "Commercial"){
        if($unit>0 && $unit<=50){
            $ec=10;
            $amount=(($unit*1)+$ec);
        }
        else if($unit>50 && $unit<=100){
            $ec=20;
            $amount=(($unit*2)+$ec);
        }
        else if($unit>100 && $unit<=250){
            $ec=30;
            $amount=(($unit*3)+$ec);
        }
        else if($unit>250 && $unit<=400){
            $ec=40;
            $amount=(($unit*4)+$ec);
        }
        else if($unit>400){
            $ec=50;
            $amount=(($unit*5)+$ec);
        }
    }
    echo "Your Meter Number is:".$num;
    echo "<br>";
    echo "Units are:".$unit;
    echo "<br>";
    echo "Category is:".$tariff;
    echo "<br>";
    echo "Extra Charge:".$ec;
    echo "<br>";
    echo "Total $unit units of charges Rs.:".$amount;
    echo "<br>";
}
?>