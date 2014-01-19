 <div class="col-md-2"></div>
 <div class="col-md-5">
 Post:
 <ul class="nav nav-tabs">
  <li><a href="#home" data-toggle="tab">Note</a></li>
  <li><a href="#profile" data-toggle="tab">Assignment</a></li>
 
</ul>


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
  <form action="<?echo site_url();?>home_t/cre_ass1"  enctype="multipart/form-data" class="form-horizontal"  method="post" name="frmMain" id="frmMain" onsubmit="return senddata();" target="uploadtarget">
  
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
<input type="file"   name="file_cre" id="file_cre" />

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
</div>

<div id="fb-root"></div>

<div class="fb-comments" data-href="http://example.com/comments" data-width="450" data-numposts="1" data-colorscheme="light"></div>
 
 <?
foreach ($q as $row){


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
	
 <script type="text/javascript">

$(function() {
    $( "#datepicker" ).datepicker({
changeYear:true,
changeMonth:true
        });
    $( ".selector" ).datepicker({ dateFormat: "yy-mm-dd" });

    
   
  });

</script>
	
  <script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=642574685781763";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
 

 