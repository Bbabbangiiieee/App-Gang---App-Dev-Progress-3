 <?php

include('./constant/connect.php');
session_start();

$pharm1 = '18thavenuepharm';
$pharm2 = 'RMpharm';
$connect = '';
if(isset($_SESSION['userId'])){

  $sql="SELECT pharmacy from users where  id='".$_SESSION['userId']."'";
 
  $result=$db1->query($sql); 
 
 $row = mysqli_fetch_array($result);
 
  $pharm = $row['pharmacy'];
if ($pharm == $pharm1) {
  $connect = $db2;
} else if($pharm == $pharm2){
    $connect = $db3;
}

}

    





?>