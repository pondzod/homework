<?
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
		    <td width="397">Name : <?=$row->Name;?> Create Date : <?=$row->CreateDate;?></td>
		    
		  </tr>
		</table>
		<br>
		<br>
		<?php
		
	}	?>
	
	
		<br>
		<form action="<?echo site_url();?>assign/reply/<?echo $row->QuestionID;?>" method="post" name="frmMain" class="form-horizontal" id="frmMain">
	<div class="form-group">
 	  <label for="inputuser" class="col-lg-3 control-label">Detail</label>
 		<div class="col-lg-5">
		      <textarea name="txtDetails" cols="50" rows="5" class="form-control"  id="txtDetails"></textarea>
		  </div>
		 </div>
		 <div class="form-group">
   		<label for="inputuser" class="col-lg-3 control-label">Username</label>
 		<div class="col-lg-5">
		 <input name="txtName" class="form-control" type="text" id="txtName" value="" size="50">
		 </div>
		 </div>
		 
		    <div class  = "form-group">
		<div class="col-lg-offset-3 col-lg-9">
    Attach file:<input type="file"  id="InputFile" name="Pic">
   <button class="btn btn-default " data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-book"> Library</span></button>
    
     </div>
		   </div>
		   
		  
		   
		   <div class="form-group">
    <div class="col-lg-offset-3 col-lg-9">
		  <input name="btnSave" type="submit" id="btnSave"  button type="button" class="btn btn-success" value="Submit">
		  </div></div>
		
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
        <p>กำลังทำ สำหรับอัปโหลดไฟล์จาก server&hellip;</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
		   
		</body>
		
		