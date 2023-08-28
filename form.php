<?php include("connection.php") ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To Do List</title>
   
    <link rel="stylesheet" href="style.css">  
</head>
<body>

<div class="firsttt">
       
       <a href="front.php">HOME</a>
       <a href="display.php">TO DO LIST</a>
       <a href="form.php">ADD DETAILS</a>
  </div>
    
    <div class="first">
<Form action="#" method="POST">
        <div class="title">
                Add List
        </div>

            <div class="items">
                <label>WORK</label>
                <input type="text" name="work" required> </input>
            </div>
            
            <div class="items">
                <label>TIME</label>
                <input type="time" id="appt" name="time" required />
            </div>

            <div class="items">
                <label>DATE</label>
                <input type="date" name="date" required> 
            </div>

        <div class="items">
        <!-- <input type="submit" value="SUBMIT" class="btn" name="register"> -->
        <input type="submit" value="Submit" class="btn" name="register">
        </div>

</Form>

    </div>

</body>
</html>


<?php

    if($_POST['register'])
    {
        $work=   $_POST['work'];
        $time=   $_POST['time'];
        $date=   $_POST['date'];

        if($work!="" && $time!="" && $date!="")
        {
            $command="insert into form (work,time,date) values('$work','$time','$date')";

            $data=mysqli_query($connection,$command);

            if($data)
            {
                echo "succssss";
            }
            else
            {
                echo "worng";
            }

        }
    }

?>
