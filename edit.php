<?php

    require_once("script/dbcon.php");

    $id=$_GET['id'];

    try{
         $stmt= $con->prepare("SELECT * FROM student WHERE student_id=:id");
         $stmt->execute(array(':id'=>$id));
         $row= $stmt->fetch(PDO::FETCH_ASSOC);

    }catch(PDOException $ex){
        echo $ex->getMessage();
    }

?>

<!DOCTYPE HTML>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <title>تحرير الطالب</title>
     <!-- css imports -->
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="screen">

<!-- form manipulations -->
<script src="js/jQuery101.js" type="text/javascript"></script>
<script src="js/update.js" type="text/javascript"></script>
<script src="js/effect.js" type="text/javascript"></script>


<script type="text/javascript">
    function validateAge(){
        var txtinput=document.getElementById("age").value;
        txtinput = txtinput.replace(/[^1-9]/g, "");
        document.getElementById("age").value=txtinput;
    }
</script>

</head>

<body>
    <div class="row-fluid">
        <div class="span12">
        <!-- header -->

            <div class="container">
    <!-- heading -->
   <div align="center"> <div class="alert" style="margin-top:4%; width:50%">
            <strong>ویرایش رکورد</strong></div></div>
            <div style="margin-top:1%;margin-bottom:1%;text-align:center" id="msg"></div>

        <div align="center">
        <form id="frm_edit">
            <table width="400">
                <tr>
                    <td align="right"><label class="labelstyle">اسم:&nbsp;&nbsp;&nbsp;&nbsp;</label></td>
                    <td><input type="text" name="fname" id="fname" value="<?php echo ucwords($row['fname']); ?>" />&nbsp;<span id="fmsg"></span></td>
                </tr>
                <tr>
                    <td align="right"><label class="labelstyle">اسم العائلي :&nbsp;&nbsp;&nbsp;&nbsp;</label></td>
                    <td><input type="text" name="lname" id="lname" value="<?php echo ucwords($row['lname']); ?>" />&nbsp;<span id="lmsg"></span></td>
                </tr>
                <tr>
                    <td align="right"><label class="labelstyle">عمر :&nbsp;&nbsp;&nbsp;&nbsp;</label></td>
                    <td><input type="text" oninput="validateAge();" maxlength="3" name="age" id="studentage" value="<?php echo $row['age']; ?>" />&nbsp;<span id="amsg"></span></td>
                </tr>
                <tr>
                    <td align="right"><label class="labelstyle">البريد الإلكتروني :&nbsp;&nbsp;&nbsp;&nbsp;</label></td>
                    <td><input type="text" name="email" id="email" value="<?php echo $row['email']; ?>" />&nbsp;<span id="emsg"></span></td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td><input type="button" class="btn" id="cancel" value="الغاء" />
                    <input type="submit" name="submit" class="btn btn-primary"  id="<?php echo $id; ?>" value="تسجیل" /></td>
                </tr>
            </table>
        </form>

        </div>

        </div>
        </div>
        </div>
</body>
</html>


