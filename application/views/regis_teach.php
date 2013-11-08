

<div class = "container"><center>
<h2 class="form-signin-heading">ลงทะเบียนคุณครู</h2></center><br>
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
<label for="inputuser" class="col-lg-3 control-label">Firstname</label>
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
<label for="inputuser" class="col-lg-3 control-label">Aboutme</label>
<div class="col-lg-5">
<textarea id="about" name="about" class= "form-control"></textarea>
     </div></div>
      <div class="form-group">
    <div class="col-lg-offset-3 col-lg-9">
                    <button type="submit" class="btn btn-default">Submit</button>
                    <input type="reset" class="btn btn-primary" value="Reset" style="">
                  </div></div></form>