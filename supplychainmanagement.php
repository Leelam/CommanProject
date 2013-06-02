
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
              <h1>Supply Chain Management</h1>
      </div>
      </div>
     </div>
  </header>



        <div class="container">
          <div class="row-fluid">
        <div class="span9">
        	<p>Supply chain management (SCM) is the combination of art and science that goes into improving the way your company finds the raw components it needs to make a product or service and deliver it to customers.</p>
        	<p><b>PLAN</b> – This is the strategic portion of SCM. You need a strategy for managing all the resources that go toward meeting customer demand for your product or service. A big piece of planning is developing a set of metrics to monitor the supply chain so that it is efficient, costs less and delivers high quality and value to customers.</p>
        	<p><b>SOURCE</b> – Choose the suppliers that will deliver the goods and services you need to create your product. Develop a set of pricing, delivery and payment processes with suppliers and create metrics for monitoring and improving the relationships. 
</p>
<p>We are intended to make our users to identify their desired product with the specified norms from a quality supplier.</p>
           <?php
$Execution=$obj->conn->prepare("SELECT * FROM civil_scm");
$Execution->execute();
                    echo "   <table class='table table-bordered'>";
echo "<th>s.no</th>";
echo "<th>Name of the Firm/Vendor</th>";
echo "<th>Description of Material</th>";
echo "<th>Location</th>";
echo "<th>Contact Details</th>";
echo "<th>Company Profile</th>";
echo "<th>Remarks</th>";
while($Executionteam=$Execution->fetch()){
?>
<tr>
<td><?php echo $Executionteam['sno']; ?></td>
<td><?php echo $Executionteam['fname']; ?></td>
<td></td>
<td></td>
<td><?php echo $Executionteam['phone']; ?></td>
<td></td>
<td></td>
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


   