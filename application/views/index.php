
<div class="container">

	<form name="form_log"  class= "form-signin" method="post" action = "<?echo site_url();?>home/c_login"  enctype="multipart/form-data"  onSubmit="Javascript:return checkUser();">
        <h2 class="form-signin-heading">Sign in</h2>
        <input type="text" name ="user" class="form-control" placeholder="Username">
        <input type="password" name ="pass" class="form-control" placeholder="Password">
        
<div class="radio">
<label>
 <input type="radio" name="type" id="optionsRadios1" value="student"  checked>
I'm student
  </label></div>
 <div class = "radio">
<label>
    <input type="radio" name="type" id="optionsRadios2" value="teacher" >
I'm teacher
  </label>
</div>
         
        <div class="checkbox">
        <label>
          <input type="checkbox" value="remember-me"> Remember me
        </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
      
      </form><center>
	<a href="home/regis_student"  button type="button" class="btn btn-default">ลงทะเบียน นักเรียน</button></a>
          <a href="home/regis_teacher"  button type="button" class="btn btn-default">ลงทะเบียน คุณครู</button></a></center>
          
          <script type="text/javascript">
          function checkUser(){
        	  if(document.form_log.user.value == "" || document.form_log.pass.value == ""  ) 
        	  {
        		  window.alert ('กรุณาใส่ให้ครบ');
        		  document.form_log.user.focus();
              return false;
        	  }
              else
                  return true;

          

          }
       
</script>