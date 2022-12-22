<?php

session_start();

include("includes/db.php");
include("includes/header.php");
include("functions/functions.php");
include("includes/main.php");

?>


  <!-- MAIN -->
<h1 style="text-align:center;">Checkout</h1>
<br><br><br>



<div class="container-fluid" ><!-- container Starts -->




<div class="col-md-12" style="text-align:center;" ><!-- col-md-12 Starts -->

<?php

if(!isset($_SESSION['customer_email'])){

include("customer/customer_login.php");


}else{

include("payment_options.php");

}



?>


</div><!-- col-md-12 Ends -->


</div><!-- container Ends -->




<?php

include("includes/footer.php");

?>

<script src="js/jquery.min.js"> </script>

<script src="js/bootstrap.min.js"></script>

</body>
</html>
