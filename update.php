<?php include("connection.php"); 
$id = $_GET['id'];

$query="select * from form where id='$id'";

$data=mysqli_query($connection,$query);
$result = mysqli_fetch_assoc($data);

?>
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
                <input type="text" name="work" value="<?php echo $result['work']; ?>" required> </input>
            </div>
            
            <div class="items">
                <label>TIME</label>
                <input type="time" id="appt" name="time" value="<?php echo $result['time']; ?>" required />
            </div>

            <div class="items">
                <label>DATE</label>
                <input type="date" name="date" value="<?php echo $result['date']; ?>" required> 
            </div>

        <div class="items">
        <!-- <input type="submit" value="SUBMIT" class="btn" name="register"> -->
        <input type="submit" value="register\" class="btn" name="register">
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
            $check_insert="update form set work='$work',time='$time',date='$date' where id='$id'";
            $data=mysqli_query($connection,$check_insert);

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
