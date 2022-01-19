<html>
    <body>
        <?php
        $a=array("Virat Kohli","Ravindra Jadeja","Rohit Sharma","MS Dhoni","Ashwin","Hardik","KL Rahul","Sachin Tendulkar");
        echo "<table border='1' width='20%'><tr><td>Number</td><td>Name</td></tr>";
        foreach($a as $k=>$v)
        {
            echo "<tr><td>$k</td><td>$v</td></tr>";
        }
        echo "</table>";
        ?>
        </body>
        </html>
