<?php /*
Author : Gopala Krishna
File : home.php
Description: landing page
***********************************/
?>
<?php 
include 'head.php';
include 'header.php';

?>


<!-- REAL CONTENT 
****************************************-->
  <header class="page-header">
    <div class="container">
      <div class="row-fluid">
      <div class="span12">
              <h1>Registration/Sign in</h1>
      </div>
      </div>
     </div>
  </header>

<div class="container">
	<div class="row-fluid">
		<div class="span12">
			<div class="container">
        	<div class="row-fluid">
            	<div class="span12">
                	<div class="span6">
                    	<div class="area">
                            <form class="form-horizontal">
                                <div class="heading">
                                    <h4 class="form-heading">Sign In</h4>
                                </div>
                      
                                <div class="control-group">
                                    <label class="control-label" for="inputUsername">Username</label>
                                    <div class="controls">
                                        <input type="text" id="inputUsername" placeholder="E.g. ashwinhegde">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="inputPassword">Password</label>
                                    <div class="controls">
                                        <input type="password" id="inputPassword" placeholder="Min. 8 Characters">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <div class="controls">
                                        <label class="checkbox">
                                            <input type="checkbox"> Keep me signed in   ¦
                                            <a href="#" class="btn btn-link">Forgot my password</a>
                                        </label>
                                        <button type="submit" class="btn btn-success">Sign In</button>
                                        <button type="button" class="btn">Help</button>
                                    </div>
                                </div>	
                            </form>	
						</div>                           
                    </div>
                    <div class="span6">
                    	<div class="area">
                            <form class="form-horizontal">
                                <div class="heading">
                                    <h4 class="form-heading">Sign Up</h4>
                                </div>
                              	  <div class="control-group">
                                    <label class="control-label" for="inputFirst">First Name</label>
                                    <div class="controls">
                                        <input type="text" id="inputFirst" placeholder="E.g. Ashwin">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="inputLast">Last Name</label>
                                    <div class="controls">
                                        <input type="text" id="inputLast" placeholder="E.g. Hegde">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="inputEmail">Email</label>
                                    <div class="controls">
                                        <input type="text" id="inputEmail" placeholder="E.g. ashwinh@cybage.com">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="inputUser">Username</label>
                                    <div class="controls">
                                        <input type="text" id="inputUser" placeholder="E.g. ashwinhegde">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="inputPassword">Password</label>
                                    <div class="controls">
                                        <input type="password" id="inputPassword" placeholder="Min. 8 Characters">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <div class="controls">
                                        <label class="checkbox">
                                            <input type="checkbox"> I agree all your <a href="#">Terms of Services</a>
                                        </label>
                                        <button type="submit" class="btn btn-success">Sign Up</button>
                                        <button type="button" class="btn">Help</button>
                                    </div>
                                </div>	
                            
                            </form>	
						</div>                            
                    </div>
                </div>
            	
            </div>
        </div>
		</div>
		
	</div>
</div>



<!-- Testimonials -->



    </div>

</div>



<!-- END REAL CONTENT 
	***********************************************-->


	<?php
	include 'footer.php';

	?>