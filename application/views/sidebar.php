<div class ="row">
 <div class="col-xs-3">
 <div class="jumbotron">
              Profile<br>
              <? foreach ($q as $row){
              	?><img src="<?echo site_url();?>/User_data/<?php echo $q2?>/pic/profile_pic.jpg" alt="profile" class="img-rounded" height="100" width="100"><br><br>
              	<?php echo 'คุณ:' .$row->F_name;
              }
              ?>
              
        
              </div>
              Group: <a href="#myModal" data-toggle="modal">Create</a>  or         
 				   <a href="#myModal" data-toggle="modal">Join</a>
              <ul class="nav nav-pills nav-stacked">
  <li class="active">
    <a href="#">
      <span class="badge pull-right">42</span>
      Home
    </a>
  </li>  </ul>
 


<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="false">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Create Group</h4>
      </div>
      <div class="modal-body">
       
       <form action="<?echo site_url();?>home/stu_register" class="form-horizontal" method="post"  enctype="multipart/form-data" onsubmit="return senddata();" target="uploadtarget">

 <div class="form-group">
   <label for="inputuser" class="col-lg-3 control-label">ชื่อกลุ่ม</label>
 <div class="col-lg-5">
<input type="text" class="form-control"  id="name" name="name" >
</div>
</div>
<div class="form-group">
	<label for="inputuser" class="col-lg-3 control-label">ชื่อวิชา</label>
<div class="col-lg-5">
<input type="password" class="form-control" id="password" name="password" >
</div></div>
<div class="form-group">
<label for="inputuser" class="col-lg-3 control-label">สาขา</label>
<div class="col-lg-5">
<input type="text" class="form-control"  id="id_st" name="id_st" >
</div></div>
<div class="form-group">
<label for="inputuser" class="col-lg-3 control-label">ชั้นปี</label>
<div class="col-lg-5">
<input type="text" class="form-control"  id="first" name="first" >
</div></div>
       
       </form>
       
       
       
       
       
       
       
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
</div>
<button onclick="makeid()">Try it</button>
<p id="demo"></p>
<script type="text/javascript">
function makeid()
{
    var text = "";
   
    var possible = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";

    for( var i=0; i < 5; i++ )
        text += possible.charAt(Math.floor(Math.random() * possible.length));



    document.getElementById("demo").innerHTML=text;
    return text;
}</script>