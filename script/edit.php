<?php
      require_once("dbcon.php");

       $id=$_POST['id'] ;
      $fname=$_POST['fname'];
      $lname=$_POST['lname'];
      $age=$_POST['age'];
      $email=$_POST['email'];

      if(!empty($fname) || !empty($lname) || !empty($age) || !empty($email)){

       try{
            $stmt= $con->prepare("UPDATE student SET fname=:fname, lname=:lname, age=:age, email=:email WHERE student_id=:id");
            $stmt->execute(array(':fname'=>$fname, ':lname'=>$lname, ':age'=>$age, ':email'=>$email, ':id'=>$id));
            if($stmt){
            echo "تم تحریر السجل بنجاح";
            }else
            {
                echo "أخفق التحریر";
            }
       }catch(PDOException $ex){
           echo $ex->getMessage();
       }

      }
      else
      {
          echo "تعيين القيم";
          exit();
      }


?>