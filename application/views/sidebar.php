 <div class="row">
                <div class="span4">
                <form action="<?echo site_url();?>home/c_login" class="ink-form inline" method="post">
                  <form class="form-inline">
                    <div class="control-group">
                      <label class="control-label" for="inputEmail">Username</label>
                      <div class="controls">
                        <input type="text" id="inputEmail" placeholder="Username" name="user">
                      </div>
                    </div>
                    <div class="control-group">
                      <label class="control-label" for="inputPassword">Password</label>
                      <div class="controls">
                        <input type="password" id="inputPassword" placeholder="Password" name="pass">
                      </div>
                    </div>
                    <div class="control-group">
                      <div class="controls">
                        <label class="checkbox">
                          <input type="checkbox">Remember me</label>
                          <br>
                        <button type="submit" class="btn">Sign in</button>
                        
                      </div>
                      <a href="http://www.w3schools.com">Forget password</a><br>
                      <a href="<?php echo site_url();?>home/regis_student">สมัครสมาชิค</a>
                      
                    </div>
                  </form>
                </div>