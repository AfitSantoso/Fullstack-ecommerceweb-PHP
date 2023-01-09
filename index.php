<?php

session_start();

include("includes/db.php");
include("includes/header.php");
include("functions/functions.php");
include("includes/main.php");

?>
<style>
    .jain{
        background-color:black;
    }
    .jack {
        background-color:black;
    }
.jack ul{
    padding:60px;
    list-style-type:none ;
    text-align:center;

}
.jack ul li{
padding:10px;
}
.jack ul li a {
color : white;
padding:10px;
}


</style>

<br><br>

<img src="images/header.png" alt="" height="880" width="1350">
<div class="container-fluid">
    
    <div class="row">
        <div class="col-md-12">
        <h1 style="text-align:center;">ARV Collection</h1>
</div>
    </div>


</div>
<br><br><br>

<div class="container-fluid">
<div class="row">

<?php

getPro();
?>
</div>
</div>

<div class="row jain" >
    <div class="col-md-3 jack">
<ul><li><h5>HELP</h5></li>
<li><a href="">Shipping and Returns</a></li>
<li><a href="">Secure Shippings</a></li>
<li><a href="">Payments</a></li>
<li><a href="">FAQ</a></li>

</ul>
    </div>
    <div class="col-md-3 jack">
<ul>
    <li><h5>POLICY</h5></li>
    <li><a href="">Return Policy</a></li>
    <li><a href="">Terms Of Use</a></li>
    <li><a href="">Security</a></li>
    <li><a href="">Privacy</a></li>




</ul>
</div>
<div class="col-md-3 jack">
    <ul><li><h5>ABOUT</h5></li>
    <li><a href="">Contact Us</a></li>
    <li><a href="">About Us</a></li>
    <li><a href="">Careers</a></li>
    <li><a href="">Our Stories</a></li>
</ul>
</div>
<div class="col-md-3 jack">
    <ul>
        <li><h5>OFFICE ADDRESS</h5></li>
        <li>Head Office: ARV ID.
Jalan Alamasyah, Lampung, Indonesia</li>
<li>Telephone: 0123-456-789</li>
<li>Email: arv.id@gmail.com</li>
    </ul>
</div>
</div>


