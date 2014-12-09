<!-- Footer -->



<?php 

$basename = basename($_SERVER['REQUEST_URI']);


//if ($basename=="EditarNoticia.php"){
?>


 	<script type="text/javascript" language="javascript" src="assets/advanced-datatable/media/js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="js/jquery.scrollTo.min.js"></script>
    <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
    <script type="text/javascript" language="javascript" src="assets/advanced-datatable/media/js/jquery.dataTables.js"></script>
    <script src="js/respond.min.js" ></script>




<script src="js/sparkline-chart.js"></script>
<script src="js/easy-pie-chart.js"></script>


 <script type="text/javascript" charset="utf-8">
          $(document).ready(function() {
              $('#example').dataTable( {
                  "aaSorting": [[ 4, "desc" ]]
              } );
          } );
      </script>
      
      
<?php
echo $basename;
	
//	}


?>



    
    
    
    
    
     <!--common script for all pages-->
    <script src="js/common-scripts.js"></script>
    <!--script for this page only-->















<div class="footerWrapper" style="clear:both">
            <div class="footer tleft"  >
            <div class="right">
                <a href="http://localhost/Sngine/about/">About</a> | <a href="http://localhost/Sngine/directory/">Directory</a> | <a href="http://localhost/Sngine/directory/people/">People</a> | <a href="http://localhost/Sngine/about/terms/">Terms</a> | <a href="http://localhost/Sngine/about/privacy/">Privacy</a>
            </div>
            &copy; 2014 localhost · <span class="uiButtonText languageDialog">English</span>
        </div>
        
</div>
<!-- Footer -->