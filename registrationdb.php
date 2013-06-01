
<?php
include 'head.php';
include 'header.php';
include_once('assets/inc/Connect.class.php');
$obj=new connect();
?>

    <!-- NAVBAR
    ================================================== -->


    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->
    <div id="the_real_content">
  



        <div class="container">
          <div class="row-fluid">
        <div class="span12">
          <?php
if($_POST['password'] != $_POST['repassword'])
{
	echo "both passwords are not matched";
}elseif(($_POST['designation'] == 'Execution Team') AND isset($_POST['sub']))
{
	$insert=$obj->conn->exec("INSERT INTO civil_et(fname,lname,username,password,repassword,email,phone,designation) VALUES ('$_POST[fname]','$_POST[lname]','$_POST[username]','$_POST[password]','$_POST[repassword]','$_POST[email]','$_POST[phone]','$_POST[designation]')");

}elseif(($_POST['designation'] == 'Supply Chain Management') AND isset($_POST['sub']))
{
	$insert=$obj->conn->exec("INSERT INTO civil_scm(fname,lname,username,password,repassword,email,phone,designation) VALUES ('$_POST[fname]','$_POST[lname]','$_POST[username]','$_POST[password]','$_POST[repassword]','$_POST[email]','$_POST[phone]','$_POST[designation]')");
}elseif(($_POST['designation'] == 'Human Resources') AND isset($_POST['sub']))
{
	$insert=$obj->conn->exec("INSERT INTO civil_hr(fname,lname,username,password,repassword,email,phone,designation) VALUES ('$_POST[fname]','$_POST[lname]','$_POST[username]','$_POST[password]','$_POST[repassword]','$_POST[email]','$_POST[phone]','$_POST[designation]')");
}elseif(($_POST['designation'] == 'Plant And Machinery') AND isset($_POST['sub']))
{
	$insert=$obj->conn->exec("INSERT INTO civil_pm(fname,lname,username,password,repassword,email,phone,designation) VALUES ('$_POST[fname]','$_POST[lname]','$_POST[username]','$_POST[password]','$_POST[repassword]','$_POST[email]','$_POST[phone]','$_POST[designation]')");
}
?>

            </div>
            
        </div>
  </div>
</div>


    <!-- Footer
    ================================================== -->
  <?php
  include 'footer.php';
  
  ?>
    </body>
  </html>


   