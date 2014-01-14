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
        
             
              Group:         
 				   <a href="#join" data-toggle="modal">Join</a>
              <ul class="nav nav-pills nav-stacked">
  <li class="active">
    <? foreach ($q4 as $row){?>
  <a href ="<?echo site_url();?>group/index/<?php echo $row->Group_ID;?>">
     <?php echo $row->Group_Name; ?><span class="badge pull-right">42</span>
    </a>
    
  </li>  <?php } ?></ul>
 
</div>


<!-- Modal -->
<div class="modal fade" id="join" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="false">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Join Group</h4>
      </div>
      <div class="modal-body">
       
       <form id="f1" name ="join"action="<?echo site_url();?>group/join" class="form-horizontal" method="post"   onsubmit="return  checkkey();"  >

 <div class="form-group">
   <label for="inputuser" class="col-lg-3 control-label">รหัสกลุ่ม</label>
 <div class="col-lg-5">
<input type="text" class="form-control"  id="keygroup" name="keygroup">
</div>
</div>

       
      
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button  type="submit" class="btn btn-primary">Join</button>
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


          function checkkey(){
        	  if(document.join.keygroup.value == "" ) 
        	  {
        		 
        		  document.join.keygroup.focus();
              return false;
        	  }
              else
                  return true;

          

          }
       </script>
