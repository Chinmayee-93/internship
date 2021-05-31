<!DOCTYPE html>
<html>
  
<head>
    <title>Insert Page</title>
</head>
  
<body>
    <center>
        <?php
  
            $conn = mysqli_connect("localhost", "root", "", "empdb");
                  if($conn === false){
            die("ERROR: Could not connect. " 
                . mysqli_connect_error());
        }
        $emp_name =  $_REQUEST['emp_name'];
        $emp_id = $_REQUEST['emp_id'];
        $gender =  $_REQUEST['gender'];
        $mobile = $_REQUEST['mobile'];
        $salary = $_REQUEST['salary'];
        
        $sql = "INSERT INTO emptb  VALUES ('$emp_name', 
            '$emp_id','$gender','$mobile','$salary')";
          
        if(mysqli_query($conn, $sql)){
            echo "<h3>data stored in a database successfully.";
            
            echo nl2br("\n$emp_name\n $emp_id\n "
                . "$gender\n $mobile\n $salary");
        } else{
            echo "ERROR: Hush! Sorry $sql. " 
                . mysqli_error($conn);
        }
        
        mysqli_close($conn);
        ?>
    </center>
</body>
  
</html>