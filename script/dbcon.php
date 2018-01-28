<?php
    //Rename the database this created
    $con = new PDO('mysql:host=localhost;dbname=studentadbc;charset=utf8', 'root','root');
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $con->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);


?>