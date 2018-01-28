<?php

   require_once("dbcon.php");

   $id=$_POST['id'];
   $fname=$_POST['fname'];
   $lname=$_POST['lname'];
   $age=$_POST['age'];
   $email=$_POST['email'];

   if(!empty($fname) || !empty($lname) || !empty($age) || !empty($email)){

        $stmt= $con->prepare("SELECT * FROM student WHERE student_id=?");
        $stmt->execute(array($id));
        $count=$stmt->rowCount();
        if($count>0){
            echo "Record With '".$id."' Alredy Exist";
            exit();
        }
        else{
           try{
            $stmt1=$con->prepare("INSERT INTO student(student_id,fname,lname,age,email)
            VALUES
            (:id,:fname,:lname,:age,:email)");
            $stmt1->execute(array(':id'=>$id, ':fname'=>$fname, ':lname'=>$lname, ':age'=>$age, ':email'=>$email));
            echo "Records Saved";
           }catch(PDOException $ex){
               echo $ex->getMessage();
           }
        }
   }
   else
   {
       echo "Set Values";
   }

?>