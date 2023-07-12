

<?php
//Connecting to the database server
if(isset($_POST['name'])){
$server = "localhost";
$username = "root";
$password = "";

$con = mysqli_connect($server, $username, $password);

//Validating connection
if(!$con){
    die("connection to this database failed due to this error : ". mysqli_connect_error());
}

// echo "<br> Success connecting to this database db.";

// $name = $_POST['name'];
// $age = $_POST['age'];
// $gender = $_POST['gender'];
// $email = $_POST['email'];
// $phone = $_POST['phone'];
// $other = $_POST['other'];

//Getting post requests
// $name = isset($_POST['name']) ? $_POST['name'] : 'defaultname';
// $age = isset($_POST['age']) ? $_POST['age'] : 'defaultage';
// $gender = isset($_POST['gender']) ? $_POST['gender'] : 'defaultgender';
// $email = isset($_POST['email']) ? $_POST['email'] : 'defaultemail';
// $phone = isset($_POST['phone']) ? $_POST['phone'] : 'defaultphone';
// $other = isset($_POST['other']) ? $_POST['other'] : 'defaultother';

$name = isset($_POST['name']) ? $_POST['name'] : '';
$age = isset($_POST['age']) ? $_POST['age'] : '';
$gender = isset($_POST['gender']) ? $_POST['gender'] : '';
$email = isset($_POST['email']) ? $_POST['email'] : '';
$phone = isset($_POST['phone']) ? $_POST['phone'] : '';
$other = isset($_POST['other']) ? $_POST['other'] : 'No information provided';

$sql = "INSERT INTO `us trip`.`trip` (`name`, `age`, `gender`, `email`, `phone`, `other`, `dateOfCreation`) VALUES ('$name', '$age', '$gender', '$email', '$phone', '$other', current_timestamp())";

// $insert = true;
if($con->query($sql) == true){
    $insert = true;
}
else{
    echo "ERROR: $sql <br> $con->error";
}


// $insert = false;

// if ($con->query($sql) == true) {
//     $insert = true;
// } else {
//     echo "ERROR: $sql <br> $con->error";
// }
// $insert = false;
// if ($con->query($sql) == true) {
//     $insert = true;
    
//     // Display success message
//     echo "<p class='submitbtn'>Thanks for submitting the form for joining us on the US trip</p>";        
// } else {
//     echo "ERROR: $sql <br> $con->error";
// }


// $sql = "INSERT INTO `us trip`.`trip` (`name`, `age`, `gender`, `email`, `phone`, `other`, `dateOfCreation`) VALUES ($name, $age, $gender, $email, $phone, $other, current_timestamp())";
// // $sql = "INSERT INTO `us trip`.`trip` (`name`, `age`, `gender`, `email`, `phone`, `other`, `dateOfCreation`) VALUES ('ramesh', '123', 'asd', 'mn@gmail.ocm', '01234567890', 'sdc', current_timestamp())";
// // echo $sql;
// $insert = false;
// if($con->query($sql) == true){
//     // echo "Successfully inserted";
//     $insert = true;
// }
// else{
//     echo "ERROR: $sql <br> $con->error";
// }

//Closing connection
$con->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css"><link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kablammo&family=Roboto:wght@100&display=swap" rel="stylesheet">
    <title>Welcome to Travel Form</title>
</head>
<body>
    <img class='bg' alt='VIT Chennai' src="images/bg.webp">

    <div class="container">
        
        <h1>Welcome to VIT Chennai US trip form</h1>
        <p>Enter your details and submit this form to confirm your participation in the trip</p>
        <?php
        // $insert = true;
        
        // if($insert == true){
            // echo "<p class='submitbtn'>Thanks for submiting the form for joining us on the US trip</p>";        
        // }
        ?>
        
        <form action="index.php" method="post">
            <input type="text" name="name" id="name" placeholder="Enter your name">
            <input type="text" name="age" id="age" placeholder="Enter your age">
            <input type="text" name="gender" id="gender" placeholder="Enter your gender">
            <input type="email" name="email" id="email" placeholder="Enter your email">
            <input type="text" name="phone" id="phone" placeholder="Enter your phone">
            <textarea name="other" id="other" cols="30" rows="10" placeholder="Enter any other information here"></textarea>
            <button class="btn">Submit</button>
            <button class="btn">Reset</button>
        </form>
        
        
    </div>
    <script src="index.js"></script>
</body>
</html>




