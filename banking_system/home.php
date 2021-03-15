<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basic Banking System </title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <div class="main">
            <div class="logo">
                <img src="image/logo1.png">
            </div>
            <ul>
                <li><a href="http://localhost/banking_system/home.php"><b>Home</b></a></li>
                <li><a href="http://localhost/banking_system/new_user.php"><b>Create User</b></a></li>
                <li><a href="http://localhost/banking_system/customer.php"><b>Users</b></a></li>
                <li><a href="http://localhost/banking_system/transaction_history.php"><b>Transfer History</b></a></li>
            </ul>
        </div>
    </header>
    <section>
        <div class="content">
            <h1>SUNRISE BANK</h1><br><br>
        </div>
    </section>


    <div class="welcome">
        <img class="img1" src="image/bg1.jpg">
        <h1>Welcome to Sunrise Bank</h1>
        <br>
        <p>Thank you so much for allowing us to help you with your recent account opening.
            We are very glad you chose us as your financial institution and hope you will take advantage of our services
            We are committed to provide our <b>Customers</b> with the highest level of services and the most innovative banking
            products possible.
        </p>
        
    </div>


    <div class="container">
        <div class="operator">
            <img src="image/new.png" height="200px" width="250px">
            <a href="http://localhost/banking_system/new_user.php"><button class="button"><b>Create User </b></button></a>
        </div>
        <div class="operator">
            <img src="image/holders.png" height="200px" width="230px">
            <a href="http://localhost/banking_system/customer.php"> <button class="button" onclick=""><b>All Customers</b></button></a>
        </div>
        <div class="operator">
            <img src="image/transfer.png" height="200px" width="250px">
            <a href="http://localhost/banking_system/transaction_history.php"><button class="button" onclick=""><b>Transfer History</b></button></a>
        </div>
    </div>

</body>
</html>