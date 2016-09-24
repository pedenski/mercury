<?php 

if (session_status() == PHP_SESSION_NONE) {
    session_start();
    $session = $_SESSION['user_session'];
    
} else {
    header("Location: index.php");
    $dis = "disabled";
}



include 'includes/header.php' 









?> 
<body>

        <!-- Page Content -->
    <div class="container">

        <!-- Page Header -->
        <div class="row">
            <div class="col-lg-12"> 
                <h1 class="page-header">Mercury 
                    <small>Home OF The Super Programmers Of Technolab </small>
                </h1>
            </div>
        </div>
        <!-- /.row -->

        
        <div class="row">
        <!-- LEFT -->
        <div class="col-md-3 portfolio-item">


            <?php
            	if(check_session($session) == true ) { 	include "widgets/widget_uprofile.php"; } 
             	else { include "widgets/widget_login.php";  }
            ?>
             
        

	            <?php //include "widgets/widget_activeusers.php";?>

	            <!-- /widget -->


		</div>
        <!-- LEFT -->   
			<!-- middle -->
            <div class="col-md-6 portfolio-item">

            	<!-- POST -->
            	
            	<?php 

           
                    include "widgets/widget_composer.php";
              


                ?>
          

	        




	            <!-- FEEDS -->

	            <?php include "widgets/widget_sms.php"; ?>

	            <!-- LOAD MORE -->
	            


			</div> <!-- /middle -->
      
      		

            <div class="col-md-3 portfolio-item">
             
             	
	           <?php //include "widgets/widget_dest.php"; ?>


				<!-- <div class="widget margin-bot-10">
	            Statistics <br/><br/>

		            <ul class="list-group">
					  <li class="list-group-item">
					    <span class="badge">14</span>
					     <span class="glyphicon glyphicon-envelope" aria-hidden="true"></span> SMS Sent
					  </li>
					</ul>

					<ul class="list-group">
					  <li class="list-group-item">
					    <span class="badge">1988</span>
					     <span class="glyphicon glyphicon-phone" aria-hidden="true"></span> Current Balance
					  </li>
					</ul>

	           </div>	-->

	            <?php
            	if(check_session($session) == true ) { 	include "widgets/widget_status.php"; } 
             	?>
	         

	          

            </div>
        </div>
        <!-- /.row -->

       
      

        <hr>



</body>
        <!-- Footer -->
        <footer>

    <!-- jQuery -->
  
    <script src="styles/js/jquery-3.1.0.min.js"></script>
    <script src="styles/js/bootstrap.min.js"></script>      
    <script src="styles/js/custom.js"></script>
    <script src="styles/js/timeago.js"></script>  



            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Technolab 2016</p>
                </div>
            </div>
            <!-- /.row -->
        </footer>

    </div>
    <!-- /.container -->

    

</html>