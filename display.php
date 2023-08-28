<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table</title>

    <style>
        *{
            margin-top:0;
            padding:0;
        }
        body{
    background-image: linear-gradient(rgba(131, 7, 96, 0.718),rgba(2, 7, 8, 0.663)),url(logoback.jpg);
    background-attachment: fixed;
    background-size: cover;
    padding: 0 10px;
}  
        table{
            background-color: white;
            box-shadow: 5px 5px 5px rgba(0, 0 ,0,0.5);
        }
        .firsttt{
            display: flex;
            justify-content: flex-end;
            align-items: center;
            padding: 10px;
            margin-right: 10px;
        }
        .firsttt a{
             text-decoration: none;
            margin: 0 10px;
            color: #d6c7c7;
        }
        h2{
            color: #d6c7c7;
        }
        .tablebackground{
    background-image: linear-gradient(rgba(249, 216, 240, 0.718),rgba(163, 233, 247, 0.663)),url(logoback.jpg);

    /* color: rgb(185, 238, 242); */
        }

        .tablebackground .ccolor{
            background-color: #97f2ed;
            outline: none;
        
        }
        .tablebackground .ccolorr{
            background-color: #f77d7d;
        }
        .tablebackground a{
            text-decoration: none;
            margin-left: 50px;
            outline: none;
        }
        .tablebackground input{
            outline: none;
        }


    </style>
</head>
<body>

<div class="firsttt">
       
       <a href="front.php">HOME</a>
       <a href="display.php">TO DO LIST</a>
       <a href="form.php">ADD DETAILS</a>
  </div>

<?php
include("connection.php");

 $query="select * from form";

$data=mysqli_query($connection,$query);

$no_row=mysqli_num_rows($data);

if($no_row!=0)
{

    ?>

<h2 align="center">Display All Record</h2>
<table border="3" cellspacing="7" width="85%" align="center" class="tablebackground">
    <tr>
        <th >Id</th>
        <th >WORK</th>
        <th>TIME</th>
        <th>DATE </th>
        <th width="20%">UPDATE</th>
        
    </tr>

    <?php

    while ($result = mysqli_fetch_assoc($data)) {
        echo "
                <tr>
                    <td>".$result['id']."</td>
                    <td>".$result['work']."</td>
                    <td>".$result['time']."</td>
                    <td>".$result['date']."</td>
                    
                    <td><a href='update.php?id=$result[id] &fname=$result[work] &lname=$result[time] &sex=$result[date]' >
                    <input type='submit' value='Update' class='ccolor'>
                    </a> 
                    <a href='delete.php?id=$result[id]' >
                    <input type='submit' value='Delete' class='ccolorr'>
                    </a>
                    </td>

          

                </tr>
             ";
    }
}
else{
    echo "no  record  ";
}

?>

</table>

    
</body>
</html>

