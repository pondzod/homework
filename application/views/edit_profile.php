<div class = "container"><center>
<h2 class="form-signin-heading">แก้ไขประวัติส่วนตัว</h2></center>

<form action="<?echo site_url();?>home/edit" class="form-horizontal" method="post">
<? foreach ($q as $row){?>

  <div class="col-md-9">







<div class="form-group">
<label for="inputuser" class="col-lg-3 control-label">รหัสนิสิต</label>
<div class="col-lg-9">
<input type="text" value="<?php echo $row->id;?>" class="form-control"  id="id_st" name="id_st" >
</div></div>
<div class="form-group">
<label for="inputuser" class="col-lg-3 control-label">ชื่อ-นามสกุล</label>
<div class="col-lg-9">
<input type="text" value="<?php echo $row->F_name;?>" class="form-control"  id="first" name="first" >
</div></div>

<div class="form-group">
<label for="inputuser" class="col-lg-3 control-label">สาขาวิชา</label>
<div class="col-lg-9">
<select  id="option" class="form-control" name="major">
<option>Information Technology</option>
<option>Computer science</option>
<option>Math Education</option>
</select>
</div></div>

<div class="form-group">
<label for="inputuser" class="col-lg-3 control-label">E-mail</label>
<div class="col-lg-9">
<input type="text" value="<?php echo $row->E_mail;?>"  class="form-control" id="email" name="email" >
</div></div>

<div class="form-group">
<label for="inputuser" class="col-lg-3 control-label">About me</label>
<div class="col-lg-9">
<textarea id="about" value="<?php echo $row->About;?>"  class="form-control" name="about"></textarea><br>
</div></div>

<div class="form-group">
<label for="inputuser" class="col-lg-3 control-label">รูปประจำตัว</label>
<div class="col-lg-9">
<input type="file" i
d="InputFile" name="Pic">
</div>
</div>

<div class="form-group">
<div class="col-lg-offset-3 col-lg-9">
<button type="submit" class="btn btn-default">Submit</button>
<input type="reset" class="btn btn-primary" value="Reset" style="">
</div></div>

</form>
<?php 
}
?>