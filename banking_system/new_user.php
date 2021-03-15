<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style1.css">
    <title>Create Users</title>
</head>
<body>
    <div class="container">
        <p class="submitMsg">Create new users</p>
        <form action="" method="POST">
            <label>Name:</label><br>
            <input type="text" name="name" id="name" placeholder="Enter your name" required >
            <label>Account Number:</label><br>
            <input type="text" name="acc_num" id="acc_num" placeholder="Enter your Account number" required >
            <label>Email:</label><br>
            <input type="email" name="email" id="email" placeholder="Gmail" required >
            <label>Contact:</label><br>
            <input type="phone" name="phone" id="phone" placeholder="Phone number" required >
            <label>Age:</label><br>
            <input type="text" name="age" id="age" placeholder="age" required >
            <label>Gender:</label><br>
            <input type="text" name="gender" id="gender" placeholder="male or female" required >
            <label>Balance:</label><br>
            <input type="text" name="balance" id="balance" placeholder="Balance" required >
            <button type="submit" name="submit" id="submit" class="btn">Submit</button>
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
        $name=$_POST['name'];
        $acc_num=$_POST['acc_num'];
        $email=$_POST['email'];
        $phone=$_POST['phone'];
        $age=$_POST['age'];
        $gender=$_POST['gender'];
        $balance=$_POST['balance'];

        $query ="INSERT INTO `sunrise`(`id`,`name`,`acc_num`, `email`, `phone`, `age`, `gender`, `balance`) 
        VALUES (NULL,'$name','$acc_num','$email','$phone','$age','$gender','$balance')";
    
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

