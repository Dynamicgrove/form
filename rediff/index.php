<?php

    if(isset($_POST['submit'])){

    $name = $_POST['fullname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $repassword = $_POST['repassword'];
    $dob = $_POST['dob'];
    $gender = $_POST['gender'];
    $country = $_POST['country'];
    $city = $_POST['city'];
    $mobile = $_POST['mobile'];

    // Password check
    if($password != $repassword){
        echo " Passwords do not match";
    }
    else{
        echo " Account Created Successfully<br>";

        echo "Name: $name <br>";
        echo "Email: $email <br>";
        echo "DOB: $dob <br>";
        echo "Gender: $gender <br>";
        echo "Country: $country <br>";
        echo "City: $city <br>";
        echo "Mobile: $mobile <br>";
    }
}


?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<style>

    @import url('https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap');

    *{
        font-family: "Roboto", sans-serif;
    }

    body{
        background-color:#e8e9eb;
    }

    .main{
        
        width:70%;
        margin-left:15%;
    }

    .sub{
        display:flex;
        flex-direction: column;
        justify-content: center;
        width: 70%;
        margin-left:15%;
        font-size: 20px;
        line-height:40px;

    }

    input{
        margin-left:40px;
        height: 30px;
        width: 30%;
        border-radius:10px;
        border:none;
    }

    h3{
        font-size:40px;
        text-align:center;
    }
    
    select{
        width: 40%;
        height: 30px;
        border-radius:10px;
        font-size: 16px;
        margin-left: 40px;
        border:none;
    }

    .check{
        margin-left:40px;
        height: 30px;
        width: 30%;
        border-radius:10px;
        border:none;
        background-color:blue;
        color: white;
        font-size: 15px;
    }

    .submit{
        height: 40px;
        width: 100%;
        border-radius:10px;
        border:none;
        background-color:blue;
        color: white;
        font-size: 15px;
        margin-left:0px;
    }



</style>


<body>
    <div class="main">

    <h3>Create a Rediffmail account</h3>

    <div class="sub">
        <form action="" method="POST">
    <p>Full Name<input type="text" name="fullname"></p>
    <p>Choose a Rediffmail ID<input type="text" name="email"><input type="submit" value="Check availability" class="check"></p>
    <p>Choose a Password <input type="password" name="password" id=""></p>
    <p>Retype Password<input type="password" name="repassword" id=""></p>
    <p>Date of Birth <input type="date" name="dob" id=""></p>
    <p>Gender <input type="radio" name="gender" id=""> Male <input type="radio" name="gender" id="">Female</p>
    <p>I Live in <select name="country" id="">

    <option value="india">india</option>
    <option value="world">world</option>

    </select></p>

    <p>City <select name="city" id="">

    <option value="delhi">Delhi</option>
    <option value="rajasthan">Rajasthan</option>

    </select></p>
    <p>My Mobile number <input type="number" name="mobile" id=""></p>
    <input type="submit" value="Submit" class="submit" name="submit">
    </form>
</div>


    </div>
</body>
</html>