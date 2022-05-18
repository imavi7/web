<?php
include 'dao.php';
/* Registration*/
if(isset($_POST['REGISTER'])){
        $nam=$_POST['fname'];
        $em=$_POST['femail'];
        $nu=$_POST['fpassword'];
        $user=array("name"=>$nam,"email"=>$em,"pass"=>$nu);
        $re=adduser($user);
        if($re){
          session_start();
          $_SESSION['n']=$nam;
          header("Location:product.php");
        }
        else{
          session_start();
          $_SESSION['msg']="user credential is wrong!!!";
          header("Location:registration.php");
        }
    }
/* Login*/
if(isset($_POST['login'])){
    $nam=$_POST['fname'];
    $em=$_POST['femail'];
    $nu=$_POST['fpassword'];
    $user=array("name"=>$nam,"email"=>$em,"pass"=>$nu);
    if(login($user)){
      session_start();
      $_SESSION['n']=$nam;
      header("location:product.php");
  }
  else{
     session_start();
     $_SESSION['msg']="user credential is wrong!!!";
    header("location:login.php");
  }
}

 
?>