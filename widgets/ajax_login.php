<?php
session_start();
echo $_SESSION['user_session'];

 require_once '../includes/functions.php';

 if(isset($_POST['user']))
 {
  $user 	= trim($_POST['user']);
  $password = trim($_POST['password']);
  $password = md5($password);
  	
 
  try
  { 
   $db_con = PDOconnLocal();	
   $stmt = $db_con->prepare("SELECT * FROM users WHERE user=:user");
   $stmt->execute(array(":user"=>$user));
   $row = $stmt->fetch(PDO::FETCH_ASSOC);
   $count = $stmt->rowCount();


   	if($row['password'] == $password) {
   		$_SESSION['user_session'] = $row['user'];
   		echo "ok - ".$row['id'];
      header("Location: ../index.php");

   	} else {
   		echo "fail";
   	}



  }
  catch(PDOException $e){
   echo $e->getMessage();
  }
 


 }


?>
