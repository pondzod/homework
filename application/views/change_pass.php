
  <div class="col-xs-6 col-md-4"></div>
  <div class="col-xs-6 col-md-4">
<div class="form-group">
<form action="<?echo site_url();?>home/change_passedit" class="form-horizontal" method="post">
<label for="inputuser" class=" control-label">Old Password</label>

<input type="password" value="" class="form-control" id="oldspassword" name="oldpassword" >
</div>

<div class="form-group">
<label for="inputuser" class=" control-label">New Password</label>

<input type="password" value="" class="form-control" id="newpassword" name="newpassword" >
</div>


<div class="form-group">

<button type="submit" class="btn btn-default">Submit</button>
<input type="reset" class="btn btn-primary" value="Reset" style="">
</div>