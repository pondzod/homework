 <center><div class="col-md-5 col-md-offset-3">

<form name="frmSearch" method="get" action=" <??>">
<table width="599" border="0">
<tr>

<tr>
<select class="form-control" name="grouplist">
  <?php foreach ($group as $g){?><option value="<?php echo $g->Group_ID;?>"><?php echo $g->Group_Name?></option><?php }?>
  
</select>
</tr><br><tr>
 <button type="submit" class="btn btn-default">Search</button></tr></table></form>
 
 </div><?php 
 if (!empty($res)){?>
 <table class="table"  table id="myTable"><tr>
<td>
งาน</td><td>วันเวลาที่ส่ง</td><td>คะแนน </td></tr><?php 
 foreach ($res as $result)
 {
 
?> 
 
 <tr><td><?php 
echo $result->Question; ?></td>
<td><?php echo $result->CreateDate;?></td>

<td><?php 	if(empty($result->Score))
{echo'ยังไม่ตรวจ';	}
else {echo $result->Score;}?>
<?php 

 }
}
else {
}?>