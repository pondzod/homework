<div class="form-group">
<div class="col-lg-5">
<?php
print $error;
echo form_open_multipart('home/do_upload');?>
<input type="file" name="userfile" size="20" />
</div>
 <div class="col-lg-offset-3 col-lg-9">
<input type="submit" value="upload"  class="btn btn-default"/>

 </div>
 </div><?php 
 if ($q2){?>
<table class="table"><tr>
<td>
Name</td><td>Size</td><td>Create Date </td></tr>
 <?php 
 
 foreach ($q2 as $f)
 {
 	?>
 
 	<tr><td>
 	<?php 
 	print $f['name'];
 	?></td><td>
 	<?php 
 	$size = ($f['size'])/1000;
 	print number_format($size,2). 'KB';
 	?>
 	</td><td>
 	
 	<?php print  date('d/m/Y H:i:s', $f['date']); ?>
 	</td><td>
 	<a href = "<?echo site_url();?>file/download/<? echo $f['name'];?>" button type="button" class="btn btn-success">download</a>
 	</td></tr>
 	<?php 
 	
 }
 }
else 
	print ('<br> Do not have any file');
	
 ?> </table>
</div>
</div><?php 
?>
