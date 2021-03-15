<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style3.css">
    <title>Transaction History</title>
</head>
<body>
    <div class="bg">
        <header>
            <div class="nav">
                <ul>
                    <li><a href="http://localhost/banking_system/home.php"><b>Home</b></a></li>
                    <li><a href="http://localhost/banking_system/new_user.php"><b>Create User</b></a></li>
                    <li><a href="http://localhost/banking_system/customer.php"><b>Users</b></a></li>
                    <li><a href="http://localhost/banking_system/transaction_history.php"><b>Transaction History</b></a></li>
                </ul>
            </div>
        </header>
        <br><br><br>
        <section>
        <h1>Transfer History<h1>
   
        <table class="content-table">
            <tr>
                <th>id</th>
                <th>Sender</th>
                <th>Reciever</th>
                <th>Amount</th>
                <th>Date</th>
            </tr>

            <?php
            include 'connect.php';

            if(!$con)
            {
                die("connection failed:".mysqli_connect_error());
            }
            $sql = "SELECT * FROM transaction";
            $result = mysqli_query($con, $sql);
            if(mysqli_num_rows($result) >0)
            {
                while($rows= mysqli_fetch_assoc($result))
                {
                    ?>
                    <tr>
                        <td><?php echo $rows['id']?></td>
                        <td><?php echo $rows['sender']?></td>
                        <td><?php echo $rows['reciever']?></td>
                        <td><?php echo $rows['amount']?></td>
                        <td><?php echo $rows['date']?></td>
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
        </section>
    </div>
</body>
</html>