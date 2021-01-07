<?php
include('conn.php');
if(isset($_POST['user']) && isset($_POST['pwd'])) {
        
    $name =$_POST['user'];
    $pass =$_POST['pwd'];
    
    print_r($_POST);exit();

    $q = "select *from tdl_userinfo where username ='$name' && password = '$pass'";
    $result = mysqli_query($conn ,$q);
    echo $result;
    $num =mysqli_fetch_assoc($result);
    echo $num;   

    if($num === 1) {
       $_SESSION['username']= $name;
       header('list.php'); 
    } else
     {
        header('index.php');  
      }

} else {
   // echo "Please insert username and password";
}
?>
<html>

<head>
  <link rel="stylesheet" href="css/style.css">
  <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="./style/style2.css">
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  <title>login</title>
</head>

<body>
  <div class="main">
    <p class="sign" align="center">Login</p><br><br>
    <form class="form1" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
      <input class="un " type="text" name ="user" align="center" placeholder="Username" required>
      <input class="pass" type="password" name="pwd" align="center" placeholder="Password" required>
      <button type="submit" class="submit">Login</button><br><br><br> </form>     
      <a href="signin.php" <button type="submit" class="submit1">Signin</button></a>
      <p class="forgot" align="center"><a href="#">Forgot Password?</p>
     
                
  </div>
  <?php
  include('footer.php');
  ?>   
</body>

</html>