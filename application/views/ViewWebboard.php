 <div class="col-md-2"></div><div class="col-md-7"><?
foreach ($q as $row){
?>
		<table class="table table-striped" width="738"  cellpadding="1" cellspacing="1">
		<tr>
		<td colspan="2"><center><h1><?=$row->Question?></h1></center></td>
		  </tr>
		  <tr>
		    <td height="53" colspan="2"><?=$row->Details;?></td>
		  </tr>
		  <tr>
		    <td width="397">Name : <?=$row->Name;?> Create Date : <?=$row->CreateDate;?></td>
		    <td width="253">View : <?=$row->View;?> Reply : <?=$row->Reply;?></td>
		<?php  
		$file =  $row->file;
		 ?>
		  </tr>
		</table>
		<br>
		<br>
		<?php
		
	}	
	if ($file){
	?>ไฟล์ที่แนบมา
	<a href="<?php echo base_url();?>file/download_ass/<?php  echo $file?>" class="btn btn-primary">Download</a></button>
		
		<br>
		<?}
		
foreach ($q2 as $row){
?>
		<table class="table table-striped" width="738"  cellpadding="1" cellspacing="1">
		
		  <tr>
		    <td height="53" colspan="2"><?=$row->Details;?></td>
		  </tr>
		  <tr>
		    <td width="397"><img src="<?echo site_url();?>/User_data/<?=$row->Name;?>/pic/profile_pic.jpg" alt="profile" class="img-rounded" height="50" width="50"></img><?=$row->Name;?> Create Date : <?=$row->CreateDate;?></td>
		    
		  </tr>
		</table>
		<br>
		<br>
		<?php
		
	}	?>
	
	
		<br>
		<form action="<?echo site_url();?>assign/reply/<?echo $row->QuestionID;?>" method="post" name="frmMain" class="form-horizontal" id="frmMain" onSubmit="Javascript:return checkReply();" >
	
	<table class="table table-bordered table-striped responsive-utilities">
 <tr class="success">
 <td>
 	
		      <textarea name="txtDetails" cols="50" rows="5" class="form-control"  id="txtDetails"></textarea>
		
   	
   		<?php $userm = $this->session->userdata('user');?>
   	
 	
		<img src="<?echo site_url();?>/User_data/<?php echo $userm?>/pic/profile_pic.jpg" alt="profile" class="img-rounded" height="50" width="50"></img>  <?php echo $userm?><br>
  	</tr><tr><td>
    Attach file:<input type="file"  id="InputFile" name="Pic">
  	 <button class="btn btn-default " data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-book"> Library</span></button>
     
		 
		  
		   
		 
  
		  <input name="btnSave" type="submit" id="btnSave"  button type="button" class="btn btn-success" value="Submit">
		 </div></div></div></td></tr></table>
		 
		</form>
		
		<a href = "<?echo site_url();?>home/stu_index"  button type="button" class="btn btn-default">Back to Webboard</button></a>
		<a href = "<?echo site_url();?>assign/send"  button type="button" class="btn btn-info btn-md">ส่งงาน</button></a>
		
		
		<div class="modal fade" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title">Upload Files</h4>
      </div>
      <div class="modal-body">
        <p>กำลังทำ:: สำหรับอัปโหลดไฟล์จาก server&hellip;</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
		   
		</body>
		 <script type="text/javascript">
          function checkReply(){
        	  if(document.frmMain.txtDetails.value == "" || document.frmMain.txtName.value == ""  ) 
        	  {
        		  window.alert ('กรุณาใส่ให้ครบ');
        		  document.frmMain.txtDetails.focus();
              return false;
        	  }
              else
                  return true;

        	  document.frmMain.submit();
          }
          
</script>
		