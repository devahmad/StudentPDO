	    <!-- Button to trigger modal -->
	<div align="center" style="margin-bottom:10px"><img src="images/img.png" /></div>
    <div><a class="btn btn-primary" href="#myModal" data-toggle="modal" style="width:96%">افزودن</a></div>

    <!-- Modal -->
    <div id="myModal" class="modal hide fade" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-header">
        <h3 id="myModalLabel">اضافة</h3>
    </div> <!-- end header -->

    <div class="modal-body">
        <form id="frm_pdo">
	    <table class="table1">
		    <tr>
			    <td><label style="color:#3a87ad; font-size:18px">اسم :</label></td>
			    <td width="30"></td>
		    	<td><input type="text" name="fname" id="fname" value="" placeholder="" />&nbsp;<span id="fmsg"></span></td>
			</tr>
			<tr>
			    <td><label style="color:#3a87ad; font-size:18px">اسم العائلي :</label></td>
				<td width="30"></td>
			    <td><input type="text" name="lname" id="lname" value="" placeholder="" />&nbsp;<span id="lmsg"></span></td>
			</tr>
            <tr>
			    <td><label style="color:#3a87ad; font-size:18px">عمر :</label></td>
				<td width="30"></td>
			    <td><input type="text" maxlength="3" oninput="validateAge();" name="age" id="age" value="" placeholder="" />&nbsp;<span id="amsg"></span></td>
			</tr>
			<tr>
			    <td><label style="color:#3a87ad; font-size:18px">البريد الإلكتروني:</label></td>
			    <td width="30"></td>
				<td><input type="email" name="email" id="email" value="" placeholder="" />&nbsp;<span id="emsg"></span></td>
			</tr>
		</table>
    <!-- modal footer -->
    <div class="modal-footer">
    <button class="btn" data-dismiss="modal" aria-hidden="true">الغاء</button>
    <input type="submit" name="submit" class="btn btn-primary" value="اضافة" /></div>
        </form>
    </div>

</div>