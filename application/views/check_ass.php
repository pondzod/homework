
<?php foreach ($question as $row)
	session_start();
{
	$this->session->set_userdata('name',$row->Question);
echo ('<h2>ชื่องาน:').$row->Question;
$_SESSION["idq"] =  $row->QuestionID;
 

  $full= $row->full;}?></h2><?php 
 if (!empty($details)){?>
<table class="table"  table id="myTable"><tr>
<td>
รหัสนิสิต ชื่อ</td><td>วันเวลา</td><td> </td></tr>
 <?php 
$score[] = array();
 foreach ($details as $row)
 	{
 	?>
 
 	<tr><td>
 	
 	<?php print $row->id.$row->name;
 	
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
 	</td>
 		<td>
 	 	<button type="button" data-toggle="modal" data-target="#detail"  class="open-AddDetail  btn btn-default" data-id="<?php echo $row->Detail;?>" >ดูงาน</button>
 	</td>
 	
 	<td>
 	

 	
 	<form name = "form_score"  id="form_score" action="<?echo site_url();?>assign_t/score/" class="form-horizontal" method="post">
<input type = "text" name ="<?php echo $row->AssignmentID?>" class= "form-control"  placeholder="เต็ม <?php echo $full;?>" value="<?php echo $row->Score;?>">
 </td>
 <td>


</td>

 </tr>
 
 <?php 

 $score[] = $row->AssignmentID;
 
 }?>
 </table><?php 
  $this->session->set_userdata('id',$score);
?>
<div class="col-xs-12 col-md-8"></div> 
<button  type="submit" class="btn btn-primary" onclick="checkScore()" value="Submit form">บันทึกคะแนน</button>
  </form>
 &nbsp; &nbsp;<a href="<?echo site_url();?>assign_t/send_email/<?php echo $_SESSION["idq"] ?>"  class ="btn btn-default">ส่งคะแนน</a></button>
<?php 
}
else {
	print ('<br> ยังไม่มีใครส่งงาน');
	}
 ?> </table>


<!-- modal ดูงาน -->
 
 	<div class="modal fade" id="detail" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="false">
 	<div class="modal-dialog">
 	<div class="modal-content">
 	<div class="modal-body">
 	<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
 	<h4 class="modal-title" id="myModalLabel">เปิดงาน</h4>
 
<pre class="brush: js">
function my_javascripts() {
    wp_enqueue_script('the-script-handle', 
                      'path/to/file.js', 
                      array('jquery','other_script_that_we_depend_on'), 
                      'scriptversion eg. 1.0', 
                      true);
}
add_action('wp_enqueue_scripts', 'my_javascripts');
</pre>




 </div>
 <div class="modal-footer">
 
 <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
  </form>
</div> 
 </div><!-- /.modal-content -->
 </div><!-- /.modal-dialog -->
 </div><!-- /.modal -->
 

<?php 


?>

 <script>
 $(document).on("click", ".open-AddDetail",
		  function () {
     var myBookId = $(this).data('id');
     $(".modal-body #bookId").val( myBookId );
document.getElementById("p1").innerHTML= myBookId;

 });</script>
<script>

 function checkScore(){
	 document.getElementById("form_score").submit();


 }

 </script>
 	<script type="text/javascript">
     SyntaxHighlighter.all()
</script>