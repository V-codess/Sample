<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>First PHP</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    
       <?php 
        if (isset($_POST['firstName'])) {
$submit  = true;
         $server = "localhost";
         $username = "root";
         $password = "";

         $con = mysqli_connect($server, $username, $password);

         if(!$con){
             die("connection failed" . mysqli_connect_error());
         }
         echo "Successful";

         $firstName = $_POST["firstName"];
         $lastName = $_POST["lastName"];
         $email = $_POST["Email"];
         $phoneNumber = $_POST["phoneNumber"];
         $age = $_POST["age"];
         $sql = "INSERT INTO `form`.`list` (`First Name`, `Last Name`, `Email Address`, `Phone Number`, `Age`, `Date`) 
         VALUES (`$firstName`, `$lastName`, `$email`, `$phoneNumber`, `$age`,  current_timestamp());";    

         
         echo `$sql`;

       if($con->query($sql)== true){
           echo "Success";
       }
       else{
           echo "Error: $sql <br> $con -> error";
       }
       $con -> close();
    }
    
        ?>
        <div class="container">
       <h1> Let's sign up! </h1>
        <div class="form">
            <form method="post" action="first.php">
        <input type="text"  name="firstName" placeholder="First Name" /> <br>
      <input type="text"   name="LastName" placeholder="Last Name" /> <br>
      <input type="email"  name="Email" placeholder="Email Address" /> <br>
      <input type="tel"   name="phoneNumber"placeholder="Phone number" /> <br>
      <input type="number"  name="age" placeholder="Age" /> <br>
      <input type="button" value="Submit">
        </form>
        </div>
    </div>

</body>
</html>

<!-- //    $name = "vaishnavi";
    //    $age = 2021-1998;
    //    $time = time();
    //    echo "Good Evening " .$time;
    //    echo "<h5> My first PHP. </h5>";
    //     print "<h3>My name is " . $name. " and Im " .$age. ". </h3>";
    //     echo "<p>I want to become a full stack developer.</p>";
    //     if($_SERVER["REQUEST_METHOD"]=="POST"){
    //        
    //     }

        //  function test_input($data){
        //     $data = trim($data);
        //     $data = stripslashes($data);
        //     $data = htmlspecialchars($data);
        //     return $data;
        // }
        // if (isset($_POST['submit'])) {
        //     echo "Submitted!";
        // } -->