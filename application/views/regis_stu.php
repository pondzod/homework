<div class = "container">

<center>
        <h2 class="form-signin-heading">ลงทะเบียนนักเรียน</h2></center>
<form action="<?echo site_url();?>home/stu_register" class="form-horizontal" method="post"  enctype="multipart/form-data" onsubmit="return senddata();" target="uploadtarget">

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
<label for="inputuser" class="col-lg-3 control-label">รหัสนิสิต</label>
<div class="col-lg-5">
<input type="text" class="form-control"  id="id_st" name="id_st" >
</div></div>
<div class="form-group">
<label for="inputuser" class="col-lg-3 control-label">ชื่อ-นามสกุล</label>
<div class="col-lg-5">
<input type="text" class="form-control"  id="first" name="first" >
</div></div>

<div class="form-group">
<label for="inputuser" class="col-lg-3 control-label">สาขาวิชา</label>
<div class="col-lg-5">
<select  id="option" class="form-control" name="major">
<option>Information Technology</option>
<option>Computer science</option>
<option>Math Education</option>
</select>
</div></div>

<div class="form-group">
<label for="inputuser" class="col-lg-3 control-label">E-mail</label>
<div class="col-lg-5">
<input type="text" class="form-control" id="email" name="email" >
</div></div>

<div class="form-group">
<label for="inputuser" class="col-lg-3 control-label">About me</label>
<div class="col-lg-5">
<textarea id="about"  class="form-control" name="about"></textarea><br>
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