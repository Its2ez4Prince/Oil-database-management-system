<?php

include 'connection.php';

$conn = OpenCon();

if(isset($_POST['aname'])){
  $aname = $_POST['aname'];
  $password=$_POST['password'];

  if($aname=='admin' and $password=='Admin@1234'){
    Print '<script>window.location.assign("http://localhost:80/dbms_project/page1.html");</script>';
    exit;
  }
}
?>