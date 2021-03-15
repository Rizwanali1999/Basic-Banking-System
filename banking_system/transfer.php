<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width= , initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="style4.css">
    <title>Transfer</title>
</head>
<body>
    
    <div class="container">
        <h1>Transaction</h1>
        
        <?php
        include 'connect.php';
        
        $sid=$_GET['id'];
        $sql= "SELECT id , name, acc_num, email, balance FROM sunrise where id=$sid";
        $result= mysqli_query($con,$sql);
        $rows=mysqli_fetch_assoc($result);
        ?>

        <div>
            <table class="transaction-table">
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Account number</th>
                    <th>Email</th>
                    <th>Current Balance</th>
                </tr>
                <tr>
                    <td> <?php echo $rows['id']?></td>
                    <td> <?php echo $rows['name']?></td>
                    <td> <?php echo $rows['acc_num']?></td>
                    <td> <?php echo $rows['email']?></td>
                    <td> <?php echo $rows['balance']?></td>
                </tr>
            </table>
        </div>
        <br><br>

        <form method="POST">
            <label>Sender:</label>
            <input type="number" name="sender" id="sender" placeholder="Enter Sender's account.no" required > 
            <label>Reciever:</label>
            <input type="number" name="reciever" id="reciever" placeholder="Enter reciever's account.no "required >
            <label>Amount:</label>
            <input type="number" name="amount" id="amount" placeholder="Enter the amount"required >
            <button type="submit" class="btn" id="submit" name="submit">TRANSFER</button>
            <br> <br> <br> <br>
        </form>   
    </div>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>

<?php
   include 'connect.php';

    if(isset($_POST['submit']))
    {
        $sender=$_POST['sender'];
        $reciever=$_POST['reciever'];
        $amount=$_POST['amount'];

        $sql= "SELECT * from sunrise where acc_num=$sender";
        $query = mysqli_query($con,$sql);
        $sql1= mysqli_fetch_assoc($query);

        $sql= "SELECT * from sunrise where acc_num=$reciever";
        $query = mysqli_query($con,$sql);
        $sql2= mysqli_fetch_assoc($query);

        if(($amount)<0)
        {
            echo '<script type="text/javascript">';
            echo 'alert("oops! negative value")';
            echo '</script>';
        }
        else if($amount > $sql1['balance'])
        {
            echo '<script type="text/javascript">';
            echo 'alert("Insufficient Balance")';
            echo '</script>';
        }
        else if($amount == 0)
        {
            echo '<script type="text/javascript">';
            echo 'alert("zero account cannot be transferred")';
            echo '</script>';
        }
        else
        {
            $newbalance = $sql1['balance']-$amount;
            $sql= "UPDATE sunrise set balance=$newbalance where acc_num=$sender";
            mysqli_query($con,$sql);

            $newbalance = $sql2['balance']+$amount;
            $sql= "UPDATE sunrise set balance=$newbalance where acc_num=$reciever";
            mysqli_query($con,$sql);

            if($query)
            {
                echo "<script> alert('Transaction successful');
                window.location='http://localhost/banking_system/transaction_history.php';
                </script>";
            }
            $newbalance=0;
            $amount=0;

        }
    }

?>

<?php
    include 'connect.php';

    if(isset($_POST['submit']))
    {
        $sender=$_POST['sender'];
        $reciever=$_POST['reciever'];
        $amount=$_POST['amount'];

        $query ="INSERT INTO `transaction`(`id`,`sender`, `reciever`, `amount`,`date`) VALUES (NULL,'$sender','$reciever','$amount',current_timestamp())";
    
        $res= mysqli_query($con,$query);

        if($res)
        {
            ?>
            <script> alert("data inserted") ;</script>
            <?php
        }
        else
        {
            ?>
            <script> alert("data not inserted") ;</script>
            <?php
        }
    }
?>