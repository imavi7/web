<?php
include 'conn.php';
/*Registration Form*/
function adduser($user){
    $nam=$user['name'];
    $em=$user['email'];
    $nu=$user['pass'];
    $e_p=md5($nu);
    $con=$GLOBALS['conn'];
    $sql="insert into user(name,email,Password) values(?,?,?)";
    $st=$GLOBALS['conn']->prepare($sql);
    $st->bind_param("sss",$nam,$em,$e_p);
        if($st->execute()){
        return true;
    }
    else{
        return false;
    }
}
/*Login Form*/
function login($user){
    $con=$GLOBALS ['conn'];
    $name=$user['name'];
    $em=$user['email'];
    $pass=$user['pass'];
    $e_p=md5($pass);
    $sql="select name,email,Password from user where name=? and email=? and Password=?";
    $st=$con->prepare($sql);
        $st->bind_param("sss",$name,$em,$e_p);
        if($st->execute()){
            $rs=$st->get_result();
            if($rs->num_rows>0){ 
                return true;
            }
            else
            {
                return false;
            }
        }
 }
 



?>