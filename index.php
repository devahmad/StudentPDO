<!DOCTYPE HTML>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>:: Add, Edit, Delete Using PDO/MySQL</title>
             <!-- css imports -->
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="screen">
        <link rel="stylesheet" type="text/css" href="css/DT_bootstrap.css">

      <!-- bootstrap js -->
<script src="js/jquery.js" type="text/javascript"></script>
<script src="js/bootstrap.js" type="text/javascript"></script>
         <!-- dataTable -->
<script type="text/javascript" charset="utf-8" language="javascript" src="js/jquery.dataTables.js"></script>
<script type="text/javascript" charset="utf-8" language="javascript" src="js/DT_bootstrap.js"></script>
<!-- form manipulations -->
<script src="js/jQuery101.js" type="text/javascript"></script>
<script type="text/javascript" src="js/add.js"></script>
<script type="text/javascript" src="js/view.js"></script>
<script type="text/javascript" src="js/edit.js"></script>
 <script type="text/javascript">
    $(document).ready(function(){
        $("#heading").slideDown(2000);
    });
 </script>
<style type="text/css">
<!--
  #heading{
       border-radius:10px;
       color: #CC0000;
       background: #ffffff;
       text-align:center;
       height:40px;
       width:50% }

  .errormsg{color: #CC0000;}
  #pic{background: #FFF5F5;
  width: 15%;
  height: 120px;
  border-radius: 15px;}

  .th{
    text-align: center;}

  #tcover{
      background: #FEFDFF;
      border-radius: 10px;
      margin-top: 3%;}

-->
</style>
<script type="text/javascript">
    function validateAge(){
        var txtinput=document.getElementById("age").value;
        txtinput = txtinput.replace(/[^1-9]/g, "");
        document.getElementById("age").value=txtinput;
    }
</script>
<script type="text/javascript">
$(document).ready(function(){
        $(function(){
		$.ajax({
		url     : 'script/id.php',
		data    : {},
		type    : 'POST',
		success : function(resp){
		$("#id").val(resp);
         }
    });
    });
});
</script>
</head>

<body>

    <div class="row-fluid">
	
        <div class="span12">
        <!-- header -->
    <div align="center"> <div id="heading" style="display: none">

    </div></div>
            <div class="container">
         <input type="text" name="id" id="id" class="invisible" readonly />
<?php include('modal_add.php'); ?>


    <!-- table -->
    <div id="tcover">
        <div style="padding: 1%" id="show_results"></div>
    </div>

        </div>
        </div>
        </div>
		<div align="center"
			<p>
                <a href="http://devo-lab.com" title="DevoLab" target="_blank">جمیع الحقوق متعلق لة مبرمجین مختبر الکواد
                </a>
            </p>
		</div>
</body>
</html>


