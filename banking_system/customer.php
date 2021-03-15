
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style2.css">
    <title>Account Holders</title>
</head>
<body >
    <div class="bg">
    </div>
    <h1>Account Holder Details<h1>
    <table class="content-table">
        <tr>
            <th>id</th>
            <th>Name</th>
            <th>Account No.</th>
            <th>Email</th>
            <th>Phone No.</th>
            <th>Age</th>
            <th>Gender</th>
            <th>Current Balance</th>
            <th>Option</th>
        </tr>
        <?php
            include 'connect.php';

            if(!$con)
            {
                die("connection failed:".mysqli_connect_error());
            }
            $sql = "SELECT id, name, acc_num, email, phone, age, gender, balance FROM sunrise";
            $result = mysqli_query($con, $sql);
            if(mysqli_num_rows($result) >0)
            {
                while($rows= mysqli_fetch_assoc($result))
                {
                    ?>
                    <tr>
                        <td><?php echo $rows['id']?></td>
                        <td><?php echo $rows['name']?></td>
                        <td><?php echo $rows['acc_num']?></td>
                        <td><?php echo $rows['email']?></td>
                        <td><?php echo $rows['phone']?></td>
                        <td><?php echo $rows['age']?></td>
                        <td><?php echo $rows['gender']?></td>
                        <td><?php echo $rows['balance']?></td>
                        <td><a href="http://localhost/banking_system/transfer.php?id=<?php echo $rows['id']?>">
                        <button class='btn'>Select</button></a></td>
                    </tr>
                    <?php
                }
                echo "</table>"; 
            }
            else
            {
                echo " 0 result";
            }
            $con->close();
        ?>   
    </table>  
</body>
</html>