<div class ="row">
 <div class="col-xs-3">
 <div class="jumbotron">
              Profile<br>
              <? foreach ($q as $row){
              	?><img src="<?echo site_url();?>/User_data/<?php echo $q2?>/pic/profile_pic.jpg" alt="profile" class="img-rounded" height="100" width="100"><br><br>
              	<?php echo 'คุณ:' .$row->F_name;
              }
              ?>
              
        
              </div>
              <ul class="nav nav-pills nav-stacked">
  <li class="active">
    <a href="#">
      <span class="badge pull-right">42</span>
      Home
    </a>
  </li>
  ...
</ul>
              </div>