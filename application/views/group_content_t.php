 <div class="col-md-2"></div>
 <div class="col-md-5">
 Post:
 <ul class="nav nav-tabs">
  <li><a href="#home" data-toggle="tab">Note</a></li>
  <li><a href="#profile" data-toggle="tab">Assignment</a></li>
 
</ul>

<!-- Tab1 -->
<div class="tab-content">
  <div class="tab-pane active" id="home"><table class="table table-bordered table-striped responsive-utilities">
 <tr>
 <td>
 <form action="<?echo site_url();?>home/post" class="form-horizontal" method="post"  enctype="multipart/form-data" onsubmit="return senddata();" target="uploadtarget">


  

 <textarea name="txtDetails"  class="form-control"  id="name" placeholder="Say something..."></textarea>

   <label for="inputuser" >แนบไฟล์</label>
  
<input type="file"   name="file_cre" id="file_cre" />

     <div class="col-md-10"></div>
                   <button type="submit" class="btn btn-primary">POST</button>
                  
                  </div></form></tr></td>
                  </table></div>
                  <div class="col-xs-9">
</table> </div>
<!-- TAB2-->

  <div class="tab-pane" id="profile">
  <form action="<?echo site_url();?>home_t/cre_ass2/<?php echo $q3[0];?>" enctype="multipart/form-data" class="form-horizontal"  method="post" name="frmMain" id="frmMain" onsubmit="return senddata();" target="uploadtarget">

    <table class="table table-bordered">
 <tr><td>

  <label for="inputuser" class="col-lg-4 control-label">ชื่องาน</label>
  <div class="col-lg-8">
      <input name="txtQuestion"  class="form-control"   type="text" id="txtQuestion" value="" size="70"></td>
    </div>
    </tr></td>
    
   <tr><td>
  <label for="inputuser" class="col-lg-4 control-label">รายละเอียด</label>
      <div class="col-lg-8">
   <textarea name="txtDetails" cols="50" rows="5"   class="form-control"  id="txtDetails"></textarea>
   </div>

     </tr></td>
    <tr><td>
   <label for="inputuser" class="col-lg-4 control-label">แนบไฟล์</label>
   <div class="col-lg-8">
<input type="file"   name="file_cre" id="file_cre"/>

File size <= 5Mb 
</div>
     </tr></td>
    <tr><td>
     <label for="inputuser" class="col-lg-4 control-label">
     Date:</label>
     <div class="col-lg-8">
		 <input type="text" id="datepicker" class="form-control" name="date" ></p>
 
  </div>
     </tr></td>
   
  </div>
    <tr><td>
  <div class="col-md-10"></div>
  <input name="btnSave" type="submit" id="btnSave"  class="btn btn-primary"   value="Submit">
   </tr></td>
  
  
  </form></div>
 </table>
 
 
 	<?php $userm = $this->session->userdata('user');
   		
   		if (!isset($q2))
   		{?><div class="alert alert-info"><?php print 'ไม่มีโพสต์'; ?></div><?php }
   		else
   		{?>
   			<table class = "table" >
   			<tr>
   			 
   			<th> Question</th>
   			<th>Name</th>
   			<th> CreateDate</div></th>
   			
   			</tr>
   			<?php 
   			foreach ($q2 as $row){
?>
   				<td><a href="<?echo site_url();?>assign_t/view/<?echo $row->QuestionID;?>">
    <? echo $row->Question;?></a>
    <td><?echo $row->Name;?></td>
    <td><?echo $row->CreateDate;?></td>
  
  </tr>
   			
   			<?php }?>
</div></table>
<?php }?>
	
  
   			
   			
   			
   			
   			
   			
  



 <script type="text/javascript">

$(function() {
    $( "#datepicker" ).datepicker({
changeYear:true,
changeMonth:true
        });
    $( ".selector" ).datepicker({ dateFormat: "yy-mm-dd" });

    
   
  });

</script>
	