<?php
  require_once("dbcon.php");

  $id=$_GET['id'];

    try{
        $stmt= $con->prepare("DELETE FROM student WHERE student_id=?");
        $stmt->execute(array($id));
        header("Location: ../index.php");
    }catch(PDOException $ex){
        echo $ex->getMessage();
    }


?>