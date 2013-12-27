<div class ="row"><center>
 <div class="col-xs-3">
 <table class="table table-bordered table-striped responsive-utilities">
 <tr>
 <td>
        <?php
       foreach ($q as $row){
echo'กลุ่มของคุณชื่อ:'.$row->Group_Name; 

echo',<br>คีย์ในการเข้ากลุ่ม'.$row->Key; 

}
?>
       </td>
       </tr></table>      </center>
             


