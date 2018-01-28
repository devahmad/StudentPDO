<?php

  require_once("dbcon.php");

  $stmt = $con->query("SELECT student_id FROM student ORDER BY student_id DESC");
  $count=$stmt->rowCount();
  $row=$stmt->fetch(PDO::FETCH_ASSOC);
  $id=$row['student_id'];
  if($count<1){
      echo "101";
      exit();
  }
  else{
      echo $id + 1;
      exit();
  }

?>