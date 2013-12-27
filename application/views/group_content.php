
	
   		<?php $userm = $this->session->userdata('user');?>
 <div class="col-md-2"></div>
 <div class="col-md-5">
 <table class="table table-striped">
<?php
 foreach ($q2 as $row){
	?><tr><td>
		<img src="<?echo site_url();?>/User_data/<?php echo  $row->Name;?>/pic/profile_pic.jpg" alt="profile" class="img-rounded" height="50" width="50"></img> <?php echo $row->Name;?><br>
 	<?echo $row->Question;?>
 	<tr><td><?php 
 	echo $row->Details;?>
	<br>
	Create Date:
	<?php echo $row->CreateDate?>
	 </td></tr><tr>
	<td>
	<img src="<?echo site_url();?>/User_data/<?php echo $userm?>/pic/profile_pic.jpg" alt="profile" class="img-rounded" height="50" width="50">  <br>Reply:
	<form action="<?echo site_url();?>home/post" class="form-horizontal" method="post"  enctype="multipart/form-data" onsubmit="return senddata();" target="uploadtarget">



 <input type="text"  name="txtDetails"  class="form-control"  id="name" >
	 <div class="col-md-9"></div>&nbsp; &nbsp;&nbsp;   <button type="" class="btn btn-default">Comment</button>
	<tr><td>
	 <div class="col-md-10"></div><a href="#assignment" data-toggle="modal" button type="" class="btn btn-primary">ส่งงาน</a></td></tr>
	
	
	
	
	<?php 
}

?></form>
</table>

<div class="modal fade" id="assignment" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="false">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
<h4 class="modal-title" id="myModalLabel">ส่งงาน</h4>
</div>
<div class="modal-body">
<form id="f1" action="<?echo site_url();?>home_t/cre_group" class="form-horizontal" method="post">
 <table class="table table-bordered table-striped responsive-utilities"><?php 
 
 foreach ($q2 as $row){
	?><tr><td><?php 
 	echo $row->Question;?>
 	<tr><td><?php 
 	echo $row->Details;
	
	}?> </td></tr>
	</table>  
<textarea id="about" name="about" class= "form-control" rows="4" cols="5"></textarea>

 Attach file:<input type="file"  id="InputFile" name="Pic">
</div>


      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button  type="submit" class="btn btn-primary">ส่งงาน</button>
        </form>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
</div>

