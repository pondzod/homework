

<div class="span7"> 
 <div class=".col-md-6 .col-md-offset-3">
<form action="<?echo site_url();?>home_t/cre_ass1"  enctype="multipart/form-data" class="form-horizontal"  method="post" name="frmMain" id="frmMain" onsubmit="return senddata();" target="uploadtarget">
  
  
 <div class="form-group">

  <label for="inputuser" class="col-lg-3 control-label">ชื่องาน</label>
  <div class="col-lg-5">
      <input name="txtQuestion"  class="form-control"   type="text" id="txtQuestion" value="" size="70"></td>
    </div>
    </div>
    <div class="form-group">
  <label for="inputuser" class="col-lg-3 control-label">รายละเอียด</label>
      <div class="col-lg-5">
   <textarea name="txtDetails" cols="50" rows="5"   class="form-control"  id="txtDetails"></textarea>
   </div>
 </div>
 
   <div class="form-group">
   <label for="inputuser" class="col-lg-3 control-label">แนบไฟล์</label>
   <div class="col-lg-9">
<input type="file"   name="file_cre" id="file_cre" />

File size <= 5Mb 
</div>
 </div>
  
     <div class="form-group"><label for="inputuser" class="col-lg-3 control-label">
     Date:</label>
     <div class="col-lg-5">
		 <input type="text" id="datepicker" class="form-control" name = "date"></p>
 
    </div></div>
     

  
   <div class="form-group">
  <label for="inputuser" class="col-lg-3 control-label">Group</label>
     
     <div class="col-lg-5">
     <input name="txtName" type="text" id="txtName"  class="form-control"   value="" size="50">
  </div>
  </div>
  
  
  <div class="col-lg-offset-3 col-lg-9">
  <div class="form-group">
  <input name="btnSave" type="submit" id="btnSave"  class="btn btn-primary"   value="Submit">

  
  </div>
  </form>
  </div>
              </div>
            </div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
          
          </div>
        </div>

 <script type="text/javascript">

$(function() {
    $( "#datepicker" ).datepicker();
    $( ".selector" ).datepicker({ dateFormat: "yy-mm-dd" });
  });

</script>
  

