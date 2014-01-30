 <script src="shCore.js" type="text/javascript"></script>
<script src="shAutoloader.js" type="text/javascript"></script>
	<link type="text/css" rel="stylesheet" href="/sh/styles/shCoreDefault.css"/>
 
 <div class="col-md-2"></div>
 <div class="col-md-5">
 Post:
 <ul class="nav nav-tabs">
  <li><a href="#home" data-toggle="tab">Note</a></li>

 
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

 
<?php 
foreach ($note as $row)

{
?>
		<table class="table table-bordered table-striped responsive-utilities">
		
		  <tr>
		    <td height="53" colspan="2"><?=$row->Detail_n;?></td>
		  </tr>
		  <tr>
		    <td width="397">Name : <?=$row->Name;?> Create Date : <?=$row->CreateDate_n;?></td>
		    
		  </tr>
		  <tr>
		 <td>
		 <tr><td><?=$row->Detail;?> 
		 </tr><td><div class="col-md-9"><form name ="comment" method="post" action="<?echo site_url();?>home/comment/<?=$row->NoteID;?>">
		 <input type  = "text" name="comment" class = "form-control"/></div>
		 <button type="submit" class="btn btn-default">Comment</button>
		 </form>
		 </td>
		 </tr>
		
		<br>
		<br>
		</div></div>
	
		<?php
		
	}
	
	?>
	</table>
	

	
 <script type="text/javascript">

$(function() {
    $( "#datepicker" ).datepicker({
changeYear:true,
changeMonth:true
        });
    $( ".selector" ).datepicker({ dateFormat: "yy-mm-dd" });

    
   
  });

</script>
	
 

 