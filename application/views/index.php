
<div class="container">

	<form name="form_log"  class= "form-signin" method="post" action = "<?echo site_url();?>home/c_login"  enctype="multipart/form-data"  onSubmit="Javascript:return checkUser();">
        <h2 class="form-signin-heading">Sign in</h2>
        <input type="text" name ="user" class="form-control" placeholder="Username">
        <input type="password" name ="pass" class="form-control" placeholder="Password">
     <!--  
<div class="radio">
<label>
 <input type="radio" name="type" id="optionsRadios1" value="student"  checked>
I'm student
  </label></div>
 <div class = "radio">
<label>
    <input type="radio" name="type" id="optionsRadios2" value="teacher" >
I'm teacher
  </label>
</div> -->
         
        <div class="checkbox">
        <label>
          <input type="checkbox" value="remember-me"> Remember me
        </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
      
      </form>
      
      
      
<!-- Modal -->
<div class="modal fade" id="regis_teach" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">สมัครสมาชิกนักเรียน</h4>
      </div>
      <div class="modal-body">
      
      <form action="<?echo site_url();?>home/teacher_regis" class="form-horizontal" method="post" enctype="multipart/form-data" onsubmit="return senddata();" target="uploadtarget">
  
    <div class="form-group">
   <label for="inputuser" class="col-lg-3 control-label">Username</label>
 <div class="col-lg-5">
<input type="text" class="form-control"  id="name" name="name" >
</div>
</div>
<div class="form-group">
	<label for="inputuser" class="col-lg-3 control-label">Password</label>
<div class="col-lg-5">
<input type="password" class="form-control" id="password" name="password" >
</div></div>

<div class="form-group">
<label for="inputuser" class="col-lg-3 control-label">ชื่อ นามสกุล</label>
<div class="col-lg-5">
<input type="text" class="form-control"  id="first" name="first" >
</div>
</div>



<div class="form-group">
<label for="inputuser" class="col-lg-3 control-label">Email</label>
<div class="col-lg-5">
<input type="text" class="form-control" id="email" name="email" >
</div>
</div>

<div class="form-group">
<label for="inputuser" class="col-lg-3 control-label">About me</label>
<div class="col-lg-5">
<textarea id="about" name="about" class= "form-control"></textarea>
     </div></div>
     <div class="form-group">
<label for="inputuser" class="col-lg-3 control-label">รูปประจำตัว</label>
<div class="col-lg-5">
<input type="file" id="InputFile" name="Pic">
 </div>
 </div>
     
      <div class="form-group">
    <div class="col-lg-offset-3 col-lg-9">
                    <button type="submit" class="btn btn-default">Submit</button>
                    <input type="reset" class="btn btn-primary" value="Reset" style="">
                  </div></div></form>
      
      
         </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
</div>
<!ครู>
      <div class="modal fade" id="regis_student" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">สมัครสมาชิกคุณครู</h4>
      </div>
      <div class="modal-body">
      <form action="<?echo site_url();?>home/teacher_regis" class="form-horizontal" method="post" enctype="multipart/form-data" onsubmit="return senddata();" target="uploadtarget">
  
    <div class="form-group">
   <label for="inputuser" class="col-lg-3 control-label">Username</label>
 <div class="col-lg-5">
<input type="text" class="form-control"  id="name" name="name" >
</div>
</div>
<div class="form-group">
	<label for="inputuser" class="col-lg-3 control-label">Password</label>
<div class="col-lg-5">
<input type="password" class="form-control" id="password" name="password" >
</div></div>

<div class="form-group">
<label for="inputuser" class="col-lg-3 control-label">ชื่อ นามสกุล</label>
<div class="col-lg-5">
<input type="text" class="form-control"  id="first" name="first" >
</div>
</div>



<div class="form-group">
<label for="inputuser" class="col-lg-3 control-label">Email</label>
<div class="col-lg-5">
<input type="text" class="form-control" id="email" name="email" >
</div>
</div>

<div class="form-group">
<label for="inputuser" class="col-lg-3 control-label">About me</label>
<div class="col-lg-5">
<textarea id="about" name="about" class= "form-control"></textarea>
     </div></div>
     <div class="form-group">
<label for="inputuser" class="col-lg-3 control-label">รูปประจำตัว</label>
<div class="col-lg-5">
<input type="file" id="InputFile" name="Pic">
 </div>
 </div>
     
      <div class="form-group">
    <div class="col-lg-offset-3 col-lg-9">
                    <button type="submit" class="btn btn-default">Submit</button>
                    <input type="reset" class="btn btn-primary" value="Reset" style="">
                  </div></div></form>
         </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
</div>
      
      
      <center>
      
      
      
      
      
	<a href="#regis_teach"  data-toggle="modal"  button type="button" class="btn btn-default">ลงทะเบียน นักเรียน</button></a>
          <a href="#regis_student"  data-toggle="modal"  button type="button" class="btn btn-default">ลงทะเบียน คุณครู</button></a></center>
          
          <script type="text/javascript">
          function checkUser(){
        	  if(document.form_log.user.value == "" || document.form_log.pass.value == ""  ) 
        	  {
        		  window.alert ('กรุณาใส่ให้ครบ');
        		  document.form_log.user.focus();
              return false;
        	  }
              else
                  return true;

          

          }
       
</script>