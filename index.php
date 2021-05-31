<!DOCTYPE html>
<html lang="en">
  
<head>
    <title>Store Data</title>
</head>
  
<body>
    <center>
        <h1>Storing Form data in Database</h1>
  
        <form action="insert.php" method="post">
              
            <p>
                <label for="employeeName">Employee Name:</label>
                <input type="text" name="emp_name" id="employeeName">
            </p>
  
  
              
            <p>
                <label for="empId">Employee Id:</label>
                <input type="text" name="emp_id" id="empId">
            </p>
  
  
              
            <p>
                <label for="Gender">Gender:</label>
                <input type="text" name="gender" id="Gender">
            </p>
  
              
              
            <p>
                <label for="Mobile">Mobile:</label>
                <input type="number" name="mobile" id="Mobile">
            </p>
  
              
              
            <p>
                <label for="empSalary">Emp Salary:</label>
                <input type="number" name="salary" id="empSalary">
            </p>
  
              
            <input type="submit" value="Submit">
        </form>
    </center>
</body>
  
</html>