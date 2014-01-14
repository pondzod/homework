 <div class="col-md-2"></div><div class="col-md-7"><?
foreach ($q as $row){
?><?php $name = $row->Name;?>
		<table class="table table-striped" width="738"  cellpadding="1" cellspacing="1">
		<tr>
		<td colspan="2"><center><h1><?=$row->Question?></h1></center></td>
		  </tr>
		  <tr>
		    <td height="53" colspan="2"><?=$row->Details;?></td>
		  </tr>
		  <tr>
		    <td width="397"><img src="<?echo site_url();?>User_data/<?=$row->Name;?>/pic/profile_pic.jpg" alt="profile" class="img-rounded" height="50" width="50"></img>   Create Date : <?=$row->CreateDate;?></td>
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
	?>
	<a href="<?php echo base_url();?>file/download_ass/<?php  echo $file?>" class="btn btn-primary  btn-sm">Download</a></button>  <?echo $file?>
		
		<br>
		<?}
		
foreach ($q2 as $row){
?>
		<table class="table table-striped" width="738"  cellpadding="1" cellspacing="1">
		
		  <tr>
		    <td height="53" colspan="2"><?=$row->Details;?></td>
		  </tr>
		  <tr><?php $name = $row->Name;?>
		    <td width="397"><img src="<?echo site_url();?>/User_data/<?=$row->Name;?>/pic/profile_pic.jpg" alt="profile" class="img-rounded" height="50" width="50"></img>  
		    <a href="<?php echo base_url();?>home/profile/<?echo $name;?>"> <?=$row->Name;?></a>   
		    Create Date : <?=$row->CreateDate;?></td>
		    
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
   	
 	
		<img src="<?echo site_url();?>User_data/<?php echo $userm?>/pic/profile_pic.jpg" alt="profile" class="img-rounded" height="50" width="50"></img>  <?php echo $userm?><br>
  	</tr><tr><td>
    Attach file:<input type="file"  id="InputFile" name="Pic">
  	 
  	 
  	  <input name="btnSave" type="submit" id="btnSave"  button type="button" class="btn btn-success" value="Submit">
  	  <button class="btn btn-default " data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-book"> Library</span></button>
     <a href="<?echo site_url();?>assign_t/check/<?php echo $id_ass;?>"data-toggle="modal"button type="button" class="btn btn-info btn-md">ตรวจงาน</button></a>
		 
		 </div></div></div></td></tr></table>
		 
		</form>
		
		<a href = "<?echo site_url();?>home/stu_index"  button type="button" class="btn btn-default">Back to Webboard</button></a>
		
		
		
<div class="modal fade" id="assignment" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="false">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
<h4 class="modal-title" id="myModalLabel">ส่งงาน</h4>
</div>

<div class="modal-body">

 <table class="table table-bordered table-striped responsive-utilities"><?php 
 
 foreach ($q as $row){
	?><tr><td><?php 
 	echo $row->Question;?>
 	<tr><td><?php 
 	echo $row->Details;
	
	}?> </td></tr>
	</table><form id="f1" action="<?echo site_url();?>assign/send/<?php echo $q3; ?>" class="form-horizontal" method="post" id="frmSend" onsubmit="return senddata();" enctype="multipart/form-data" target="uploadtarget">
<textarea id="about" name="detail" class= "form-control" rows="4" cols="5"></textarea>

 Attach file:<input type="file"  id="InputFile" name="file">
</div>


      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button  type="submit" class="btn btn-primary">ส่งงาน</button>
        </form>
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
		