<?php session_startIO;
include("include/config.php");
error_reporting(0);
if(isset($_POST['login'])){
    $username = $_POST['username'];
    //echo "<br>";
    $loginpassword = $_POST['loginpassword'];
    //echo "<br>";
    $hasedpassword = hash('sha256',$loginpassword);
 try{
    $ret = "SELECT * FROM userdata WHERE (username=:uname && loginpasword=:loginpassword)";
   $queryt = $dbh -> prepare($ret);
   $queryt->bindParam(':uname',$username,PDO::PARAM_STR);
   $queryt->bindParam(':loginpassword',$hasedpassword,PDO::PARAM_STR);
   $queryt-> execute();
   $results = $queryt -> fetchAll (PDO::FETCH_OBJ);

   if($queryt-> rowCount() > 0){ echo "test";
        echo "<script type='text/javascript'>";
        echo "alert('เข้าสู่ระบบสำเร็จ');";
        echo "document.location='welcome.php';";
        echo "</script>";
   }else{ echo "hi";
        echo "<script type='text/javascript'>";
        echo "alert('Username หรือ password ผิด');";
        echo "document.location='login.php';";
        echo "</script>";
   }
}catch{PDOException $e}{
    exit("Error: ". $e->getMessage());
}   
   
}


?>