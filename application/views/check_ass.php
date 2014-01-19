<?php foreach ($question as $row)
{
echo ('<h2>ชื่องาน:').$row->Question;


  $full= $row->full;}?></h2><?php 
 if (!empty($details)){?>
<table class="table"  table id="myTable"><tr>
<td>
รหัสนิสิต ชื่อ</td><td>วันเวลา</td><td> </td></tr>
 <?php 

 foreach ($details as $row)
 	{
 	?>
 
 	<tr><td>
 	
 	<?php print $row->Name;
 	
 	?></td>
 	<td>
 	<?php 
 	print $row->CreateDate;
 	?></td>
 	<td>
 	
 	<a href = "<?echo site_url();?>file/downloadstu/<? echo $row->file;?>" button type="button" class="btn btn-success">Download</a>

 	</td>
 	
 	<td>
 	<a href = "<?echo site_url();?>file/deletestu/<? echo $row->file;?>" button type="button" class="btn btn-danger"  onclick="Refreshtable();">Delete</a>
 	</td>
 	<td>
 	<button type="button" data-toggle="modal" data-target="#assignment"  class="btn btn-default"  >ให้คะแนน</button>
 	</td>
 		<td>
 	 	<button type="button" data-toggle="modal" data-target="#detail"  class="open-AddDetail  btn btn-default" data-id="<?php echo $row->Detail;?>"  >ดูงาน</button>
 	</td>
 	
 	<td>
 	

 	
 	<form name = "form_score"  id="form_score" action="<?echo site_url();?>assign_t/score/<?echo $row->AssignmentID;?>" class="form-horizontal" method="post">
<input type = "text" name ="score" class= "form-control"  placeholder="เต็ม <?php echo $full;?>" value="<?php echo $row->Score;?>">
 </td>
 <td>
<button  type="submit" class="btn btn-primary" onclick="checkScore()" value="Submit form">ส่งคะแนน</button>
 </form>
</td>
 <!-- modal ดูงาน -->
 
 	<div class="modal fade" id="detail" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="false">
 	<div class="modal-dialog">
 	<div class="modal-content">
 	<div class="modal-body">
 	<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
 	<h4 class="modal-title" id="myModalLabel">เปิดงาน</h4>
 	
 <textarea name="bookId" id="bookId" class="form-control" value=""></textarea>


 </div>
 <div class="modal-footer">
 
 <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
  </form>
 </div>
 </div><!-- /.modal-content -->
 </div><!-- /.modal-dialog -->
 </div><!-- /.modal -->
 
 <?php 
  
 }
}
else {
	print ('<br> ยังไม่มีใครส่งงาน');
	}
 ?> </table>

 
</div>
</div><?php 


?>

 <script>
 $(document).on("click", ".open-AddDetail",
		  function () {
     var myBookId = $(this).data('id');
     $(".modal-body #bookId").val( myBookId );


 });</script>
<script>

 function checkScore(){
	 document.getElementById("form_score").submit();


 }

 </script>