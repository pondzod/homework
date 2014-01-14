
<div class ="row">
<div class="col-xs-3">

 <?php $user 	= $this->session->userdata('user');?>
             <table class="table table-bordered table-striped responsive-utilities">
 <tr>
 <td>  Profile</td></tr>
 				<tr><td>
              <? foreach ($q as $row){
              	?><img src="<?echo site_url();?>/User_data/<?php echo $user?>/pic/profile_pic.jpg" alt="profile" class="img-rounded" height="100" width="100"><br><br>
              	<?php echo 'คุณ:' .$row->name; echo'<br>';
              	
              	echo 'Email:'.$row->E_mail;
              }
              ?></td></tr>
              </table>
        
            
              Group: <a href="#create" data-toggle="modal">Create</a>  or         
 				   <a href="#myModal" data-toggle="modal">Join</a>
             
         <div class="list-group">
    <? foreach ($q2 as $row){?>
  <a href ="<?echo site_url();?>group_t/index/<?php echo $row->Group_ID;?> "class="list-group-item">
     <?php echo $row->Group_Name; ?>
    </a><?php }?>
  </div>
  
 

<!-- Modal -->
<div class="modal fade" id="create" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="false">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Create Group</h4>
      </div>
      <div class="modal-body">
       
       <form id="f1" action="<?echo site_url();?>home_t/cre_group" class="form-horizontal" method="post"   onsubmit="return  randomStringp();"  >

 <div class="form-group">
   <label for="inputuser" class="col-lg-3 control-label">ชื่อกลุ่ม</label>
 <div class="col-lg-5">
<input type="text" class="form-control"  id="name" name="name" >
</div>
</div>
<div class="form-group">
	<label for="inputuser" class="col-lg-3 control-label">ชื่อวิชา</label>
<div class="col-lg-5">
<input type="text" class="form-control" id="name_sub" name="name_sub" >
</div></div>
<div class="form-group">
<label for="inputuser" class="col-lg-3 control-label">สาขา</label>
<div class="col-lg-5">
<input type="text" class="form-control"  id="major" name="major" >
</div></div>

<div class="form-group">
<label for="inputuser" class="col-lg-3 control-label">หมู่เรียน</label>
<div class="col-lg-5">
<input type="text" class="form-control"  id="group" name="group" >
</div></div>
   <div class="form-group">
    <label for="inputuser" class="col-lg-3 control-label">  
   
   
       <input type="hidden" id="gen" name="gen" type="text"  value=""/>
       </div></div>
       
      
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button  type="submit" class="btn btn-primary">Create</button>
        </form>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
</div>


<script type="text/javascript">
function randomStringp() {
    var text = "";
   
    var possible = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";

    for( var i=0; i < 5; i++ ){
        text += possible.charAt(Math.floor(Math.random() * possible.length));
    }



    document.getElementById('f1').gen.value = text; 

    return true;
}

</script>