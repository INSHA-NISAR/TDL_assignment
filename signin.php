<?php
    include('conn.php');
    if(isset($_POST['user']) && isset($_POST['pswd'])) {
        
        $name =$_POST['name'];
        $email =$_POST['email'];
        $username =$_POST['user'];
        $password =$_POST['pwd'];
        $pic =$_FILES['pic'];
        $no =$_POST['number'];
        //print_r($_POST);exit();
    
        $q = "select *from tdl_userinfo where username ='$name' && password = '$password'";
        $result = mysqli_query($conn ,$q);
        $num =mysqli_num_rows($result);   

        if($num === 1) {
            echo "Username and Password already exist";
        } else {
            $qy ="INSERT INTO `tdl_userinfo` (`id`, `name`, `email`, `username`, `password`, `pic`, `num`)
                              VALUES ( ' $name', '$email', ' $username', '$password',$pic, '$no')";
            mysqli_query($conn,$qy);
            echo "Inserted successfully";
        }
    }
?>

<html>

<head>
  <link rel="stylesheet" href="css/style.css">
  <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="./style/style2.css">
  <title>Sign in</title>
</head>

<body>
  <div class="main1">
    <p class="sign" align="center">SignIn</p>
    <form class="form1" action="index.php">
      <input class="name " type="text" name ="name" align="center" placeholder="Name">
      <input class="email " type="email" name ="email" align="center" placeholder="Email">
      <input class="un " type="text" name ="user" align="center" placeholder="Username">
      <input class="pass" type="password" name="pwd" align="center" placeholder="Password">
      <input class="pass " type="password" name ="reppwd" align="center" placeholder="Retype password">
      <input class="pass" type="text" name="number" align="center" placeholder="number">
      <button type="submit" class="submit1">Signin</button>        
    </div>
     
</body>

</html>