<?php
include 'dbcon.php';
if(!(isset($_SESSION['user_name'])))
{

header('location:index.php');
}
?>
<!DOCTYPE html>
<html>
<head>

  <title>chitty management</title>
  <link rel="stylesheet" href="logo.css">
  </head>
<body>
  <!-- Div for header section -->
  <div class="header">
    
    <br>
    <b class="heading1"><strong><font color="yellow" size="6">GRAMIN CHITTY MANAGEMENT</font></strong></b>
    <br>&nbsp
    <b class="heading2"><strong><font color="blue" size="4">GOVT. OF KERALA</font></strong></b><BR>


  </div>
  <!-- Div for body section -->
 <div class="body1">
 
   <!-- <center><img src="ajce.png" id="ajce_img"></center>-->
<div class="body_text1">
<?php
$vv=$_SESSION["user_name"];

$sql="SELECT * FROM  `tbl_staff` WHERE s_email='$vv'";

$result=mysqli_query($con,$sql);
$r=mysqli_fetch_array($result);

?>
<img src="<?php echo $r['image']; ?>" width="105px" height="105px"  /><br>


<div class="dropdown">
<a href="#" id="user">VIEW</a>
<div class="dropdown-content">
		<a href=" staffprofile.php">PROFILE</a><BR>
		<a href=" auction.php"> AUCTION</a>
 
</div></div>
 <br><br><br><br>

<a href="memberreg.php" id="user"> MEMBER</a><br><br>
<div class="dropdown">
<a href="#" id="user" >PAYMENT</a>
<div class="dropdown-content">
         <a href="chittypayment.php">CHITTY </a><br>
         <a href="staff_wallet.php">WALLET </a><br>
		 <a href="auctionypayment.php">AUCTION </a><br>
</div></div><br><br><br><br>		 

 
  <a href="logout.php">LOGOUT</a><br>


   </div>
	  </div>

  <!-- Div for login section -->
  <div class="login2">
<!--<center><img src="clg.png" id="ajce_img"width="400px" height="300px" ></center>-->

    
      

  
<!--<center><img src="clg.png" id="ajce_img"width="1100px" height="300px" ></center>-->
</div>

      <div class="footer">
        <center><marquee>GRAMIN CHITTY MANAGEMENT</marquee></center>
      
</div>
    </body>
    </html>
