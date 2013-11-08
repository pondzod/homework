<div class="span7">


<?

$strSQL = "SELECT * FROM webboard ";
$objQuery = mysql_query($strSQL) or die ("Error Query [".$strSQL."]");
$Num_Rows = mysql_num_rows($objQuery);
$Per_Page = 10;  


if(!isset($_GET["Page"]))
{
	$Page=1;
}

$Prev_Page = $Page-1;
$Next_Page = $Page+1;

$Page_Start = (($Per_Page*$Page)-$Per_Page);
if($Num_Rows<=$Per_Page)
{
	$Num_Pages =1;
}
else if(($Num_Rows % $Per_Page)==0)
{
	$Num_Pages =($Num_Rows/$Per_Page) ;
}
else
{
	$Num_Pages =($Num_Rows/$Per_Page)+1;
	$Num_Pages = (int)$Num_Pages;
}

$strSQL .=" order  by QuestionID DESC LIMIT $Page_Start , $Per_Page";
$objQuery  = mysql_query($strSQL);
?>
<table class = "table" >
  <tr>
   <th><div align="center">QuestionID</th>
   <th> Question</th>
   <th>Name</th>
   <th> CreateDate</div></th>
    <th>  View</div></th>
    <th> Reply</div></th>
  </tr>
<?
while($objResult = mysql_fetch_array($objQuery))
{
	
	 $a = $objResult["QuestionID"];
?>

    <td><div align="center"><?=$objResult["QuestionID"];?></div></td>
    <td><a href="<?echo site_url();?>assign/view/<?echo $a;?>"><?=$objResult["Question"];?></a></td>
    <td><?=$objResult["Name"];?></td>
    <td><?=$objResult["CreateDate"];?></div></td>
    <td ><?=$objResult["View"];?></td>
    <td ><?=$objResult["Reply"];?></td>
  </tr>
<?
}
?>
</table>

<br>
Total <?= $Num_Rows;?> Record : <?=$Num_Pages;?> Page :
<?
if($Prev_Page)
{
	echo " <a href='$_SERVER[SCRIPT_NAME]?Page=$Prev_Page'><< Back</a> ";
}

for($i=1; $i<=$Num_Pages; $i++){
	if($i != $Page)
	{
		echo "[ <a href='$_SERVER[SCRIPT_NAME]?Page=$i'>$i</a> ]";
	}
	else
	{
		echo "<b> $i </b>";
	}
}
if($Page!=$Num_Pages)
{
	echo " <a href ='$_SERVER[SCRIPT_NAME]?Page=$Next_Page'>Next>></a> ";
}

?>

                                 
                  <ul class="pager">
                    <li>
                      <a href="#">Prev</a> 
                    </li>
                    <li>
                      <a href="#">Next</a> 
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
          
          </div>
        </div>
