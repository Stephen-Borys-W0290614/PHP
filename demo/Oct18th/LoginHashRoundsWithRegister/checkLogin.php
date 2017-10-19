<?php


    // INSERT INTO `WebUsers`(user_name,user_pwd,salt) VALUES ('mike',SHA2(CONCAT('saltedmike', 'whatever'),512),'saltedmike')

    session_start();
    
    ob_start();
    
    $db = @mysqli_connect("localhost","root", "inet2005","sakila");
    if (!$db)
    {    
            die('Could not connect to the Sakila Database: ' . mysqli_error($db));
    }
    
    $loginUser=$_POST['loginUser']; 
    $loginPwd=$_POST['loginPwd'];
    
    $loginUser = stripslashes($loginUser);
    $loginPwd = stripslashes($loginPwd);
    $loginUser = mysqli_real_escape_string($db,$loginUser);
    $loginPwd = mysqli_real_escape_string($db,$loginPwd);

    $sqlStatement="SELECT salt FROM WebUsers WHERE user_name='$loginUser'";
    
    $result = mysqli_query($db,$sqlStatement);
    
    $count=mysqli_num_rows($result);
    
    if ($count == 1)
    {
//    	$record = mysqli_fetch_assoc($result);
//    	$saltedPwd = $record['salt'] . $loginPwd;
//    	$hashedPwd = hash('sha512',$saltedPwd);
    	
    	// can also use the PHP crypt() function to hash with a SALT
        $record = mysqli_fetch_assoc($result);
        $hashInstructions = '$6$rounds=5000$' . $record['salt'] .'$';
        $hashedPasswordTemp = crypt($loginPwd, $hashInstructions);
        $hashedPassword = str_replace ($hashInstructions, "", $hashedPasswordTemp);
    }
   

    $sqlStatement="SELECT * FROM WebUsers WHERE user_name='$loginUser' and user_pwd='$hashedPassword'";
  
    $result = mysqli_query($db,$sqlStatement);

    $count=mysqli_num_rows($result);
    
    mysqli_close($db);
    
    if($count==1)
    {
        $_SESSION['LoginUser'] = $loginUser;
        //$_SESSION['LoginPwd'] = $hashedPassword;
        header("location:page1.php");
    }
    else 
    {
        echo "Wrong Username or Password!";
        echo "<br/>";
        echo '<a href="mainLogin.html">Try Again</a>'; 
    }
    
    ob_end_flush();
?>
