
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
  <header class="page-header">
    <div class="container">
      <div class="row-fluid">
      <div class="span12">
              <h1>Execution Team</h1>
      </div>
      </div>
     </div>
  </header>



        <div class="container">
          <div class="row-fluid">
        <div class="span9">
         <?php
$Execution=$obj->conn->prepare("SELECT * FROM civil_et");
$Execution->execute();
                    echo "   <table class='table table-bordered'>";
echo "<th>s.no</th>";
echo "<th>Name of the Firm/Contractor</th>";
echo "<th>Nature of work experience</th>";
echo "<th>Location</th>";
echo "<th>Contact Details</th>";
echo "<th>Company Profile</th>";
echo "<th>Remarks</th>";
while($Executionteam=$Execution->fetch()){
?>
<tr>
<td><?php echo $Executionteam['sno']; ?></td>
<td><?php echo $Executionteam['fname']; ?></td>
<td><?php echo $Executionteam['designation']; ?></td>
<td>Hyderabad</td>
<td><?php echo $Executionteam['phone']; ?></td>
<td>leelam</td>
<td>No remarks</td>
</tr>
                       <?php
}
echo "</table>";
?>   
                    </div>
            
            <div class="span3">
<?php  
include_once 'servicessidebar.php';
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


   