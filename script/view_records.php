
<table class="table table-bordered" id="example">
   <!-- table title -->
    <div class="alert alert-info">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
            <strong>&nbsp;الطلاب المسجلين</strong></div>
            <thead>
                <tr>
                    <th style="text-align:center;">الهوية</th>
                    <th style="text-align:center;">اسم</th>
                    <th style="text-align:center;">اسم عائلي</th>
                    <th style="text-align:center;">عمر</th>
                    <th style="text-align:center;">البريد الإلكتروني</th>
					<th style="text-align:center;">العمليات</th>
                </tr>
            </thead>
    <tbody>

	    <?php

            require_once("dbcon.php");

            $stmt = $con->query("SELECT * FROM student ORDER BY student_id ASC");

            foreach($stmt as $row){
    ?>
        <tr>
            <td style="text-align:center; width:100px"><?php echo $row['student_id']; ?></td>
            <td width="200"><?php echo ucwords($row['fname']); ?></td>
			<td width="200"><?php echo ucwords($row['lname']); ?></td>
			<td style="text-align:center;width:100px"><?php echo $row['age']; ?></td>
			<td width="450"><?php echo $row['email']; ?></td>
            <td style="text-align:center;width:300px">
            <a href="edit.php<?php echo '?id='.$row['student_id']; ?>" data-toggle="modal" class="btn btn-info">تحریر</a>
			<a href="#delete<?php echo $row['student_id']; ?>"  data-toggle="modal"  class="btn btn-danger" >إزالة </a></td>
        </tr>

        <!-- Modal Delete -->
    <div id="delete<?php  echo $row['student_id'];?>" class="modal hide fade" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <!-- heading -->
    <div class="modal-header">
    <h3 id="myModalLabel">إزالة</h3></div><!-- end heading -->
        <!-- modal body -->
        <div class="modal-body">
		    <p><div class="alert alert-danger">هل تريد بالتأكيد إزالة هذا السجل؟</div></p>
		</div>
		<hr>
		<div class="modal-footer">
		    <button class="btn btn-inverse" data-dismiss="modal" aria-hidden="true">لا</button>
			<a href="script/delete.php<?php echo '?id='.$row['student_id']; ?>" class="btn btn-danger">نعم</a>
		</div>
		</div>


    <?php } ?>
   </tbody>
</table>

