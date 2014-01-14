 <div class="col-md-2"></div>
 <div class="col-md-5">
 Post:
 <ul class="nav nav-tabs">
  <li><a href="#home" data-toggle="tab">Note</a></li>
  <li><a href="#ass" data-toggle="tab">Assignment</a></li>
 
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

  <div class="tab-pane" id="ass">


	
		
	
<table class = "table" >
  <tr>
   
   <th> Question</th>
   <th>Name</th>
   <th> CreateDate</div></th>

  </tr>
<?
foreach ($q2 as $row){
	
	
?>

    
    <td><a href="<?echo site_url();?>assign/view/<?echo $row->QuestionID;?>">
    <?echo $row->Question;?></a>
    <td><?echo $row->Name;?></td>
    <td><?echo $row->CreateDate;?></td>
  
  </tr>
<?
}
?>
</table>

<br>

          
         
</div>
	
   		<?php $userm = $this->session->userdata('user');
   		
   		if (!isset($q2))
   		{?><div class="alert alert-info"><?php print 'ไม่มีโพสต์'; ?></div><?php }
   		else
   		{
   		
   			
   		
   		?>


<?php }?>
 <script type="text/javascript">

$(function() {
    $( "#datepicker" ).datepicker({
changeYear:true,
changeMonth:true
        });
    $( ".selector" ).datepicker({ dateFormat: "yy-mm-dd" });

    
   
  });
function QuestionID()
{
window.location = '#assignment?var='+document.form.txtName.value+'&var2='+document.form.txtName2.value;
}



</script>
	