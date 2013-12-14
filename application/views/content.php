 <div class="col-md-2"></div>
 <div class="col-md-5">
 <table class="table table-bordered table-striped responsive-utilities">
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
  <table class="table table-bordered table-striped responsive-utilities">
 
 
 </td></tr></table>
 
 <?
foreach ($q3 as $row){


?>
 <div class="col-md-2"></div>
 <div class="col-md-5">
	 <table class="table table-bordered table-striped responsive-utilities">
		<tr>
		<td>
		
		   <?=$row->Details;?>
		  <tr>
		    Name : <?=$row->Name;?> Create Date : <?=$row->CreateDate;?>
		  <tr>
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
		
foreach ($q4 as $row){
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
		<br></div></div>
		
		
	
		<?php
		
	
	}	
	
	
	
	?>
	
	
  

 