  <div class="container">
      <h2>ระบบการจัดการการส่งการบ้าน</h2>
      <div class="container">
        <div class="navbar">
          <div class="navbar-inner">
            <div class="container page">
              <div class="navbar">
       
                 
                    
                  
                   
                    <ul class="nav nav-tabs">
                      <li class="active">
                       <a href="<?php echo base_url();?>home/stu_index">Home</a>
                      </li>
                      <li>
                        <a href="#">Assignment</a>
                      </li>
                  
                      <li>
                        <a href="<?php echo base_url();?>home/cre_ass">ตั้งหัวข้อ</a>
                      </li>
                      <li>
                        <a href="<?php echo base_url();?>home/my_file">my file</a>
                      </li>
                      <li>
                        <a href="#">About</a>
                      </li>
                         <ul class="nav navbar-nav navbar-right">
                     <?php   $userm = $this->session->userdata('user'); ?> 
                     <li id="fat-menu class="dropdown">
                     <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"> <?php echo $userm;  ?>  </span><b class="caret"></b></a>
                       <ul class="dropdown-menu">
                        <li><a href="<?php echo base_url();?>home/edit_pro"><span class="glyphicon glyphicon-cog"></span> &nbsp;Edit profile</a></li>
                          <li><a href="<?php echo base_url();?>home/change_pass">Change Password</a></li>
                      <li><a href="<?php echo base_url();?>home/logout">Logout</a></li>
                      </ul>
                      </li>
                      </ul>
                   
                   
                   
                     </ul>
                     
                  </div>
                </div>
              </div>